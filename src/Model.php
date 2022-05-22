<?php 

namespace Paw\Core; 

use Paw\Core\QueryBuilder; 
use Paw\Core\Traits\Loggable;

class Model 
{
    use Loggable;

    public function setQueryBuilder(QueryBuilder $qb)
    {
        $this->queryBuilder = $qb;
    }
}