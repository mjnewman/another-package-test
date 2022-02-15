<?php 

namespace mjnewman\AnotherPackageTest;

class Index
{
    public $version = '2.0.3';

    public function greet($greet = 'Hello Branch Test')
    {
        return $greet;
    }

    public function version()
    {
        return $this->version;
    }
}