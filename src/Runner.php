<?php

namespace Hexlet\Php\Runner;

function run()
{
    $collection = collect(['tailor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}
