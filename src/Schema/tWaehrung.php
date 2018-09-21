<?php

namespace App\Schema;

class tWaehrung
{
	const TABLE_NAME = 'tWaehrung';
	const kWaehrung = 'kWaehrung';
	const cName = 'cName';
	const cNameHTML = 'cNameHTML';
	const fFaktor = 'fFaktor';
	const cEAMapping = 'cEAMapping';
	const nStandard = 'nStandard';
	const nVorBetrag = 'nVorBetrag';
	const cTrennzeichenCent = 'cTrennzeichenCent';
	const cTrennzeichenTausend = 'cTrennzeichenTausend';
	const dAktualisiert = 'dAktualisiert';
	const COLUMN_NAMES = [
		'kWaehrung',
		'cName',
		'cNameHTML',
		'fFaktor',
		'cEAMapping',
		'nStandard',
		'nVorBetrag',
		'cTrennzeichenCent',
		'cTrennzeichenTausend',
		'dAktualisiert',
	];
	const COLUMN_TYPES = [
		'kWaehrung' => 'int',
		'cName' => 'varchar',
		'cNameHTML' => 'varchar',
		'fFaktor' => 'decimal',
		'cEAMapping' => 'varchar',
		'nStandard' => 'tinyint',
		'nVorBetrag' => 'tinyint',
		'cTrennzeichenCent' => 'char',
		'cTrennzeichenTausend' => 'char',
		'dAktualisiert' => 'datetime',
	];

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var string cName */
	public $cName;

	/** @var string cNameHTML */
	public $cNameHTML;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string cEAMapping */
	public $cEAMapping;

	/** @var int nStandard */
	public $nStandard;

	/** @var int nVorBetrag */
	public $nVorBetrag;

	/** @var string cTrennzeichenCent */
	public $cTrennzeichenCent;

	/** @var string cTrennzeichenTausend */
	public $cTrennzeichenTausend;

	/** @var string dAktualisiert */
	public $dAktualisiert;
}
