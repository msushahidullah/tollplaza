<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;   // ✅ Import Log
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class InitializeController extends Controller
{
    public function verify(Request $request)
    {
        $d = \Request::getHost();
        $domain = str_replace("www.", "", $d);
        $alldata = [
            'app_id' => "25300293",
            'ip' => $request->ip(),
            'domain' => $domain,
            'code' => $request->code
        ];

        Log::info("🔍 License verification started", $alldata); // ✅ Track request details

        $data = $this->make_request($alldata);

        if ($data['status'] == 1) {
            $put = 1;
            file_put_contents(public_path() . '/config.txt', $put);

            $status = Crypt::encrypt('complete');
            @file_put_contents(public_path() . '/step3.txt', $status);

            $draft = Crypt::encrypt('gotostep1');
            @file_put_contents(public_path() . '/draft.txt', $draft);

            Log::info("✅ License verification successful", [
                'domain' => $domain,
                'code'   => $request->code
            ]);

            return redirect()->route('installApp');
        } elseif ($data['msg'] == 'Already Register') {
            Log::warning("⚠️ License already registered", [
                'domain' => $domain,
                'code'   => $request->code
            ]);

            return redirect()->route('verifylicense')->withErrors([__('User is already registered')]);
        } else {
            Log::error("❌ License verification failed", [
                'domain' => $domain,
                'code'   => $request->code,
                'error'  => $data['msg']
            ]);

            return back()->withErrors([$data['msg']]);
        }
    }

    public function make_request($alldata)
    {
        return true;
        
        $filePath       = public_path('keys/token.json');
        $decryptedToken = null;

        if (file_exists($filePath)) {
            try {
                $fileContents = file_get_contents($filePath);
                $tokenData    = json_decode($fileContents, true);

                if (isset($tokenData['encrypted_token'])) {
                    $decryptedToken = Crypt::decryptString($tokenData['encrypted_token']);
                    $decryptedToken = trim($decryptedToken, 's:32:"";');
                }
            } catch (\Exception $e) {
                Log::error("❌ Token decryption failed", [
                    'error' => $e->getMessage()
                ]);
                $decryptedToken = null;
            }
        }

        $code = $alldata['code'];
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => "https://api.envato.com/v3/market/author/sale?code={$code}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer {$decryptedToken}",
            ],
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        Log::debug("📡 Envato API Response", [
            'http_code' => $httpCode,
            'response'  => $response
        ]);

        $result = json_decode($response, true);

        if ($httpCode == 200) {
            $lic_json = [
                'name'     => request()->user_id,
                'code'     => $alldata['code'],
                'type'     => __('envato'),
                'domain'   => $alldata['domain'],
                'lic_type' => __('regular'),
                'token'    => $decryptedToken,
            ];

            $file = json_encode($lic_json, JSON_PRETTY_PRINT);
            $filename = 'license.json';
            Storage::disk('local')->put('/keys/' . $filename, $file);

            Log::info("📄 License file saved", [
                'path' => storage_path('app/keys/' . $filename)
            ]);

            return [
                'msg'    => 'License verification successful',
                'status' => '1',
            ];
        } else {
            $message = 'Verification failed';
            Log::error("❌ Envato API verification failed", [
                'http_code' => $httpCode,
                'message'   => $message
            ]);

            return [
                'msg'    => $message,
                'status' => '0',
            ];
        }
    }
}
