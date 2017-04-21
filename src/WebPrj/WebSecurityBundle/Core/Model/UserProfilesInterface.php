<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\UserProfiles;

public interface UserProfilesInterface
{
	public function add(UserProfiles $action);

	public function edit(UserProfiles $action);

	public function remove(UserProfiles $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}