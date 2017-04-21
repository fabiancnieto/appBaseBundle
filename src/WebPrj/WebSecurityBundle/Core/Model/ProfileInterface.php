<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\Profile;

public interface ProfileInterface
{
	public function add(Profile $action);

	public function edit(Profile $action);

	public function remove(Profile $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}