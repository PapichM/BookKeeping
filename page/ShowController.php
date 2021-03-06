<?php

namespace page;

use core\BaseModel;
use libs\Errors;
use core\ForExcel;

// Контроллер для отображения основных методов по работе с БД
class ShowController
{

	public function __construct()
	{
		require_once 'public/ShowHeader.php';
	}

	public function indexAction()
	{

	}

	// Если форма была отправлена то данный метод создает Excel файл, исполняет запрос к БД и отображает результат запроса
	public function selectAction()
	{
		require_once 'public/show/BuySelect.php';
		
		if ($_POST['action']) 
		{
			$result = BaseModel::select($_POST);
			extract($result);
			$countFields = count($fields);

			getExcel($mass);// Функция вывода данных в файл

			/* Подключение вывода запрошенных данных результатов в виде таблицы*/
			require_once 'public/table.php';
		}
	}


	/* Выбрать все из таблицы Покупки, сформировать файл Excel и отобразить результат */
	public function getAllFromBuyAction()
	{
		$sql = 'SELECT * FROM `Buy`';
		$result = BaseModel::simpleSelect($sql, 'Buy');
		extract($result);
		$countFields = count($fields);

		getExcel($mass);// Функция вывода данных в файл

		require_once 'public/table.php';
	}


	/* Выбрать все из таблицы Дни, сформировать файл Excel и отобразить результат */
	public function getAllFromDayAction()
	{
		$sql = 'SELECT * FROM `Day`';
		$result = BaseModel::simpleSelect($sql, 'Day');
		extract($result);
		$countFields = count($fields);

		getExcel($mass);// Функция вывода данных в файл

		require_once 'public/table.php';
	}


	// Вывести содержимое
	public static function d($array)
	{
		echo "<pre>".print_r($array,1)."</pre>";
	}
}

