<?php

namespace App\Schema;

class tnews
{
	const TABLE_NAME = 'tnews';
	const kNews = 'kNews';
	const dErstellt = 'dErstellt';
	const cBetreff = 'cBetreff';
	const cText = 'cText';
	const cPicture = 'cPicture';
	const cInet = 'cInet';

	/** @var int kNews */
	public $kNews;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var string cText */
	public $cText;

	/** @var string cPicture */
	public $cPicture;

	/** @var string cInet */
	public $cInet;
}
