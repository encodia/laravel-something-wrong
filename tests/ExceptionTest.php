<?php

use Encodia\SomethingWrong\Channels\Bugsnag;
use Encodia\SomethingWrong\SomethingWrong;

it('can notify an exception without meta', function () {
    $bugsnagMock = $this->mock(Bugsnag::class);
    $bugsnagMock->shouldReceive('exception')->once();

    $sw = new SomethingWrong($bugsnagMock);

    $sw->exception(new Exception());
});

it('can notify an exception with meta', function () {
    $meta = ['foo' => 'bar'];
    $exception = new Exception();

    $bugsnagMock = $this->mock(Bugsnag::class);
    $bugsnagMock->shouldReceive('exception')
        ->with($exception, $meta)
        ->once();

    $sw = new SomethingWrong($bugsnagMock);

    $sw->exception($exception, $meta);
});

it('can be accessed via its facade', function () {
    $bugsnagMock = $this->mock(Bugsnag::class);
    $bugsnagMock->shouldReceive('exception')->once();

    \Encodia\SomethingWrong\Facades\SomethingWrong::exception(new Exception());
});
