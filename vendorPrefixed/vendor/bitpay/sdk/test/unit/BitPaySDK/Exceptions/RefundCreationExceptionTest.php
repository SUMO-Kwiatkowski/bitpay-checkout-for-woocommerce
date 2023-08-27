<?php

/**
 * Copyright (c) 2019 BitPay
 **/
declare (strict_types=1);
namespace BitPayVendor\BitPaySDK\Test\Exceptions;

use BitPayVendor\BitPaySDK\Exceptions\RefundCreationException;
use BitPayVendor\PHPUnit\Framework\TestCase;
class RefundCreationExceptionTest extends TestCase
{
    public function testDefaultApiCode()
    {
        $exception = $this->createClassObject();
        self::assertEquals('000000', $exception->getApiCode());
    }
    public function testInstanceOf()
    {
        $exception = $this->createClassObject();
        self::assertInstanceOf(RefundCreationException::class, $exception);
    }
    public function testDefaultMessage()
    {
        $exception = $this->createClassObject();
        self::assertEquals('BITPAY-REFUND-CREATE: Failed to create refund-> ', $exception->getMessage());
    }
    public function testDefaultCode()
    {
        $exception = $this->createClassObject();
        self::assertEquals(162, $exception->getCode());
    }
    public function testGetApiCode()
    {
        $exception = new RefundCreationException('My test message', 162, null, 'CUSTOM-API-CODE');
        self::assertEquals('CUSTOM-API-CODE', $exception->getApiCode());
    }
    private function createClassObject()
    {
        return new RefundCreationException();
    }
}
