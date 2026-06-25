<?php
/**
 * Tests for CryptoPort
 */

use PHPUnit\Framework\TestCase;
use Cryptoport\Cryptoport;

class CryptoportTest extends TestCase {
    private Cryptoport $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoport(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoport::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
