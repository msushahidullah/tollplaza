<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FailedTranscationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('failed_transcations')->delete();
        
        \DB::table('failed_transcations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => '616930d83c3fd',
                'txn_id' => 'INSTAMOJO_FAILED_ai24L',
                'user_id' => '1',
                'created_at' => '2021-10-15 07:42:16',
                'updated_at' => '2021-10-15 07:42:16',
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => '616930ef048a5',
                'txn_id' => 'INSTAMOJO_FAILED_fYUgs',
                'user_id' => '1',
                'created_at' => '2021-10-15 07:42:39',
                'updated_at' => '2021-10-15 07:42:39',
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => '6169310860fb1',
                'txn_id' => 'INSTAMOJO_FAILED_pZwCt',
                'user_id' => '1',
                'created_at' => '2021-10-15 07:43:04',
                'updated_at' => '2021-10-15 07:43:04',
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => '61697cb3cdeda',
                'txn_id' => 'INSTAMOJO_FAILED_6Sr4h',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:00:50',
                'updated_at' => '2021-10-16 09:00:50',
            ),
            4 => 
            array (
                'id' => 5,
                'order_id' => '61697cb3cdeda',
                'txn_id' => 'INSTAMOJO_FAILED_pvCfG',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:00:59',
                'updated_at' => '2021-10-16 09:00:59',
            ),
            5 => 
            array (
                'id' => 6,
                'order_id' => '61697cb3cdeda',
                'txn_id' => 'INSTAMOJO_FAILED_59anC',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:01:05',
                'updated_at' => '2021-10-16 09:01:05',
            ),
            6 => 
            array (
                'id' => 7,
                'order_id' => '61697cb3cdeda',
                'txn_id' => 'INSTAMOJO_FAILED_syI3z',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:02:05',
                'updated_at' => '2021-10-16 09:02:05',
            ),
            7 => 
            array (
                'id' => 8,
                'order_id' => '61697cb3cdeda',
                'txn_id' => 'INSTAMOJO_FAILED_aFCJx',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:03:10',
                'updated_at' => '2021-10-16 09:03:10',
            ),
            8 => 
            array (
                'id' => 9,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_4b0f1f0c-1a7d-4fd1-9985-1a97c94278e0',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:16:51',
                'updated_at' => '2021-10-16 09:16:51',
            ),
            9 => 
            array (
                'id' => 10,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_e0deea58-8c5a-47a0-a9f5-3951e2bfd829',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:17:54',
                'updated_at' => '2021-10-16 09:17:54',
            ),
            10 => 
            array (
                'id' => 11,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_0ed3dd40-00cd-40fd-a334-c4c405940138',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:47:07',
                'updated_at' => '2021-10-16 09:47:07',
            ),
            11 => 
            array (
                'id' => 12,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_c6839c96-f5c7-4a8d-9a4f-8c6518b55f45',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:47:26',
                'updated_at' => '2021-10-16 09:47:26',
            ),
            12 => 
            array (
                'id' => 13,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_160487db-202c-4834-a389-9c2f101ec40c',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:48:31',
                'updated_at' => '2021-10-16 09:48:31',
            ),
            13 => 
            array (
                'id' => 14,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_d023dc96-f0f5-41ce-941f-b36574327511',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:49:13',
                'updated_at' => '2021-10-16 09:49:13',
            ),
            14 => 
            array (
                'id' => 15,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_2b9fcb4a-16e4-479f-b8de-00cd3119eee6',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:49:49',
                'updated_at' => '2021-10-16 09:49:49',
            ),
            15 => 
            array (
                'id' => 16,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_d1f969ad-eb25-4460-96b7-0eef42d123ea',
                'user_id' => '1',
                'created_at' => '2021-10-16 09:52:07',
                'updated_at' => '2021-10-16 09:52:07',
            ),
            16 => 
            array (
                'id' => 18,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_097bc95f-f072-41b6-86b3-3f12966b7531',
                'user_id' => '1',
                'created_at' => '2021-10-16 10:08:58',
                'updated_at' => '2021-10-16 10:08:58',
            ),
            17 => 
            array (
                'id' => 19,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_8d2ad3ba-8914-4013-ab90-86cc0c33a814',
                'user_id' => '1',
                'created_at' => '2021-10-16 10:11:41',
                'updated_at' => '2021-10-16 10:11:41',
            ),
            18 => 
            array (
                'id' => 20,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_b3d1d2da-e3a6-4c31-ad31-d8431f5f0faa',
                'user_id' => '1',
                'created_at' => '2021-10-16 10:12:54',
                'updated_at' => '2021-10-16 10:12:54',
            ),
            19 => 
            array (
                'id' => 21,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_012ba816-1c0e-4bfe-b5ba-37a41457fd24',
                'user_id' => '1',
                'created_at' => '2021-10-16 10:17:50',
                'updated_at' => '2021-10-16 10:17:50',
            ),
            20 => 
            array (
                'id' => 22,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_2a54df2c-74fd-48eb-82b2-8ac107af8eee',
                'user_id' => '1',
                'created_at' => '2021-10-16 10:20:53',
                'updated_at' => '2021-10-16 10:20:53',
            ),
            21 => 
            array (
                'id' => 23,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_bbb58cc5-f086-4493-a9d6-76d368538b3a',
                'user_id' => '1',
                'created_at' => '2021-10-16 10:27:57',
                'updated_at' => '2021-10-16 10:27:57',
            ),
            22 => 
            array (
                'id' => 27,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_1bb86831-1f98-45d5-9dec-41d390f87233',
                'user_id' => '1',
                'created_at' => '2021-10-16 11:52:09',
                'updated_at' => '2021-10-16 11:52:09',
            ),
            23 => 
            array (
                'id' => 28,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_87283e2c-7f7c-4e05-8ee2-563a96bc17ca',
                'user_id' => '1',
                'created_at' => '2021-10-16 11:54:39',
                'updated_at' => '2021-10-16 11:54:39',
            ),
            24 => 
            array (
                'id' => 29,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_4752cd7b-cd2c-470a-953a-47e0be3d78c7',
                'user_id' => '1',
                'created_at' => '2021-10-16 12:07:40',
                'updated_at' => '2021-10-16 12:07:40',
            ),
            25 => 
            array (
                'id' => 30,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_be5a6881-62ca-488d-91e9-8d4b758f6e9a',
                'user_id' => '1',
                'created_at' => '2021-10-16 12:09:14',
                'updated_at' => '2021-10-16 12:09:14',
            ),
            26 => 
            array (
                'id' => 31,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_d8254cfe-e84e-4ebf-8b1a-0953afc0ad86',
                'user_id' => '1',
                'created_at' => '2021-10-16 12:23:13',
                'updated_at' => '2021-10-16 12:23:13',
            ),
            27 => 
            array (
                'id' => 32,
                'order_id' => NULL,
                'txn_id' => 'INSTAMOJO_FAILED_e0f7bc25-745a-4cde-9036-be82b24e060b',
                'user_id' => '1',
                'created_at' => '2021-10-16 12:44:09',
                'updated_at' => '2021-10-16 12:44:09',
            ),
            28 => 
            array (
                'id' => 33,
                'order_id' => NULL,
                'txn_id' => 'SENANGPAY_FAILED_48d9ee8a-eaf4-4ed6-81fc-ae09ef4c53b6',
                'user_id' => '1',
                'created_at' => '2021-10-25 07:58:51',
                'updated_at' => '2021-10-25 07:58:51',
            ),
            29 => 
            array (
                'id' => 34,
                'order_id' => NULL,
                'txn_id' => 'SENANGPAY_FAILED_25fbeaa8-3a0a-4e64-9661-009e5b74cca6',
                'user_id' => '1',
                'created_at' => '2021-10-25 08:00:02',
                'updated_at' => '2021-10-25 08:00:02',
            ),
            30 => 
            array (
                'id' => 35,
                'order_id' => NULL,
                'txn_id' => 'WORLDPAY_FAILED60808dfc-7e94-411d-a680-b607078b708b',
                'user_id' => '1',
                'created_at' => '2021-11-13 18:19:15',
                'updated_at' => '2021-11-13 18:19:15',
            ),
            31 => 
            array (
                'id' => 36,
                'order_id' => NULL,
                'txn_id' => 'WORLDPAY_FAILED3deb6a22-68d7-4b44-a304-52c13a06d1ab',
                'user_id' => '1',
                'created_at' => '2021-11-13 18:20:38',
                'updated_at' => '2021-11-13 18:20:38',
            ),
            32 => 
            array (
                'id' => 37,
                'order_id' => '61a5c753042d4',
                'txn_id' => 'PAYPAL_SELLER_PLAN_FAILED_zX4u6',
                'user_id' => '6',
                'created_at' => '2021-11-30 12:10:21',
                'updated_at' => '2021-11-30 12:10:21',
            ),
            33 => 
            array (
                'id' => 38,
                'order_id' => '61a5c85f2211f',
                'txn_id' => 'PAYPAL_SELLER_PLAN_FAILED_Ffax3',
                'user_id' => '6',
                'created_at' => '2021-11-30 12:14:49',
                'updated_at' => '2021-11-30 12:14:49',
            ),
            34 => 
            array (
                'id' => 39,
                'order_id' => '61a5c8e7916cb',
                'txn_id' => 'PAYPAL_SELLER_PLAN_FAILED_ooEpR',
                'user_id' => '6',
                'created_at' => '2021-11-30 12:17:05',
                'updated_at' => '2021-11-30 12:17:05',
            ),
            35 => 
            array (
                'id' => 40,
                'order_id' => '61a5c91699389',
                'txn_id' => 'PAYPAL_SELLER_PLAN_FAILED_SYBSL',
                'user_id' => '6',
                'created_at' => '2021-11-30 12:17:52',
                'updated_at' => '2021-11-30 12:17:52',
            ),
            36 => 
            array (
                'id' => 41,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_eHaBl',
                'user_id' => '1',
                'created_at' => '2021-12-04 10:32:40',
                'updated_at' => '2021-12-04 10:32:40',
            ),
            37 => 
            array (
                'id' => 42,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_bJ9ca',
                'user_id' => '1',
                'created_at' => '2021-12-04 10:33:21',
                'updated_at' => '2021-12-04 10:33:21',
            ),
            38 => 
            array (
                'id' => 43,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_oVa0X',
                'user_id' => '1',
                'created_at' => '2021-12-04 10:34:20',
                'updated_at' => '2021-12-04 10:34:20',
            ),
            39 => 
            array (
                'id' => 44,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_MoGYE',
                'user_id' => '1',
                'created_at' => '2021-12-04 11:13:31',
                'updated_at' => '2021-12-04 11:13:31',
            ),
            40 => 
            array (
                'id' => 45,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_8Ou5z',
                'user_id' => '1',
                'created_at' => '2021-12-04 12:04:56',
                'updated_at' => '2021-12-04 12:04:56',
            ),
            41 => 
            array (
                'id' => 46,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_xdBmd',
                'user_id' => '1',
                'created_at' => '2021-12-04 12:09:51',
                'updated_at' => '2021-12-04 12:09:51',
            ),
            42 => 
            array (
                'id' => 47,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_jSngW',
                'user_id' => '1',
                'created_at' => '2021-12-04 12:13:29',
                'updated_at' => '2021-12-04 12:13:29',
            ),
            43 => 
            array (
                'id' => 48,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_iKVz8',
                'user_id' => '1',
                'created_at' => '2021-12-04 12:15:31',
                'updated_at' => '2021-12-04 12:15:31',
            ),
            44 => 
            array (
                'id' => 49,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_iCYWN',
                'user_id' => '1',
                'created_at' => '2021-12-04 14:06:11',
                'updated_at' => '2021-12-04 14:06:11',
            ),
            45 => 
            array (
                'id' => 50,
                'order_id' => NULL,
                'txn_id' => 'pi_3K2uClGBj6eLM2HW0MRrtrCY',
                'user_id' => '1',
                'created_at' => '2021-12-04 14:37:55',
                'updated_at' => '2021-12-04 14:37:55',
            ),
            46 => 
            array (
                'id' => 51,
                'order_id' => NULL,
                'txn_id' => 'pi_1K2vDLAQEsn49CF5xr5j9eqh',
                'user_id' => '1',
                'created_at' => '2021-12-04 15:41:53',
                'updated_at' => '2021-12-04 15:41:53',
            ),
            47 => 
            array (
                'id' => 52,
                'order_id' => NULL,
                'txn_id' => 'pi_1K2vFKAQEsn49CF5kNCuZvrv',
                'user_id' => '1',
                'created_at' => '2021-12-04 15:45:38',
                'updated_at' => '2021-12-04 15:45:38',
            ),
            48 => 
            array (
                'id' => 53,
                'order_id' => NULL,
                'txn_id' => 'pi_1K2vISAQEsn49CF5yiMeUIKy',
                'user_id' => '1',
                'created_at' => '2021-12-04 15:47:01',
                'updated_at' => '2021-12-04 15:47:01',
            ),
            49 => 
            array (
                'id' => 54,
                'order_id' => NULL,
                'txn_id' => 'pi_1K2vqTAQEsn49CF58KrXl0hX',
                'user_id' => '1',
                'created_at' => '2021-12-04 16:22:27',
                'updated_at' => '2021-12-04 16:22:27',
            ),
            50 => 
            array (
                'id' => 55,
                'order_id' => NULL,
                'txn_id' => 'pi_1K2wB1AQEsn49CF5y0ImY9oJ',
                'user_id' => '1',
                'created_at' => '2021-12-04 16:43:23',
                'updated_at' => '2021-12-04 16:43:23',
            ),
            51 => 
            array (
                'id' => 56,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_FIQnQ',
                'user_id' => '1',
                'created_at' => '2021-12-04 17:31:04',
                'updated_at' => '2021-12-04 17:31:04',
            ),
            52 => 
            array (
                'id' => 57,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_FAILED_4FvxB',
                'user_id' => '1',
                'created_at' => '2021-12-04 17:32:20',
                'updated_at' => '2021-12-04 17:32:20',
            ),
            53 => 
            array (
                'id' => 58,
                'order_id' => NULL,
                'txn_id' => 'pi_1K2x55AQEsn49CF56KYuFpLZ',
                'user_id' => '1',
                'created_at' => '2021-12-04 17:41:43',
                'updated_at' => '2021-12-04 17:41:43',
            ),
            54 => 
            array (
                'id' => 59,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_SELLER_PLANS_FAILED_DIEPF',
                'user_id' => '21',
                'created_at' => '2022-01-22 10:54:21',
                'updated_at' => '2022-01-22 10:54:21',
            ),
            55 => 
            array (
                'id' => 60,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_SELLER_PLANS_FAILED_CKH6Q',
                'user_id' => '21',
                'created_at' => '2022-02-22 11:52:16',
                'updated_at' => '2022-02-22 11:52:16',
            ),
            56 => 
            array (
                'id' => 61,
                'order_id' => NULL,
                'txn_id' => 'STRIPE_SELLER_PLANS_FAILED_jy0nB',
                'user_id' => '21',
                'created_at' => '2022-02-22 11:54:10',
                'updated_at' => '2022-02-22 11:54:10',
            ),
            57 => 
            array (
                'id' => 62,
                'order_id' => NULL,
                'txn_id' => 'PAYTM_FAILED_HG9kK',
                'user_id' => '1',
                'created_at' => '2023-05-27 23:29:38',
                'updated_at' => '2023-05-27 23:29:38',
            ),
        ));
        
        
    }
}