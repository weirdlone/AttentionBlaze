<?php
/**
 * Tests for AttentionBlaze
 */

use PHPUnit\Framework\TestCase;
use Attentionblaze\Attentionblaze;

class AttentionblazeTest extends TestCase {
    private Attentionblaze $instance;

    protected function setUp(): void {
        $this->instance = new Attentionblaze(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Attentionblaze::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
