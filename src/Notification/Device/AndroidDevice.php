<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 21/10/15
 * Time: 22:13
 */

namespace Notification\Device;

use Notification\Message\MessageInterface;
use Notification\Transport\TransportInterface;

class AndroidDevice implements DeviceInterface
{
    protected $transport;

    public function __construct(TransportInterface $transport)
    {
        $this->transport = $transport;
    }

    public function send(MessageInterface $message, $token)
    {

        return $this->transport->send($message, $token);
    }

}