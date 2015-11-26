<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 27/10/15
 * Time: 23:21
 */

namespace Notification\Transport;

use Notification\Message\MessageInterface;
use GuzzleHttp;

class GcmHttpTransport implements TransportInterface
{
    protected $endPoint = "https://gcm-http.googleapis.com/gcm/send";

    /** @var  String */
    protected $apiKey;

    public function __construct($apiKey, $endPoint = null)
    {
        $this->apiKey = $apiKey;
        if (null != $endPoint) {
            $this->endPoint = $endPoint;
        }
    }

    /**
     * @param MessageInterface $message
     * @param string $token
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function send(MessageInterface $message, $token)
    {
        $client = new GuzzleHttp\Client();

        $request = new GuzzleHttp\Psr7\Request('POST', $this->endPoint, [
            'Content-Type'  => 'application/json',
            'Authorization' => "key=".$this->apiKey
            ],$message->getMessage()
        );


        $response = $client->send($request);

        return $response;
    }
}