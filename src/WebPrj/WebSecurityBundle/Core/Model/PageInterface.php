<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\Page;

public interface PageInterface
{
	public function add(Page $action);

	public function edit(Page $action);

	public function remove(Page $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}