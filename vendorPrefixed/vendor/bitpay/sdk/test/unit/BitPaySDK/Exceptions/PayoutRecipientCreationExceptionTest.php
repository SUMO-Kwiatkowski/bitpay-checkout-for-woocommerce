<?php

/**
 * Copyright (c) 2019 BitPay
 **/
declare (strict_types=1);
namespace BitPayVendor\BitPaySDK\Test\Exceptions;

use BitPayVendor\BitPaySDK\Exceptions\PayoutRecipientCreationException;
use BitPayVendor\PHPUnit\Framework\TestCase;
class PayoutRecipientCreationExceptionTest extends TestCase
{
    public function testDefaultApiCode()
    {
        $exception = $this->createClassObject();
        self::assertEquals('000000', $exception->getApiCode());
    }
    public function testInstanceOf()
    {
        $exception = $this->createClassObject();
        self::assertInstanceOf(PayoutRecipientCreationException::class, $exception);
    }
    public function testDefaultMessage()
    {
        $exception = $this->createClassObject();
        self::assertEquals('BITPAY-PAYOUT-RECIPIENT-SUBMIT: Failed to create payout recipient-> ', $exception->getMessage());
    }
    public function testDefaultCode()
    {
        $exception = $this->createClassObject();
        self::assertEquals(192, $exception->getCode());
    }
    public function testGetApiCode()
    {
        $exception = new PayoutRecipientCreationException('My test message', 192, null, 'CUSTOM-API-CODE');
        self::assertEquals('CUSTOM-API-CODE', $exception->getApiCode());
    }
    private function createClassObject()
    {
        return new PayoutRecipientCreationException();
    }
}
