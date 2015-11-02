<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 21/10/15
 * Time: 21:55
 */

namespace Notification;


interface NotificationFactoryInterface
{

    public function addProviderFactory($deviceType, callable $factory);


    /**
     * @param $deviceType String
     * @return \Laiogurt\Device\DeviceInterface
     */
    public function getDevice($deviceType);
}