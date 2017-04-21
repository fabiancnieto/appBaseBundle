<?php

namespace WebPrj\WebSecurityBundle\Core\Model;

use WebPrj\WebSecurityBundle\Core\Model\Entity\ProfilePageActions;

public interface ProfilePageActionsInterface
{
	public function add(ProfilePageActions $action);

	public function edit(ProfilePageActions $action);

	public function remove(ProfilePageActions $action);

	public function getAll();

	public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}