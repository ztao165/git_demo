<?php

class Action
{
    public function __construct()
    {
        hello(123);
    }

    public function hello(int $abc)
    {
        echo $abc;
    }
}
