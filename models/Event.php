<?php

namespace app\models;

user yii\page\model;

class Event extends model
{
	public $title;
	public $startDay;
	public $endDay;
	public $repeat;
	public $idAthor;
	public $body;
}

public function atributeLabels()
{
	return [
		'title' => 'Название события';
		'startDay' => 'Дата начала';
		'endDay' => 'Дата завершения';
		'repeat' => 'Повторять';
		'idAthor' => 'Id автора';
		'body' => 'Описание события';
	]
}

public function rules()
{
	return [
        [['startDay'], 'date', 'format' => 'php:d.m.Y H:i'],
        [['endDay'], 'date', 'format' => 'php:d.m.Y H:i'],
        [['time'], 'time'],
    ];
}
