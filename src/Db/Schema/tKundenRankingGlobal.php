<?php

namespace App\Db\Schema;

class tKundenRankingGlobal
{
	const TABLE_NAME = 'tKundenRankingGlobal';
	const kKunde = 'kKunde';
	const nType = 'nType';
	const kShop = 'kShop';
	const nPlattform = 'nPlattform';
	const nRang = 'nRang';
	const nRangMax = 'nRangMax';
	const nAnteilProzent = 'nAnteilProzent';
	const nPauschal = 'nPauschal';
	const dStand = 'dStand';
	const dVon = 'dVon';
	const COLUMN_NAMES = [
		'kKunde',
		'nType',
		'kShop',
		'nPlattform',
		'nRang',
		'nRangMax',
		'nAnteilProzent',
		'nPauschal',
		'dStand',
		'dVon',
	];
	const COLUMN_DEFINITIONS = [
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nRang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nRangMax' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnteilProzent' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPauschal' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dStand' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dVon' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKunde */
	public $kKunde;

	/** @var int nType */
	public $nType;

	/** @var int kShop */
	public $kShop;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nRang */
	public $nRang;

	/** @var int nRangMax */
	public $nRangMax;

	/** @var string nAnteilProzent */
	public $nAnteilProzent;

	/** @var string nPauschal */
	public $nPauschal;

	/** @var string dStand */
	public $dStand;

	/** @var string dVon */
	public $dVon;
}
