<?php


namespace MasterCrupt;


class Leeter
{
    public static function Leet(string $message) : string
    {
        return str_replace('e', '3', $message);
    }
}