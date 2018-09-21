<?php

namespace App\Schema;

class tBenutzerAktiv
{
	const TABLE_NAME = 'tBenutzerAktiv';
	const kBenutzerAktiv = 'kBenutzerAktiv';
	const kBenutzer = 'kBenutzer';
	const nApplikation = 'nApplikation';
	const dLetzteAktion = 'dLetzteAktion';
	const cUniqueId = 'cUniqueId';
	const cCustom = 'cCustom';
	const bAbmelden = 'bAbmelden';
	const cRechnername = 'cRechnername';
	const kWarenlager = 'kWarenlager';
	const kMandant = 'kMandant';
	const COLUMN_NAMES = [
		'kBenutzerAktiv',
		'kBenutzer',
		'nApplikation',
		'dLetzteAktion',
		'cUniqueId',
		'cCustom',
		'bAbmelden',
		'cRechnername',
		'kWarenlager',
		'kMandant',
	];
	const COLUMN_TYPES = [
		'kBenutzerAktiv' => 'int',
		'kBenutzer' => 'int',
		'nApplikation' => 'int',
		'dLetzteAktion' => 'datetime',
		'cUniqueId' => 'varchar',
		'cCustom' => 'varchar',
		'bAbmelden' => 'tinyint',
		'cRechnername' => 'varchar',
		'kWarenlager' => 'int',
		'kMandant' => 'int',
	];

	/** @var int kBenutzerAktiv */
	public $kBenutzerAktiv;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nApplikation */
	public $nApplikation;

	/** @var string dLetzteAktion */
	public $dLetzteAktion;

	/** @var string cUniqueId */
	public $cUniqueId;

	/** @var string cCustom */
	public $cCustom;

	/** @var int bAbmelden */
	public $bAbmelden;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kMandant */
	public $kMandant;
}
