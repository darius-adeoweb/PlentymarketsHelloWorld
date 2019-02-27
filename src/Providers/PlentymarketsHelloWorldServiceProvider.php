<?php

namespace PlentymarketsHelloWorld\Providers;

use Plenty\Plugin\ServiceProvider;

class PlentymarketsHelloWorldServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(PlentymarketsHelloWorldRouteServiceProvider::class);
    }
}