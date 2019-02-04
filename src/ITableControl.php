<?php
/**
 * Created by PhpStorm.
 * User: Uživatel
 * Date: 04.02.2019
 * Time: 19:00
 */

namespace Domos\Table;

interface ITableControl
{
    /**
     * @return TableControl
     */
    public function create() : TableControl;
}