<?php 

namespace mjnewman\AnotherPackageTest;

class Index
{
    public $version = '4.0.0';

    public function greet($greet = 'Hello World')
    {
        return $greet;
    }

    public function version()
    {
        return $this->version;
    }
}