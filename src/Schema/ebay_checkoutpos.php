<?php

namespace App\Schema;

class ebay_checkoutpos
{
	const TABLE_NAME = 'ebay_checkoutpos';
	const kEbayCheckoutPos = 'kEbayCheckoutPos';
	const kEbayCheckout = 'kEbayCheckout';
	const ItemID = 'ItemID';
	const TransactionID = 'TransactionID';
	const kXCheckoutPos = 'kXCheckoutPos';
	const fAnzahl = 'fAnzahl';
	const fPreis = 'fPreis';
	const kArtikel = 'kArtikel';
	const COLUMN_NAMES = [
		'kEbayCheckoutPos',
		'kEbayCheckout',
		'ItemID',
		'TransactionID',
		'kXCheckoutPos',
		'fAnzahl',
		'fPreis',
		'kArtikel',
	];
	const COLUMN_TYPES = [
		'kEbayCheckoutPos' => 'int',
		'kEbayCheckout' => 'int',
		'ItemID' => 'varchar',
		'TransactionID' => 'varchar',
		'kXCheckoutPos' => 'int',
		'fAnzahl' => 'decimal',
		'fPreis' => 'decimal',
		'kArtikel' => 'int',
	];

	/** @var int kEbayCheckoutPos */
	public $kEbayCheckoutPos;

	/** @var int kEbayCheckout */
	public $kEbayCheckout;

	/** @var string ItemID */
	public $ItemID;

	/** @var string TransactionID */
	public $TransactionID;

	/** @var int kXCheckoutPos */
	public $kXCheckoutPos;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fPreis */
	public $fPreis;

	/** @var int kArtikel */
	public $kArtikel;
}
