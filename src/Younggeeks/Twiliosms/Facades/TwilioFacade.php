<?php
/**
 * Created by PhpStorm.
 * User: samjunior
 * Date: 12/16/14
 * Time: 10:44 AM
 */

namespace Younggeeks\Twiliosms\Facades;


use Illuminate\Support\Facades\Facade;

class TwilioFacade extends  Facade {

    public static function getFacadeAccessor()
    {
        return 'Twilio';
    }
}