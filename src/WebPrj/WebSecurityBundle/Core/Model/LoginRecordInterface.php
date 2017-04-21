<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\LoginRecord;

public interface LoginRecordInterface
{
	public function add(LoginRecord $action);

	public function edit(LoginRecord $action);

	public function remove(LoginRecord $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}