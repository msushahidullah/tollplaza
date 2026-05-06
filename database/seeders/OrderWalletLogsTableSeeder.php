<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderWalletLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_wallet_logs')->delete();
        
        \DB::table('order_wallet_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'wallet_txn_id' => 'cashback_HPmiAzRK',
                'type' => 'Credit',
                'amount' => 8.0,
                'balance' => 8.0,
                'note' => 'Cashback received on order 610cd1675a5b1',
                'created_at' => '2021-08-10 17:34:32',
                'updated_at' => '2021-08-10 17:34:32',
            ),
            1 => 
            array (
                'id' => 2,
                'wallet_txn_id' => 'cashback_ygDrpSMs',
                'type' => 'Credit',
                'amount' => 2.0,
                'balance' => 10.0,
                'note' => 'Cashback received on order 610cd1675a5b1',
                'created_at' => '2021-08-10 17:48:50',
                'updated_at' => '2021-08-10 17:48:50',
            ),
            2 => 
            array (
                'id' => 3,
                'wallet_txn_id' => 'cashback_vNAaKp9K',
                'type' => 'Credit',
                'amount' => 3.0,
                'balance' => 13.0,
                'note' => 'Cashback received on order 610a656c17bb6',
                'created_at' => '2021-08-10 17:57:20',
                'updated_at' => '2021-08-10 17:57:20',
            ),
            3 => 
            array (
                'id' => 4,
                'wallet_txn_id' => 'cashback_kVag1Egz',
                'type' => 'Credit',
                'amount' => 15.0,
                'balance' => 28.0,
                'note' => 'Cashback received on order 611374a535511',
                'created_at' => '2021-08-11 13:23:47',
                'updated_at' => '2021-08-11 13:23:47',
            ),
            4 => 
            array (
                'id' => 5,
                'wallet_txn_id' => 'cashback_NNsqiKsC',
                'type' => 'Credit',
                'amount' => 15.0,
                'balance' => 43.0,
                'note' => 'Cashback received on order 611374a535511',
                'created_at' => '2021-08-11 13:26:56',
                'updated_at' => '2021-08-11 13:26:56',
            ),
            5 => 
            array (
                'id' => 6,
                'wallet_txn_id' => 'cashback_KdOxid0L',
                'type' => 'Credit',
                'amount' => 15.0,
                'balance' => 58.0,
                'note' => 'Cashback received on order 611374a535511',
                'created_at' => '2021-08-11 13:28:38',
                'updated_at' => '2021-08-11 13:28:38',
            ),
            6 => 
            array (
                'id' => 8,
                'wallet_txn_id' => 'cashback_iWXgzjJu',
                'type' => 'Credit',
                'amount' => 1.42,
                'balance' => 59.42,
                'note' => 'Cashback received on order 611374a535511',
                'created_at' => '2021-08-11 16:08:59',
                'updated_at' => '2021-08-11 16:08:59',
            ),
            7 => 
            array (
                'id' => 9,
                'wallet_txn_id' => 'cashback_EEwUkPw3',
                'type' => 'Credit',
                'amount' => 0.2,
                'balance' => 59.62,
                'note' => 'Cashback received on order 6113a9c70d339',
                'created_at' => '2021-08-11 16:14:47',
                'updated_at' => '2021-08-11 16:14:47',
            ),
            8 => 
            array (
                'id' => 10,
                'wallet_txn_id' => 'cashback_dGODx9iQ',
                'type' => 'Credit',
                'amount' => 15.0,
                'balance' => 74.62,
                'note' => 'Cashback received on order 6114a8c1d3b9c',
                'created_at' => '2021-08-12 10:22:22',
                'updated_at' => '2021-08-12 10:22:22',
            ),
            9 => 
            array (
                'id' => 11,
                'wallet_txn_id' => 'cashback_4mxgyAWU',
                'type' => 'Credit',
                'amount' => 1.59,
                'balance' => 76.21,
                'note' => 'Cashback received on order 6114a94a4fa39',
                'created_at' => '2021-08-12 10:24:59',
                'updated_at' => '2021-08-12 10:24:59',
            ),
            10 => 
            array (
                'id' => 12,
                'wallet_txn_id' => 'cashback_M8eG155E',
                'type' => 'Credit',
                'amount' => 8.42,
                'balance' => 84.63,
                'note' => 'Cashback received on order 6114eb71f167e',
                'created_at' => '2021-08-12 15:53:18',
                'updated_at' => '2021-08-12 15:53:18',
            ),
            11 => 
            array (
                'id' => 13,
                'wallet_txn_id' => 'cashback_xacpjwPG',
                'type' => 'Credit',
                'amount' => 3.04,
                'balance' => 87.67,
                'note' => 'Cashback received on order 614c162b49f9d',
                'created_at' => '2021-09-30 07:17:13',
                'updated_at' => '2021-09-30 07:17:13',
            ),
            12 => 
            array (
                'id' => 14,
                'wallet_txn_id' => 'cashback_Cuv90PDF',
                'type' => 'Credit',
                'amount' => 10.0,
                'balance' => 97.67,
                'note' => 'Cashback received on order 61753832753b0',
                'created_at' => '2021-11-09 09:37:30',
                'updated_at' => '2021-11-09 09:37:30',
            ),
            13 => 
            array (
                'id' => 15,
                'wallet_txn_id' => 'cashback_bZ6gFUoo',
                'type' => 'Credit',
                'amount' => 2.0,
                'balance' => 99.67,
                'note' => 'Cashback received on order 6175302cad557',
                'created_at' => '2021-11-09 11:03:06',
                'updated_at' => '2021-11-09 11:03:06',
            ),
            14 => 
            array (
                'id' => 16,
                'wallet_txn_id' => 'cashback_3OgzEXF9',
                'type' => 'Credit',
                'amount' => 0.0,
                'balance' => 99.67,
                'note' => 'Cashback received on order 618b6a9989fb4',
                'created_at' => '2021-11-10 06:47:51',
                'updated_at' => '2021-11-10 06:47:51',
            ),
            15 => 
            array (
                'id' => 17,
                'wallet_txn_id' => 'cashback_BmU7d7D9',
                'type' => 'Credit',
                'amount' => 1.0,
                'balance' => 100.67,
                'note' => 'Cashback received on order 6285d33ad6ab8',
                'created_at' => '2022-05-19 12:17:51',
                'updated_at' => '2022-05-19 12:17:51',
            ),
        ));
        
        
    }
}