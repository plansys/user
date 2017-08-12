<?php

namespace Plansys\User;

class Init
{
    public static function getBase($host)
    {
        return [
            'dir' => realpath(dirname(__FILE__) . '/..') . '/pages',
            'url' => '/' . trim($host, '/') . '/pages/'
        ];
    }
}
