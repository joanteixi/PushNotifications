<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 27/10/15
 * Time: 23:21
 */

namespace Notification\Transport;



use Notification\Message\MessageInterface;
use Notification\Response\Response;

class ApnTransport implements TransportInterface
{
    protected $pemFile = 'signin.pem';

    public function send(MessageInterface $message, $token)
    {
        return new Response();
        // TODO: Implement send() method.
    }

    /**
     * @return string
     */
    public function getPemFile()
    {
        return $this->pemFile;
    }

    /**
     * @param string $pemFile
     */
    public function setPemFile($pemFile)
    {
        $this->pemFile = $pemFile;
    }



}