<?php

if (! function_exists('dd')) {
    function dd(...$args) {
        echo "<pre>";
        foreach ($args as $x) {
            var_dump($x);
        }
        die();
    }
}