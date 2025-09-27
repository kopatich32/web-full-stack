<?php

namespace Diploma;

use Bitrix\Main\Application;
use Bitrix\Main\Diag\Debug;
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
		'SECTION_CODE',
		'SECTION_NAME',
	];
	public static function setViewCount($newsId, $sectionId = 0, $sectionCode = '', $sectionName = '')
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
//		Debug::writeToFile($hasUserData,'', '/_res.log');

		if($hasUserData['USER_ID'] && $hasUserData['NEWS_ID'])
		{
			$updateData = [
				'VIEW_COUNT' => $hasUserData['VIEW_COUNT'] + 1,
			];
			if($sectionId > 0 && $hasUserData['SECTION_ID'] == 0)
			{
				$updateData['SECTION_ID'] = $sectionId;
			}

			if($sectionCode)
			{
				$updateData['SECTION_CODE'] = $sectionCode;
			}
			if($sectionName)
			{
				$updateData['SECTION_NAME'] = $sectionName;
			}
			DataTable::update($hasUserData['ID'], $updateData);
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


	public static function getTopNews () {
		global $USER;
		$topNewsArr = [];
		$userId = $USER->GetId();
		$getUserData = DataTable::getList([
			'order' => ['VIEW_COUNT' => 'DESC'],
			'filter' => [
				'USER_ID' => $userId,
			],
			'select' => self::$tableColumns,
		])->fetchAll();
		foreach($getUserData as  $data)
		{
			$topNewsArr[] = [
				'NEWS_ID' => $data['NEWS_ID'],
				'VIEWS' => $data['VIEW_COUNT'],
				'SECTION_ID' => $data['SECTION_ID'],
				'SECTION_CODE' => $data['SECTION_CODE'],
				'SECTION_NAME' => $data['SECTION_NAME'],
			];
		}
		return $topNewsArr;
	}

	public static function getMostViewedSectionData () {
		$newsData = self::getTopNews();

		if($newsData) {
			$section = reset($newsData);
		}
//				Debug::writeToFile($section,'', '/_res.log');

		return $section;
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
				'SECTION_CODE' => new StringField(
					'SECTION_CODE',
					[
						'column_name' => 'SECTION_CODE'
					]
				),'SECTION_NAME' => new StringField(
					'SECTION_NAME',
					[
						'column_name' => 'SECTION_NAME'
					]
				),

			],
			['ID'],
			['ID']
		);
	}

}