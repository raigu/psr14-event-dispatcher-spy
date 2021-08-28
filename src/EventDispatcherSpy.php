<?php

namespace Raigu\TestDouble\Psr14;

use Psr\EventDispatcher\EventDispatcherInterface;

final class EventDispatcherSpy implements EventDispatcherInterface
{

    private array $events;

    public function __construct()
    {
        $this->events = [];
    }


    public function dispatch(object $event)
    {
        $this->events[] = $event;
    }

    /**
     * @param string|object $classOrInstance the class name of an event or the event instance
     * @return bool
     */
    public function dispatched($classOrInstance): bool
    {
        if (is_string($classOrInstance)) {
            $same = fn($event) => $event instanceof $classOrInstance;
        } else {
            $same = fn($event) => $event == $classOrInstance;
        }
        foreach ($this->events as $event) {
            if ($same($event)) {
                return true;
            }
        }

        return false;
    }
}