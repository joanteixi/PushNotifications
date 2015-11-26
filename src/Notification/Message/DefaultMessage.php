<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 27/10/15
 * Time: 23:00
 */

namespace Notification\Message;


class DefaultMessage implements MessageInterface
{

    protected $to;

    protected $title;

    protected $body;

    protected $payload;


    public function setTo()
    {
        // TODO: Implement setTo() method.
    }

    public function setTitle()
    {
        // TODO: Implement setTitle() method.
    }

    public function setBody()
    {
        // TODO: Implement setBody() method.
    }

    public function setPayload()
    {
        // TODO: Implement setPayload() method.
    }

    public function __toString()
    {
        return $this->getMessage();
    }

    public function getMessage()
    {
        $params = ["to" => "bk3RNwTe3H0:CI2k_HHwgIpoDKCIZvvDMExUdFQ3P1"];

        return json_encode($params);
    }


}