<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 21/10/15
 * Time: 21:55
 */

namespace Notification;

class NotificationFactory implements NotificationFactoryInterface
{
    /**
     * @var \Notification\Device\DeviceInterface[]
     */
    private $factories = [];


    public function addProviderFactory($deviceType, callable $factory)
    {
        $this->factories[$deviceType] = $factory;
    }

    /**
     * @param String $deviceType
     * @return \Notification\Device\DeviceInterface
     */
    public function getDevice($deviceType)
    {
        if (!isset($this->factories[$deviceType])) {
            throw new \InvalidArgumentException(
                sprintf(
                    "The type %s is not valid. Valid types are %s",
                    $deviceType,
                    implode(', ', array_keys($this->factories))
                )
            );
        }

        return $this->factories[$deviceType]();
    }


}