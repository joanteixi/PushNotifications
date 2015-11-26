<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 21/10/15
 * Time: 22:07
 */

namespace Notification\Device;

use Notification\Message\MessageInterface;
use Notification\Transport\TransportInterface;

interface DeviceInterface
{
    public function __construct(TransportInterface $transport);

    public function send(MessageInterface $message, $token);
}