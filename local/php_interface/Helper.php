<?php

namespace Diploma;

use Bitrix\Main\Application;
use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\TextField;
use Bitrix\Main\ORM\Entity;
use  Bitrix\Main\EventManager;
use Bitrix\Main\Entity\DatetimeField;
use Bitrix\News\DataTable;

class Helper
{
	public  static $tableColumns = [
		'ID',
		'USER_ID',
		'NEWS_ID',
		'SECTION_ID',
		'VIEW_COUNT',
	];
	public static function setViewCount($newsId, $sectionId)
	{
		global $APPLICATION;
		global $USER;
		$userId = $USER->GetId();

		$hasUserData = DataTable::getList([
			'filter' => [
				'USER_ID' => $userId,
				'NEWS_ID' => $newsId,
			],
			'select' => self::$tableColumns,
		])->fetch();
		//\Bitrix\Main\Diag\Debug::writeToFile($hasUserData,'' , '/_res.log');

		if($hasUserData['USER_ID'] && $hasUserData['NEWS_ID'])
		{
			DataTable::update($hasUserData['ID'],
				[
					'VIEW_COUNT' => $hasUserData['VIEW_COUNT'] + 1,
				]
			);
		}
		else
		{
			DataTable::add([
				'USER_ID' => $userId,
				'NEWS_ID' => $newsId,
				'SECTION_ID' => $sectionId ?: 0,
				'VIEW_COUNT' => 1,
			]);
		}
	}


	public static function getTopNews ($userId) {
		global $USER;
		$topNewsArr = [];
		$userId = $USER->GetId();
		$getUserData = DataTable::getList([
			'filter' => [
				'USER_ID' => $userId,
			],
			'select' => self::$tableColumns,
		])->fetchAll();
		usort($getUserData, function($a, $b){
			return ($b['VIEW_COUNT'] - $a['VIEW_COUNT']);
		});

		foreach($getUserData as  $data)
		{
			$topNewsArr[] = [
				'NEWS_ID' => $data['NEWS_ID'],
				'VIEWS' => $data['VIEW_COUNT'],
			];
		}
		return $topNewsArr;
	}
	public static function createTableForNews() //TODO только разово для создания таблицы
	{
		$connection = Application::getConnection();
		$connection->createTable(
			'diploma_news_data',
			[
				'ID' => new IntegerField(
					'id',
					[
						'column_name' => 'ID'
					]
				),
				'USER_ID' => new IntegerField(
					'USER_ID',
					[
						'column_name' => 'USER_ID'
					]
				),
				'NEWS_ID' => new IntegerField(
					'NEWS_ID',
					[
						'column_name' => 'NEWS_ID'
					]
				),
				'SECTION_ID' => new IntegerField(
					'SECTION_ID',
					[
						'column_name' => 'SECTION_ID'
					]
				),
				'VIEW_COUNT' => new IntegerField(
					'VIEW_COUNT',
					[
						'column_name' => 'VIEW_COUNT'
					]
				),
				'CREATE_DATE' => new DatetimeField(
					'CREATE_DATE',
					[
						'column_name' => 'CREATE_DATE'
					]
				)
			],
			['ID'],
			['ID']
		);
	}

}