<?php
/**
 * Created by PhpStorm.
 * User: Uživatel
 * Date: 04.02.2019
 * Time: 19:00
 */

namespace Domos\Table;


use Kdyby\Doctrine\EntityManager;
use Nette\Application\UI\Control;

class TableControl extends Control
{
    /** @var Data @inject */
    public $data;

    /** @var EntityManager @inject */
    public $entityManager;

    public function render()
    {
        $this->template->setFile(__DIR__ . '/templates/Table.latte');
        $this->template->table = $this->getEntityData();
        $this->template->render();

    }

    private function getEntityData()
    {
        $repository = $this->entityManager->getRepository($this->data->getEntityClass());
        return $repository->findBy($this->data->getWhere());
    }

}