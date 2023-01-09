<?php

namespace Qferrer\Symfony\MandrillBundle;

use Qferrer\Symfony\MandrillBundle\DependencyInjection\MandrillExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class QferrerMandrillBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new MandrillExtension();
    }
}