<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\GlobalParams;

public interface GlobalParamsInterface
{
	public function add(GlobalParams $action);

	public function edit(GlobalParams $action);

	public function remove(GlobalParams $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}