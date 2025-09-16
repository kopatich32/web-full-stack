<?php
namespace Bitrix\News;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\DatetimeField;
use Bitrix\Main\ORM\Fields\IntegerField;

/**
 * Class DataTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int mandatory
 * <li> NEWS_ID int mandatory
 * <li> SECTION_ID int mandatory
 * <li> VIEW_COUNT int mandatory
 * <li> CREATE_DATE datetime mandatory
 * </ul>
 *
 * @package Bitrix\News
 **/

class DataTable extends DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'diploma_news_data';
	}

	/**
	 * Returns entity map definition.
	 *
	 * @return array
	 */
	public static function getMap()
	{
		return [
			new IntegerField(
				'ID',
				[
					'primary' => true,
					'autocomplete' => true,
					'title' => Loc::getMessage('DATA_ENTITY_ID_FIELD'),
				]
			),
			new IntegerField(
				'USER_ID',
				[
					'required' => true,
					'title' => Loc::getMessage('DATA_ENTITY_USER_ID_FIELD'),
				]
			),
			new IntegerField(
				'NEWS_ID',
				[
					'required' => true,
					'title' => Loc::getMessage('DATA_ENTITY_NEWS_ID_FIELD'),
				]
			),
			new IntegerField(
				'SECTION_ID',
				[
					'required' => true,
					'title' => Loc::getMessage('DATA_ENTITY_SECTION_ID_FIELD'),
				]
			),
			new IntegerField(
				'VIEW_COUNT',
				[
					'required' => true,
					'title' => Loc::getMessage('DATA_ENTITY_VIEW_COUNT_FIELD'),
				]
			),
		];
	}
}