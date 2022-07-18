<?php

namespace Encodia\SomethingWrong;

use Encodia\SomethingWrong\Channels\Bugsnag;
use Exception;

class SomethingWrong
{
    private Bugsnag $bugsnag;

    public function __construct(Bugsnag $bugsnag)
    {
        $this->bugsnag = $bugsnag;
    }

    public function exception(Exception $exception, array $meta = []): void
    {
        $this->notify($exception, $meta);
    }

    protected function notify(Exception $what, array $meta = []): void
    {
        $this->bugsnag->exception($what, $meta);
    }
}
