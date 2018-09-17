<?php

namespace App\Schema;

class tLLVorlage
{
	const TABLE_NAME = 'tLLVorlage';
	const kLLVorlage = 'kLLVorlage';
	const nTyp = 'nTyp';
	const dDatum = 'dDatum';
	const cKommentar = 'cKommentar';
	const cName = 'cName';
	const bData = 'bData';
	const nDatasize = 'nDatasize';
	const bPreview = 'bPreview';
	const nPreviewsize = 'nPreviewsize';

	/** @var int kLLVorlage */
	public $kLLVorlage;

	/** @var int nTyp */
	public $nTyp;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string cName */
	public $cName;

	/** @var resource bData */
	public $bData;

	/** @var int nDatasize */
	public $nDatasize;

	/** @var resource bPreview */
	public $bPreview;

	/** @var int nPreviewsize */
	public $nPreviewsize;
}