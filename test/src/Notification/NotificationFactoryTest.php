<?php
/**
 * User: Joan Teixidó <joan@laiogurtera.com>
 * Date: 22/10/15
 * Time: 11:47
 */

use Notification\NotificationFactory;

class NotificationFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function shouldReturnTypeOfDeviceTest()
    {
        $factory = new NotificationFactory();
        $factory->addProviderFactory(
            'android',
            function () {
                return new Notification\Device\AndroidDevice();
            }
        );

        $apn = $this->getMock('Apn');
        $factory->addProviderFactory(
            'ios',
            function () use ($apn) {
                return new Notification\Device\IosDevice($apn);
            }
        );

        $device = $factory->getDevice('android');
        $this->assertTrue($device instanceof Notification\Device\AndroidDevice);

        $device = $factory->getDevice('ios');
        $this->assertTrue($device instanceof Notification\Device\IosDevice);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage The type null_device is not valid. Valid types are android, ios
     */
    public function shouldThrowExceptionWithHelpMessage()
    {
        $factory = new NotificationFactory();
        $factory->addProviderFactory(
            'android',
            function () {
                return new Notification\Device\AndroidDevice();
            }
        );

        $apn = $this->getMock('Apn');
        $factory->addProviderFactory(
            'ios',
            function () use ($apn) {
                return new Notification\Device\IosDevice($apn);
            }
        );

        $factory->getDevice('null_device');
    }

    /**
     * @test
     */
    public function sendMessageAndroid()
    {
        $androidTransport = $this->mockAndroidTransport();
        $factory = new NotificationFactory();
        $factory->addProviderFactory(
            'android',
            function () use ($androidTransport) {
                return new Notification\Device\AndroidDevice($androidTransport);
            }
        );


        $message = new \Notification\Message\DefaultMessage();
        $token = '1234';
        $androidDevice = $factory->getDevice('android');
        $response = $androidDevice->send($message, $token);

        $this->assertEquals(200, $response->getStatusCode());


    }

    /**
     * @return \Notification\Transport\TransportInterface
     */
    protected function mockAndroidTransport()
    {
        $response = new \Notification\Response\Response();

        $transport = $this->getMock("\\Notification\\Transport\\TransportInterface", array('send'));
        $transport->method('send')
            ->willReturn($response);

        return $transport;


    }

}