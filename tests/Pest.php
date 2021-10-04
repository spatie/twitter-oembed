<?php

expect()->extend('toBeDate', function (string $date) {
    expect($this->value->format('Y-m-d'))->toBe($date);

    return $this;
});
