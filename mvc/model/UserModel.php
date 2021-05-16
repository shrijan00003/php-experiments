<?php

class UserModel extends BaseModel
{
	public function listUser()
	{
		$st = $this->pdo->prepare("select * from user");
		$st->execute();
		$users = $st->fetchAll();

		return $users;
	}
}