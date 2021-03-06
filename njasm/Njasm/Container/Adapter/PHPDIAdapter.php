<?php

namespace Njasm\Container\Adapter;

use Njasm\Container\ServicesProviderInterface;
use DI\Container as PHPDIContainerBuilder;

class PHPDIAdapter implements ServicesProviderInterface
{
    protected $container;
    
    public function __construct(PHPDIContainerBuilder $container)
    {
        $this->container = $container;
    }
    
    public function get($id)
    {
        return $this->container->get($id);
    }

    public function has($id)
    {
        return $this->container->has($id);
    }
}
