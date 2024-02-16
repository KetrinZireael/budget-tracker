<?php

declare(strict_types=1);

function dd(mixed $value)
{
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
    die();
}