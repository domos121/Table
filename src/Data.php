<?php
/**
 * Created by PhpStorm.
 * User: Uživatel
 * Date: 04.02.2019
 * Time: 19:21
 */

namespace Domos\Table;


class Data
{

    /**
     * @var string
     */
    private $entityClass;

    /**
     * @var array
     */
    private $where = [];

    /**
     * @return mixed
     */
    public function getEntityClass()
    {
        return $this->entityClass;
    }

    /**
     * @param mixed $entityClass
     */
    public function setEntityClass($entityClass): void
    {
        $this->entityClass = $entityClass;
    }

    /**
     * @return array
     */
    public function getWhere(): array
    {
        return $this->where;
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function addWhere(string $key,string $value): void
    {
        $this->where[$key] = $value;
    }

}