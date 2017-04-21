<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\PageActions;

public interface PageActionsInterface
{
	public function add(PageActions $action);

	public function edit(PageActions $action);

	public function remove(PageActions $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}