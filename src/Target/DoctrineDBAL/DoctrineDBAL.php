<?php

namespace RulerZ\Target\DoctrineDBAL;

use Doctrine\DBAL\Query\QueryBuilder;

use RulerZ\Target\AbstractSqlTarget;

class DoctrineDBAL extends AbstractSqlTarget
{
    /**
     * {@inheritdoc}
     */
    public function supports($target, $mode)
    {
        return $target instanceof QueryBuilder;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExecutorTraits()
    {
        return [
            '\RulerZ\Executor\DoctrineDBAL\FilterTrait',
            '\RulerZ\Executor\Polyfill\FilterBasedSatisfaction',
        ];
    }
}
