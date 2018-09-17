<?php

namespace App\Schema;

class tLHM
{
	const TABLE_NAME = 'tLHM';
	const kLHM = 'kLHM';
	const kLHMTyp = 'kLHMTyp';
	const cLHMId = 'cLHMId';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kWarenlager = 'kWarenlager';
	const nSperre = 'nSperre';
	const kLHMStatus = 'kLHMStatus';
	const kBenutzer = 'kBenutzer';
	const dBearbeitet = 'dBearbeitet';

	/** @var int kLHM */
	public $kLHM;

	/** @var int kLHMTyp */
	public $kLHMTyp;

	/** @var string cLHMId */
	public $cLHMId;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int nSperre */
	public $nSperre;

	/** @var int kLHMStatus */
	public $kLHMStatus;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dBearbeitet */
	public $dBearbeitet;
}