<?php

namespace App\Schema;

class tInetKundenAttribute
{
	const TABLE_NAME = 'tInetKundenAttribute';
	const kInetKunde = 'kInetKunde';
	const kShop = 'kShop';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kInetKunde', 'kShop', 'cName', 'cValue'];
	const COLUMN_TYPES = ['kInetKunde' => 'int', 'kShop' => 'int', 'cName' => 'varchar', 'cValue' => 'varchar'];

	/** @var int kInetKunde */
	public $kInetKunde;

	/** @var int kShop */
	public $kShop;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
