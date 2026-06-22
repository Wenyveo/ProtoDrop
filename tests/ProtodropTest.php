<?php
/**
 * Tests for ProtoDrop
 */

use PHPUnit\Framework\TestCase;
use Protodrop\Protodrop;

class ProtodropTest extends TestCase {
    private Protodrop $instance;

    protected function setUp(): void {
        $this->instance = new Protodrop(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Protodrop::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
