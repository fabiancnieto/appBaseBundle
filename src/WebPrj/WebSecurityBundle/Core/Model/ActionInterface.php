<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\Action;

public interface ActionInterface
{
	public function add(Action $action);

	public function edit(Action $action);

	public function remove(Action $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}