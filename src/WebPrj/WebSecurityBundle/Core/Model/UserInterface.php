<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\User;

public interface UserInterface
{
	public function add(User $action);

	public function edit(User $action);

	public function remove(User $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}