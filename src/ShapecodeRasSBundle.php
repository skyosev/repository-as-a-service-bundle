<?php

namespace Shapecode\Bundle\RasSBundle;

use Shapecode\Bundle\RasSBundle\DependencyInjection\Compiler\DeclaredRepositoryServiceCompilerPass;
use Shapecode\Bundle\RasSBundle\DependencyInjection\Compiler\DefaultRepositoryServiceCompilerPass;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ShapecodeRasSBundle
 * @package Shapecode\Bundle\RasSBundle
 * @author Nikita Loges
 */
class ShapecodeRasSBundle extends Bundle
{

    /**
     * @inheritdoc
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new DeclaredRepositoryServiceCompilerPass());
        $container->addCompilerPass(new DefaultRepositoryServiceCompilerPass(), PassConfig::TYPE_OPTIMIZE);
    }
}
