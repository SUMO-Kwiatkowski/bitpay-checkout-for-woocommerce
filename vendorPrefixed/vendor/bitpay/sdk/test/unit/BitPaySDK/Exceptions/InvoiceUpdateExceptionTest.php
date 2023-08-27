<?php

/**
 * Copyright (c) 2019 BitPay
 **/
declare (strict_types=1);
namespace BitPayVendor\BitPaySDK\Test\Exceptions;

use BitPayVendor\BitPaySDK\Exceptions\InvoiceUpdateException;
use BitPayVendor\PHPUnit\Framework\TestCase;
class InvoiceUpdateExceptionTest extends TestCase
{
    public function testDefaultApiCode()
    {
        $exception = $this->createClassObject();
        self::assertEquals('000000', $exception->getApiCode());
    }
    public function testInstanceOf()
    {
        $exception = $this->createClassObject();
        self::assertInstanceOf(InvoiceUpdateException::class, $exception);
    }
    public function testDefaultMessage()
    {
        $exception = $this->createClassObject();
        self::assertEquals('BITPAY-INVOICE-UPDATE: Failed to update invoice-> ', $exception->getMessage());
    }
    public function testDefaultCode()
    {
        $exception = $this->createClassObject();
        self::assertEquals(104, $exception->getCode());
    }
    public function testGetApiCode()
    {
        $exception = new InvoiceUpdateException('My test message', 104, null, 'CUSTOM-API-CODE');
        self::assertEquals('CUSTOM-API-CODE', $exception->getApiCode());
    }
    private function createClassObject()
    {
        return new InvoiceUpdateException();
    }
}
