<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 27/10/15
 * Time: 23:00
 */

namespace Notification\Message;


interface MessageInterface
{
    public function setTo();

    public function setTitle();

    public function setBody();

    public function setPayload();


}