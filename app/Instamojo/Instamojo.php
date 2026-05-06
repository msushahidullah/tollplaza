<?php

namespace App\Instamojo;

use Instamojo\Instamojo as BaseInstamojo;

class Instamojo extends BaseInstamojo
{
    /**
     * Overriding the __wakeup() method to make it public.
     */
    public function __wakeup()
    {
        // Calling parent method to ensure base functionality is maintained
        parent::__wakeup();
    }
}
