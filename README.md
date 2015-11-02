
Users Case
==========
    $message = new Message();
    $message->setTitle('Hola');
    $message->setPayload(array(
        'id' => 1,
        'view' => 'timeline'
        ));
    $message->setBody('Hola que tal');
    $message->setTo('DEVICE_TOKEN');

    $android = FactoryDevice::getDevice('android');
    $device->send($message);

    $ios = FactoryDevice::getDevice('android');
    $device->send($message);



