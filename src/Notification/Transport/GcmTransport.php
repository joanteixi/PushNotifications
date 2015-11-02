<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 27/10/15
 * Time: 23:21
 */

namespace Notification\Transport;



use Notification\Message\MessageInterface;

class GcmTransport implements TransportInterface
{
    protected $end_point_dev = 'gcm-preprod.googleapis.com';
    protected $port_prod = 5236;
    protected $end_point_prod = 'gcm-xmpp.googleapis.com:5235';
    protected $port_dev = 5236;

    public function send(MessageInterface $message, $token)
    {
        // TODO: Implement send() method.
    }

}