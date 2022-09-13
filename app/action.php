<?php

class Action() {
    function __construct() {
        hello("abc");
    }

    function hello(int $abc) {
        echo $abc;
    }
}
