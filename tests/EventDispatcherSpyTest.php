<?php

namespace Raigu\TestDouble\Psr14;

use PHPUnit\Framework\TestCase;

/**
 * @covers \Raigu\TestDouble\Psr14\EventDispatcherSpy
 */
final class EventDispatcherSpyTest extends TestCase
{
    /**
     * @test
     */
    public function keeps_track_dispatched_event_class()
    {
        $sut = new EventDispatcherSpy();
        $sut->dispatch(new EventStub);
        $this->assertTrue($sut->dispatched(EventStub::class));
    }

    /**
     * @test
     */
    public function keeps_track_dispatched_event()
    {
        $sut = new EventDispatcherSpy();
        $sut->dispatch(new EventStub);
        $this->assertTrue($sut->dispatched(new EventStub));
    }

    /**
     * @test
     */
    public function detects_if_event_is_not_dispatched()
    {
        $sut = new EventDispatcherSpy();
        $this->assertFalse($sut->dispatched(EventStub::class));
    }
}