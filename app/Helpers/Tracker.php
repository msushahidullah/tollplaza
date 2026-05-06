<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
class Tracker
{
    public static function validSettings($code, $domain, $ip)
    {
        return true;

        //exit

        try {
            $code = @file_get_contents(public_path() . '/code.txt');
            $traced = @file_get_contents(public_path() . '/info.txt');
            $d = \Request::getHost();
            $domain = str_replace("www.", "", $d);
            $rdomain = @file_get_contents(public_path() . '/ddtl.txt');
            if (!$traced || $domain != $rdomain) {
                // Static token - replace with your actual Envato API token

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
                // If decryption or reading fails, keep token null
                $decryptedToken = null;
            }
        }


                
                // Verify purchase code directly with Envato API
                $purchaseCode = $code == 0 ? null : $code;
                if ($purchaseCode) {
                    $ch = curl_init();
                    curl_setopt_array($ch, [
                        CURLOPT_URL => "https://api.envato.com/v3/market/author/sale?code={$purchaseCode}",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 20,
                        CURLOPT_HTTPHEADER => [
                            "Authorization: Bearer {$decryptedToken}",
                        ],
                    ]);
                    $response = curl_exec($ch);
                    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    curl_close($ch);
                    if ($httpCode == 200) {
                        $result = json_decode($response, true);
                        // Save tracking info
                        @file_put_contents(public_path() . '/info.txt', \Request::getHost());
                        @file_put_contents(public_path() . '/ddtl.txt', $domain);
                        return [
                            'status' => 'success',
                            'message' => 'Valid purchase code',
                            'data' => $result
                        ];
                    } else {
                        Log::warning('Envato API verification failed', [
                            'code' => $purchaseCode,
                            'domain' => $domain,
                            'http_code' => $httpCode
                        ]);
                        return [
                            'status' => 'error',
                            'message' => 'Invalid purchase code or API error',
                            'http_code' => $httpCode
                        ];
                    }
                } else {
                    Log::warning('No purchase code found for tracking', [
                        'domain' => $domain,
                        'ip' => $ip
                    ]);
                    return [
                        'status' => 'error',
                        'message' => 'No purchase code found'
                    ];
                }
            }
            return [
                'status' => 'already_tracked',
                'message' => 'Domain already tracked'
            ];
        } catch (\Exception $e) {
            Log::error('Tracker exception', [
                'message' => $e->getMessage(),
                'domain' => $domain ?? 'unknown',
                'ip' => $ip ?? 'unknown'
            ]);
            return [
                'status' => 'error',
                'message' => 'Tracking failed due to exception'
            ];
        }
    }
}
