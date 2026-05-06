<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PayuTransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payu_transactions')->delete();
        
        \DB::table('payu_transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'paid_for_id' => NULL,
                'paid_for_type' => NULL,
                'transaction_id' => 'iecZTMUix6',
                'gateway' => 'O:27:"Tzsk\\Payu\\Gateway\\PayuMoney":7:{s:3:"key";s:8:"kOFGXHRT";s:4:"salt";s:10:"VGkYSSWRnx";s:4:"auth";s:44:"6+m8xqo3Kmhr+FNF3QkGn+rzLxCn2LI3idnZuumgiVY=";s:4:"base";s:7:"payu.in";s:15:"serviceProvider";s:10:"payu_paisa";s:14:"' . "\0" . '*' . "\0" . 'processUrls";a:2:{s:4:"test";s:33:"https://sandboxsecure.%s/_payment";s:4:"live";s:26:"https://secure.%s/_payment";}s:4:"mode";s:4:"test";}',
                'body' => 'O:30:"Tzsk\\Payu\\Concerns\\Transaction":6:{s:13:"transactionId";s:10:"iecZTMUix6";s:6:"amount";d:12919.93;s:11:"productInfo";s:7:"Product";s:5:"payee";O:27:"Tzsk\\Payu\\Concerns\\Customer":10:{s:9:"firstName";s:5:"Admin";s:8:"lastName";N;s:5:"email";s:21:"admin@mediacity.co.in";s:5:"phone";s:10:"1234567890";s:10:"addressOne";N;s:10:"addressTwo";N;s:4:"city";N;s:5:"state";N;s:7:"country";N;s:7:"zipCode";N;}s:6:"params";O:29:"Tzsk\\Payu\\Concerns\\Attributes":10:{s:4:"udf1";s:36:"Payment For Order EODD 6093c30e579de";s:4:"udf2";N;s:4:"udf3";N;s:4:"udf4";N;s:4:"udf5";N;s:4:"udf6";N;s:4:"udf7";N;s:4:"udf8";N;s:4:"udf9";N;s:5:"udf10";N;}s:5:"model";N;}',
                'destination' => 'https://emartv8.test/payment/status',
                'hash' => 'f8a3c960146dc9a8567ee07b6497f79521e4bd2769b25eb99db353622bc951c8d5e839608015f37eefa0f12820b893c4ad8942b76036fb183253540fae6e3e49',
                'response' => '{"isConsentPayment":"0","mihpayid":"9084219545","mode":"CC","status":"success","unmappedstatus":"captured","key":"kOFGXHRT","txnid":"iecZTMUix6","amount":"12919.93","addedon":"2021-05-06 15:51:52","productinfo":"Product","firstname":"Admin","lastname":null,"address1":null,"address2":null,"city":null,"state":null,"country":null,"zipcode":null,"email":"admin@mediacity.co.in","phone":"1234567890","udf1":"Payment For Order EODD 6093c30e579de","udf2":null,"udf3":null,"udf4":null,"udf5":null,"udf6":null,"udf7":null,"udf8":null,"udf9":null,"udf10":null,"hash":"2f7476641cf0bc08e21e956a5d5bc412e3053e424dbcfb745aefc8e29076c86529101f43b47029c38e657bec1cf2b30997b5407e8ecc36afad1a84ff28615d70","field1":"477677038392","field2":"685893","field3":"154369474826344","field4":"MW9DR3hxMDd6dU5uRlcwdUpnS1I=","field5":"02","field6":null,"field7":"AUTHPOSITIVE","field8":null,"field9":null,"giftCardIssued":"true","PG_TYPE":"HDFCPG","encryptedPaymentId":"A1A33B06C7AC54BEE4CCBB051C4510C8","bank_ref_num":"154369474826344","bankcode":"MAST","error":"E000","error_Message":"No Error","name_on_card":"Test","cardnum":"512345XXXXXX2346","cardhash":"This field is no longer supported in postback params.","amount_split":"{\\"PAYU\\":\\"12919.93\\"}","payuMoneyId":"250908224","discount":"0.00","net_amount_debit":"12919.93","expires":"1620298270","transaction":"iecZTMUix6","urlType":"successful","signature":"bd066ed4872a1d7d4e626b831d179e6178c90af058401d38694e83b0b0eda628"}',
                'status' => 'successful',
                'verified_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-05-06 15:51:10',
                'updated_at' => '2021-05-06 15:52:05',
            ),
            1 => 
            array (
                'id' => 2,
                'paid_for_id' => NULL,
                'paid_for_type' => NULL,
                'transaction_id' => '4Yuc8Wn81s',
                'gateway' => 'O:27:"Tzsk\\Payu\\Gateway\\PayuMoney":7:{s:3:"key";s:8:"kOFGXHRT";s:4:"salt";s:10:"VGkYSSWRnx";s:4:"auth";s:44:"6+m8xqo3Kmhr+FNF3QkGn+rzLxCn2LI3idnZuumgiVY=";s:4:"base";s:7:"payu.in";s:15:"serviceProvider";s:10:"payu_paisa";s:14:"' . "\0" . '*' . "\0" . 'processUrls";a:2:{s:4:"test";s:33:"https://sandboxsecure.%s/_payment";s:4:"live";s:26:"https://secure.%s/_payment";}s:4:"mode";s:4:"test";}',
                'body' => 'O:30:"Tzsk\\Payu\\Concerns\\Transaction":6:{s:13:"transactionId";s:10:"4Yuc8Wn81s";s:6:"amount";d:2089.67;s:11:"productInfo";s:31:"Payment for order 617540879a7b4";s:5:"payee";O:27:"Tzsk\\Payu\\Concerns\\Customer":10:{s:9:"firstName";s:8:"John Doe";s:8:"lastName";N;s:5:"email";s:19:"sam.curran@test.com";s:5:"phone";s:10:"7894561230";s:10:"addressOne";N;s:10:"addressTwo";N;s:4:"city";N;s:5:"state";N;s:7:"country";N;s:7:"zipCode";N;}s:6:"params";O:29:"Tzsk\\Payu\\Concerns\\Attributes":10:{s:4:"udf1";s:31:"Payment For Order 617540879a7b4";s:4:"udf2";N;s:4:"udf3";N;s:4:"udf4";N;s:4:"udf5";N;s:4:"udf6";N;s:4:"udf7";N;s:4:"udf8";N;s:4:"udf9";N;s:5:"udf10";N;}s:5:"model";N;}',
                'destination' => 'http://emart.test/payment/status',
                'hash' => '752f2a8634efd31a3de8bcddb9bb0423133ed2640785c643692c77062099d7a62d4d99e8e1347b0267886dc904ef7dc7a92aae3bf67df985502da04608d8514f',
                'response' => NULL,
                'status' => 'pending',
                'verified_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-24 11:16:24',
                'updated_at' => '2021-10-24 11:16:24',
            ),
            2 => 
            array (
                'id' => 3,
                'paid_for_id' => NULL,
                'paid_for_type' => NULL,
                'transaction_id' => '3uBWJFqApL',
                'gateway' => 'O:27:"Tzsk\\Payu\\Gateway\\PayuMoney":7:{s:3:"key";s:8:"kOFGXHRT";s:4:"salt";s:10:"VGkYSSWRnx";s:4:"auth";s:44:"6+m8xqo3Kmhr+FNF3QkGn+rzLxCn2LI3idnZuumgiVY=";s:4:"base";s:7:"payu.in";s:15:"serviceProvider";s:10:"payu_paisa";s:14:"' . "\0" . '*' . "\0" . 'processUrls";a:2:{s:4:"test";s:33:"https://sandboxsecure.%s/_payment";s:4:"live";s:26:"https://secure.%s/_payment";}s:4:"mode";s:4:"test";}',
                'body' => 'O:30:"Tzsk\\Payu\\Concerns\\Transaction":6:{s:13:"transactionId";s:10:"3uBWJFqApL";s:6:"amount";d:2089.67;s:11:"productInfo";s:31:"Payment for order 617542af344f2";s:5:"payee";O:27:"Tzsk\\Payu\\Concerns\\Customer":10:{s:9:"firstName";s:8:"John Doe";s:8:"lastName";N;s:5:"email";s:19:"sam.curran@test.com";s:5:"phone";s:10:"7894561230";s:10:"addressOne";N;s:10:"addressTwo";N;s:4:"city";N;s:5:"state";N;s:7:"country";N;s:7:"zipCode";N;}s:6:"params";O:29:"Tzsk\\Payu\\Concerns\\Attributes":10:{s:4:"udf1";s:31:"Payment For Order 617542af344f2";s:4:"udf2";N;s:4:"udf3";N;s:4:"udf4";N;s:4:"udf5";N;s:4:"udf6";N;s:4:"udf7";N;s:4:"udf8";N;s:4:"udf9";N;s:5:"udf10";N;}s:5:"model";N;}',
                'destination' => 'http://emart.test/payment/status',
                'hash' => '6d6d7777d3641ae796de091ebd21c9d0ce298f6c994a182e5b847a79689ae5eabc62040fb86439a98139b972577e1317d44ad1170cd3587589b83fcaeb80fea7',
                'response' => NULL,
                'status' => 'pending',
                'verified_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-10-24 11:25:35',
                'updated_at' => '2021-10-24 11:25:35',
            ),
            3 => 
            array (
                'id' => 4,
                'paid_for_id' => NULL,
                'paid_for_type' => NULL,
                'transaction_id' => 'gre5nqDhuN',
                'gateway' => 'O:27:"Tzsk\\Payu\\Gateway\\PayuMoney":7:{s:3:"key";s:8:"kOFGXHRT";s:4:"salt";s:10:"VGkYSSWRnx";s:4:"auth";s:44:"6+m8xqo3Kmhr+FNF3QkGn+rzLxCn2LI3idnZuumgiVY=";s:4:"base";s:7:"payu.in";s:15:"serviceProvider";s:10:"payu_paisa";s:14:"' . "\0" . '*' . "\0" . 'processUrls";a:2:{s:4:"test";s:33:"https://sandboxsecure.%s/_payment";s:4:"live";s:26:"https://secure.%s/_payment";}s:4:"mode";s:4:"test";}',
                'body' => 'O:30:"Tzsk\\Payu\\Concerns\\Transaction":6:{s:13:"transactionId";s:10:"gre5nqDhuN";s:6:"amount";d:1160.01;s:11:"productInfo";s:31:"Payment for order 619cc0e91dbe0";s:5:"payee";O:27:"Tzsk\\Payu\\Concerns\\Customer":10:{s:9:"firstName";s:8:"John Doe";s:8:"lastName";N;s:5:"email";s:19:"sam.curran@test.com";s:5:"phone";s:10:"7894561230";s:10:"addressOne";N;s:10:"addressTwo";N;s:4:"city";N;s:5:"state";N;s:7:"country";N;s:7:"zipCode";N;}s:6:"params";O:29:"Tzsk\\Payu\\Concerns\\Attributes":10:{s:4:"udf1";s:31:"Payment For Order 619cc0e91dbe0";s:4:"udf2";N;s:4:"udf3";N;s:4:"udf4";N;s:4:"udf5";N;s:4:"udf6";N;s:4:"udf7";N;s:4:"udf8";N;s:4:"udf9";N;s:5:"udf10";N;}s:5:"model";N;}',
                'destination' => 'https://emart.test/payment/status',
                'hash' => '0549e0a6c98c4083da4b3d09e08a4ba97253117d9defb1682f36a78d00d88cab727f5b46a189d5bf0a9acaed018b5ce52d548bd451f9afd37f4907c0dc037823',
                'response' => NULL,
                'status' => 'pending',
                'verified_at' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-11-23 15:52:33',
                'updated_at' => '2021-11-23 15:52:33',
            ),
        ));
        
        
    }
}