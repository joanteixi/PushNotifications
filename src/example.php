<?php

/**
 * This file is part of the Onfan package
 *
 * @author Onfan info@onfan.com
 * @copyright Onfan. All rights reserved
 */
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 2/11/15
 * Time: 21:54
 */

require dirname(__DIR__) . '/vendor/autoload.php';


$apiKey = "AIzaSyC_GElP_cSaWTL3I2byAxCKnzevSMjg9O8";
$androidTransport = new \Notification\Transport\GcmHttpTransport($apiKey);
$factory = new \Notification\NotificationFactory();
$factory->addProviderFactory(
    'android',
    function () use ($androidTransport) {
        return new Notification\Device\AndroidDevice($androidTransport);
    }
);


$message = new \Notification\Message\DefaultMessage();
$token = '1234';
$androidDevice = $factory->getDevice('android');

try {
    $response = $androidDevice->send($message, $token);
    $body = $response->getBody();

    echo $body->getContents();
} catch (GuzzleHttp\Exception\ClientException $e) {
    print $e->getResponse()->getBody();
}

