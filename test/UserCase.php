<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 21/10/15
 * Time: 21:57
 */

namespace Laiogurt\Test\Notification;


use Laiogurt\Device\AndroidDevice;
use Laiogurt\Notification\NotificationFactory;

class UserCase
{

    public function shouldUseAndroidDevice()
    {
        $notificationFactory = new NotificationFactory();
        $notificationFactory->addProviderFactory('android', function() {
            return new AndroidDevice();
        });

        $device = $notificationFactory->getDevice('android');
            //assert that device instance of AndroidDevice

    }

    public function shouldSendAndroidMessage()
    {
        $message = '';
        $user = '';
        $notificationFactory = new NotificationFactory();
        $notificationFactory->addProviderFactory('android', function() {
            return new AndroidDevice();
        });

        $device = $notificationFactory->getDevice('android');
        $device->send($message, $user);
    }
}