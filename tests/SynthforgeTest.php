<?php
/**
 * Tests for SynthForge
 */

use PHPUnit\Framework\TestCase;
use Synthforge\Synthforge;

class SynthforgeTest extends TestCase {
    private Synthforge $instance;

    protected function setUp(): void {
        $this->instance = new Synthforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Synthforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
