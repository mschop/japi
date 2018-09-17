<?php

namespace App\Schema;

class tMedienDatei
{
	const TABLE_NAME = 'tMedienDatei';
	const kMedienDatei = 'kMedienDatei';
	const kArtikel = 'kArtikel';
	const cPfad = 'cPfad';
	const cURL = 'cURL';
	const cKategorie = 'cKategorie';
	const cTyp = 'cTyp';
	const nSort = 'nSort';

	/** @var int kMedienDatei */
	public $kMedienDatei;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cPfad */
	public $cPfad;

	/** @var string cURL */
	public $cURL;

	/** @var string cKategorie */
	public $cKategorie;

	/** @var string cTyp */
	public $cTyp;

	/** @var int nSort */
	public $nSort;
}