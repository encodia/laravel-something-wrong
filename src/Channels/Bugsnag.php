<?php

namespace Encodia\SomethingWrong\Channels;

use Bugsnag\BugsnagLaravel\Facades\Bugsnag as BugsnagFacade;
use Exception;

class Bugsnag
{
    public function exception(Exception $exception, array $meta = []): void
    {
        BugsnagFacade::registerCallback(function ($report) use ($meta) {
            // Set metadata, replacing previous one.
            $report->setMetaData($meta, false);
        });

        BugsnagFacade::notifyException($exception);
    }
}
