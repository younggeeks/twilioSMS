<?php
/**
 * Created by PhpStorm.
 * User: samjunior
 * Date: 12/16/14
 * Time: 10:23 AM
 */

namespace Younggeeks\Twiliosms;

use Illuminate\Config\Repository;

class Twiliosms {

    /**
     * @var Repository
     */
    private $config;

    private $twilio;

    private $from;

    public function __construct(Repository $config)
    {
        $this->config = $config;

        $sid=$this->config->get('twiliosms::sid');
        $token=$this->config->get('twiliosms::token');
        $this->from=$this->config->get('twiliosms::default_number');

        $this->twilio= new \Services_Twilio($sid,$token);

    }

    public function send($message,$to)
    {
        $send=$this->twilio->account->sendMessage(
            $this->from,$to,$message
        );

        if($send){
            return true;
        }
        else{
            return false;
        }
    }

    public function messages()
    {
        return $this->twilio->account->messages;
    }

}