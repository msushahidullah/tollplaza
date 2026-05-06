<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq_products')->delete();
        
        \DB::table('faq_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pro_id' => '1',
                'simple_pro_id' => 0,
                'question' => 'How much Memory card nd case is there?',
                'answer' => '16 gb memory card include',
                'created_at' => '2020-01-16 14:44:57',
                'updated_at' => '2020-01-16 14:44:57',
            ),
            1 => 
            array (
                'id' => 2,
                'pro_id' => '1',
                'simple_pro_id' => 0,
                'question' => 'Is there manufacturer warranty on this product?',
                'answer' => 'Yes',
                'created_at' => '2020-01-16 14:45:09',
                'updated_at' => '2020-01-16 14:45:09',
            ),
            2 => 
            array (
                'id' => 3,
                'pro_id' => '1',
                'simple_pro_id' => 0,
                'question' => 'If i record something from this camera can headphones is supported with camera',
                'answer' => 'There is no port for headphone',
                'created_at' => '2020-01-16 14:45:23',
                'updated_at' => '2020-01-16 14:45:23',
            ),
            3 => 
            array (
                'id' => 4,
                'pro_id' => '3',
                'simple_pro_id' => 0,
                'question' => 'What type of battery does the camera have? Are they chargeable?',
                'answer' => 'yes sir.......rech....lithium ion....',
                'created_at' => '2020-01-16 15:44:07',
                'updated_at' => '2020-01-16 15:44:07',
            ),
            4 => 
            array (
                'id' => 5,
                'pro_id' => '3',
                'simple_pro_id' => 0,
                'question' => 'Does this camera has dilivered with charger ?',
                'answer' => 'Yes',
                'created_at' => '2020-01-16 15:44:23',
                'updated_at' => '2020-01-16 15:44:23',
            ),
            5 => 
            array (
                'id' => 6,
                'pro_id' => '3',
                'simple_pro_id' => 0,
                'question' => 'Is charger included?',
                'answer' => 'yes charger included...',
                'created_at' => '2020-01-16 15:44:32',
                'updated_at' => '2020-01-16 15:44:32',
            ),
            6 => 
            array (
                'id' => 7,
                'pro_id' => '3',
                'simple_pro_id' => 0,
                'question' => 'We can shoot a video on this device?',
                'answer' => 'Yes',
                'created_at' => '2020-01-16 15:44:43',
                'updated_at' => '2020-01-16 15:44:43',
            ),
            7 => 
            array (
                'id' => 8,
                'pro_id' => '4',
                'simple_pro_id' => 0,
                'question' => 'Does it support photoshop',
                'answer' => 'It does, however Photoshop is not yet available on the App Store.',
                'created_at' => '2020-01-16 16:00:53',
                'updated_at' => '2020-01-16 16:00:53',
            ),
            8 => 
            array (
                'id' => 9,
                'pro_id' => '4',
                'simple_pro_id' => 0,
                'question' => 'Can we use telegram',
                'answer' => 'Of course you can. I belive the you need a working sim in another phone to which the code is sent. Input it into the iPad and that\'s it. You are good to go.',
                'created_at' => '2020-01-16 16:01:02',
                'updated_at' => '2020-01-16 16:01:02',
            ),
            9 => 
            array (
                'id' => 10,
                'pro_id' => '4',
                'simple_pro_id' => 0,
                'question' => 'Does it come along with apple pencil 2nd generation ?',
                'answer' => 'No. It doesn\'t. Gotta buy it seoerately. Costs around 10k. Worth it though.',
                'created_at' => '2020-01-16 16:01:19',
                'updated_at' => '2020-01-16 16:01:19',
            ),
            10 => 
            array (
                'id' => 11,
                'pro_id' => '4',
                'simple_pro_id' => 0,
                'question' => 'Is face id available in this ipad?',
                'answer' => 'Yes.',
                'created_at' => '2020-01-16 16:01:35',
                'updated_at' => '2020-01-16 16:01:35',
            ),
            11 => 
            array (
                'id' => 12,
                'pro_id' => '5',
                'simple_pro_id' => 0,
                'question' => 'Does it support fortnite',
                'answer' => 'Yes',
                'created_at' => '2020-01-16 16:38:17',
                'updated_at' => '2020-01-16 16:38:17',
            ),
            12 => 
            array (
                'id' => 13,
                'pro_id' => '5',
                'simple_pro_id' => 0,
                'question' => 'Can I use software like python 64 bit launcher',
                'answer' => 'Nope',
                'created_at' => '2020-01-16 16:38:26',
                'updated_at' => '2020-01-16 16:38:26',
            ),
            13 => 
            array (
                'id' => 14,
                'pro_id' => '5',
                'simple_pro_id' => 0,
                'question' => 'Does the product have warranty available?',
                'answer' => 'Yes it has manufacturing warranty',
                'created_at' => '2020-01-16 16:38:34',
                'updated_at' => '2020-01-16 16:38:34',
            ),
            14 => 
            array (
                'id' => 15,
                'pro_id' => '5',
                'simple_pro_id' => 0,
                'question' => 'This is a calling tab?',
                'answer' => 'No',
                'created_at' => '2020-01-16 16:38:42',
                'updated_at' => '2020-01-16 16:38:42',
            ),
            15 => 
            array (
                'id' => 16,
                'pro_id' => '6',
                'simple_pro_id' => 0,
                'question' => 'How is the battery life during heavy gameplay?',
            'answer' => 'I\'m pretty happy with battery life as one PUBG game for 15 min will take 8% .. with settings smooth graphics n extreme fps (60)

Pretty descent isn\'t it..',
                'created_at' => '2020-01-16 16:50:53',
                'updated_at' => '2020-01-16 16:50:53',
            ),
            16 => 
            array (
                'id' => 17,
                'pro_id' => '6',
                'simple_pro_id' => 0,
                'question' => 'Is there apple pencil support?',
                'answer' => 'Yes, but only generation 1 apple pencil',
                'created_at' => '2020-01-16 16:51:03',
                'updated_at' => '2020-01-16 16:51:03',
            ),
            17 => 
            array (
                'id' => 18,
                'pro_id' => '6',
                'simple_pro_id' => 0,
                'question' => 'Does it support external keyboard?',
                'answer' => 'Any Bluetooth keyboard will work.',
                'created_at' => '2020-01-16 16:51:11',
                'updated_at' => '2020-01-16 16:51:11',
            ),
            18 => 
            array (
                'id' => 19,
                'pro_id' => '7',
                'simple_pro_id' => 0,
                'question' => 'What is the refresh rate of the screen?',
                'answer' => '144hz',
                'created_at' => '2020-01-16 17:01:51',
                'updated_at' => '2020-01-16 17:01:51',
            ),
            19 => 
            array (
                'id' => 20,
                'pro_id' => '7',
                'simple_pro_id' => 0,
                'question' => 'Does it support thunderbolt 3 port?',
                'answer' => 'yes',
                'created_at' => '2020-01-16 17:01:59',
                'updated_at' => '2020-01-16 17:01:59',
            ),
            20 => 
            array (
                'id' => 21,
                'pro_id' => '7',
                'simple_pro_id' => 0,
                'question' => 'What is the display size and refresh rate? also is it actually 512gigs ssd?',
                'answer' => '15.6-inch diagonal display with slim bezels and a 144HZ refresh rate. And yes, it does come with a 512 gig SSD although you get 475GB/512GB. You\'re welcome to check up on the official website of HP if you wanna know more about the configurations of this model.',
                'created_at' => '2020-01-16 17:02:08',
                'updated_at' => '2020-01-16 17:02:08',
            ),
            21 => 
            array (
                'id' => 22,
                'pro_id' => '7',
                'simple_pro_id' => 0,
                'question' => 'How to have MS office for this laptop?',
                'answer' => 'you can buy new online or you can use ms 365 online i.e. inbuilt',
                'created_at' => '2020-01-16 17:02:18',
                'updated_at' => '2020-01-16 17:02:18',
            ),
            22 => 
            array (
                'id' => 23,
                'pro_id' => '8',
                'simple_pro_id' => 0,
                'question' => 'Does it have Usb type c port ?',
                'answer' => 'Yes it does',
                'created_at' => '2020-01-16 17:10:03',
                'updated_at' => '2020-01-16 17:10:03',
            ),
            23 => 
            array (
                'id' => 24,
                'pro_id' => '8',
                'simple_pro_id' => 0,
                'question' => 'Brand warranty is available ?',
                'answer' => 'Yes',
                'created_at' => '2020-01-16 17:10:32',
                'updated_at' => '2020-01-16 17:10:32',
            ),
            24 => 
            array (
                'id' => 25,
                'pro_id' => '8',
                'simple_pro_id' => 0,
                'question' => 'Can we play fortnite on this product?',
                'answer' => 'Yes',
                'created_at' => '2020-01-16 17:10:41',
                'updated_at' => '2020-01-16 17:10:41',
            ),
            25 => 
            array (
                'id' => 26,
                'pro_id' => '9',
                'simple_pro_id' => 0,
                'question' => 'Does this laptop has 144Hz display?',
                'answer' => 'yes',
                'created_at' => '2020-01-16 17:19:46',
                'updated_at' => '2020-01-16 17:19:46',
            ),
            26 => 
            array (
                'id' => 27,
                'pro_id' => '9',
                'simple_pro_id' => 0,
                'question' => 'Can i upgrade ssd and hdd memory in future?',
                'answer' => 'yes you can upgrade',
                'created_at' => '2020-01-16 17:19:59',
                'updated_at' => '2020-01-16 17:19:59',
            ),
            27 => 
            array (
                'id' => 28,
                'pro_id' => '9',
                'simple_pro_id' => 0,
                'question' => 'What will be the refresh rate if i connect a 4k monitor or a wqhd monitor?',
                'answer' => 'epends upon the refresh rate of the monitor',
                'created_at' => '2020-01-16 17:20:08',
                'updated_at' => '2020-01-16 17:20:08',
            ),
            28 => 
            array (
                'id' => 29,
                'pro_id' => '10',
                'simple_pro_id' => 0,
                'question' => 'Does the s pen comes with the 4gb ram and i3 varient?',
                'answer' => 'Active Pen available.',
                'created_at' => '2020-01-16 17:29:35',
                'updated_at' => '2020-01-16 17:29:35',
            ),
            29 => 
            array (
                'id' => 30,
                'pro_id' => '10',
                'simple_pro_id' => 0,
                'question' => 'Does it have 2 sodimm slots?',
                'answer' => 'Only 1',
                'created_at' => '2020-01-16 17:29:47',
                'updated_at' => '2020-01-16 17:29:47',
            ),
            30 => 
            array (
                'id' => 31,
                'pro_id' => '11',
                'simple_pro_id' => 0,
                'question' => 'What if we left the printer ideal for 2 month will it nozzle get clogged or if it get clogged then what we need to do ?',
                'answer' => 'Please don,t let the printer idle for such a long period. I often let my printer idle for a month or so, but faced no problem after printing 1/2 papers.',
                'created_at' => '2020-01-16 17:36:26',
                'updated_at' => '2020-01-16 17:36:26',
            ),
            31 => 
            array (
                'id' => 32,
                'pro_id' => '11',
                'simple_pro_id' => 0,
                'question' => 'I\'m living in remote area at Tarapur Munger .Who will install it here?',
                'answer' => 'VERY EASY TO INSTALL...U CAN DO IT BY YOURSELF IN 5 TO 10 MIN',
                'created_at' => '2020-01-16 17:36:35',
                'updated_at' => '2020-01-16 17:36:35',
            ),
            32 => 
            array (
                'id' => 33,
                'pro_id' => '11',
                'simple_pro_id' => 0,
                'question' => 'Does ink gets dry when not used continuously?',
            'answer' => 'Once I haven\'t used that for 3 weeks, no problems found, ink was liquid, only the first few copy get quality issue as the ink of the head dried, but after printing few page that was absolutely fine. Advisable please print a page daily in any inkjet printer, or atleast keep the printers power on as advised by the service boy, i dont know the science behind this.:)',
            'created_at' => '2020-01-16 17:36:49',
            'updated_at' => '2020-01-16 17:36:49',
        ),
        33 => 
        array (
            'id' => 34,
            'pro_id' => '12',
            'simple_pro_id' => 0,
            'question' => 'Google cloud printing support?',
            'answer' => 'No',
            'created_at' => '2020-01-16 17:44:46',
            'updated_at' => '2020-01-16 17:44:46',
        ),
        34 => 
        array (
            'id' => 35,
            'pro_id' => '12',
            'simple_pro_id' => 0,
            'question' => 'Ink bottles comes with or not?',
        'answer' => 'Yes, one set of ink bottle (4 numbers) comes with the printer.',
            'created_at' => '2020-01-16 17:44:58',
            'updated_at' => '2020-01-16 17:44:58',
        ),
        35 => 
        array (
            'id' => 36,
            'pro_id' => '12',
            'simple_pro_id' => 0,
            'question' => 'Is it wireless wifi printer?',
            'answer' => 'No',
            'created_at' => '2020-01-16 17:45:10',
            'updated_at' => '2020-01-16 17:45:10',
        ),
        36 => 
        array (
            'id' => 37,
            'pro_id' => '13',
            'simple_pro_id' => 0,
            'question' => 'I have no cd drive in my laptop.. so how to installation this printer software?',
            'answer' => 'Yes',
            'created_at' => '2020-01-16 17:51:19',
            'updated_at' => '2020-01-16 17:51:19',
        ),
        37 => 
        array (
            'id' => 38,
            'pro_id' => '13',
            'simple_pro_id' => 0,
            'question' => 'does it work with windows xp?',
            'answer' => 'I’m not sure. I’m using it with windows 8',
            'created_at' => '2020-01-16 17:51:35',
            'updated_at' => '2020-01-16 17:51:35',
        ),
        38 => 
        array (
            'id' => 39,
            'pro_id' => '13',
            'simple_pro_id' => 0,
            'question' => 'Are separate bottles for refilling available?',
            'answer' => 'Yes',
            'created_at' => '2020-01-16 17:51:43',
            'updated_at' => '2020-01-16 17:51:43',
        ),
        39 => 
        array (
            'id' => 40,
            'pro_id' => '14',
            'simple_pro_id' => 0,
            'question' => 'as per review from one of customer this device is not working properly with iPhone 7. we cannot answer the calls directly from watch ?',
            'answer' => 'Calling feature is functional with android but not on iphone. So you will be getting the notification but you cannot talk directly through watch if connected with iphone.',
            'created_at' => '2020-01-16 18:07:31',
            'updated_at' => '2020-01-16 18:07:31',
        ),
        40 => 
        array (
            'id' => 41,
            'pro_id' => '14',
            'simple_pro_id' => 0,
            'question' => 'What is the difference between this watch and explorist hr black dial men\'s smart watch?',
            'answer' => 'I will convey from ios perspective. The previous versions did not have ways to call out or speak over the watch but now this watch has made to possible.',
            'created_at' => '2020-01-16 18:07:40',
            'updated_at' => '2020-01-16 18:07:40',
        ),
        41 => 
        array (
            'id' => 42,
            'pro_id' => '15',
            'simple_pro_id' => 0,
            'question' => 'can i use this watch through my iphone?',
            'answer' => 'No, it doesn\'t support phone connectivity.',
            'created_at' => '2020-01-16 18:20:03',
            'updated_at' => '2020-01-16 18:20:03',
        ),
        42 => 
        array (
            'id' => 43,
            'pro_id' => '15',
            'simple_pro_id' => 0,
            'question' => 'does it have solar powered battery',
            'answer' => 'No. It can’t be charged through solar power. It’s battery has to be replaced.',
            'created_at' => '2020-01-16 18:20:16',
            'updated_at' => '2020-01-16 18:20:16',
        ),
        43 => 
        array (
            'id' => 44,
            'pro_id' => '16',
            'simple_pro_id' => 0,
            'question' => 'Do it is Interchangable',
            'answer' => 'Yes',
            'created_at' => '2020-01-16 18:37:40',
            'updated_at' => '2020-01-16 18:37:40',
        ),
        44 => 
        array (
            'id' => 45,
            'pro_id' => '18',
            'simple_pro_id' => 0,
            'question' => 'Is the item durable?',
            'answer' => 'Yes',
            'created_at' => '2020-01-17 14:14:36',
            'updated_at' => '2020-01-17 14:14:36',
        ),
        45 => 
        array (
            'id' => 46,
            'pro_id' => '18',
            'simple_pro_id' => 0,
            'question' => 'Is this item easy to use?',
            'answer' => 'Yes',
            'created_at' => '2020-01-17 14:14:44',
            'updated_at' => '2020-01-17 14:14:44',
        ),
        46 => 
        array (
            'id' => 47,
            'pro_id' => '20',
            'simple_pro_id' => 0,
            'question' => 'Do it fits new born baby?',
            'answer' => 'No',
            'created_at' => '2020-01-17 14:28:18',
            'updated_at' => '2020-01-17 14:28:18',
        ),
        47 => 
        array (
            'id' => 48,
            'pro_id' => '20',
            'simple_pro_id' => 0,
            'question' => 'Is it cotton',
            'answer' => 'Yes',
            'created_at' => '2020-01-17 14:28:27',
            'updated_at' => '2020-01-17 14:28:27',
        ),
        48 => 
        array (
            'id' => 49,
            'pro_id' => '22',
            'simple_pro_id' => 0,
            'question' => 'Do they r warm enough for winter?',
            'answer' => 'Yes absolutely',
            'created_at' => '2020-01-17 14:40:38',
            'updated_at' => '2020-01-17 14:40:38',
        ),
        49 => 
        array (
            'id' => 50,
            'pro_id' => '24',
            'simple_pro_id' => 0,
            'question' => 'Is it suitable for 1year Girl?',
            'answer' => 'Yes',
            'created_at' => '2020-01-17 14:54:44',
            'updated_at' => '2020-01-17 14:54:44',
        ),
        50 => 
        array (
            'id' => 51,
            'pro_id' => '24',
            'simple_pro_id' => 0,
            'question' => 'Is it two piece or single attched piece?',
            'answer' => 'It\'s a Single Piece',
            'created_at' => '2020-01-17 14:55:20',
            'updated_at' => '2020-01-17 14:55:20',
        ),
        51 => 
        array (
            'id' => 52,
            'pro_id' => '25',
            'simple_pro_id' => 0,
            'question' => 'It perfect suitable for 12 month baby?',
            'answer' => 'Yes',
            'created_at' => '2020-01-17 15:00:46',
            'updated_at' => '2020-01-17 15:00:46',
        ),
        52 => 
        array (
            'id' => 53,
            'pro_id' => '28',
            'simple_pro_id' => 0,
            'question' => 'Is the item durable?',
            'answer' => 'Yes',
            'created_at' => '2020-01-17 15:19:18',
            'updated_at' => '2020-01-17 15:19:18',
        ),
        53 => 
        array (
            'id' => 54,
            'pro_id' => '30',
            'simple_pro_id' => 0,
            'question' => 'Do the material is good?',
            'answer' => 'Yes',
            'created_at' => '2020-01-17 15:39:24',
            'updated_at' => '2020-01-17 15:39:24',
        ),
        54 => 
        array (
            'id' => 55,
            'pro_id' => '44',
            'simple_pro_id' => 0,
            'question' => 'Is Lightbulb included?',
            'answer' => 'False',
            'created_at' => '2020-01-18 15:08:46',
            'updated_at' => '2020-01-18 15:08:46',
        ),
        55 => 
        array (
            'id' => 56,
            'pro_id' => '44',
            'simple_pro_id' => 0,
            'question' => 'Bulb included?',
            'answer' => 'No',
            'created_at' => '2020-01-18 15:09:03',
            'updated_at' => '2020-01-18 15:09:03',
        ),
        56 => 
        array (
            'id' => 57,
            'pro_id' => '45',
            'simple_pro_id' => 0,
            'question' => 'What is the foam type?',
            'answer' => 'Polyethylene',
            'created_at' => '2020-01-18 15:18:57',
            'updated_at' => '2020-01-18 15:18:57',
        ),
        57 => 
        array (
            'id' => 58,
            'pro_id' => '45',
            'simple_pro_id' => 0,
            'question' => 'What is Fabric Composition?',
            'answer' => '100% Polyester',
            'created_at' => '2020-01-18 15:19:26',
            'updated_at' => '2020-01-18 15:19:26',
        ),
        58 => 
        array (
            'id' => 59,
            'pro_id' => '48',
            'simple_pro_id' => 0,
            'question' => 'Can it be wore in gym workout?',
            'answer' => 'has better waist grip, this one fits.',
            'created_at' => '2020-01-20 14:16:12',
            'updated_at' => '2020-01-20 14:16:12',
        ),
        59 => 
        array (
            'id' => 60,
            'pro_id' => '48',
            'simple_pro_id' => 0,
            'question' => 'Is it thin material which may see through when stretch?',
            'answer' => 'No',
            'created_at' => '2020-01-20 14:16:26',
            'updated_at' => '2020-01-20 14:16:26',
        ),
        60 => 
        array (
            'id' => 61,
            'pro_id' => '48',
            'simple_pro_id' => 0,
            'question' => 'Xxl means 36?',
            'answer' => 'Yes 36 & 38',
            'created_at' => '2020-01-20 14:17:08',
            'updated_at' => '2020-01-20 14:17:08',
        ),
        61 => 
        array (
            'id' => 62,
            'pro_id' => '49',
            'simple_pro_id' => 0,
            'question' => 'What is hdd capicity ? is it sdd or normal one?',
            'answer' => '1TB its HDD',
            'created_at' => '2020-01-20 15:10:23',
            'updated_at' => '2020-01-20 15:10:23',
        ),
        62 => 
        array (
            'id' => 63,
            'pro_id' => '49',
            'simple_pro_id' => 0,
            'question' => 'Does it have dual battery?',
            'answer' => 'Yes, it has Dual Battery.',
            'created_at' => '2020-01-20 15:11:00',
            'updated_at' => '2020-01-20 15:11:00',
        ),
        63 => 
        array (
            'id' => 64,
            'pro_id' => '47',
            'simple_pro_id' => 0,
            'question' => 'Is it Durable?',
            'answer' => 'Yes Absolutely.',
            'created_at' => '2020-01-20 18:27:52',
            'updated_at' => '2020-01-20 18:27:52',
        ),
        64 => 
        array (
            'id' => 65,
            'pro_id' => '47',
            'simple_pro_id' => 0,
            'question' => 'Do the fabric is of rich Quality?',
            'answer' => 'It\'s 100% Polyster.',
            'created_at' => '2020-01-20 18:28:38',
            'updated_at' => '2020-01-20 18:28:38',
        ),
        65 => 
        array (
            'id' => 66,
            'pro_id' => '47',
            'simple_pro_id' => 0,
            'question' => 'Do foam is soft?',
            'answer' => 'yes, it has polythylene foam',
            'created_at' => '2020-01-20 18:29:19',
            'updated_at' => '2020-01-20 18:29:19',
        ),
        66 => 
        array (
            'id' => 69,
            'pro_id' => '1',
            'simple_pro_id' => 1,
            'question' => 'Test Faq For Simple Product',
            'answer' => '<p>This is test faq simple product answer</p>',
            'created_at' => '2021-06-14 12:16:08',
            'updated_at' => '2021-06-14 12:20:35',
        ),
        67 => 
        array (
            'id' => 70,
            'pro_id' => '0',
            'simple_pro_id' => 1,
            'question' => 'Is this product worth ?',
            'answer' => '<p>Yes this is worth !</p>',
            'created_at' => '2021-06-14 12:19:52',
            'updated_at' => '2021-06-14 12:19:52',
        ),
        68 => 
        array (
            'id' => 71,
            'pro_id' => '1',
            'simple_pro_id' => 0,
            'question' => 'Test simple',
            'answer' => 'Test simpe faq anwer',
            'created_at' => '2021-11-17 13:08:49',
            'updated_at' => '2021-11-17 13:08:49',
        ),
        69 => 
        array (
            'id' => 72,
            'pro_id' => '0',
            'simple_pro_id' => 37,
            'question' => '1. How do I make my lipstick last longer?',
            'answer' => '<p>To make your lipstick last longer, exfoliate your lips, apply a lip primer or concealer as a base, use a lip liner, and set it with a light dusting of translucent powder. Matte and long-wear formulas also help with longevity.</p>',
            'created_at' => '2025-02-17 11:13:48',
            'updated_at' => '2025-02-17 11:13:48',
        ),
        70 => 
        array (
            'id' => 73,
            'pro_id' => '0',
            'simple_pro_id' => 37,
            'question' => '2. Is lipstick safe for daily use?',
            'answer' => '<p>Yes, most high-quality lipsticks are safe for daily use. Look for lipsticks with nourishing ingredients like Vitamin E, shea butter, and natural oils to keep lips hydrated and healthy.</p>',
            'created_at' => '2025-02-17 11:14:31',
            'updated_at' => '2025-02-17 11:14:31',
        ),
        71 => 
        array (
            'id' => 74,
            'pro_id' => '0',
            'simple_pro_id' => 37,
            'question' => '3. How do I choose the right lipstick shade for my skin tone?',
            'answer' => '<ul>
<li data-start="649" data-end="708"><strong data-start="651" data-end="665">Fair skin:</strong> Soft pinks, corals, and nudes work best.</li>
<li data-start="709" data-end="784"><strong data-start="711" data-end="727">Medium skin:</strong> Mauves, berries, and warm reds complement beautifully.</li>
<li data-start="785" data-end="908"><strong data-start="787" data-end="801">Deep skin:</strong> Bold reds, purples, and deep browns look stunning.<br data-start="852" data-end="855" />Always test under natural light for the best match.</li>
</ul>',
            'created_at' => '2025-02-17 11:15:00',
            'updated_at' => '2025-02-17 11:15:00',
        ),
        72 => 
        array (
            'id' => 75,
            'pro_id' => '0',
            'simple_pro_id' => 37,
            'question' => '4. Does lipstick dry out lips?',
            'answer' => '<p>Some matte or long-wear lipsticks may cause dryness. To prevent this, use a hydrating lip balm underneath or choose lipsticks infused with moisturizing ingredients.</p>',
            'created_at' => '2025-02-17 11:15:30',
            'updated_at' => '2025-02-17 11:15:30',
        ),
        73 => 
        array (
            'id' => 76,
            'pro_id' => '0',
            'simple_pro_id' => 37,
            'question' => '5. How do I prevent lipstick from smudging?',
            'answer' => '<p>Use a lip liner to define your lips, apply lipstick in thin layers, and blot with a tissue. A setting spray or powder can also help lock it in place.</p>',
            'created_at' => '2025-02-17 11:16:01',
            'updated_at' => '2025-02-17 11:16:01',
        ),
        74 => 
        array (
            'id' => 77,
            'pro_id' => '38',
            'simple_pro_id' => 38,
            'question' => '1. Does lipstick dry out lips?',
            'answer' => '<p>Some matte or long-wear lipsticks may cause dryness. To prevent this, use a hydrating lip balm underneath or choose lipsticks infused with moisturizing ingredients.</p>',
            'created_at' => '2025-02-17 11:26:10',
            'updated_at' => '2025-02-17 11:26:52',
        ),
        75 => 
        array (
            'id' => 78,
            'pro_id' => '0',
            'simple_pro_id' => 38,
            'question' => '2. Is lipstick safe for daily use?',
            'answer' => '<p>Yes, most high-quality lipsticks are safe for daily use. Look for lipsticks with nourishing ingredients like Vitamin E, shea butter, and natural oils to keep lips hydrated and healthy.</p>',
            'created_at' => '2025-02-17 11:26:40',
            'updated_at' => '2025-02-17 11:26:40',
        ),
        76 => 
        array (
            'id' => 79,
            'pro_id' => '0',
            'simple_pro_id' => 38,
            'question' => '3. How do I choose the right lipstick shade for my skin tone?',
            'answer' => '<ul>
<li data-start="649" data-end="708"><strong data-start="651" data-end="665">Fair skin:</strong> Soft pinks, corals, and nudes work best.</li>
<li data-start="709" data-end="784"><strong data-start="711" data-end="727">Medium skin:</strong> Mauves, berries, and warm reds complement beautifully.</li>
<li data-start="785" data-end="908"><strong data-start="787" data-end="801">Deep skin:</strong> Bold reds, purples, and deep browns look stunning.<br data-start="852" data-end="855" />Always test under natural light for the best match.</li>
</ul>',
            'created_at' => '2025-02-17 11:27:12',
            'updated_at' => '2025-02-17 11:27:12',
        ),
        77 => 
        array (
            'id' => 80,
            'pro_id' => '0',
            'simple_pro_id' => 38,
            'question' => '4. How do I prevent lipstick from smudging?',
            'answer' => '<p>Use a lip liner to define your lips, apply lipstick in thin layers, and blot with a tissue. A setting spray or powder can also help lock it in place.</p>',
            'created_at' => '2025-02-17 11:27:42',
            'updated_at' => '2025-02-17 11:27:42',
        ),
        78 => 
        array (
            'id' => 81,
            'pro_id' => '0',
            'simple_pro_id' => 39,
            'question' => '1. Does lipstick dry out lips?',
            'answer' => '<p>To make your lipstick last longer, exfoliate your lips, apply a lip primer or concealer as a base, use a lip liner, and set it with a light dusting of translucent powder. Matte and long-wear formulas also help with longevity.</p>',
            'created_at' => '2025-02-17 12:10:15',
            'updated_at' => '2025-02-17 12:10:15',
        ),
        79 => 
        array (
            'id' => 82,
            'pro_id' => '0',
            'simple_pro_id' => 39,
            'question' => '2. Is lipstick safe for daily use?',
            'answer' => '<p>Yes, most high-quality lipsticks are safe for daily use. Look for lipsticks with nourishing ingredients like Vitamin E, shea butter, and natural oils to keep lips hydrated and healthy.</p>',
            'created_at' => '2025-02-17 12:10:43',
            'updated_at' => '2025-02-17 12:10:43',
        ),
        80 => 
        array (
            'id' => 83,
            'pro_id' => '0',
            'simple_pro_id' => 39,
            'question' => '3. How do I choose the right lipstick shade for my skin tone?',
            'answer' => '<ul>
<li data-start="649" data-end="708"><strong data-start="651" data-end="665">Fair skin:</strong> Soft pinks, corals, and nudes work best.</li>
<li data-start="709" data-end="784"><strong data-start="711" data-end="727">Medium skin:</strong> Mauves, berries, and warm reds complement beautifully.</li>
<li data-start="785" data-end="908"><strong data-start="787" data-end="801">Deep skin:</strong> Bold reds, purples, and deep browns look stunning.<br data-start="852" data-end="855" />Always test under natural light for the best match.</li>
</ul>',
            'created_at' => '2025-02-17 12:11:01',
            'updated_at' => '2025-02-17 12:11:01',
        ),
        81 => 
        array (
            'id' => 84,
            'pro_id' => '0',
            'simple_pro_id' => 39,
            'question' => '4. Does lipstick dry out lips?',
            'answer' => '<p>Some matte or long-wear lipsticks may cause dryness. To prevent this, use a hydrating lip balm underneath or choose lipsticks infused with moisturizing ingredients.</p>',
            'created_at' => '2025-02-17 12:11:18',
            'updated_at' => '2025-02-17 12:11:18',
        ),
        82 => 
        array (
            'id' => 85,
            'pro_id' => '0',
            'simple_pro_id' => 39,
            'question' => '5. How do I prevent lipstick from smudging?',
            'answer' => '<p>Use a lip liner to define your lips, apply lipstick in thin layers, and blot with a tissue. A setting spray or powder can also help lock it in place.</p>',
            'created_at' => '2025-02-17 12:11:37',
            'updated_at' => '2025-02-17 12:11:37',
        ),
        83 => 
        array (
            'id' => 86,
            'pro_id' => '0',
            'simple_pro_id' => 40,
            'question' => '1. How do I make my lipstick last longer?',
            'answer' => '<p>To make your lipstick last longer, exfoliate your lips, apply a lip primer or concealer as a base, use a lip liner, and set it with a light dusting of translucent powder. Matte and long-wear formulas also help with longevity.</p>',
            'created_at' => '2025-02-17 12:23:19',
            'updated_at' => '2025-02-17 12:23:19',
        ),
        84 => 
        array (
            'id' => 87,
            'pro_id' => '0',
            'simple_pro_id' => 40,
            'question' => '2. Is lipstick safe for daily use?',
            'answer' => '<p>Yes, most high-quality lipsticks are safe for daily use. Look for lipsticks with nourishing ingredients like Vitamin E, shea butter, and natural oils to keep lips hydrated and healthy.</p>',
            'created_at' => '2025-02-17 12:23:36',
            'updated_at' => '2025-02-17 12:23:36',
        ),
        85 => 
        array (
            'id' => 88,
            'pro_id' => '0',
            'simple_pro_id' => 40,
            'question' => '3. How do I choose the right lipstick shade for my skin tone?',
            'answer' => '<ul>
<li data-start="649" data-end="708"><strong data-start="651" data-end="665">Fair skin:</strong> Soft pinks, corals, and nudes work best.</li>
<li data-start="709" data-end="784"><strong data-start="711" data-end="727">Medium skin:</strong> Mauves, berries, and warm reds complement beautifully.</li>
<li data-start="785" data-end="908"><strong data-start="787" data-end="801">Deep skin:</strong> Bold reds, purples, and deep browns look stunning.<br data-start="852" data-end="855" />Always test under natural light for the best match.</li>
</ul>',
            'created_at' => '2025-02-17 12:24:02',
            'updated_at' => '2025-02-17 12:24:02',
        ),
        86 => 
        array (
            'id' => 89,
            'pro_id' => '0',
            'simple_pro_id' => 40,
            'question' => '4. Does lipstick dry out lips?',
            'answer' => '<p>Some matte or long-wear lipsticks may cause dryness. To prevent this, use a hydrating lip balm underneath or choose lipsticks infused with moisturizing ingredients.</p>',
            'created_at' => '2025-02-17 12:24:30',
            'updated_at' => '2025-02-17 12:24:30',
        ),
        87 => 
        array (
            'id' => 90,
            'pro_id' => '0',
            'simple_pro_id' => 40,
            'question' => '5. How do I prevent lipstick from smudging?',
            'answer' => '<p>Use a lip liner to define your lips, apply lipstick in thin layers, and blot with a tissue. A setting spray or powder can also help lock it in place.</p>',
            'created_at' => '2025-02-17 12:24:48',
            'updated_at' => '2025-02-17 12:24:48',
        ),
        88 => 
        array (
            'id' => 91,
            'pro_id' => '0',
            'simple_pro_id' => 41,
            'question' => '1. What materials are used in soft plush toys?',
            'answer' => '<p>Soft plush toys are made from high-quality materials like ultra-soft polyester, fleece, or cotton fabric. They are filled with PP cotton, microfiber, or memory foam for a cuddly feel.</p>',
            'created_at' => '2025-02-17 16:23:15',
            'updated_at' => '2025-02-17 16:23:15',
        ),
        89 => 
        array (
            'id' => 92,
            'pro_id' => '0',
            'simple_pro_id' => 41,
            'question' => '2. Are plush toys safe for babies?',
            'answer' => '<p>Yes! Most plush toys designed for babies are made from non-toxic, BPA-free, and hypoallergenic materials. Always check for safety certifications like EN71 or ASTM-F963.</p>',
            'created_at' => '2025-02-17 16:23:44',
            'updated_at' => '2025-02-17 16:23:44',
        ),
        90 => 
        array (
            'id' => 93,
            'pro_id' => '0',
            'simple_pro_id' => 41,
            'question' => '3. Can plush toys be washed?',
            'answer' => '<p>Yes, many plush toys are <strong data-start="595" data-end="615">machine washable</strong> on a gentle cycle. Some may require <strong data-start="652" data-end="668">hand washing</strong> or spot cleaning, so it\'s best to check the care label.</p>',
            'created_at' => '2025-02-17 16:24:49',
            'updated_at' => '2025-02-17 16:24:49',
        ),
        91 => 
        array (
            'id' => 94,
            'pro_id' => '0',
            'simple_pro_id' => 42,
            'question' => '1. What age group is suitable for remote-control cars?',
            'answer' => '<p>Remote-control cars are available for various age groups:<br data-start="194" data-end="197" />✔ <strong data-start="199" data-end="212">3+ years:</strong> Basic models with simple controls<br data-start="246" data-end="249" />✔ <strong data-start="251" data-end="264">6+ years:</strong> Advanced cars with more features and stunts<br data-start="308" data-end="311" />✔ <strong data-start="313" data-end="327">10+ years:</strong> High-speed cars and hobby-grade models</p>',
            'created_at' => '2025-02-17 16:41:46',
            'updated_at' => '2025-02-17 16:41:46',
        ),
        92 => 
        array (
            'id' => 95,
            'pro_id' => '0',
            'simple_pro_id' => 42,
            'question' => '2. How long does the battery of an RC car last?',
            'answer' => '<p>The battery life typically lasts between <strong data-start="470" data-end="490">15 to 60 minutes</strong>, depending on the model and usage. It can be recharged in <strong data-start="549" data-end="574">30 minutes to 2 hours</strong> using USB chargers or direct plug-in charging.</p>',
            'created_at' => '2025-02-17 16:42:07',
            'updated_at' => '2025-02-17 16:42:07',
        ),
        93 => 
        array (
            'id' => 96,
            'pro_id' => '0',
            'simple_pro_id' => 42,
            'question' => '3. How fast can remote-control cars go?',
            'answer' => '<p>RC cars vary in speed:<br data-start="696" data-end="699" />✔ <strong data-start="701" data-end="720">Standard Models</strong> &ndash; Around <strong data-start="730" data-end="746">5 to 10 km/h</strong><br data-start="746" data-end="749" />✔ <strong data-start="751" data-end="772">High-Speed Models</strong> &ndash; Up to <strong data-start="781" data-end="795">20-50 km/h</strong><br data-start="795" data-end="798" />✔ <strong data-start="800" data-end="823">Professional Models</strong> &ndash; Can reach <strong data-start="836" data-end="854">up to 100 km/h</strong> in racing variants</p>',
            'created_at' => '2025-02-17 16:42:20',
            'updated_at' => '2025-02-17 16:42:20',
        ),
        94 => 
        array (
            'id' => 97,
            'pro_id' => '0',
            'simple_pro_id' => 43,
            'question' => '1. What age is suitable for playing with dolls?',
            'answer' => '<p data-start="111" data-end="155">Dolls are designed for various age groups:</p>
<ul data-start="156" data-end="493">
<li data-start="156" data-end="248"><strong data-start="158" data-end="171">3+ years:</strong> Basic dolls, baby dolls, and plush dolls are perfect for younger children.</li>
<li data-start="249" data-end="355"><strong data-start="251" data-end="264">6+ years:</strong> Fashion dolls and interactive dolls with more complex features are ideal for older kids.</li>
<li data-start="356" data-end="493"><strong data-start="358" data-end="372">10+ years:</strong> Collectible or premium dolls are often targeted at collectors and older children interested in styling and role-playing.</li>
</ul>',
            'created_at' => '2025-02-17 17:04:48',
            'updated_at' => '2025-02-17 17:04:48',
        ),
        95 => 
        array (
            'id' => 98,
            'pro_id' => '0',
            'simple_pro_id' => 43,
            'question' => '2. Are dolls safe for children?',
            'answer' => '<p>Yes! Most dolls are made from <strong data-start="568" data-end="580">BPA-free</strong>, <strong data-start="582" data-end="605">non-toxic materials</strong>, and undergo safety certifications like <strong data-start="646" data-end="654">ASTM</strong> or <strong data-start="658" data-end="666">EN71</strong> to ensure they are safe for kids. Always check the product details for age recommendations and safety features.</p>',
            'created_at' => '2025-02-17 17:05:03',
            'updated_at' => '2025-02-17 17:05:03',
        ),
        96 => 
        array (
            'id' => 99,
            'pro_id' => '0',
            'simple_pro_id' => 43,
            'question' => '3. Can dolls be washed?',
            'answer' => '<p>Many dolls are <strong data-start="830" data-end="850">surface-washable</strong> or <strong data-start="854" data-end="874">machine-washable</strong>, especially plush and fabric dolls. Some dolls with plastic bodies may require spot cleaning or careful wiping. Check the care instructions to keep your doll in top condition.</p>',
            'created_at' => '2025-02-17 17:05:16',
            'updated_at' => '2025-02-17 17:05:16',
        ),
        97 => 
        array (
            'id' => 100,
            'pro_id' => '0',
            'simple_pro_id' => 43,
            'question' => '4. Do dolls have interactive features?',
            'answer' => '<p data-start="1102" data-end="1154">Yes! Some dolls come with interactive features like:</p>
<ul data-start="1155" data-end="1453">
<li data-start="1155" data-end="1256"><strong data-start="1157" data-end="1169">Talking:</strong> The doll can say phrases or make sounds when you press a button or interact with it.</li>
<li data-start="1257" data-end="1339"><strong data-start="1259" data-end="1282">Crying or Laughing:</strong> Some dolls can cry or laugh, mimicking baby behaviors.</li>
<li data-start="1340" data-end="1453"><strong data-start="1342" data-end="1375">Walking, Eating, and Bathing:</strong> Advanced dolls can perform actions like walking or eating when fed or bathed.</li>
</ul>',
            'created_at' => '2025-02-17 17:05:32',
            'updated_at' => '2025-02-17 17:05:32',
        ),
        98 => 
        array (
            'id' => 101,
            'pro_id' => '0',
            'simple_pro_id' => 44,
            'question' => '1. What age group is suitable for beauty kits?',
            'answer' => '<p>Beauty kits are typically designed for children <strong data-start="166" data-end="187">6 years and older</strong>, though some kits are safe for younger kids as well. Always check the product for age recommendations and safety certifications to ensure it&rsquo;s appropriate for your child.</p>',
            'created_at' => '2025-02-17 17:15:54',
            'updated_at' => '2025-02-17 17:15:54',
        ),
        99 => 
        array (
            'id' => 102,
            'pro_id' => '0',
            'simple_pro_id' => 44,
            'question' => '2. Are beauty kits safe for kids?',
            'answer' => '<p>Yes! Most beauty kits are made with <strong data-start="441" data-end="454">non-toxic</strong>, <strong data-start="456" data-end="468">BPA-free</strong> materials, and are dermatologically tested to be safe for kids. Be sure to look for kits that are specifically labeled as safe for children&rsquo;s sensitive skin.</p>',
            'created_at' => '2025-02-17 17:16:18',
            'updated_at' => '2025-02-17 17:16:18',
        ),
        100 => 
        array (
            'id' => 103,
            'pro_id' => '0',
            'simple_pro_id' => 44,
            'question' => '3. Do beauty kits include real makeup?',
            'answer' => '<p>No, beauty kits for kids usually feature <strong data-start="719" data-end="737">pretend makeup</strong>, like colored powders, glosses, and non-toxic nail polishes, to ensure safety. They allow for fun play without the use of real cosmetics, which may not be suitable for young children.</p>',
            'created_at' => '2025-02-17 17:16:32',
            'updated_at' => '2025-02-17 17:16:32',
        ),
        101 => 
        array (
            'id' => 104,
            'pro_id' => '0',
            'simple_pro_id' => 44,
            'question' => '4. Can beauty kits be used by adults?',
            'answer' => '<p>While beauty kits are designed for children, some may contain products or tools that are suitable for beginner-level makeup artists or young teens experimenting with beauty. However, they do not provide the full range of products or quality of adult makeup.</p>',
            'created_at' => '2025-02-17 17:16:47',
            'updated_at' => '2025-02-17 17:16:47',
        ),
        102 => 
        array (
            'id' => 105,
            'pro_id' => '0',
            'simple_pro_id' => 45,
            'question' => '1. What age group is suitable for drawing and painting sets?',
            'answer' => '<p>Drawing and painting sets are generally recommended for children <strong data-start="208" data-end="229">3 years and older</strong>. However, the complexity of the set and the materials used can vary, so it&rsquo;s important to select a set that matches the skill level and age of the child. For younger kids, look for sets that feature crayons or washable markers, while older children can handle more advanced sets with paints, brushes, and pencils.</p>',
            'created_at' => '2025-02-17 17:25:03',
            'updated_at' => '2025-02-17 17:25:03',
        ),
        103 => 
        array (
            'id' => 106,
            'pro_id' => '0',
            'simple_pro_id' => 45,
            'question' => '2. Are the materials in drawing and painting sets safe for children?',
            'answer' => '<p>Yes! Most drawing and painting sets are made with <strong data-start="675" data-end="688">non-toxic</strong>, <strong data-start="690" data-end="702">BPA-free</strong>, and <strong data-start="708" data-end="732">child-safe materials</strong>. They are designed to meet safety standards like <strong data-start="782" data-end="790">ASTM</strong> or <strong data-start="794" data-end="802">EN71</strong>, ensuring that the art supplies are safe for kids to use. However, it\'s always a good idea to check the packaging for safety certifications before use.</p>',
            'created_at' => '2025-02-17 17:25:17',
            'updated_at' => '2025-02-17 17:25:17',
        ),
        104 => 
        array (
            'id' => 107,
            'pro_id' => '0',
            'simple_pro_id' => 45,
            'question' => '3. Can drawing and painting sets be used by beginners?',
            'answer' => '<p>Absolutely! Drawing and painting sets are designed to cater to both beginners and more experienced artists. Many sets include <strong data-start="1148" data-end="1173">easy-to-use materials</strong>, step-by-step guides, and beginner-friendly supplies that help kids start exploring their creativity. There are also more advanced sets with premium supplies for those who want to improve their skills.</p>',
            'created_at' => '2025-02-17 17:25:31',
            'updated_at' => '2025-02-17 17:25:31',
        ),
        105 => 
        array (
            'id' => 108,
            'pro_id' => '0',
            'simple_pro_id' => 45,
            'question' => '4. Do these kits come with brushes and other tools?',
        'answer' => '<p>Yes! Many drawing and painting sets come with <strong data-start="1486" data-end="1497">brushes</strong>, <strong data-start="1499" data-end="1510">sponges</strong>, <strong data-start="1512" data-end="1530">coloring tools</strong> (colored pencils, crayons, or markers), and sometimes <strong data-start="1585" data-end="1597">stencils</strong> or <strong data-start="1601" data-end="1614">templates</strong> to help guide creativity. The types and number of tools may vary depending on the set, with some focusing more on painting and others on drawing.</p>',
            'created_at' => '2025-02-17 17:25:43',
            'updated_at' => '2025-02-17 17:25:43',
        ),
        106 => 
        array (
            'id' => 109,
            'pro_id' => '0',
            'simple_pro_id' => 46,
            'question' => '1. What are the differences between wired and wireless headphones?',
            'answer' => '<ul>
<li data-start="134" data-end="275"><strong data-start="136" data-end="156">Wired Headphones</strong>: Connect to devices via a 3.5mm audio jack or USB-C, offering a reliable, stable connection with no need for charging.</li>
<li data-start="276" data-end="473"><strong data-start="278" data-end="301">Wireless Headphones</strong>: Use Bluetooth for wireless connectivity. They offer more mobility, but require regular charging and may have slightly less sound quality in some cases due to compression.</li>
</ul>',
            'created_at' => '2025-02-17 17:42:47',
            'updated_at' => '2025-02-17 17:42:47',
        ),
        107 => 
        array (
            'id' => 110,
            'pro_id' => '0',
            'simple_pro_id' => 46,
            'question' => '2. How do noise-canceling headphones work?',
            'answer' => '<p data-start="527" data-end="680">Noise-canceling headphones use <strong data-start="558" data-end="573">microphones</strong> to pick up external sounds and then produce sound waves that cancel out these noises. There are two types:</p>
<ul data-start="681" data-end="866">
<li data-start="681" data-end="771"><strong data-start="683" data-end="710">Passive Noise Isolation</strong>: Uses earcup design to block out external sounds physically.</li>
<li data-start="772" data-end="866"><strong data-start="774" data-end="809">Active Noise Cancellation (ANC)</strong>: Uses electronic components to counteract ambient noise.</li>
</ul>',
            'created_at' => '2025-02-17 17:43:03',
            'updated_at' => '2025-02-17 17:43:03',
        ),
        108 => 
        array (
            'id' => 111,
            'pro_id' => '0',
            'simple_pro_id' => 46,
            'question' => '3. How do I pair Bluetooth headphones with my device?',
            'answer' => '<p data-start="931" data-end="960">To pair Bluetooth headphones:</p>
<ol data-start="961" data-end="1208">
<li data-start="961" data-end="1021">Turn on Bluetooth on your device (phone, tablet, laptop).</li>
<li data-start="1022" data-end="1120">Put the headphones in pairing mode (usually by holding the power button until the LED flashes).</li>
<li data-start="1121" data-end="1208">Select the headphones from the list of available devices on your Bluetooth settings.</li>
</ol>',
            'created_at' => '2025-02-17 17:43:19',
            'updated_at' => '2025-02-17 17:43:19',
        ),
        109 => 
        array (
            'id' => 112,
            'pro_id' => '0',
            'simple_pro_id' => 46,
            'question' => '4. How long does the battery last in wireless headphones?',
            'answer' => '<p>The battery life of wireless headphones typically ranges from <strong data-start="1339" data-end="1357">10 to 30 hours</strong>, depending on the model, usage, and features like noise cancellation. Many models offer a <strong data-start="1448" data-end="1466">quick charging</strong> feature where you can get a few hours of listening time with just a short charge.</p>',
            'created_at' => '2025-02-17 17:43:42',
            'updated_at' => '2025-02-17 17:43:42',
        ),
        110 => 
        array (
            'id' => 113,
            'pro_id' => '0',
            'simple_pro_id' => 47,
            'question' => '1. What is the difference between wired and wireless headphones?',
            'answer' => '<ul>
<li data-start="132" data-end="295"><strong data-start="134" data-end="154">Wired headphones</strong> are physically connected to your device via a 3.5mm audio jack or USB-C, providing a stable, reliable connection without requiring charging.</li>
<li data-start="296" data-end="418"><strong data-start="298" data-end="321">Wireless headphones</strong> use Bluetooth to connect, offering more freedom of movement but needing to be charged regularly.</li>
</ul>',
            'created_at' => '2025-02-17 17:50:56',
            'updated_at' => '2025-02-17 17:50:56',
        ),
        111 => 
        array (
            'id' => 114,
            'pro_id' => '0',
            'simple_pro_id' => 47,
        'question' => '2. How do active noise-canceling (ANC) headphones work?',
            'answer' => '<p>ANC headphones use microphones to detect external noise and produce sound waves that counteract the unwanted noise. This results in a quieter listening environment, ideal for noisy spaces like planes or public transit.</p>',
            'created_at' => '2025-02-17 17:51:10',
            'updated_at' => '2025-02-17 17:51:10',
        ),
        112 => 
        array (
            'id' => 115,
            'pro_id' => '0',
            'simple_pro_id' => 47,
            'question' => '3. Can wireless headphones work without Bluetooth?',
        'answer' => '<p>Wireless headphones that support <strong data-start="798" data-end="807">Wi-Fi</strong> or <strong data-start="811" data-end="835">radio-frequency (RF)</strong> technology can work without Bluetooth, but most modern wireless headphones use Bluetooth as the standard connectivity option.</p>',
            'created_at' => '2025-02-17 17:51:22',
            'updated_at' => '2025-02-17 17:51:22',
        ),
        113 => 
        array (
            'id' => 116,
            'pro_id' => '0',
            'simple_pro_id' => 47,
            'question' => '4. How long do Bluetooth headphones typically last on a full charge?',
            'answer' => '<p>Bluetooth headphones can last anywhere from <strong data-start="1085" data-end="1109">10 hours to 30 hours</strong> on a single charge, depending on the model and usage. Features like active noise cancellation or high volume may reduce battery life.</p>',
            'created_at' => '2025-02-17 17:51:41',
            'updated_at' => '2025-02-17 17:51:41',
        ),
        114 => 
        array (
            'id' => 117,
            'pro_id' => '0',
            'simple_pro_id' => 48,
            'question' => '1. What is a home theater speaker system?',
        'answer' => '<p>A home theater speaker system is a setup designed to deliver immersive, high-quality surround sound for movies, music, and gaming. It typically includes multiple speakers (front, rear, center) and a subwoofer.</p>',
            'created_at' => '2025-02-18 10:09:05',
            'updated_at' => '2025-02-18 10:09:05',
        ),
        115 => 
        array (
            'id' => 118,
            'pro_id' => '0',
            'simple_pro_id' => 48,
            'question' => '2. What is the difference between 2.1, 5.1, and 7.1 speaker systems?',
            'answer' => '<ul>
<li data-start="420" data-end="506"><strong data-start="422" data-end="436">2.1 System</strong> &ndash; Two speakers (left &amp; right) and a subwoofer (basic stereo sound).</li>
<li data-start="507" data-end="608"><strong data-start="509" data-end="523">5.1 System</strong> &ndash; Five speakers (front, rear, center) and one subwoofer (standard surround sound).</li>
<li data-start="609" data-end="712"><strong data-start="611" data-end="625">7.1 System</strong> &ndash; Seven speakers and a subwoofer (enhanced surround sound with extra rear speakers).</li>
</ul>',
            'created_at' => '2025-02-18 10:09:34',
            'updated_at' => '2025-02-18 10:09:34',
        ),
        116 => 
        array (
            'id' => 119,
            'pro_id' => '0',
            'simple_pro_id' => 48,
            'question' => '3. What is Dolby Atmos, and do I need it?',
            'answer' => '<p>Dolby Atmos is an advanced surround sound technology that creates a 3D audio effect by adding height channels. It improves immersion by making sounds appear to come from above and around you. If you want a cinema-like experience, Dolby Atmos is a great choice.</p>',
            'created_at' => '2025-02-18 10:09:47',
            'updated_at' => '2025-02-18 10:09:47',
        ),
        117 => 
        array (
            'id' => 120,
            'pro_id' => '0',
            'simple_pro_id' => 48,
            'question' => '4. Can I connect my home theater speakers to my TV wirelessly?',
            'answer' => '<p>Yes, many modern home theater systems support Bluetooth, Wi-Fi, or AirPlay connectivity, allowing you to stream audio wirelessly from your TV or smartphone.</p>',
            'created_at' => '2025-02-18 10:10:00',
            'updated_at' => '2025-02-18 10:10:00',
        ),
        118 => 
        array (
            'id' => 121,
            'pro_id' => '0',
            'simple_pro_id' => 48,
            'question' => '4. Can I connect my home theater speakers to my TV wirelessly?',
            'answer' => '<p>Yes, many modern home theater systems support Bluetooth, Wi-Fi, or AirPlay connectivity, allowing you to stream audio wirelessly from your TV or smartphone.</p>',
            'created_at' => '2025-02-18 10:10:00',
            'updated_at' => '2025-02-18 10:10:00',
        ),
        119 => 
        array (
            'id' => 122,
            'pro_id' => '0',
            'simple_pro_id' => 49,
            'question' => '1. What is a home theater speaker system?',
        'answer' => '<p>A home theater speaker system is a setup designed to deliver immersive, high-quality surround sound for movies, music, and gaming. It typically includes multiple speakers (front, rear, center) and a subwoofer.</p>',
            'created_at' => '2025-02-18 10:16:17',
            'updated_at' => '2025-02-18 10:16:17',
        ),
        120 => 
        array (
            'id' => 123,
            'pro_id' => '0',
            'simple_pro_id' => 49,
            'question' => '2. What is the difference between 2.1, 5.1, and 7.1 speaker systems?',
            'answer' => '<ul>
<li data-start="420" data-end="506"><strong data-start="422" data-end="436">2.1 System</strong> &ndash; Two speakers (left &amp; right) and a subwoofer (basic stereo sound).</li>
<li data-start="507" data-end="608"><strong data-start="509" data-end="523">5.1 System</strong> &ndash; Five speakers (front, rear, center) and one subwoofer (standard surround sound).</li>
<li data-start="609" data-end="712"><strong data-start="611" data-end="625">7.1 System</strong> &ndash; Seven speakers and a subwoofer (enhanced surround sound with extra rear speakers).</li>
</ul>',
            'created_at' => '2025-02-18 10:16:33',
            'updated_at' => '2025-02-18 10:16:33',
        ),
        121 => 
        array (
            'id' => 124,
            'pro_id' => '0',
            'simple_pro_id' => 49,
            'question' => '3. What is Dolby Atmos, and do I need it?',
            'answer' => '<p>Dolby Atmos is an advanced surround sound technology that creates a 3D audio effect by adding height channels. It improves immersion by making sounds appear to come from above and around you. If you want a cinema-like experience, Dolby Atmos is a great choice.</p>',
            'created_at' => '2025-02-18 10:16:48',
            'updated_at' => '2025-02-18 10:16:48',
        ),
        122 => 
        array (
            'id' => 125,
            'pro_id' => '0',
            'simple_pro_id' => 49,
            'question' => '4. Can I connect my home theater speakers to my TV wirelessly?',
            'answer' => '<p>Yes, many modern home theater systems support Bluetooth, Wi-Fi, or AirPlay connectivity, allowing you to stream audio wirelessly from your TV or smartphone.</p>',
            'created_at' => '2025-02-18 10:17:01',
            'updated_at' => '2025-02-18 10:17:01',
        ),
        123 => 
        array (
            'id' => 126,
            'pro_id' => '0',
            'simple_pro_id' => 50,
            'question' => '1. How does a wireless charging case work?',
            'answer' => '<p>Wireless charging cases use <strong data-start="1078" data-end="1113">Qi wireless charging technology</strong>, allowing them to charge when placed on a compatible charging pad. Energy transfers through electromagnetic induction, eliminating the need for cables.</p>',
            'created_at' => '2025-02-18 10:28:40',
            'updated_at' => '2025-02-18 10:28:40',
        ),
        124 => 
        array (
            'id' => 127,
            'pro_id' => '0',
            'simple_pro_id' => 50,
            'question' => '2. Can I charge my wireless earbuds with a wired cable as well?',
            'answer' => '<p>Yes, most wireless charging cases also include a <strong data-start="1392" data-end="1431">USB-C, Lightning, or Micro-USB port</strong> for wired charging as an alternative.</p>',
            'created_at' => '2025-02-18 10:28:53',
            'updated_at' => '2025-02-18 10:28:53',
        ),
        125 => 
        array (
            'id' => 128,
            'pro_id' => '0',
            'simple_pro_id' => 50,
            'question' => '3. How long does it take to fully charge a wireless earbud case?',
            'answer' => '<p>Charging time varies, but most cases take around <strong data-start="1597" data-end="1615">1.5 to 3 hours</strong> to fully charge, depending on the battery capacity and charging speed.</p>',
            'created_at' => '2025-02-18 10:29:04',
            'updated_at' => '2025-02-18 10:29:04',
        ),
        126 => 
        array (
            'id' => 129,
            'pro_id' => '0',
            'simple_pro_id' => 50,
            'question' => '4. Are all wireless charging cases Qi-compatible?',
            'answer' => '<p>Most modern wireless charging cases support <strong data-start="1794" data-end="1818">Qi-standard charging</strong>, but it&rsquo;s always best to check the product specifications to ensure compatibility.</p>',
            'created_at' => '2025-02-18 10:29:23',
            'updated_at' => '2025-02-18 10:29:23',
        ),
        127 => 
        array (
            'id' => 130,
            'pro_id' => '0',
            'simple_pro_id' => 51,
            'question' => 'What is the fuel economy of the Audi A4?',
            'answer' => '<p>The Audi A4 offers an estimated <strong data-start="2248" data-end="2261">24-30 mpg</strong> depending on the model and driving conditions.</p>',
            'created_at' => '2025-02-18 10:49:52',
            'updated_at' => '2025-02-18 10:49:52',
        ),
        128 => 
        array (
            'id' => 131,
            'pro_id' => '0',
            'simple_pro_id' => 51,
            'question' => 'Does the Audi A4 have all-wheel drive?',
            'answer' => '<p>Yes, many versions of the Audi A4 come equipped with the <strong data-start="2418" data-end="2452">Quattro all-wheel-drive system</strong> for improved traction and stability.</p>',
            'created_at' => '2025-02-18 10:50:08',
            'updated_at' => '2025-02-18 10:50:08',
        ),
        129 => 
        array (
            'id' => 132,
            'pro_id' => '0',
            'simple_pro_id' => 51,
            'question' => 'How much horsepower does the Audi A4 produce?',
            'answer' => '<p>The 2.0-liter turbocharged engine typically produces <strong data-start="2602" data-end="2624">188-249 horsepower</strong>, depending on the trim level.</p>',
            'created_at' => '2025-02-18 10:50:22',
            'updated_at' => '2025-02-18 10:50:22',
        ),
        130 => 
        array (
            'id' => 133,
            'pro_id' => '0',
            'simple_pro_id' => 51,
            'question' => 'Is the Audi A4 a good family car?',
            'answer' => '<p>Yes, the A4 offers spacious rear seating, ample cargo space, and advanced safety features, making it a solid choice for families.</p>',
            'created_at' => '2025-02-18 10:50:33',
            'updated_at' => '2025-02-18 10:50:33',
        ),
        131 => 
        array (
            'id' => 134,
            'pro_id' => '0',
            'simple_pro_id' => 52,
            'question' => 'What is the engine in the Ferrari 488?',
            'answer' => '<p>The Ferrari 488 is powered by a <strong data-start="105" data-end="146">3.9-liter twin-turbocharged V8 engine</strong> that produces <strong data-start="161" data-end="179">661 horsepower</strong> and <strong data-start="184" data-end="207">561 lb-ft of torque</strong>.</p>',
            'created_at' => '2025-02-18 11:06:39',
            'updated_at' => '2025-02-18 11:06:39',
        ),
        132 => 
        array (
            'id' => 135,
            'pro_id' => '0',
            'simple_pro_id' => 52,
            'question' => 'What is the top speed of the Ferrari 488?',
        'answer' => '<p>The Ferrari 488 can reach a top speed of <strong data-start="305" data-end="327">211 mph (340 km/h)</strong>, making it one of the fastest cars in its class.</p>',
            'created_at' => '2025-02-18 11:06:55',
            'updated_at' => '2025-02-18 11:06:55',
        ),
        133 => 
        array (
            'id' => 136,
            'pro_id' => '0',
            'simple_pro_id' => 52,
            'question' => 'How fast is the Ferrari 488 from 0 to 60 mph?',
            'answer' => '<p>The Ferrari 488 can accelerate from 0 to 60 mph in just <strong data-start="492" data-end="507">3.0 seconds</strong>.</p>',
            'created_at' => '2025-02-18 11:07:25',
            'updated_at' => '2025-02-18 11:07:25',
        ),
        134 => 
        array (
            'id' => 137,
            'pro_id' => '0',
            'simple_pro_id' => 52,
            'question' => 'What type of transmission does the Ferrari 488 have?',
            'answer' => '<p>The Ferrari 488 comes with a <strong data-start="604" data-end="650">7-speed dual-clutch automatic transmission</strong>, offering rapid gear shifts and precise control.</p>',
            'created_at' => '2025-02-18 11:07:40',
            'updated_at' => '2025-02-18 11:07:40',
        ),
        135 => 
        array (
            'id' => 138,
            'pro_id' => '0',
            'simple_pro_id' => 53,
            'question' => 'What is the engine performance of the BMW M3?',
            'answer' => '<p>The BMW M3 is equipped with a <strong data-start="3778" data-end="3815">3.0L turbocharged inline-6 engine</strong> that produces up to <strong data-start="3836" data-end="3854">503 horsepower</strong> in the Competition model.</p>',
            'created_at' => '2025-02-18 11:21:52',
            'updated_at' => '2025-02-18 11:21:52',
        ),
        136 => 
        array (
            'id' => 139,
            'pro_id' => '0',
            'simple_pro_id' => 53,
            'question' => 'What is the 0-60 mph time of the BMW M3?',
            'answer' => '<p>The <strong data-start="3939" data-end="3961">BMW M3 Competition</strong> accelerates from <strong data-start="3979" data-end="4009">0 to 60 mph in 3.8 seconds</strong>.</p>',
            'created_at' => '2025-02-18 11:22:15',
            'updated_at' => '2025-02-18 11:22:15',
        ),
        137 => 
        array (
            'id' => 140,
            'pro_id' => '0',
            'simple_pro_id' => 53,
            'question' => 'What is the top speed of the BMW M3?',
            'answer' => '<p>The M3 has a top speed of <strong data-start="4087" data-end="4098">155 mph</strong>, which is electronically limited.</p>',
            'created_at' => '2025-02-18 11:22:36',
            'updated_at' => '2025-02-18 11:22:36',
        ),
        138 => 
        array (
            'id' => 141,
            'pro_id' => '0',
            'simple_pro_id' => 53,
            'question' => 'Does the BMW M3 have all-wheel drive?',
            'answer' => '<p>Yes, the <strong data-start="4193" data-end="4215">BMW M3 Competition</strong> is available with the <strong data-start="4238" data-end="4266">M xDrive all-wheel-drive</strong> system, while the standard M3 comes with <strong data-start="4308" data-end="4328">rear-wheel drive</strong></p>',
            'created_at' => '2025-02-18 11:22:50',
            'updated_at' => '2025-02-18 11:22:50',
        ),
        139 => 
        array (
            'id' => 142,
            'pro_id' => '0',
            'simple_pro_id' => 54,
            'question' => 'What is the engine size of the Honda CBR1000RR?',
            'answer' => '<p>The CBR1000RR produces <strong data-start="4101" data-end="4119">189 horsepower</strong>.</p>',
            'created_at' => '2025-02-18 11:32:23',
            'updated_at' => '2025-02-18 11:32:23',
        ),
        140 => 
        array (
            'id' => 143,
            'pro_id' => '0',
            'simple_pro_id' => 54,
            'question' => 'What is the horsepower of the Honda CBR1000RR?',
            'answer' => '<p>The CBR1000RR produces <strong data-start="4101" data-end="4119">189 horsepower</strong>.</p>',
            'created_at' => '2025-02-18 11:33:02',
            'updated_at' => '2025-02-18 11:33:02',
        ),
        141 => 
        array (
            'id' => 144,
            'pro_id' => '0',
            'simple_pro_id' => 54,
            'question' => 'What are the key features of the Honda CBR1000RR\'s suspension?',
            'answer' => '<p>It has <strong data-start="4204" data-end="4241">fully adjustable Showa suspension</strong> in both the front and rear, allowing for a customizable riding experience.</p>',
            'created_at' => '2025-02-18 11:33:23',
            'updated_at' => '2025-02-18 11:33:23',
        ),
        142 => 
        array (
            'id' => 145,
            'pro_id' => '0',
            'simple_pro_id' => 54,
            'question' => 'Does the Honda CBR1000RR have ABS?',
            'answer' => '<p>Yes, the Honda CBR1000RR is available with <strong data-start="4408" data-end="4434">Honda\'s selectable ABS</strong> for improved braking safety.</p>',
            'created_at' => '2025-02-18 11:33:37',
            'updated_at' => '2025-02-18 11:33:37',
        ),
        143 => 
        array (
            'id' => 146,
            'pro_id' => '0',
            'simple_pro_id' => 55,
            'question' => 'What is the engine size of the Royal Enfield Classic 350?',
            'answer' => '<p>The Royal Enfield Classic 350 is powered by a <strong data-start="3704" data-end="3736">349cc single-cylinder engine</strong>.</p>',
            'created_at' => '2025-02-18 11:46:44',
            'updated_at' => '2025-02-18 11:46:44',
        ),
        144 => 
        array (
            'id' => 147,
            'pro_id' => '0',
            'simple_pro_id' => 55,
            'question' => 'How much horsepower does the Royal Enfield Classic 350 have?',
            'answer' => '<p>The Classic 350 produces <strong data-start="3837" data-end="3856">20.2 horsepower</strong>.</p>',
            'created_at' => '2025-02-18 11:47:03',
            'updated_at' => '2025-02-18 11:47:03',
        ),
        145 => 
        array (
            'id' => 148,
            'pro_id' => '0',
            'simple_pro_id' => 55,
            'question' => 'What type of transmission does the Royal Enfield Classic 350 use?',
            'answer' => '<p>It comes with a <strong data-start="3953" data-end="3986">5-speed constant mesh gearbox</strong> for smooth gear transitions.</p>',
            'created_at' => '2025-02-18 11:47:41',
            'updated_at' => '2025-02-18 11:47:41',
        ),
        146 => 
        array (
            'id' => 149,
            'pro_id' => '0',
            'simple_pro_id' => 55,
            'question' => 'Does the Royal Enfield Classic 350 have ABS?',
            'answer' => '<p>Yes, the Classic 350 is equipped with <strong data-start="4112" data-end="4132">dual-channel ABS</strong> for improved braking performance and safety.</p>',
            'created_at' => '2025-02-18 11:48:04',
            'updated_at' => '2025-02-18 11:48:04',
        ),
        147 => 
        array (
            'id' => 150,
            'pro_id' => '0',
            'simple_pro_id' => 56,
            'question' => '1. What is the best material for a knife blade?',
            'answer' => '<p>Stainless steel is commonly preferred for its resistance to rust and corrosion, while carbon steel blades can be sharper but may require more maintenance. Damascus steel is popular for its durability and beautiful patterns.</p>',
            'created_at' => '2025-02-18 12:12:22',
            'updated_at' => '2025-02-18 12:12:22',
        ),
        148 => 
        array (
            'id' => 151,
            'pro_id' => '0',
            'simple_pro_id' => 56,
            'question' => '2. How do I maintain my knife?',
            'answer' => '<p>Regularly sharpen your knife with a sharpening stone or a honing rod. Clean it after use and avoid using it on hard surfaces that may dull the blade.</p>',
            'created_at' => '2025-02-18 12:12:37',
            'updated_at' => '2025-02-18 12:12:37',
        ),
        149 => 
        array (
            'id' => 152,
            'pro_id' => '0',
            'simple_pro_id' => 56,
            'question' => '3. What is the difference between a serrated knife and a straight-edge knife?',
            'answer' => '<p>A serrated knife has a toothed edge, which is great for cutting through tough or crusty foods, like bread or tomatoes. A straight-edge knife is ideal for smooth, clean cuts on soft foods.</p>',
            'created_at' => '2025-02-18 12:12:49',
            'updated_at' => '2025-02-18 12:12:49',
        ),
        150 => 
        array (
            'id' => 153,
            'pro_id' => '0',
            'simple_pro_id' => 56,
            'question' => '4. How often should I sharpen my knives?',
            'answer' => '<p>It depends on how often you use the knife, but generally, it&rsquo;s recommended to sharpen knives every 6-12 months. However, honing them regularly can help maintain the edge between sharpenings.</p>',
            'created_at' => '2025-02-18 12:13:01',
            'updated_at' => '2025-02-18 12:13:01',
        ),
        151 => 
        array (
            'id' => 154,
            'pro_id' => '0',
            'simple_pro_id' => 57,
            'question' => '1. What are the different types of forks?',
            'answer' => '<p>Common types of forks include:</p>
<ul data-start="3722" data-end="4083">
<li data-start="3722" data-end="3801"><strong data-start="3724" data-end="3739">Dinner Fork</strong>: The standard fork for main courses, usually with four tines.</li>
<li data-start="3807" data-end="3880"><strong data-start="3809" data-end="3823">Salad Fork</strong>: Slightly smaller than the dinner fork, used for salads.</li>
<li data-start="3886" data-end="3954"><strong data-start="3888" data-end="3904">Dessert Fork</strong>: Smaller than the dinner fork, used for desserts.</li>
<li data-start="3960" data-end="4026"><strong data-start="3962" data-end="3975">Fish Fork</strong>: A broader fork with longer tines for eating fish.</li>
<li data-start="4032" data-end="4083"><strong data-start="4034" data-end="4050">Serving Fork</strong>: A larger fork for serving food.</li>
</ul>',
            'created_at' => '2025-02-18 12:24:04',
            'updated_at' => '2025-02-18 12:24:04',
        ),
        152 => 
        array (
            'id' => 155,
            'pro_id' => '0',
            'simple_pro_id' => 57,
            'question' => '2. Can forks be made from materials other than stainless steel?',
            'answer' => '<p>Yes, forks can also be made from silver, plastic, wood, or even titanium. Silver forks are often used for formal occasions, while plastic forks are common for casual dining or disposable purposes.</p>',
            'created_at' => '2025-02-18 12:24:28',
            'updated_at' => '2025-02-18 12:24:28',
        ),
        153 => 
        array (
            'id' => 156,
            'pro_id' => '0',
            'simple_pro_id' => 57,
            'question' => '3. Are there forks specifically designed for certain types of food?',
            'answer' => '<p>Yes, there are specialized forks such as <strong data-start="4474" data-end="4491">carving forks</strong>, <strong data-start="4493" data-end="4509">fondue forks</strong>, and <strong data-start="4515" data-end="4532">seafood forks</strong>, which are designed for specific types of food.</p>',
            'created_at' => '2025-02-18 12:25:56',
            'updated_at' => '2025-02-18 12:25:56',
        ),
        154 => 
        array (
            'id' => 157,
            'pro_id' => '0',
            'simple_pro_id' => 57,
            'question' => '4. How do I care for my forks?',
            'answer' => '<p>Forks made of stainless steel are generally easy to care for. For best results, wash them in warm, soapy water or place them in the dishwasher. If they are silver, regular polishing may be required to maintain their shine.</p>',
            'created_at' => '2025-02-18 12:26:20',
            'updated_at' => '2025-02-18 12:26:20',
        ),
        155 => 
        array (
            'id' => 158,
            'pro_id' => '0',
            'simple_pro_id' => 58,
            'question' => '1. What types of spoons are there?',
            'answer' => '<p>Common types of spoons include:</p>
<ul data-start="3488" data-end="3897">
<li data-start="3488" data-end="3557"><strong data-start="3490" data-end="3502">Teaspoon</strong>: Used for stirring or measuring small amounts of food.</li>
<li data-start="3563" data-end="3642"><strong data-start="3565" data-end="3579">Tablespoon</strong>: A larger spoon, often used for serving or eating main dishes.</li>
<li data-start="3648" data-end="3729"><strong data-start="3650" data-end="3664">Soup Spoon</strong>: A spoon with a rounded, deep bowl, used for liquids like soups.</li>
<li data-start="3735" data-end="3821"><strong data-start="3737" data-end="3754">Dessert Spoon</strong>: A medium-sized spoon used for desserts like ice cream or pudding.</li>
<li data-start="3827" data-end="3897"><strong data-start="3829" data-end="3846">Serving Spoon</strong>: A large spoon used for serving food at the table.</li>
</ul>',
            'created_at' => '2025-02-18 12:42:37',
            'updated_at' => '2025-02-18 12:42:37',
        ),
        156 => 
        array (
            'id' => 159,
            'pro_id' => '0',
            'simple_pro_id' => 58,
            'question' => '2. Can spoons be made from materials other than stainless steel?',
            'answer' => '<p>Yes, spoons can also be made from silver, plastic, ceramic, or even bamboo. Each material offers unique benefits, with silver providing an elegant option for formal dining and plastic being ideal for casual, disposable use.</p>',
            'created_at' => '2025-02-18 12:42:52',
            'updated_at' => '2025-02-18 12:42:52',
        ),
        157 => 
        array (
            'id' => 160,
            'pro_id' => '0',
            'simple_pro_id' => 58,
            'question' => '3. How do I care for my spoons?',
            'answer' => '<p>Spoons made from stainless steel are easy to care for. Wash them in warm, soapy water or place them in the dishwasher. Silver spoons require occasional polishing to maintain their shine, while wooden or bamboo spoons should be hand-washed and regularly oiled to prevent cracking.</p>',
            'created_at' => '2025-02-18 12:43:04',
            'updated_at' => '2025-02-18 12:43:04',
        ),
        158 => 
        array (
            'id' => 161,
            'pro_id' => '0',
            'simple_pro_id' => 58,
            'question' => '4. Can I use a spoon for all types of food?',
            'answer' => '<p>Spoons are versatile and can be used for a variety of foods, including liquids, grains, and softer foods. However, they might not be ideal for cutting tough foods, in which case a knife would be more appropriate.</p>',
            'created_at' => '2025-02-18 12:43:15',
            'updated_at' => '2025-02-18 12:43:15',
        ),
        159 => 
        array (
            'id' => 162,
            'pro_id' => '0',
            'simple_pro_id' => 59,
            'question' => '1. What is the best material for a soup ladle?',
            'answer' => '<p>The best material depends on your needs. Stainless steel is durable, easy to clean, and resistant to rust. Silicone ladles are great for non-stick cookware as they won&rsquo;t damage the surface. Wooden ladles are great for traditional cooking but need more care to avoid cracking.</p>',
            'created_at' => '2025-02-18 12:52:02',
            'updated_at' => '2025-02-18 12:52:02',
        ),
        160 => 
        array (
            'id' => 163,
            'pro_id' => '0',
            'simple_pro_id' => 59,
            'question' => '2. How big is a typical soup ladle?',
        'answer' => '<p>A typical soup ladle has a bowl that holds about 4 to 6 ounces (120 to 180 ml) of liquid. The length of the handle can range from 12 to 14 inches (30 to 35 cm) to provide a comfortable reach into large pots or bowls.</p>',
            'created_at' => '2025-02-18 12:52:17',
            'updated_at' => '2025-02-18 12:52:17',
        ),
        161 => 
        array (
            'id' => 164,
            'pro_id' => '0',
            'simple_pro_id' => 59,
            'question' => '3. Can soup ladles be used for other liquids?',
            'answer' => '<p>Yes, soup ladles are versatile and can be used to serve any liquid-based dish such as stews, sauces, gravies, punch, and even hot beverages like mulled wine or hot cider.</p>',
            'created_at' => '2025-02-18 12:52:38',
            'updated_at' => '2025-02-18 12:52:38',
        ),
        162 => 
        array (
            'id' => 165,
            'pro_id' => '0',
            'simple_pro_id' => 59,
            'question' => '4. How do I care for my soup ladle?',
            'answer' => '<p>If it&rsquo;s made of stainless steel, it can be easily washed with soap and water or placed in the dishwasher. Silicone ladles should also be washed with soap or put in the dishwasher. Wooden ladles should be hand-washed and oiled regularly to prevent cracking or drying out.</p>',
            'created_at' => '2025-02-18 12:52:49',
            'updated_at' => '2025-02-18 12:52:49',
        ),
        163 => 
        array (
            'id' => 166,
            'pro_id' => '0',
            'simple_pro_id' => 60,
            'question' => 'What is the best weight for a beginner?',
            'answer' => '<p>For beginners, start with a weight between 1 to 5 kg to focus on form and technique. As you get stronger, you can gradually increase the weight.</p>',
            'created_at' => '2025-02-18 14:15:44',
            'updated_at' => '2025-02-18 14:15:44',
        ),
        164 => 
        array (
            'id' => 167,
            'pro_id' => '0',
            'simple_pro_id' => 60,
            'question' => 'Are adjustable dumbbells better than fixed-weight dumbbells?',
            'answer' => '<ul>
<li data-start="2686" data-end="3040">
<ul data-start="2757" data-end="3040">
<li data-start="2757" data-end="3040">Adjustable dumbbells are a space-saving option, and they allow you to change weights quickly, making them ideal for people with limited space or those who want a variety of weights in one set. Fixed-weight dumbbells are often more durable and easier to use for fast-paced workouts.</li>
</ul>
</li>
<li data-start="3042" data-end="3303">
<p data-start="3045" data-end="3088">&nbsp;</p>
</li>
</ul>',
            'created_at' => '2025-02-18 14:16:15',
            'updated_at' => '2025-02-18 14:16:15',
        ),
        165 => 
        array (
            'id' => 168,
            'pro_id' => '0',
            'simple_pro_id' => 60,
            'question' => 'What exercises can I do with dumbbells?',
            'answer' => '<p>Dumbbells are incredibly versatile. Some exercises include:</p>
<ul data-start="3159" data-end="3303">
<li data-start="3159" data-end="3172">Bicep curls</li>
<li data-start="3178" data-end="3196">Shoulder presses</li>
<li data-start="3202" data-end="3222">Triceps extensions</li>
<li data-start="3228" data-end="3243">Chest presses</li>
<li data-start="3249" data-end="3272">Squats with dumbbells</li>
<li data-start="3278" data-end="3286">Lunges</li>
<li data-start="3292" data-end="3303">Deadlifts</li>
</ul>',
            'created_at' => '2025-02-18 14:16:41',
            'updated_at' => '2025-02-18 14:16:41',
        ),
        166 => 
        array (
            'id' => 169,
            'pro_id' => '0',
            'simple_pro_id' => 60,
            'question' => 'How do I choose the right weight for dumbbells?',
            'answer' => '<p>Choose a weight that allows you to perform 8-12 repetitions with good form. If you can do more than 12 reps easily, increase the weight. If you can\'t reach 8 reps with proper form, reduce the weight.</p>',
            'created_at' => '2025-02-18 14:16:54',
            'updated_at' => '2025-02-18 14:16:54',
        ),
        167 => 
        array (
            'id' => 170,
            'pro_id' => '0',
            'simple_pro_id' => 61,
            'question' => 'What is the best thickness for a yoga mat?',
            'answer' => '<p>The ideal thickness depends on your comfort preference and the type of yoga you practice:</p>
<ul data-start="3042" data-end="3375">
<li data-start="3042" data-end="3154"><strong data-start="3044" data-end="3052">3mm:</strong> Great for those who prefer a thinner mat for better stability during standing poses and balance work.</li>
<li data-start="3160" data-end="3243"><strong data-start="3162" data-end="3170">5mm:</strong> A good balance of comfort and support, suitable for most styles of yoga.</li>
<li data-start="3249" data-end="3375"><strong data-start="3251" data-end="3267">8mm or more:</strong> Provides extra cushioning for joint support, perfect for beginners or those with knee or joint sensitivity.</li>
</ul>',
            'created_at' => '2025-02-18 14:34:18',
            'updated_at' => '2025-02-18 14:34:18',
        ),
        168 => 
        array (
            'id' => 171,
            'pro_id' => '0',
            'simple_pro_id' => 61,
            'question' => 'Can I use a yoga mat for Pilates or other exercises?',
            'answer' => '<ul>
<li data-start="3377" data-end="3615">
<ul data-start="3440" data-end="3615">
<li data-start="3440" data-end="3615">Yes, yoga mats are versatile and can be used for Pilates, floor exercises, stretching, and bodyweight workouts. The mat provides the cushioning needed for various exercises.</li>
</ul>
</li>
<li data-start="3617" data-end="3805">
<p data-start="3620" data-end="3647">&nbsp;</p>
</li>
</ul>',
            'created_at' => '2025-02-18 14:34:36',
            'updated_at' => '2025-02-18 14:34:36',
        ),
        169 => 
        array (
            'id' => 172,
            'pro_id' => '0',
            'simple_pro_id' => 61,
            'question' => 'Are yoga mats washable?',
            'answer' => '<p>Some yoga mats are machine washable, while others can be wiped down with a damp cloth. Check the care instructions for your specific mat before washing.</p>',
            'created_at' => '2025-02-18 14:34:58',
            'updated_at' => '2025-02-18 14:34:58',
        ),
        170 => 
        array (
            'id' => 173,
            'pro_id' => '0',
            'simple_pro_id' => 61,
            'question' => 'What is the difference between PVC and TPE yoga mats?',
            'answer' => '<ul>
<li data-start="3871" data-end="3974"><strong data-start="3873" data-end="3885">PVC mats</strong> are more common and provide good cushioning but may contain chemicals like phthalates.</li>
<li data-start="3978" data-end="4124"><strong data-start="3980" data-end="3992">TPE mats</strong> are a more eco-friendly option, made from thermoplastic elastomer, which is non-toxic, recyclable, and free from harmful chemicals.</li>
</ul>',
            'created_at' => '2025-02-18 14:35:19',
            'updated_at' => '2025-02-18 14:35:19',
        ),
        171 => 
        array (
            'id' => 174,
            'pro_id' => '0',
            'simple_pro_id' => 62,
            'question' => 'How do I inflate my exercise ball?',
            'answer' => '<ul>
<li data-start="2634" data-end="3056">
<ul data-start="2682" data-end="3056">
<li data-start="2682" data-end="3056">The size of the exercise ball depends on your height:
<ul data-start="2743" data-end="3056">
<li data-start="2743" data-end="2792"><strong data-start="2745" data-end="2754">45 cm</strong>: For individuals under 5\'0" (152 cm).</li>
<li data-start="2798" data-end="2862"><strong data-start="2800" data-end="2809">55 cm</strong>: For individuals between 5\'0" and 5\'5" (152-165 cm).</li>
<li data-start="2868" data-end="2932"><strong data-start="2870" data-end="2879">65 cm</strong>: For individuals between 5\'5" and 6\'0" (165-183 cm).</li>
<li data-start="2938" data-end="3002"><strong data-start="2940" data-end="2949">75 cm</strong>: For individuals between 6\'0" and 6\'5" (183-196 cm).</li>
<li data-start="3008" data-end="3056"><strong data-start="3010" data-end="3019">85 cm</strong>: For individuals over 6\'5" (196 cm).</li>
</ul>
</li>
</ul>
</li>
<li data-start="3058" data-end="3312">
<p data-start="3061" data-end="3110">&nbsp;</p>
</li>
</ul>',
            'created_at' => '2025-02-18 14:59:47',
            'updated_at' => '2025-02-18 14:59:47',
        ),
        172 => 
        array (
            'id' => 176,
            'pro_id' => '0',
            'simple_pro_id' => 62,
            'question' => 'What size exercise ball should I use?',
            'answer' => '<ul>
<li data-start="2634" data-end="3056">
<ul data-start="2682" data-end="3056">
<li data-start="2682" data-end="3056">The size of the exercise ball depends on your height:
<ul data-start="2743" data-end="3056">
<li data-start="2743" data-end="2792"><strong data-start="2745" data-end="2754">45 cm</strong>: For individuals under 5\'0" (152 cm).</li>
<li data-start="2798" data-end="2862"><strong data-start="2800" data-end="2809">55 cm</strong>: For individuals between 5\'0" and 5\'5" (152-165 cm).</li>
<li data-start="2868" data-end="2932"><strong data-start="2870" data-end="2879">65 cm</strong>: For individuals between 5\'5" and 6\'0" (165-183 cm).</li>
<li data-start="2938" data-end="3002"><strong data-start="2940" data-end="2949">75 cm</strong>: For individuals between 6\'0" and 6\'5" (183-196 cm).</li>
<li data-start="3008" data-end="3056"><strong data-start="3010" data-end="3019">85 cm</strong>: For individuals over 6\'5" (196 cm).</li>
</ul>
</li>
</ul>
</li>
<li data-start="3058" data-end="3312">
<p data-start="3061" data-end="3110">&nbsp;</p>
</li>
</ul>',
            'created_at' => '2025-02-18 15:01:30',
            'updated_at' => '2025-02-18 15:01:30',
        ),
        173 => 
        array (
            'id' => 177,
            'pro_id' => '0',
            'simple_pro_id' => 62,
            'question' => 'Can I use an exercise ball for core workouts?',
            'answer' => '<p>Yes, exercise balls are excellent for core exercises. By using the ball, you engage the stabilizing muscles in your abdomen, back, and pelvis, which helps strengthen your core and improve balance.</p>',
            'created_at' => '2025-02-18 15:01:54',
            'updated_at' => '2025-02-18 15:01:54',
        ),
        174 => 
        array (
            'id' => 178,
            'pro_id' => '0',
            'simple_pro_id' => 62,
            'question' => 'How do I care for and maintain my exercise ball?',
        'answer' => '<p>To keep your exercise ball in good condition, avoid using it on rough or sharp surfaces. Regularly check for any punctures or damage. Clean the ball with a damp cloth and mild soap (avoid harsh chemicals). Keep it away from excessive heat or direct sunlight, which can cause damage.</p>',
            'created_at' => '2025-02-18 15:02:23',
            'updated_at' => '2025-02-18 15:02:23',
        ),
        175 => 
        array (
            'id' => 179,
            'pro_id' => '0',
            'simple_pro_id' => 63,
            'question' => 'What is the best weight for a beginner?',
            'answer' => '<p>For beginners, start with a weight between 1 to 5 kg to focus on form and technique. As you get stronger, you can gradually increase the weight.</p>',
            'created_at' => '2025-02-18 15:43:06',
            'updated_at' => '2025-02-18 15:43:06',
        ),
        176 => 
        array (
            'id' => 180,
            'pro_id' => '0',
            'simple_pro_id' => 63,
            'question' => 'Are adjustable dumbbells better than fixed-weight dumbbells?',
            'answer' => '<p>Adjustable dumbbells are a space-saving option, and they allow you to change weights quickly, making them ideal for people with limited space or those who want a variety of weights in one set. Fixed-weight dumbbells are often more durable and easier to use for fast-paced workouts.</p>',
            'created_at' => '2025-02-18 15:43:26',
            'updated_at' => '2025-02-18 15:43:26',
        ),
        177 => 
        array (
            'id' => 181,
            'pro_id' => '0',
            'simple_pro_id' => 63,
            'question' => 'What exercises can I do with dumbbells?',
            'answer' => '<p>Dumbbells are incredibly versatile. Some exercises include:</p>
<ul data-start="3159" data-end="3303">
<li data-start="3159" data-end="3172">Bicep curls</li>
<li data-start="3178" data-end="3196">Shoulder presses</li>
<li data-start="3202" data-end="3222">Triceps extensions</li>
<li data-start="3228" data-end="3243">Chest presses</li>
<li data-start="3249" data-end="3272">Squats with dumbbells</li>
<li data-start="3278" data-end="3286">Lunges</li>
<li data-start="3292" data-end="3303">Deadlifts</li>
</ul>',
            'created_at' => '2025-02-18 15:43:50',
            'updated_at' => '2025-02-18 15:43:50',
        ),
        178 => 
        array (
            'id' => 182,
            'pro_id' => '0',
            'simple_pro_id' => 63,
            'question' => 'How do I choose the right weight for dumbbells?',
            'answer' => '<ul>
<li data-start="3305" data-end="3564">
<ul data-start="3363" data-end="3564">
<li data-start="3363" data-end="3564">Choose a weight that allows you to perform 8-12 repetitions with good form. If you can do more than 12 reps easily, increase the weight. If you can\'t reach 8 reps with proper form, reduce the weight.</li>
</ul>
</li>
<li data-start="3566" data-end="3797">
<p data-start="3569" data-end="3606">&nbsp;</p>
</li>
</ul>',
            'created_at' => '2025-02-18 15:44:05',
            'updated_at' => '2025-02-18 15:44:05',
        ),
        179 => 
        array (
            'id' => 183,
            'pro_id' => '0',
            'simple_pro_id' => 64,
            'question' => 'Which treadmill is best for home use?',
            'answer' => '<p>A foldable motorized treadmill with 2.0 HP motor, a 12-15 km/h speed range, and a cushioned deck is ideal for home use.</p>',
            'created_at' => '2025-02-18 16:01:37',
            'updated_at' => '2025-02-18 16:01:37',
        ),
        180 => 
        array (
            'id' => 184,
            'pro_id' => '0',
            'simple_pro_id' => 64,
            'question' => 'Is running on a treadmill better than outdoor running?',
            'answer' => '<p>A treadmill provides controlled conditions, shock absorption, and safety from weather, but outdoor running engages more muscle groups due to uneven terrain.</p>',
            'created_at' => '2025-02-18 16:01:52',
            'updated_at' => '2025-02-18 16:01:52',
        ),
        181 => 
        array (
            'id' => 185,
            'pro_id' => '0',
            'simple_pro_id' => 64,
            'question' => 'How often should I lubricate my treadmill?',
            'answer' => '<p>Most treadmills require lubrication every 100-150 hours of use or once every 3 months. Check the manufacturer&rsquo;s manual for recommendations.</p>',
            'created_at' => '2025-02-18 16:02:45',
            'updated_at' => '2025-02-18 16:02:45',
        ),
        182 => 
        array (
            'id' => 186,
            'pro_id' => '0',
            'simple_pro_id' => 64,
            'question' => 'Can treadmills help with weight loss?',
            'answer' => '<ul>
<li data-start="3233" data-end="3408">
<ul data-start="3283" data-end="3408">
<li data-start="3283" data-end="3408">Yes, regular treadmill workouts combined with a proper diet can aid in weight loss and cardiovascular health improvement.</li>
</ul>
</li>
<li data-start="3410" data-end="3593">
<p data-start="3413" data-end="3456">&nbsp;</p>
</li>
</ul>',
            'created_at' => '2025-02-18 16:03:02',
            'updated_at' => '2025-02-18 16:03:02',
        ),
        183 => 
        array (
            'id' => 187,
            'pro_id' => '0',
            'simple_pro_id' => 65,
            'question' => 'What is the best way to clean pruning shears?',
            'answer' => '<p>Wipe the blades with a clean cloth after each use. For deep cleaning, use warm soapy water and dry them properly to prevent rust.</p>',
            'created_at' => '2025-02-18 17:12:30',
            'updated_at' => '2025-02-18 17:12:30',
        ),
        184 => 
        array (
            'id' => 188,
            'pro_id' => '0',
            'simple_pro_id' => 65,
            'question' => '2. Can pruning shears cut thick branches?',
            'answer' => '<p>&nbsp;They are designed to cut branches up to &frac34; inch thick. For thicker branches, use loppers or a pruning saw.</p>',
            'created_at' => '2025-02-18 17:12:56',
            'updated_at' => '2025-02-18 17:12:56',
        ),
        185 => 
        array (
            'id' => 189,
            'pro_id' => '0',
            'simple_pro_id' => 65,
            'question' => '3. How often should I sharpen pruning shears?',
            'answer' => '<p>Sharpen them every few months or whenever you notice difficulty in cutting. Use a sharpening stone or a fine file.</p>',
            'created_at' => '2025-02-18 17:13:26',
            'updated_at' => '2025-02-18 17:13:26',
        ),
        186 => 
        array (
            'id' => 190,
            'pro_id' => '0',
            'simple_pro_id' => 65,
            'question' => '4. Are pruning shears suitable for left-handed users?',
            'answer' => '<p>Some models are designed for both right- and left-handed users. Look for ambidextrous designs or ergonomic handles.</p>',
            'created_at' => '2025-02-18 17:13:50',
            'updated_at' => '2025-02-18 17:13:50',
        ),
        187 => 
        array (
            'id' => 191,
            'pro_id' => '0',
            'simple_pro_id' => 66,
            'question' => 'Q1: How often should I apply fertilizer?',
            'answer' => '<p>A: It depends on the plant type. Most plants need fertilizer every 2-4 weeks during the growing season.</p>',
            'created_at' => '2025-02-19 11:12:43',
            'updated_at' => '2025-02-19 11:12:43',
        ),
        188 => 
        array (
            'id' => 192,
            'pro_id' => '0',
            'simple_pro_id' => 66,
            'question' => 'Q2: Can I use the same fertilizer for all plants?',
            'answer' => '<p>A: Different plants have different nutrient needs. Use specific fertilizers for lawns, flowers, or vegetables for the best results.</p>',
            'created_at' => '2025-02-19 11:13:02',
            'updated_at' => '2025-02-19 11:13:02',
        ),
        189 => 
        array (
            'id' => 193,
            'pro_id' => '0',
            'simple_pro_id' => 66,
            'question' => 'Q3: Is organic fertilizer better than synthetic?',
            'answer' => '<p>A: Organic fertilizers improve soil health over time, while synthetic fertilizers provide immediate results. Choose based on your gardening goals.</p>',
            'created_at' => '2025-02-19 11:13:15',
            'updated_at' => '2025-02-19 11:13:15',
        ),
        190 => 
        array (
            'id' => 194,
            'pro_id' => '0',
            'simple_pro_id' => 66,
            'question' => 'Q4: What happens if I over-fertilize my plants?',
            'answer' => '<p>A: Over-fertilization can cause nutrient burn, leading to yellowing leaves and stunted growth. Always follow the recommended dosage.</p>',
            'created_at' => '2025-02-19 11:13:30',
            'updated_at' => '2025-02-19 11:13:30',
        ),
        191 => 
        array (
            'id' => 195,
            'pro_id' => '0',
            'simple_pro_id' => 67,
            'question' => 'Q1: Are these gloves waterproof?',
            'answer' => '<p>A: Some gloves have a waterproof coating, while others are breathable but not fully waterproof. Check the product details for specific features.</p>',
            'created_at' => '2025-02-19 11:32:16',
            'updated_at' => '2025-02-19 11:32:16',
        ),
        192 => 
        array (
            'id' => 196,
            'pro_id' => '0',
            'simple_pro_id' => 67,
            'question' => 'Q2: Can I use these gloves for handling thorny plants?',
            'answer' => '<p>A: Yes, gloves with reinforced fingertips and thick material are ideal for protecting against thorns.</p>',
            'created_at' => '2025-02-19 11:32:31',
            'updated_at' => '2025-02-19 11:32:31',
        ),
        193 => 
        array (
            'id' => 197,
            'pro_id' => '0',
            'simple_pro_id' => 67,
            'question' => 'Q3: How do I clean my garden gloves?',
            'answer' => '<p>A: Most fabric gloves are machine washable, while leather gloves should be wiped clean with a damp cloth and conditioned with leather oil.</p>',
            'created_at' => '2025-02-19 11:32:42',
            'updated_at' => '2025-02-19 11:32:42',
        ),
        194 => 
        array (
            'id' => 198,
            'pro_id' => '0',
            'simple_pro_id' => 67,
            'question' => 'Q4: What size should I choose?',
            'answer' => '<p>A: Measure your hand circumference and refer to the size chart to select the right fit.</p>',
            'created_at' => '2025-02-19 11:32:54',
            'updated_at' => '2025-02-19 11:32:54',
        ),
        195 => 
        array (
            'id' => 199,
            'pro_id' => '0',
            'simple_pro_id' => 68,
            'question' => 'Q1: What is the best material for outdoor planters?',
            'answer' => '<p>A: Terracotta and ceramic are breathable but heavy, while plastic and metal are lightweight and weather-resistant. Choose based on durability and aesthetics.</p>',
            'created_at' => '2025-02-19 11:46:46',
            'updated_at' => '2025-02-19 11:46:46',
        ),
        196 => 
        array (
            'id' => 200,
            'pro_id' => '0',
            'simple_pro_id' => 68,
            'question' => 'Q2: Do all pots need drainage holes?',
            'answer' => '<p>A: Yes, drainage holes help prevent water buildup, but self-watering pots can manage moisture levels without them.</p>',
            'created_at' => '2025-02-19 11:47:20',
            'updated_at' => '2025-02-19 11:47:20',
        ),
        197 => 
        array (
            'id' => 201,
            'pro_id' => '0',
            'simple_pro_id' => 68,
            'question' => 'Q3: Are self-watering planters good for all plants?',
            'answer' => '<p>A: They work well for moisture-loving plants like herbs and ferns but may not be ideal for succulents and cacti, which need dry soil between waterings.</p>',
            'created_at' => '2025-02-19 11:47:33',
            'updated_at' => '2025-02-19 11:47:33',
        ),
        198 => 
        array (
            'id' => 202,
            'pro_id' => '0',
            'simple_pro_id' => 68,
            'question' => 'Q4: How do I choose the right size planter?',
            'answer' => '<p>A: Pick a pot that is at least 1-2 inches larger in diameter than the plant&rsquo;s root ball for healthy growth.</p>',
            'created_at' => '2025-02-19 11:47:45',
            'updated_at' => '2025-02-19 11:47:45',
        ),
    ));
        
        
    }
}