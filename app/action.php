<?php

class Action
{
    public function __construct()
    {
        hello("abc");
    }

    public function hello(int $abc)
    {
        echo $abc;
    }
}
