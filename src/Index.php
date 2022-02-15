<?php 

namespace mjnewman\AnotherPackageTest;

class Index
{
    public $version = '1.0.1bt';

    public function greet($greet = 'Hello Branch Test')
    {
        return $greet;
    }

    public function version()
    {
        return $this->version;
    }
}