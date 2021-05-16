<?php

class BaseController
{
	protected $view;
	protected function loadModel($model)
	{
		$modelClass = ucfirst($model) . "Model";
		require_once("model/{$modelClass}.php");
		$modelObject = new $modelClass();

		return $modelObject;
	}

	protected function display($data)
	{
		extract($data);
		require_once("view/{$this->view}.php");
	}
}