<?php

namespace app\models;

user yii\page\model;

class Day extends model
{
	public $workday;
	public $holyday;
}

public function atributeLabels()
{
	return [
	'workday' => 'Рабочий день',
	'holyday' => 'Выходной день',
	'event' => 'Событие'
	];
}

public function rules()
{
	return [
        [['workday'], 'date', 'format' => 'php:d.m.Y H:i'],
        [['holyday'], 'date', 'format' => 'php:d.m.Y H:i'],
        [['time'], 'time'],
    ];
}
