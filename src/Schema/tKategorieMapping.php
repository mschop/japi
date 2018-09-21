<?php

namespace App\Schema;

class tKategorieMapping
{
	const TABLE_NAME = 'tKategorieMapping';
	const kKategorieMapping = 'kKategorieMapping';
	const kKategorie = 'kKategorie';
	const kFremdKategorie = 'kFremdKategorie';
	const nPlattform = 'nPlattform';
	const COLUMN_NAMES = ['kKategorieMapping', 'kKategorie', 'kFremdKategorie', 'nPlattform'];
	const COLUMN_TYPES = [
		'kKategorieMapping' => 'int',
		'kKategorie' => 'int',
		'kFremdKategorie' => 'int',
		'nPlattform' => 'int',
	];

	/** @var int kKategorieMapping */
	public $kKategorieMapping;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kFremdKategorie */
	public $kFremdKategorie;

	/** @var int nPlattform */
	public $nPlattform;
}
