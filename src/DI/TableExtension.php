<?php

namespace Domos\Table\DI;

use Domos\Table\ITableControl;
use Nette\Configurator;
use Nette\DI\Compiler;
use Nette\DI\CompilerExtension;

class TableExtension extends CompilerExtension
{

    public function loadConfiguration()
    {
        $builder = $this->getContainerBuilder();

        $builder->addDefinition($this->prefix('Table'))
            ->setImplement(ITableControl::class)
            ->setInject(TRUE);
    }

/**
* @param Configurator $configurator
*/
    public static function register(Configurator $configurator)
    {
        $configurator->onCompile[] = function ($config, Compiler $compiler) {
            $compiler->addExtension('Table', new TableExtension());
        };
    }

}