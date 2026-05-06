<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSpecificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_specifications')->delete();
        
        \DB::table('product_specifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pro_id' => 0,
                'simple_pro_id' => 37,
                'prokeys' => 'Product Name',
                'provalues' => 'Royal Ruby',
                'created_at' => '2025-02-17 11:21:25',
                'updated_at' => '2025-02-17 11:21:25',
            ),
            1 => 
            array (
                'id' => 2,
                'pro_id' => 0,
                'simple_pro_id' => 37,
                'prokeys' => 'Shade Name',
                'provalues' => 'Red',
                'created_at' => '2025-02-17 11:21:25',
                'updated_at' => '2025-02-17 11:21:25',
            ),
            2 => 
            array (
                'id' => 3,
                'pro_id' => 0,
                'simple_pro_id' => 37,
                'prokeys' => 'Brand',
                'provalues' => 'Royal Ruby',
                'created_at' => '2025-02-17 11:21:25',
                'updated_at' => '2025-02-17 11:21:25',
            ),
            3 => 
            array (
                'id' => 4,
                'pro_id' => 0,
                'simple_pro_id' => 37,
                'prokeys' => 'Finish Type',
                'provalues' => 'Matte / Satin / Glossy',
                'created_at' => '2025-02-17 11:21:25',
                'updated_at' => '2025-02-17 11:21:25',
            ),
            4 => 
            array (
                'id' => 5,
                'pro_id' => 0,
                'simple_pro_id' => 37,
                'prokeys' => 'Longevity',
                'provalues' => 'Up to 12 Hours Wear',
                'created_at' => '2025-02-17 11:21:25',
                'updated_at' => '2025-02-17 11:21:25',
            ),
            5 => 
            array (
                'id' => 6,
                'pro_id' => 0,
                'simple_pro_id' => 38,
                'prokeys' => 'Product Name',
                'provalues' => 'Diamond Red Lipstick',
                'created_at' => '2025-02-17 11:25:01',
                'updated_at' => '2025-02-17 11:25:01',
            ),
            6 => 
            array (
                'id' => 7,
                'pro_id' => 0,
                'simple_pro_id' => 38,
                'prokeys' => 'Brand',
                'provalues' => 'Diamond Red',
                'created_at' => '2025-02-17 11:25:01',
                'updated_at' => '2025-02-17 11:25:01',
            ),
            7 => 
            array (
                'id' => 8,
                'pro_id' => 0,
                'simple_pro_id' => 38,
                'prokeys' => 'Longevity',
                'provalues' => 'Up to 12 Hours Wear',
                'created_at' => '2025-02-17 11:25:01',
                'updated_at' => '2025-02-17 11:25:01',
            ),
            8 => 
            array (
                'id' => 9,
                'pro_id' => 0,
                'simple_pro_id' => 38,
                'prokeys' => 'Finish Type',
                'provalues' => 'Matte / Satin / Glossy',
                'created_at' => '2025-02-17 11:25:01',
                'updated_at' => '2025-02-17 11:25:01',
            ),
            9 => 
            array (
                'id' => 10,
                'pro_id' => 0,
                'simple_pro_id' => 39,
                'prokeys' => 'Product Name',
                'provalues' => 'Cherry Bomb',
                'created_at' => '2025-02-17 12:09:03',
                'updated_at' => '2025-02-17 12:20:33',
            ),
            10 => 
            array (
                'id' => 11,
                'pro_id' => 0,
                'simple_pro_id' => 39,
                'prokeys' => 'Brand',
                'provalues' => 'Cherry Bomb',
                'created_at' => '2025-02-17 12:09:03',
                'updated_at' => '2025-02-17 12:20:47',
            ),
            11 => 
            array (
                'id' => 12,
                'pro_id' => 0,
                'simple_pro_id' => 39,
                'prokeys' => 'Longevity',
                'provalues' => 'Up to 12 Hours Wear',
                'created_at' => '2025-02-17 12:09:03',
                'updated_at' => '2025-02-17 12:09:03',
            ),
            12 => 
            array (
                'id' => 13,
                'pro_id' => 0,
                'simple_pro_id' => 39,
                'prokeys' => 'Finish Type',
                'provalues' => 'Matte / Satin / Glossy',
                'created_at' => '2025-02-17 12:09:03',
                'updated_at' => '2025-02-17 12:09:03',
            ),
            13 => 
            array (
                'id' => 14,
                'pro_id' => 0,
                'simple_pro_id' => 39,
                'prokeys' => 'Texture',
                'provalues' => 'Creamy / Smooth / Lightweight',
                'created_at' => '2025-02-17 12:19:25',
                'updated_at' => '2025-02-17 12:19:25',
            ),
            14 => 
            array (
                'id' => 15,
                'pro_id' => 0,
                'simple_pro_id' => 40,
                'prokeys' => 'Product Name',
                'provalues' => 'Vampire Red',
                'created_at' => '2025-02-17 12:22:32',
                'updated_at' => '2025-02-17 12:22:32',
            ),
            15 => 
            array (
                'id' => 16,
                'pro_id' => 0,
                'simple_pro_id' => 40,
                'prokeys' => 'Brand',
                'provalues' => 'Vampire Red',
                'created_at' => '2025-02-17 12:22:32',
                'updated_at' => '2025-02-17 12:22:32',
            ),
            16 => 
            array (
                'id' => 17,
                'pro_id' => 0,
                'simple_pro_id' => 40,
                'prokeys' => 'Longevity',
                'provalues' => 'Up to 12 Hours Wear',
                'created_at' => '2025-02-17 12:22:32',
                'updated_at' => '2025-02-17 12:22:32',
            ),
            17 => 
            array (
                'id' => 18,
                'pro_id' => 0,
                'simple_pro_id' => 40,
                'prokeys' => 'Finish Type',
                'provalues' => 'Matte / Satin / Glossy',
                'created_at' => '2025-02-17 12:22:32',
                'updated_at' => '2025-02-17 12:22:32',
            ),
            18 => 
            array (
                'id' => 19,
                'pro_id' => 0,
                'simple_pro_id' => 41,
                'prokeys' => 'Material',
            'provalues' => 'Ultra-soft plush fabric (cotton, polyester, fleece)',
                'created_at' => '2025-02-17 16:20:37',
                'updated_at' => '2025-02-17 16:20:37',
            ),
            19 => 
            array (
                'id' => 20,
                'pro_id' => 0,
                'simple_pro_id' => 41,
                'prokeys' => 'Filling',
                'provalues' => 'High-quality PP cotton, memory foam, or microfiber',
                'created_at' => '2025-02-17 16:20:37',
                'updated_at' => '2025-02-17 16:20:37',
            ),
            20 => 
            array (
                'id' => 21,
                'pro_id' => 0,
                'simple_pro_id' => 41,
                'prokeys' => 'Safety Standard',
                'provalues' => 'Non-toxic, BPA-free, EN71, ASTM-F963 certified',
                'created_at' => '2025-02-17 16:20:37',
                'updated_at' => '2025-02-17 16:20:37',
            ),
            21 => 
            array (
                'id' => 22,
                'pro_id' => 0,
                'simple_pro_id' => 42,
                'prokeys' => 'Material',
                'provalues' => 'ABS Plastic, Metal Alloy, Rubber Tires, Shockproof Body',
                'created_at' => '2025-02-17 16:40:51',
                'updated_at' => '2025-02-17 16:40:51',
            ),
            22 => 
            array (
                'id' => 23,
                'pro_id' => 0,
                'simple_pro_id' => 42,
                'prokeys' => 'Control Type',
            'provalues' => 'Wireless (2.4 GHz, Bluetooth, Infrared, App-controlled)',
                'created_at' => '2025-02-17 16:40:51',
                'updated_at' => '2025-02-17 16:40:51',
            ),
            23 => 
            array (
                'id' => 24,
                'pro_id' => 0,
                'simple_pro_id' => 42,
                'prokeys' => 'Control Range',
            'provalues' => '10m to 100m (varies by model)',
                'created_at' => '2025-02-17 16:40:51',
                'updated_at' => '2025-02-17 16:40:51',
            ),
            24 => 
            array (
                'id' => 25,
                'pro_id' => 0,
                'simple_pro_id' => 43,
                'prokeys' => 'Material',
                'provalues' => 'Vinyl, Plastic, Fabric, Soft Plush, Silicone',
                'created_at' => '2025-02-17 17:03:20',
                'updated_at' => '2025-02-17 17:03:20',
            ),
            25 => 
            array (
                'id' => 26,
                'pro_id' => 0,
                'simple_pro_id' => 43,
                'prokeys' => 'Height/Size',
            'provalues' => 'Varies (typically 12" to 24" for most dolls)',
                'created_at' => '2025-02-17 17:03:20',
                'updated_at' => '2025-02-17 17:03:20',
            ),
            26 => 
            array (
                'id' => 27,
                'pro_id' => 0,
                'simple_pro_id' => 43,
                'prokeys' => 'Age Group',
            'provalues' => '3+ years (basic dolls), 6+ years (interactive dolls)',
                'created_at' => '2025-02-17 17:03:20',
                'updated_at' => '2025-02-17 17:03:20',
            ),
            27 => 
            array (
                'id' => 28,
                'pro_id' => 0,
                'simple_pro_id' => 43,
                'prokeys' => 'Type of Doll',
                'provalues' => 'Baby Doll, Fashion Doll, Collectible Doll, Action Figure',
                'created_at' => '2025-02-17 17:03:20',
                'updated_at' => '2025-02-17 17:03:20',
            ),
            28 => 
            array (
                'id' => 29,
                'pro_id' => 0,
                'simple_pro_id' => 44,
                'prokeys' => 'Material',
                'provalues' => 'Non-toxic plastic, soft brushes, fabric accessories',
                'created_at' => '2025-02-17 17:14:40',
                'updated_at' => '2025-02-17 17:14:40',
            ),
            29 => 
            array (
                'id' => 30,
                'pro_id' => 0,
                'simple_pro_id' => 44,
                'prokeys' => 'Age Group',
            'provalues' => '6+ years (recommended for safe and creative use)',
                'created_at' => '2025-02-17 17:14:40',
                'updated_at' => '2025-02-17 17:14:40',
            ),
            30 => 
            array (
                'id' => 31,
                'pro_id' => 0,
                'simple_pro_id' => 44,
                'prokeys' => 'Type of Kit',
                'provalues' => 'Makeup Kit, Nail Kit, Hair Styling Kit, Complete Beauty Set',
                'created_at' => '2025-02-17 17:14:40',
                'updated_at' => '2025-02-17 17:14:40',
            ),
            31 => 
            array (
                'id' => 32,
                'pro_id' => 0,
                'simple_pro_id' => 44,
                'prokeys' => 'Contents',
                'provalues' => 'Lip gloss, nail polish, blush, eyeshadow, comb, brushes, mirrors, headbands, hair clips',
                'created_at' => '2025-02-17 17:14:40',
                'updated_at' => '2025-02-17 17:14:40',
            ),
            32 => 
            array (
                'id' => 33,
                'pro_id' => 0,
                'simple_pro_id' => 45,
                'prokeys' => 'Material',
                'provalues' => 'Non-toxic paints, crayons, pencils, markers, brushes, paper, canvas',
                'created_at' => '2025-02-17 17:28:08',
                'updated_at' => '2025-02-17 17:28:08',
            ),
            33 => 
            array (
                'id' => 34,
                'pro_id' => 0,
                'simple_pro_id' => 45,
                'prokeys' => 'Age Group',
            'provalues' => '5+ years (some sets are for beginners, others for advanced artists)',
                'created_at' => '2025-02-17 17:28:08',
                'updated_at' => '2025-02-17 17:28:08',
            ),
            34 => 
            array (
                'id' => 35,
                'pro_id' => 0,
                'simple_pro_id' => 45,
                'prokeys' => 'Type of Set',
                'provalues' => 'Basic Drawing Set, Watercolor Set, Acrylic Paint Set, Mixed Media Set',
                'created_at' => '2025-02-17 17:28:08',
                'updated_at' => '2025-02-17 17:28:08',
            ),
            35 => 
            array (
                'id' => 36,
                'pro_id' => 0,
                'simple_pro_id' => 45,
                'prokeys' => 'Contents',
                'provalues' => 'Crayons, colored pencils, watercolor paints, acrylic paints, oil pastels, markers, brushes, sponges, canvas, sketch pads, instruction manuals',
                'created_at' => '2025-02-17 17:28:08',
                'updated_at' => '2025-02-17 17:28:08',
            ),
            36 => 
            array (
                'id' => 37,
                'pro_id' => 0,
                'simple_pro_id' => 46,
                'prokeys' => 'Sound Quality',
                'provalues' => 'High-definition audio, Clear highs, deep bass, Balanced sound',
                'created_at' => '2025-02-17 17:41:24',
                'updated_at' => '2025-02-17 17:41:24',
            ),
            37 => 
            array (
                'id' => 38,
                'pro_id' => 0,
                'simple_pro_id' => 46,
                'prokeys' => 'Noise Cancellation',
            'provalues' => 'Active Noise Cancellation (ANC), Passive Noise Isolation, Transparency Mode',
                'created_at' => '2025-02-17 17:41:24',
                'updated_at' => '2025-02-17 17:41:24',
            ),
            38 => 
            array (
                'id' => 39,
                'pro_id' => 0,
                'simple_pro_id' => 46,
                'prokeys' => 'Connectivity',
            'provalues' => 'Bluetooth 5.0+, NFC pairing, Wired (3.5mm aux), Multi-device support',
                'created_at' => '2025-02-17 17:41:24',
                'updated_at' => '2025-02-17 17:41:24',
            ),
            39 => 
            array (
                'id' => 40,
                'pro_id' => 0,
                'simple_pro_id' => 47,
                'prokeys' => 'Sound Quality',
            'provalues' => 'High-fidelity (Hi-Fi) audio, Clear treble, deep bass, Rich mids',
                'created_at' => '2025-02-17 17:50:06',
                'updated_at' => '2025-02-17 17:50:06',
            ),
            40 => 
            array (
                'id' => 41,
                'pro_id' => 0,
                'simple_pro_id' => 47,
                'prokeys' => 'Noise Cancellation',
            'provalues' => 'Active Noise Cancellation (ANC), Passive Noise Isolation, Adaptive noise-canceling levels',
                'created_at' => '2025-02-17 17:50:06',
                'updated_at' => '2025-02-17 17:50:06',
            ),
            41 => 
            array (
                'id' => 42,
                'pro_id' => 0,
                'simple_pro_id' => 47,
                'prokeys' => 'Connectivity',
            'provalues' => 'Bluetooth 5.0+, USB-C, Wired (3.5mm audio jack), Multi-device pairing',
                'created_at' => '2025-02-17 17:50:06',
                'updated_at' => '2025-02-17 17:50:06',
            ),
            42 => 
            array (
                'id' => 43,
                'pro_id' => 0,
                'simple_pro_id' => 47,
                'prokeys' => 'Battery Life',
            'provalues' => '10-30 hours (depending on usage and features), Fast charging (e.g., 10 minutes for 2 hours of playback)',
                'created_at' => '2025-02-17 17:50:06',
                'updated_at' => '2025-02-17 17:50:06',
            ),
            43 => 
            array (
                'id' => 44,
                'pro_id' => 0,
                'simple_pro_id' => 48,
                'prokeys' => 'Speaker Type',
                'provalues' => '5.1 Surround, 7.1 Surround, Dolby Atmos',
                'created_at' => '2025-02-18 10:08:08',
                'updated_at' => '2025-02-18 10:08:08',
            ),
            44 => 
            array (
                'id' => 45,
                'pro_id' => 0,
                'simple_pro_id' => 48,
                'prokeys' => 'Audio Technology',
                'provalues' => 'Dolby Atmos, DTS:X, Hi-Res Audio',
                'created_at' => '2025-02-18 10:08:08',
                'updated_at' => '2025-02-18 10:08:08',
            ),
            45 => 
            array (
                'id' => 46,
                'pro_id' => 0,
                'simple_pro_id' => 48,
                'prokeys' => 'Connectivity Options',
                'provalues' => 'Bluetooth, Wi-Fi, HDMI ARC/eARC, Optical',
                'created_at' => '2025-02-18 10:08:08',
                'updated_at' => '2025-02-18 10:08:08',
            ),
            46 => 
            array (
                'id' => 47,
                'pro_id' => 0,
                'simple_pro_id' => 48,
                'prokeys' => 'Input Ports',
                'provalues' => 'HDMI, Optical, AUX, USB, RCA',
                'created_at' => '2025-02-18 10:08:08',
                'updated_at' => '2025-02-18 10:08:08',
            ),
            47 => 
            array (
                'id' => 48,
                'pro_id' => 0,
                'simple_pro_id' => 49,
                'prokeys' => 'Audio Technology',
                'provalues' => 'Dolby Atmos, DTS:X, Hi-Res Audio',
                'created_at' => '2025-02-18 10:18:42',
                'updated_at' => '2025-02-18 10:18:42',
            ),
            48 => 
            array (
                'id' => 49,
                'pro_id' => 0,
                'simple_pro_id' => 49,
                'prokeys' => 'Total Power Output',
            'provalues' => '[Watts] (e.g., 500W, 1000W)',
                'created_at' => '2025-02-18 10:18:42',
                'updated_at' => '2025-02-18 10:18:42',
            ),
            49 => 
            array (
                'id' => 50,
                'pro_id' => 0,
                'simple_pro_id' => 49,
                'prokeys' => 'Subwoofer',
            'provalues' => 'Yes / No (Wireless or Wired)',
                'created_at' => '2025-02-18 10:18:42',
                'updated_at' => '2025-02-18 10:18:42',
            ),
            50 => 
            array (
                'id' => 51,
                'pro_id' => 0,
                'simple_pro_id' => 49,
                'prokeys' => 'Connectivity Options',
                'provalues' => 'Bluetooth, Wi-Fi, HDMI ARC/eARC, Optical',
                'created_at' => '2025-02-18 10:18:42',
                'updated_at' => '2025-02-18 10:18:42',
            ),
            51 => 
            array (
                'id' => 52,
                'pro_id' => 0,
                'simple_pro_id' => 50,
                'prokeys' => 'Charging Technology',
                'provalues' => 'Qi Wireless Charging',
                'created_at' => '2025-02-18 10:31:39',
                'updated_at' => '2025-02-18 10:31:39',
            ),
            52 => 
            array (
                'id' => 53,
                'pro_id' => 0,
                'simple_pro_id' => 50,
                'prokeys' => 'Charging Time',
            'provalues' => '[Time in Hours] (e.g., 1.5 to 3 hours)',
                'created_at' => '2025-02-18 10:31:39',
                'updated_at' => '2025-02-18 10:31:39',
            ),
            53 => 
            array (
                'id' => 54,
                'pro_id' => 0,
                'simple_pro_id' => 50,
                'prokeys' => 'Battery Capacity',
            'provalues' => '[mAh] (e.g., 500mAh, 1000mAh)',
                'created_at' => '2025-02-18 10:31:39',
                'updated_at' => '2025-02-18 10:31:39',
            ),
            54 => 
            array (
                'id' => 55,
                'pro_id' => 0,
                'simple_pro_id' => 50,
                'prokeys' => 'Earbud Charge Cycles',
            'provalues' => '[Number of Charges] (e.g., 3-5 full charges for earbuds)',
                'created_at' => '2025-02-18 10:31:39',
                'updated_at' => '2025-02-18 10:31:39',
            ),
            55 => 
            array (
                'id' => 56,
                'pro_id' => 0,
                'simple_pro_id' => 51,
                'prokeys' => 'Engine Type',
                'provalues' => '2.0L Turbocharged 4-cylinder',
                'created_at' => '2025-02-18 10:53:18',
                'updated_at' => '2025-02-18 10:53:18',
            ),
            56 => 
            array (
                'id' => 57,
                'pro_id' => 0,
                'simple_pro_id' => 51,
                'prokeys' => 'Drivetrain',
            'provalues' => 'Quattro All-Wheel Drive (AWD)',
                'created_at' => '2025-02-18 10:53:18',
                'updated_at' => '2025-02-18 10:53:18',
            ),
            57 => 
            array (
                'id' => 58,
                'pro_id' => 0,
                'simple_pro_id' => 51,
                'prokeys' => 'Transmission',
                'provalues' => '7-Speed Dual-Clutch Automatic',
                'created_at' => '2025-02-18 10:53:18',
                'updated_at' => '2025-02-18 10:53:18',
            ),
            58 => 
            array (
                'id' => 59,
                'pro_id' => 0,
                'simple_pro_id' => 51,
                'prokeys' => 'Fuel Economy',
                'provalues' => '24 MPG City / 30 MPG Highway',
                'created_at' => '2025-02-18 10:53:18',
                'updated_at' => '2025-02-18 10:53:18',
            ),
            59 => 
            array (
                'id' => 60,
                'pro_id' => 0,
                'simple_pro_id' => 51,
                'prokeys' => 'Exterior Color',
                'provalues' => 'Brilliant Black, Ibis White, Mythos Black, etc.',
                'created_at' => '2025-02-18 10:53:18',
                'updated_at' => '2025-02-18 10:53:18',
            ),
            60 => 
            array (
                'id' => 61,
                'pro_id' => 0,
                'simple_pro_id' => 52,
                'prokeys' => 'Engine Type',
                'provalues' => '2.0L Turbocharged 4-cylinder',
                'created_at' => '2025-02-18 11:03:37',
                'updated_at' => '2025-02-18 11:03:37',
            ),
            61 => 
            array (
                'id' => 62,
                'pro_id' => 0,
                'simple_pro_id' => 52,
                'prokeys' => 'Drivetrain',
            'provalues' => 'Quattro All-Wheel Drive (AWD)',
                'created_at' => '2025-02-18 11:03:37',
                'updated_at' => '2025-02-18 11:03:37',
            ),
            62 => 
            array (
                'id' => 63,
                'pro_id' => 0,
                'simple_pro_id' => 52,
                'prokeys' => 'Transmission',
                'provalues' => '7-Speed Dual-Clutch Automatic',
                'created_at' => '2025-02-18 11:03:37',
                'updated_at' => '2025-02-18 11:03:37',
            ),
            63 => 
            array (
                'id' => 64,
                'pro_id' => 0,
                'simple_pro_id' => 52,
                'prokeys' => 'Fuel Economy',
                'provalues' => '24 MPG City / 30 MPG Highway',
                'created_at' => '2025-02-18 11:03:37',
                'updated_at' => '2025-02-18 11:03:37',
            ),
            64 => 
            array (
                'id' => 65,
                'pro_id' => 0,
                'simple_pro_id' => 53,
                'prokeys' => 'Engine Type',
                'provalues' => '3.0L Turbocharged Inline-6',
                'created_at' => '2025-02-18 11:20:39',
                'updated_at' => '2025-02-18 11:20:39',
            ),
            65 => 
            array (
                'id' => 66,
                'pro_id' => 0,
                'simple_pro_id' => 53,
                'prokeys' => 'Horsepower',
            'provalues' => '473 hp (Standard), 503 hp (Competition)',
                'created_at' => '2025-02-18 11:20:39',
                'updated_at' => '2025-02-18 11:20:39',
            ),
            66 => 
            array (
                'id' => 67,
                'pro_id' => 0,
                'simple_pro_id' => 53,
                'prokeys' => 'Transmission',
                'provalues' => '6-Speed Manual or 8-Speed Dual-Clutch Automatic',
                'created_at' => '2025-02-18 11:20:39',
                'updated_at' => '2025-02-18 11:20:39',
            ),
            67 => 
            array (
                'id' => 68,
                'pro_id' => 0,
                'simple_pro_id' => 53,
                'prokeys' => 'Drivetrain',
            'provalues' => 'Rear-Wheel Drive (RWD) or M xDrive All-Wheel Drive (Competition)',
                'created_at' => '2025-02-18 11:20:39',
                'updated_at' => '2025-02-18 11:20:39',
            ),
            68 => 
            array (
                'id' => 69,
                'pro_id' => 0,
                'simple_pro_id' => 54,
                'prokeys' => 'Engine Type',
                'provalues' => '999cc Liquid-Cooled Inline-4',
                'created_at' => '2025-02-18 11:31:22',
                'updated_at' => '2025-02-18 11:31:22',
            ),
            69 => 
            array (
                'id' => 70,
                'pro_id' => 0,
                'simple_pro_id' => 54,
                'prokeys' => 'Horsepower',
                'provalues' => '189 horsepower',
                'created_at' => '2025-02-18 11:31:22',
                'updated_at' => '2025-02-18 11:31:22',
            ),
            70 => 
            array (
                'id' => 71,
                'pro_id' => 0,
                'simple_pro_id' => 54,
                'prokeys' => 'Torque',
                'provalues' => '84 lb-ft of torque',
                'created_at' => '2025-02-18 11:31:22',
                'updated_at' => '2025-02-18 11:31:22',
            ),
            71 => 
            array (
                'id' => 72,
                'pro_id' => 0,
                'simple_pro_id' => 54,
                'prokeys' => 'Transmission',
                'provalues' => '6-Speed Manual with Slipper Clutch',
                'created_at' => '2025-02-18 11:31:22',
                'updated_at' => '2025-02-18 11:31:22',
            ),
            72 => 
            array (
                'id' => 73,
                'pro_id' => 0,
                'simple_pro_id' => 55,
                'prokeys' => 'Engine Type',
                'provalues' => '349cc Single-Cylinder, Air-Cooled',
                'created_at' => '2025-02-18 11:45:26',
                'updated_at' => '2025-02-18 11:45:26',
            ),
            73 => 
            array (
                'id' => 74,
                'pro_id' => 0,
                'simple_pro_id' => 55,
                'prokeys' => 'Power',
                'provalues' => '20.2 horsepower',
                'created_at' => '2025-02-18 11:45:26',
                'updated_at' => '2025-02-18 11:45:26',
            ),
            74 => 
            array (
                'id' => 75,
                'pro_id' => 0,
                'simple_pro_id' => 55,
                'prokeys' => 'Torque',
                'provalues' => '19.9 lb-ft',
                'created_at' => '2025-02-18 11:45:26',
                'updated_at' => '2025-02-18 11:45:26',
            ),
            75 => 
            array (
                'id' => 76,
                'pro_id' => 0,
                'simple_pro_id' => 55,
                'prokeys' => 'Transmission',
                'provalues' => '5-Speed Constant Mesh Gearbox',
                'created_at' => '2025-02-18 11:45:26',
                'updated_at' => '2025-02-18 11:45:26',
            ),
            76 => 
            array (
                'id' => 77,
                'pro_id' => 0,
                'simple_pro_id' => 56,
                'prokeys' => 'Durability',
            'provalues' => 'High-quality knives (like those made from stainless or carbon steel) offer long-lasting sharpness and resistance to wear and tear.',
                'created_at' => '2025-02-18 12:11:06',
                'updated_at' => '2025-02-18 12:11:06',
            ),
            77 => 
            array (
                'id' => 78,
                'pro_id' => 0,
                'simple_pro_id' => 56,
                'prokeys' => 'Comfort',
                'provalues' => 'Ergonomically designed handles reduce hand fatigue during extended use.',
                'created_at' => '2025-02-18 12:11:06',
                'updated_at' => '2025-02-18 12:11:06',
            ),
            78 => 
            array (
                'id' => 79,
                'pro_id' => 0,
                'simple_pro_id' => 56,
                'prokeys' => 'Versatility',
                'provalues' => 'A knife with a versatile blade length and shape, like a chef\'s knife, can perform a variety of tasks, from chopping vegetables to slicing meat.',
                'created_at' => '2025-02-18 12:11:06',
                'updated_at' => '2025-02-18 12:11:06',
            ),
            79 => 
            array (
                'id' => 80,
                'pro_id' => 0,
                'simple_pro_id' => 57,
                'prokeys' => 'Durability',
                'provalues' => 'Stainless steel forks are known for their strength, corrosion resistance, and ability to withstand daily use without warping or rusting.',
                'created_at' => '2025-02-18 12:23:37',
                'updated_at' => '2025-02-18 12:23:37',
            ),
            80 => 
            array (
                'id' => 81,
                'pro_id' => 0,
                'simple_pro_id' => 57,
                'prokeys' => 'Comfort',
                'provalues' => 'Ergonomically designed handles make forks easier to hold and use, reducing strain during extended meals.',
                'created_at' => '2025-02-18 12:23:37',
                'updated_at' => '2025-02-18 12:23:37',
            ),
            81 => 
            array (
                'id' => 82,
                'pro_id' => 0,
                'simple_pro_id' => 57,
                'prokeys' => 'Aesthetic Appeal',
                'provalues' => 'Forks can come in various designs, from simple, classic styles to more intricate patterns or decorative finishes.',
                'created_at' => '2025-02-18 12:23:37',
                'updated_at' => '2025-02-18 12:23:37',
            ),
            82 => 
            array (
                'id' => 83,
                'pro_id' => 0,
                'simple_pro_id' => 57,
                'prokeys' => 'Versatility',
                'provalues' => 'Forks can be used for a wide variety of foods, such as pasta, vegetables, meats, and salads.',
                'created_at' => '2025-02-18 12:23:37',
                'updated_at' => '2025-02-18 12:23:37',
            ),
            83 => 
            array (
                'id' => 84,
                'pro_id' => 0,
                'simple_pro_id' => 58,
                'prokeys' => 'Durability',
                'provalues' => 'Spoons made from stainless steel are durable, resistant to rust, and can handle daily use.',
                'created_at' => '2025-02-18 12:41:53',
                'updated_at' => '2025-02-18 12:41:53',
            ),
            84 => 
            array (
                'id' => 85,
                'pro_id' => 0,
                'simple_pro_id' => 58,
                'prokeys' => 'Comfort',
                'provalues' => 'Ergonomically designed handles are easy to hold and reduce hand strain.',
                'created_at' => '2025-02-18 12:41:53',
                'updated_at' => '2025-02-18 12:41:53',
            ),
            85 => 
            array (
                'id' => 86,
                'pro_id' => 0,
                'simple_pro_id' => 58,
                'prokeys' => 'Aesthetic Appeal',
                'provalues' => 'Spoons come in a variety of designs, from plain to ornate, with options that suit both casual and formal dining.',
                'created_at' => '2025-02-18 12:41:53',
                'updated_at' => '2025-02-18 12:41:53',
            ),
            86 => 
            array (
                'id' => 87,
                'pro_id' => 0,
                'simple_pro_id' => 58,
                'prokeys' => 'Versatility',
                'provalues' => 'Spoons are versatile and can be used for a wide range of foods, from liquids like soup to solid foods like rice or vegetables.',
                'created_at' => '2025-02-18 12:41:53',
                'updated_at' => '2025-02-18 12:41:53',
            ),
            87 => 
            array (
                'id' => 88,
                'pro_id' => 0,
                'simple_pro_id' => 59,
                'prokeys' => 'Durability',
                'provalues' => 'Soup ladles made from stainless steel or high-quality materials are durable and resistant to rust, stains, and bending.',
                'created_at' => '2025-02-18 12:51:09',
                'updated_at' => '2025-02-18 12:51:09',
            ),
            88 => 
            array (
                'id' => 89,
                'pro_id' => 0,
                'simple_pro_id' => 59,
                'prokeys' => 'Comfort',
                'provalues' => 'Ergonomically designed handles make the ladle comfortable to hold, reducing hand strain when serving.',
                'created_at' => '2025-02-18 12:51:09',
                'updated_at' => '2025-02-18 12:51:09',
            ),
            89 => 
            array (
                'id' => 90,
                'pro_id' => 0,
                'simple_pro_id' => 59,
                'prokeys' => 'Efficiency in Serving',
                'provalues' => 'The deep bowl and long handle enable you to scoop and serve large portions of soup with ease.',
                'created_at' => '2025-02-18 12:51:09',
                'updated_at' => '2025-02-18 12:51:09',
            ),
            90 => 
            array (
                'id' => 91,
                'pro_id' => 0,
                'simple_pro_id' => 59,
                'prokeys' => 'Versatility',
                'provalues' => 'Soup ladles are versatile and can be used for a variety of soups, stews, gravies, sauces, and even punch.',
                'created_at' => '2025-02-18 12:51:09',
                'updated_at' => '2025-02-18 12:51:09',
            ),
            91 => 
            array (
                'id' => 92,
                'pro_id' => 0,
                'simple_pro_id' => 60,
                'prokeys' => 'Material',
                'provalues' => 'Cast Iron, Rubber Coated, Neoprene, Vinyl',
                'created_at' => '2025-02-18 14:14:01',
                'updated_at' => '2025-02-18 14:14:01',
            ),
            92 => 
            array (
                'id' => 93,
                'pro_id' => 0,
                'simple_pro_id' => 60,
                'prokeys' => 'Weight Range',
            'provalues' => '1 kg - 40 kg (or more for heavy-duty)',
                'created_at' => '2025-02-18 14:14:01',
                'updated_at' => '2025-02-18 14:14:01',
            ),
            93 => 
            array (
                'id' => 94,
                'pro_id' => 0,
                'simple_pro_id' => 60,
                'prokeys' => 'Shape',
                'provalues' => 'Hexagonal, Round, Adjustable',
                'created_at' => '2025-02-18 14:14:02',
                'updated_at' => '2025-02-18 14:14:02',
            ),
            94 => 
            array (
                'id' => 95,
                'pro_id' => 0,
                'simple_pro_id' => 60,
                'prokeys' => 'Grip Type',
                'provalues' => 'Textured, Ergonomic, Anti-Slip',
                'created_at' => '2025-02-18 14:14:02',
                'updated_at' => '2025-02-18 14:14:02',
            ),
            95 => 
            array (
                'id' => 96,
                'pro_id' => 0,
                'simple_pro_id' => 61,
                'prokeys' => 'Material',
                'provalues' => 'PVC, TPE, Rubber, Jute, Cork',
                'created_at' => '2025-02-18 14:33:03',
                'updated_at' => '2025-02-18 14:33:03',
            ),
            96 => 
            array (
                'id' => 97,
                'pro_id' => 0,
                'simple_pro_id' => 61,
                'prokeys' => 'Thickness',
                'provalues' => '3mm, 5mm, 8mm, 10mm',
                'created_at' => '2025-02-18 14:33:03',
                'updated_at' => '2025-02-18 14:33:03',
            ),
            97 => 
            array (
                'id' => 98,
                'pro_id' => 0,
                'simple_pro_id' => 61,
                'prokeys' => 'Length',
            'provalues' => '60 cm - 75 cm (typically)',
                'created_at' => '2025-02-18 14:33:03',
                'updated_at' => '2025-02-18 14:33:03',
            ),
            98 => 
            array (
                'id' => 99,
                'pro_id' => 0,
                'simple_pro_id' => 61,
                'prokeys' => 'Width',
                'provalues' => '180 cm - 200 cm',
                'created_at' => '2025-02-18 14:33:03',
                'updated_at' => '2025-02-18 14:33:03',
            ),
            99 => 
            array (
                'id' => 100,
                'pro_id' => 0,
                'simple_pro_id' => 62,
                'prokeys' => 'Material',
                'provalues' => 'PVC, Anti-Burst Rubber, Eco-Friendly PVC',
                'created_at' => '2025-02-18 14:54:40',
                'updated_at' => '2025-02-18 14:54:40',
            ),
            100 => 
            array (
                'id' => 101,
                'pro_id' => 0,
                'simple_pro_id' => 62,
                'prokeys' => 'Size Options',
                'provalues' => '45 cm, 55 cm, 65 cm, 75 cm, 85 cm',
                'created_at' => '2025-02-18 14:54:40',
                'updated_at' => '2025-02-18 14:54:40',
            ),
            101 => 
            array (
                'id' => 102,
                'pro_id' => 0,
                'simple_pro_id' => 62,
                'prokeys' => 'Weight Capacity',
            'provalues' => '300 kg (varies by model)',
                'created_at' => '2025-02-18 14:54:40',
                'updated_at' => '2025-02-18 14:54:40',
            ),
            102 => 
            array (
                'id' => 103,
                'pro_id' => 0,
                'simple_pro_id' => 62,
                'prokeys' => 'Surface Type',
                'provalues' => 'Textured, Smooth, Anti-Slip',
                'created_at' => '2025-02-18 14:54:40',
                'updated_at' => '2025-02-18 14:54:40',
            ),
            103 => 
            array (
                'id' => 104,
                'pro_id' => 0,
                'simple_pro_id' => 63,
                'prokeys' => 'Material',
                'provalues' => 'Cast Iron, Rubber Coated, Neoprene, Vinyl',
                'created_at' => '2025-02-18 15:41:29',
                'updated_at' => '2025-02-18 15:41:29',
            ),
            104 => 
            array (
                'id' => 105,
                'pro_id' => 0,
                'simple_pro_id' => 63,
                'prokeys' => 'Weight Range',
            'provalues' => '1 kg - 40 kg (or more for heavy-duty)',
                'created_at' => '2025-02-18 15:41:29',
                'updated_at' => '2025-02-18 15:41:29',
            ),
            105 => 
            array (
                'id' => 106,
                'pro_id' => 0,
                'simple_pro_id' => 63,
                'prokeys' => 'Shape',
                'provalues' => 'Hexagonal, Round, Adjustable',
                'created_at' => '2025-02-18 15:41:29',
                'updated_at' => '2025-02-18 15:41:29',
            ),
            106 => 
            array (
                'id' => 107,
                'pro_id' => 0,
                'simple_pro_id' => 63,
                'prokeys' => 'Grip Type',
                'provalues' => 'Textured, Ergonomic, Anti-Slip',
                'created_at' => '2025-02-18 15:41:29',
                'updated_at' => '2025-02-18 15:41:29',
            ),
            107 => 
            array (
                'id' => 108,
                'pro_id' => 0,
                'simple_pro_id' => 64,
                'prokeys' => 'Type',
                'provalues' => 'Motorized, Manual, Foldable, Non-Foldable',
                'created_at' => '2025-02-18 15:59:50',
                'updated_at' => '2025-02-18 15:59:50',
            ),
            108 => 
            array (
                'id' => 109,
                'pro_id' => 0,
                'simple_pro_id' => 64,
                'prokeys' => 'Motor Power',
            'provalues' => '1 HP - 4 HP (continuous), 2 HP - 6 HP (peak)',
                'created_at' => '2025-02-18 15:59:50',
                'updated_at' => '2025-02-18 15:59:50',
            ),
            109 => 
            array (
                'id' => 110,
                'pro_id' => 0,
                'simple_pro_id' => 64,
                'prokeys' => 'Speed Range',
                'provalues' => '0.8 - 20 km/h',
                'created_at' => '2025-02-18 15:59:50',
                'updated_at' => '2025-02-18 15:59:50',
            ),
            110 => 
            array (
                'id' => 111,
                'pro_id' => 0,
                'simple_pro_id' => 64,
                'prokeys' => 'Incline Levels',
            'provalues' => '0% - 15% (manual or automatic)',
                'created_at' => '2025-02-18 15:59:50',
                'updated_at' => '2025-02-18 15:59:50',
            ),
            111 => 
            array (
                'id' => 112,
                'pro_id' => 0,
                'simple_pro_id' => 65,
                'prokeys' => 'Product Type',
                'provalues' => 'Pruning Shears / Garden Clippers',
                'created_at' => '2025-02-18 17:10:59',
                'updated_at' => '2025-02-18 17:10:59',
            ),
            112 => 
            array (
                'id' => 113,
                'pro_id' => 0,
                'simple_pro_id' => 65,
                'prokeys' => 'Blade Material',
                'provalues' => 'Stainless Steel / Carbon Steel',
                'created_at' => '2025-02-18 17:10:59',
                'updated_at' => '2025-02-18 17:10:59',
            ),
            113 => 
            array (
                'id' => 114,
                'pro_id' => 0,
                'simple_pro_id' => 65,
                'prokeys' => 'Handle Material',
                'provalues' => 'Rubberized / Plastic / Aluminum',
                'created_at' => '2025-02-18 17:10:59',
                'updated_at' => '2025-02-18 17:10:59',
            ),
            114 => 
            array (
                'id' => 115,
                'pro_id' => 0,
                'simple_pro_id' => 65,
                'prokeys' => 'Cutting Capacity',
            'provalues' => 'Up to ¾ inch (19mm)',
                'created_at' => '2025-02-18 17:10:59',
                'updated_at' => '2025-02-18 17:10:59',
            ),
            115 => 
            array (
                'id' => 116,
                'pro_id' => 0,
                'simple_pro_id' => 66,
                'prokeys' => 'Type',
                'provalues' => 'Organic / Synthetic',
                'created_at' => '2025-02-19 11:11:47',
                'updated_at' => '2025-02-19 11:11:47',
            ),
            116 => 
            array (
                'id' => 117,
                'pro_id' => 0,
                'simple_pro_id' => 66,
                'prokeys' => 'NPK Ratio',
                'provalues' => '10-10-10, 20-10-10, etc.',
                'created_at' => '2025-02-19 11:11:47',
                'updated_at' => '2025-02-19 11:11:47',
            ),
            117 => 
            array (
                'id' => 118,
                'pro_id' => 0,
                'simple_pro_id' => 66,
                'prokeys' => 'Form',
                'provalues' => 'Granular / Liquid',
                'created_at' => '2025-02-19 11:11:47',
                'updated_at' => '2025-02-19 11:11:47',
            ),
            118 => 
            array (
                'id' => 119,
                'pro_id' => 0,
                'simple_pro_id' => 66,
                'prokeys' => 'Usage',
                'provalues' => 'Indoor / Outdoor',
                'created_at' => '2025-02-19 11:11:47',
                'updated_at' => '2025-02-19 11:11:47',
            ),
            119 => 
            array (
                'id' => 120,
                'pro_id' => 0,
                'simple_pro_id' => 66,
                'prokeys' => 'Application Method',
                'provalues' => 'Soil Mix / Direct Spray',
                'created_at' => '2025-02-19 11:11:47',
                'updated_at' => '2025-02-19 11:11:47',
            ),
            120 => 
            array (
                'id' => 121,
                'pro_id' => 0,
                'simple_pro_id' => 67,
                'prokeys' => 'Material',
                'provalues' => 'Leather / Rubber / Nylon / Cotton',
                'created_at' => '2025-02-19 11:31:00',
                'updated_at' => '2025-02-19 11:31:00',
            ),
            121 => 
            array (
                'id' => 122,
                'pro_id' => 0,
                'simple_pro_id' => 67,
                'prokeys' => 'Size',
                'provalues' => 'Small, Medium, Large, XL',
                'created_at' => '2025-02-19 11:31:00',
                'updated_at' => '2025-02-19 11:31:00',
            ),
            122 => 
            array (
                'id' => 123,
                'pro_id' => 0,
                'simple_pro_id' => 67,
                'prokeys' => 'Water Resistance',
                'provalues' => 'Yes / No',
                'created_at' => '2025-02-19 11:31:00',
                'updated_at' => '2025-02-19 11:31:00',
            ),
            123 => 
            array (
                'id' => 124,
                'pro_id' => 0,
                'simple_pro_id' => 67,
                'prokeys' => 'Breathability',
                'provalues' => 'High / Medium / Low',
                'created_at' => '2025-02-19 11:31:00',
                'updated_at' => '2025-02-19 11:31:00',
            ),
            124 => 
            array (
                'id' => 125,
                'pro_id' => 0,
                'simple_pro_id' => 68,
                'prokeys' => 'Material',
                'provalues' => 'Ceramic / Plastic / Metal / Wood / Terracotta',
                'created_at' => '2025-02-19 11:45:10',
                'updated_at' => '2025-02-19 11:45:10',
            ),
            125 => 
            array (
                'id' => 126,
                'pro_id' => 0,
                'simple_pro_id' => 68,
                'prokeys' => 'Size',
                'provalues' => 'Small / Medium / Large / Extra Large',
                'created_at' => '2025-02-19 11:45:10',
                'updated_at' => '2025-02-19 11:45:10',
            ),
            126 => 
            array (
                'id' => 127,
                'pro_id' => 0,
                'simple_pro_id' => 68,
                'prokeys' => 'Shape',
                'provalues' => 'Round / Square / Rectangular / Oval',
                'created_at' => '2025-02-19 11:45:10',
                'updated_at' => '2025-02-19 11:45:10',
            ),
            127 => 
            array (
                'id' => 128,
                'pro_id' => 0,
                'simple_pro_id' => 68,
                'prokeys' => 'Drainage Holes',
                'provalues' => 'Yes / No',
                'created_at' => '2025-02-19 11:45:10',
                'updated_at' => '2025-02-19 11:45:10',
            ),
            128 => 
            array (
                'id' => 129,
                'pro_id' => 0,
                'simple_pro_id' => 69,
                'prokeys' => 'Material',
                'provalues' => 'Plastic / Metal / Stainless Steel',
                'created_at' => '2025-02-19 12:34:15',
                'updated_at' => '2025-02-19 12:34:15',
            ),
            129 => 
            array (
                'id' => 130,
                'pro_id' => 0,
                'simple_pro_id' => 69,
                'prokeys' => 'Capacity',
                'provalues' => '1L / 2L / 5L / 10L',
                'created_at' => '2025-02-19 12:34:15',
                'updated_at' => '2025-02-19 12:34:15',
            ),
            130 => 
            array (
                'id' => 131,
                'pro_id' => 0,
                'simple_pro_id' => 69,
                'prokeys' => 'Handle Type',
                'provalues' => 'Ergonomic / Standard',
                'created_at' => '2025-02-19 12:34:15',
                'updated_at' => '2025-02-19 12:34:15',
            ),
            131 => 
            array (
                'id' => 132,
                'pro_id' => 0,
                'simple_pro_id' => 69,
                'prokeys' => 'Spout Type',
                'provalues' => 'Detachable / Fixed',
                'created_at' => '2025-02-19 12:34:15',
                'updated_at' => '2025-02-19 12:34:15',
            ),
        ));
        
        
    }
}