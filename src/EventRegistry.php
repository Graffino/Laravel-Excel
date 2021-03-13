<?php

namespace Maatwebsite\Excel;

class EventRegistry
{
    protected $events = [];

    public function __construct()
    {
        $this->events['beforeWriting'] = config('excel.events.beforeWriting');
    }

    public function getEventClassName(string $name): string
    {
        return $this->events[$name];
    }
}
