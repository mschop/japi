<?php

namespace App\Schema;

class tMerkmalSprache
{
	const TABLE_NAME = 'tMerkmalSprache';
	const kMerkmal = 'kMerkmal';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kMerkmal', 'kSprache', 'cName'];
	const COLUMN_TYPES = ['kMerkmal' => 'int', 'kSprache' => 'int', 'cName' => 'varchar'];

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
