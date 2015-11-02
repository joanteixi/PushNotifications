<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 21/10/15
 * Time: 22:13
 */

namespace Notification\Device;

class IosDevice implements DeviceInterface
{

    /**
     * @var
     */
    protected $apn;

    /**
     * @param $apn
     */
    public function __construct($apn)
    {
        $this->apn = $apn;
    }


    public function send($message, $user)
    {
        // TODO: Implement send() method.

        //prepare message... $this->apn->send($apnMessage);

    }



}