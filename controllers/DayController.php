<?php

namespace app\controllers;

public function actionIndex()
{
	$url = url::previous();
	return $this -> render 
	('index', ['url' => $url]

	]);
}