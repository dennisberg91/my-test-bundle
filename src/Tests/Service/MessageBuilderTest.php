<?php declare(strict_types=1);

namespace MichielBakker\MyTestBundle\Tests\Service;

use NepGroup\TfcApiClientBundle\Client\MultiviewerUsvcApiClient;
use NepGroup\TfcApiClientBundle\Tests\Mock\MockFileLoader;
use NepGroup\TfcApiClientBundle\Tests\Mock\MockResponseFactory;
use PHPUnit\Framework\TestCase;
use MichielBakker\MyTestBundle\Service\MessageBuilder;

class MessageBuilderTest extends TestCase
{
    private static MessageBuilder $messageBuilder;

    public static function setUpBeforeClass(): void
    {
        self::$messageBuilder = new MessageBuilder('Prefix');
    }

    public function testPrintMessage(): void
    {
        $message = self::$messageBuilder->printMessage('Dennis');

        $this->assertEquals('Prefix Dennis!', $message);
    }
}
