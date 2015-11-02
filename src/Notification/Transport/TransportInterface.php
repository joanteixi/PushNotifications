<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 27/10/15
 * Time: 23:20
 */

namespace Notification\Transport;

use Notification\Message\MessageInterface;

interface TransportInterface
{
    /**
     * @param $message
     * @param string $token
     * @return \Notification\Response\Response
     */
    public function send(MessageInterface $message, $token);

}