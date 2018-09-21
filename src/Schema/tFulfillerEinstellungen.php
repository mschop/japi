<?php

namespace App\Schema;

class tFulfillerEinstellungen
{
	const TABLE_NAME = 'tFulfillerEinstellungen';
	const kFulfillerEinstellungen = 'kFulfillerEinstellungen';
	const kLieferant = 'kLieferant';
	const kKunde = 'kKunde';
	const cPrefixAbrechnung = 'cPrefixAbrechnung';
	const cSuffixAbrechnung = 'cSuffixAbrechnung';
	const nAbrechnungsZeitraum = 'nAbrechnungsZeitraum';
	const kAbrechnung = 'kAbrechnung';
	const dAbrechnungInitial = 'dAbrechnungInitial';
	const dAbrechnungStart = 'dAbrechnungStart';
	const dAbrechnungEnde = 'dAbrechnungEnde';
	const nBestandserfassungModus = 'nBestandserfassungModus';
	const COLUMN_NAMES = [
		'kFulfillerEinstellungen',
		'kLieferant',
		'kKunde',
		'cPrefixAbrechnung',
		'cSuffixAbrechnung',
		'nAbrechnungsZeitraum',
		'kAbrechnung',
		'dAbrechnungInitial',
		'dAbrechnungStart',
		'dAbrechnungEnde',
		'nBestandserfassungModus',
	];
	const COLUMN_TYPES = [
		'kFulfillerEinstellungen' => 'int',
		'kLieferant' => 'int',
		'kKunde' => 'int',
		'cPrefixAbrechnung' => 'varchar',
		'cSuffixAbrechnung' => 'varchar',
		'nAbrechnungsZeitraum' => 'tinyint',
		'kAbrechnung' => 'int',
		'dAbrechnungInitial' => 'datetime',
		'dAbrechnungStart' => 'datetime',
		'dAbrechnungEnde' => 'datetime',
		'nBestandserfassungModus' => 'int',
	];

	/** @var int kFulfillerEinstellungen */
	public $kFulfillerEinstellungen;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cPrefixAbrechnung */
	public $cPrefixAbrechnung;

	/** @var string cSuffixAbrechnung */
	public $cSuffixAbrechnung;

	/** @var int nAbrechnungsZeitraum */
	public $nAbrechnungsZeitraum;

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var string dAbrechnungInitial */
	public $dAbrechnungInitial;

	/** @var string dAbrechnungStart */
	public $dAbrechnungStart;

	/** @var string dAbrechnungEnde */
	public $dAbrechnungEnde;

	/** @var int nBestandserfassungModus */
	public $nBestandserfassungModus;
}
