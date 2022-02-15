<?php 

namespace mjnewman\AnotherPackageTest;

class Index
{
    public $version = '3.0.0';

    public function greet($greet = 'Hello dev-master')
    {
        return $greet;
    }

    public function version()
    {
        return $this->version;
    }
}