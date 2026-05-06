<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'queue' => 'default',
                'payload' => '{"uuid":"c57a6280-8770-46bc-acdf-a9fba017cc78","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:1;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:20;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"d1815eb0-7d75-467a-8701-9419423986a8\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1636610318,
                'created_at' => 1636610318,
            ),
            1 => 
            array (
                'id' => 2,
                'queue' => 'default',
                'payload' => '{"uuid":"6819f0f8-c378-4355-842a-1b1867ee0675","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:6;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:26;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"139fdbb0-54b5-4e58-a833-96895a1ffc56\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1636737700,
                'created_at' => 1636737700,
            ),
            2 => 
            array (
                'id' => 3,
                'queue' => 'default',
                'payload' => '{"uuid":"33ce5be4-9726-4227-98bc-50003ffc92ff","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:31;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:29;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"3b3cf2ec-d6a6-407b-a4ad-3d849f68b1d8\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1636737889,
                'created_at' => 1636737889,
            ),
            3 => 
            array (
                'id' => 4,
                'queue' => 'default',
                'payload' => '{"uuid":"3f3aac90-3aed-47d7-a36d-d84909f861fa","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:26;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:30;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"2df3042f-f2d3-48da-a422-418104a6e74f\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1636741041,
                'created_at' => 1636741041,
            ),
            4 => 
            array (
                'id' => 5,
                'queue' => 'default',
                'payload' => '{"uuid":"4ecfc5a5-f03a-4a33-a617-56c7940ee3e2","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637132897,
                'created_at' => 1637132897,
            ),
            5 => 
            array (
                'id' => 6,
                'queue' => 'default',
                'payload' => '{"uuid":"14c2207b-1503-43d6-88e5-8a5842cf41c6","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637132952,
                'created_at' => 1637132952,
            ),
            6 => 
            array (
                'id' => 7,
                'queue' => 'default',
                'payload' => '{"uuid":"2395a02f-b7f7-4db4-b9d6-d47be32c451c","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637139359,
                'created_at' => 1637139359,
            ),
            7 => 
            array (
                'id' => 8,
                'queue' => 'default',
                'payload' => '{"uuid":"e0296fd9-87e7-43ee-8213-fe382307d390","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637139371,
                'created_at' => 1637139371,
            ),
            8 => 
            array (
                'id' => 9,
                'queue' => 'default',
                'payload' => '{"uuid":"4da41142-2239-4933-a87c-c3b759c642b2","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637139530,
                'created_at' => 1637139530,
            ),
            9 => 
            array (
                'id' => 10,
                'queue' => 'default',
                'payload' => '{"uuid":"197da7bb-89cf-4270-b20e-91a8df0ae8ad","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637139762,
                'created_at' => 1637139762,
            ),
            10 => 
            array (
                'id' => 11,
                'queue' => 'default',
                'payload' => '{"uuid":"f2a0af6f-530c-412a-995f-6edfd09c3cf9","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637139893,
                'created_at' => 1637139893,
            ),
            11 => 
            array (
                'id' => 12,
                'queue' => 'default',
                'payload' => '{"uuid":"d0e8fdac-b1af-4143-bd49-5c91e5e54c9d","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637139899,
                'created_at' => 1637139899,
            ),
            12 => 
            array (
                'id' => 13,
                'queue' => 'default',
                'payload' => '{"uuid":"129786ad-9d16-4086-8cbf-6e3d98907d70","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637313790,
                'created_at' => 1637313790,
            ),
            13 => 
            array (
                'id' => 14,
                'queue' => 'default',
                'payload' => '{"uuid":"d0948827-510b-4f8a-b9da-62429607f48a","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637314078,
                'created_at' => 1637314078,
            ),
            14 => 
            array (
                'id' => 15,
                'queue' => 'default',
                'payload' => '{"uuid":"babd76c2-7345-46ce-8ef9-1e5532a85663","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637315117,
                'created_at' => 1637315117,
            ),
            15 => 
            array (
                'id' => 16,
                'queue' => 'default',
                'payload' => '{"uuid":"289f8724-82eb-40d5-98ec-b0d6ccd4d8a0","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637318143,
                'created_at' => 1637318143,
            ),
            16 => 
            array (
                'id' => 17,
                'queue' => 'default',
                'payload' => '{"uuid":"aad7e30f-7da0-467d-a082-02103b2daca2","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637567801,
                'created_at' => 1637567801,
            ),
            17 => 
            array (
                'id' => 18,
                'queue' => 'default',
                'payload' => '{"uuid":"5633a5fe-6e40-41f3-ba5e-4cbb4e045f1a","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637567837,
                'created_at' => 1637567837,
            ),
            18 => 
            array (
                'id' => 19,
                'queue' => 'default',
                'payload' => '{"uuid":"e1576d9e-d804-4c44-ba9f-d0fd3e7b5fd2","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637570977,
                'created_at' => 1637570977,
            ),
            19 => 
            array (
                'id' => 20,
                'queue' => 'default',
                'payload' => '{"uuid":"3fe64917-e94b-4db8-a536-665f8cda48e0","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637572529,
                'created_at' => 1637572529,
            ),
            20 => 
            array (
                'id' => 21,
                'queue' => 'default',
                'payload' => '{"uuid":"1027b013-2179-4b16-a5a2-70311973c4a0","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\Cart\\";s:2:\\"id\\";a:1:{i:0;i:2;}s:9:\\"relations\\";a:2:{i:0;s:7:\\"product\\";i:1;s:7:\\"variant\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637643416,
                'created_at' => 1637643416,
            ),
            21 => 
            array (
                'id' => 22,
                'queue' => 'default',
                'payload' => '{"uuid":"2ea41f59-7bb3-4d92-91b5-4596dc3d4631","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\Cart\\";s:2:\\"id\\";a:1:{i:0;i:2;}s:9:\\"relations\\";a:2:{i:0;s:7:\\"product\\";i:1;s:7:\\"variant\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1637643432,
                'created_at' => 1637643432,
            ),
            22 => 
            array (
                'id' => 23,
                'queue' => 'default',
                'payload' => '{"uuid":"491bca95-1d45-4d66-ab97-60d9eab2d308","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:21;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:68;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"2644725e-83b4-486c-83bd-7f49ab8c7fdc\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1639466149,
                'created_at' => 1639466149,
            ),
            23 => 
            array (
                'id' => 24,
                'queue' => 'default',
                'payload' => '{"uuid":"9d7ec196-6c5d-498c-83e3-0f9e66a65ad5","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1641884334,
                'created_at' => 1641884334,
            ),
            24 => 
            array (
                'id' => 25,
                'queue' => 'default',
                'payload' => '{"uuid":"382a8d01-3f8a-420c-b7e2-76e7a33c2f37","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:21;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:96;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"e0927ec1-aa2a-402a-922c-8f8a0d5e4b40\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1642771428,
                'created_at' => 1642771428,
            ),
            25 => 
            array (
                'id' => 26,
                'queue' => 'default',
                'payload' => '{"uuid":"6def7a99-ef50-49f3-b229-a8da3760f9a6","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\Cart\\";s:2:\\"id\\";a:1:{i:0;i:2;}s:9:\\"relations\\";a:2:{i:0;s:7:\\"product\\";i:1;s:7:\\"variant\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1643619677,
                'created_at' => 1643619677,
            ),
            26 => 
            array (
                'id' => 27,
                'queue' => 'default',
                'payload' => '{"uuid":"d5fd7030-1043-4336-b0dc-e7d5674e5794","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:24;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:107;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"ee45ab0e-9660-4c22-976f-a5efb3d0424d\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1644231051,
                'created_at' => 1644231051,
            ),
            27 => 
            array (
                'id' => 28,
                'queue' => 'default',
                'payload' => '{"uuid":"d5b312b1-64ce-47ac-b7b5-517d0c61d997","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:22;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:113;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"2f3d3f9c-a1f9-402c-9ac7-fe56294ed14f\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1645512260,
                'created_at' => 1645512260,
            ),
            28 => 
            array (
                'id' => 29,
                'queue' => 'default',
                'payload' => '{"uuid":"f41391dd-9727-4a3a-9b80-198411ebcba2","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:1;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:114;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"4a6f32ee-df85-4a98-b9ee-81c588fb6f24\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1645616929,
                'created_at' => 1645616929,
            ),
            29 => 
            array (
                'id' => 30,
                'queue' => 'default',
                'payload' => '{"uuid":"2806201f-4100-4b99-9966-e557b27a4b00","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:66;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:130;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"c9249255-2db5-4808-89b6-ce71a65aca27\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1649645922,
                'created_at' => 1649645922,
            ),
            30 => 
            array (
                'id' => 31,
                'queue' => 'default',
                'payload' => '{"uuid":"e55c8f99-e58b-4fa4-b908-fc3e6c6cfa4d","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:68;}s:9:\\"relations\\";a:1:{i:0;s:5:\\"roles\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:156;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"ee44273a-1679-42c7-ac8c-237863d9c057\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1652943569,
                'created_at' => 1652943569,
            ),
            31 => 
            array (
                'id' => 32,
                'queue' => 'default',
                'payload' => '{"uuid":"95107e6f-9f64-488d-bd71-2d91549a99b5","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:69;}s:9:\\"relations\\";a:1:{i:0;s:5:\\"roles\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:157;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"b4385128-e2f7-4521-84c8-84536e9d490b\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1652945195,
                'created_at' => 1652945195,
            ),
            32 => 
            array (
                'id' => 33,
                'queue' => 'default',
                'payload' => '{"uuid":"48eda8a4-2b5b-42ec-83f4-805ba1af3e72","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:70;}s:9:\\"relations\\";a:1:{i:0;s:5:\\"roles\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:160;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"b0af6361-cfbe-40d6-af9c-4bc249dfe291\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1652953719,
                'created_at' => 1652953719,
            ),
            33 => 
            array (
                'id' => 34,
                'queue' => 'default',
                'payload' => '{"uuid":"19551a4f-2cc6-4c69-8bac-fdb18daea576","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:73;}s:9:\\"relations\\";a:1:{i:0;s:5:\\"roles\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:161;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"86478ccf-a860-461c-8e4f-dead1152ecba\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1652954505,
                'created_at' => 1652954505,
            ),
            34 => 
            array (
                'id' => 35,
                'queue' => 'default',
                'payload' => '{"uuid":"81d9e9f5-9ced-4b9c-93cf-831d241667e9","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:77;}s:9:\\"relations\\";a:1:{i:0;s:5:\\"roles\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:168;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"656ffb85-798d-4ba0-9732-b95303832b1c\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1653040245,
                'created_at' => 1653040245,
            ),
            35 => 
            array (
                'id' => 36,
                'queue' => 'default',
                'payload' => '{"uuid":"be1ee900-8079-4577-822d-e3d5fc27a224","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1654835759,
                'created_at' => 1654835759,
            ),
            36 => 
            array (
                'id' => 37,
                'queue' => 'default',
                'payload' => '{"uuid":"a4ba69f4-1c87-44ef-8258-01b312fa50b9","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\Cart\\";s:2:\\"id\\";a:1:{i:0;i:32;}s:9:\\"relations\\";a:2:{i:0;s:7:\\"product\\";i:1;s:7:\\"variant\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1655305425,
                'created_at' => 1655305425,
            ),
            37 => 
            array (
                'id' => 38,
                'queue' => 'default',
                'payload' => '{"uuid":"a8da7e94-2e2a-4b9e-a431-83587d02a025","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\Cart\\";s:2:\\"id\\";a:1:{i:0;i:25;}s:9:\\"relations\\";a:2:{i:0;s:7:\\"product\\";i:1;s:7:\\"variant\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1655305995,
                'created_at' => 1655305995,
            ),
            38 => 
            array (
                'id' => 39,
                'queue' => 'default',
                'payload' => '{"uuid":"89b9bf3a-08f2-4605-a445-519c1e0912f0","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:24;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:223;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"0a923afe-ec9c-484f-8b7c-cda6fa06cb81\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1656917661,
                'created_at' => 1656917661,
            ),
            39 => 
            array (
                'id' => 40,
                'queue' => 'default',
                'payload' => '{"uuid":"9eb36fd0-31ce-421f-89e7-c8d7e15ea490","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:27;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:225;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"4c39b10e-a556-4093-82a3-8802cdb46941\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1656918984,
                'created_at' => 1656918984,
            ),
            40 => 
            array (
                'id' => 41,
                'queue' => 'default',
                'payload' => '{"uuid":"cd378f11-5209-46a8-955f-23c934a8ba8a","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:46;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:270;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"47a67863-5aa9-4e46-9a5d-067ae3fcdcb1\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1658746447,
                'created_at' => 1658746447,
            ),
            41 => 
            array (
                'id' => 42,
                'queue' => 'default',
                'payload' => '{"uuid":"f73c7c59-6ed5-4362-ae2d-90935edc4212","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:1;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:272;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"1da61bb5-a9df-4421-946c-580a93e8c158\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1659071864,
                'created_at' => 1659071864,
            ),
            42 => 
            array (
                'id' => 43,
                'queue' => 'default',
                'payload' => '{"uuid":"35bf30c3-fc73-4790-9d58-3308314dca61","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1659347140,
                'created_at' => 1659347140,
            ),
            43 => 
            array (
                'id' => 44,
                'queue' => 'default',
                'payload' => '{"uuid":"22744183-fec5-4e1e-9027-0ad14028c7a0","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:23;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:283;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"ab180da0-650a-49b8-9170-e43b5d41423c\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1667812319,
                'created_at' => 1667812319,
            ),
            44 => 
            array (
                'id' => 45,
                'queue' => 'default',
                'payload' => '{"uuid":"e8c24ddc-7d45-4b37-8ce8-f651df0625f3","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:78;}s:9:\\"relations\\";a:1:{i:0;s:5:\\"roles\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:288;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"d2827784-cdb7-44cf-9c79-434b87369467\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1669314921,
                'created_at' => 1669314921,
            ),
            45 => 
            array (
                'id' => 46,
                'queue' => 'default',
                'payload' => '{"uuid":"a4cbf56a-bee3-4f48-99b4-58059220c8c1","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:79;}s:9:\\"relations\\";a:1:{i:0;s:5:\\"roles\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:293;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"b5a43920-9764-4531-a751-f00e658130d3\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1669717989,
                'created_at' => 1669717989,
            ),
            46 => 
            array (
                'id' => 47,
                'queue' => 'default',
                'payload' => '{"uuid":"f2824c6a-1a69-4ed1-b11c-673b2d63e968","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:6;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:298;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"db851a9c-4b8f-488d-a6dd-d2fdc89f6cf7\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1690726041,
                'created_at' => 1690726041,
            ),
            47 => 
            array (
                'id' => 48,
                'queue' => 'default',
                'payload' => '{"uuid":"e9bd8c62-1b80-4796-a6a1-268083e412cd","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1694685265,
                'created_at' => 1694685265,
            ),
            48 => 
            array (
                'id' => 49,
                'queue' => 'default',
                'payload' => '{"uuid":"8c0eef7d-67b2-4bd3-bd37-a9561e4c0401","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1694766089,
                'created_at' => 1694766089,
            ),
            49 => 
            array (
                'id' => 50,
                'queue' => 'default',
                'payload' => '{"uuid":"a286cf43-7930-4ce4-80b5-6a4e92362738","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1694809754,
                'created_at' => 1694809754,
            ),
            50 => 
            array (
                'id' => 51,
                'queue' => 'default',
                'payload' => '{"uuid":"b673ddd6-2925-413a-9449-a7071c578057","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\Cart\\";s:2:\\"id\\";a:1:{i:0;i:4;}s:9:\\"relations\\";a:2:{i:0;s:7:\\"product\\";i:1;s:7:\\"variant\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1694837347,
                'created_at' => 1694837347,
            ),
            51 => 
            array (
                'id' => 52,
                'queue' => 'default',
                'payload' => '{"uuid":"5ebd3a9d-0281-49b6-adce-8c89878f79f9","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\Cart\\";s:2:\\"id\\";a:1:{i:0;i:5;}s:9:\\"relations\\";a:2:{i:0;s:7:\\"product\\";i:1;s:7:\\"variant\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1694837588,
                'created_at' => 1694837588,
            ),
            52 => 
            array (
                'id' => 53,
                'queue' => 'default',
                'payload' => '{"uuid":"c7d8c036-f001-4d37-8a87-05c6735b96a0","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696224361,
                'created_at' => 1696224361,
            ),
            53 => 
            array (
                'id' => 54,
                'queue' => 'default',
                'payload' => '{"uuid":"92a5d1e9-3dbd-420b-b976-5b84c1d44b73","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696224650,
                'created_at' => 1696224650,
            ),
            54 => 
            array (
                'id' => 55,
                'queue' => 'default',
                'payload' => '{"uuid":"d21fb6e0-fcec-4110-bea8-c3dd8495f910","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:1;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:309;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"7f87d3aa-4a15-4b80-b0a4-619f7c4566a5\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696399595,
                'created_at' => 1696399595,
            ),
            55 => 
            array (
                'id' => 56,
                'queue' => 'default',
                'payload' => '{"uuid":"6245fa7d-972d-4362-8ed2-d1c68f0fcf1e","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:1;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:311;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"ff69ace0-0fcf-4602-8238-559a3cfd34d3\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696411866,
                'created_at' => 1696411866,
            ),
            56 => 
            array (
                'id' => 57,
                'queue' => 'default',
                'payload' => '{"uuid":"36844449-34ad-4202-a91e-c4babf632fea","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:6;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:312;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"174f43f8-f58a-417a-a4f8-675b0c229d68\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696411961,
                'created_at' => 1696411961,
            ),
            57 => 
            array (
                'id' => 58,
                'queue' => 'default',
                'payload' => '{"uuid":"994443f9-966c-4d5e-8bb9-aa6daff09992","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696415843,
                'created_at' => 1696415843,
            ),
            58 => 
            array (
                'id' => 59,
                'queue' => 'default',
                'payload' => '{"uuid":"82adcd48-7f65-44d4-83ea-eba4d0d2dda2","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696418109,
                'created_at' => 1696418109,
            ),
            59 => 
            array (
                'id' => 60,
                'queue' => 'default',
                'payload' => '{"uuid":"669382fd-b073-4413-9aa0-30d8916282d6","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696418141,
                'created_at' => 1696418141,
            ),
            60 => 
            array (
                'id' => 61,
                'queue' => 'default',
                'payload' => '{"uuid":"94100063-b4de-4d5b-8891-c92e8677a315","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696418829,
                'created_at' => 1696418829,
            ),
            61 => 
            array (
                'id' => 62,
                'queue' => 'default',
                'payload' => '{"uuid":"7d22be47-064b-4a9f-8c78-3a9b076788ec","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696420007,
                'created_at' => 1696420007,
            ),
            62 => 
            array (
                'id' => 63,
                'queue' => 'default',
                'payload' => '{"uuid":"af4d5f7e-0e38-4f6f-87d6-2ca5623cfd5b","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696420312,
                'created_at' => 1696420312,
            ),
            63 => 
            array (
                'id' => 64,
                'queue' => 'default',
                'payload' => '{"uuid":"038f6150-0760-441c-8988-703411c20b64","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696420486,
                'created_at' => 1696420486,
            ),
            64 => 
            array (
                'id' => 65,
                'queue' => 'default',
                'payload' => '{"uuid":"450a93bf-7ec4-4334-bff4-cc14e767f419","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696421494,
                'created_at' => 1696421494,
            ),
            65 => 
            array (
                'id' => 66,
                'queue' => 'default',
                'payload' => '{"uuid":"577c6c72-ad13-498a-81bc-8e318a453e4c","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696421532,
                'created_at' => 1696421532,
            ),
            66 => 
            array (
                'id' => 67,
                'queue' => 'default',
                'payload' => '{"uuid":"6a6cb138-566c-4976-aac4-53f98776654a","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696421858,
                'created_at' => 1696421858,
            ),
            67 => 
            array (
                'id' => 68,
                'queue' => 'default',
                'payload' => '{"uuid":"40223e1e-0a3a-440c-a9c5-2234316b2232","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696422658,
                'created_at' => 1696422658,
            ),
            68 => 
            array (
                'id' => 69,
                'queue' => 'default',
                'payload' => '{"uuid":"e319c2cd-5de7-4eec-a0ea-714576eb190e","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:80;}s:9:\\"relations\\";a:1:{i:0;s:5:\\"roles\\";}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:315;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"0f35f564-fcf5-49f5-bd78-1520725bbe5e\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696479411,
                'created_at' => 1696479411,
            ),
            69 => 
            array (
                'id' => 70,
                'queue' => 'default',
                'payload' => '{"uuid":"4db9db19-9bba-4ff1-9cc3-382b799f7ce5","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696480399,
                'created_at' => 1696480399,
            ),
            70 => 
            array (
                'id' => 71,
                'queue' => 'default',
                'payload' => '{"uuid":"a77cb93e-f62f-4d29-a8d6-826be33238c4","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696485898,
                'created_at' => 1696485898,
            ),
            71 => 
            array (
                'id' => 72,
                'queue' => 'default',
                'payload' => '{"uuid":"4a7cf29f-2822-4c0e-8eb3-293c3f7620d8","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696486199,
                'created_at' => 1696486199,
            ),
            72 => 
            array (
                'id' => 73,
                'queue' => 'default',
                'payload' => '{"uuid":"f7130f88-52c1-4326-8f9c-e0acb7247670","displayName":"App\\\\Jobs\\\\CartPriceChange","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"App\\\\Jobs\\\\CartPriceChange","command":"O:24:\\"App\\\\Jobs\\\\CartPriceChange\\":11:{s:4:\\"cart\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";N;s:2:\\"id\\";a:0:{}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";N;}s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696486235,
                'created_at' => 1696486235,
            ),
            73 => 
            array (
                'id' => 74,
                'queue' => 'default',
                'payload' => '{"uuid":"364c3733-dd75-495d-b7f2-7b1c0b59477b","displayName":"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Notifications\\\\SendQueuedNotifications","command":"O:48:\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\":16:{s:11:\\"notifiables\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";a:1:{i:0;i:1;}s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:12:\\"notification\\";O:45:\\"SamuelNitsche\\\\AuthLog\\\\Notifications\\\\NewDevice\\":12:{s:7:\\"authLog\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":4:{s:5:\\"class\\";s:29:\\"SamuelNitsche\\\\AuthLog\\\\AuthLog\\";s:2:\\"id\\";i:318;s:9:\\"relations\\";a:0:{}s:10:\\"connection\\";s:5:\\"mysql\\";}s:2:\\"id\\";s:36:\\"02fe65c7-12c9-4de6-b3dd-215452575216\\";s:6:\\"locale\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}s:8:\\"channels\\";a:1:{i:0;s:4:\\"mail\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:3:\\"job\\";N;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1696499317,
                'created_at' => 1696499317,
            ),
            74 => 
            array (
                'id' => 75,
                'queue' => 'default',
                'payload' => '{"uuid":"14655b7a-b780-481f-9dba-4cd5257ae049","displayName":"App\\\\Mail\\\\SendFeedback","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"maxExceptions":null,"failOnTimeout":false,"backoff":null,"timeout":null,"retryUntil":null,"data":{"commandName":"Illuminate\\\\Mail\\\\SendQueuedMailable","command":"O:34:\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\":15:{s:8:\\"mailable\\";O:21:\\"App\\\\Mail\\\\SendFeedback\\":3:{s:8:\\"feedback\\";a:4:{s:4:\\"name\\";s:5:\\"Admin\\";s:5:\\"email\\";s:21:\\"admin@mediacity.co.in\\";s:3:\\"msg\\";s:4:\\"help\\";s:4:\\"rate\\";s:1:\\"1\\";}s:2:\\"to\\";a:1:{i:0;a:2:{s:4:\\"name\\";N;s:7:\\"address\\";s:15:\\"admin@emart.com\\";}}s:6:\\"mailer\\";s:4:\\"smtp\\";}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;s:13:\\"maxExceptions\\";N;s:17:\\"shouldBeEncrypted\\";b:0;s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:5:\\"delay\\";N;s:11:\\"afterCommit\\";N;s:10:\\"middleware\\";a:0:{}s:7:\\"chained\\";a:0:{}s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:19:\\"chainCatchCallbacks\\";N;s:3:\\"job\\";N;}"}}',
                'attempts' => 0,
                'reserved_at' => NULL,
                'available_at' => 1745837097,
                'created_at' => 1745837097,
            ),
        ));
        
        
    }
}