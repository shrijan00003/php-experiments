<?php

class UserController extends BaseController
{
	public function showlist()
	{
		$this->view = 'user/list';
		$model = $this->loadModel('user');
		$users = $model->listUser();
		$data = ['users' => $users];

		$this->display($data);
	}
}