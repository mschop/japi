<?php

namespace App\Schema;

class pf_amazon_bestellungpos
{
	const TABLE_NAME = 'pf_amazon_bestellungpos';
	const kAmazonBestellungPos = 'kAmazonBestellungPos';
	const kAmazonBestellung = 'kAmazonBestellung';
	const cArtNr = 'cArtNr';
	const cName = 'cName';
	const nQuantityPurchased = 'nQuantityPurchased';
	const fItemPrice = 'fItemPrice';
	const fItemTax = 'fItemTax';
	const fShippingPrice = 'fShippingPrice';
	const fShippingTax = 'fShippingTax';
	const cOrderItemId = 'cOrderItemId';
	const nVersandt = 'nVersandt';
	const cCarrier = 'cCarrier';
	const cTrackingNumber = 'cTrackingNumber';
	const dEstimatedArrivalDate = 'dEstimatedArrivalDate';
	const cFulfillmentCenterId = 'cFulfillmentCenterId';
	const cFulfillmentChannel = 'cFulfillmentChannel';
	const cMerchantOrderItemId = 'cMerchantOrderItemId';
	const nErrorCode = 'nErrorCode';
	const cErrorMessage = 'cErrorMessage';
	const dErrorErstellt = 'dErrorErstellt';
	const fGeschenkverpackungKosten = 'fGeschenkverpackungKosten';
	const cGeschenkverpackungTyp = 'cGeschenkverpackungTyp';
	const cGrusstext = 'cGrusstext';
	const nGeschenk = 'nGeschenk';
	const kFulfillmentAuftragPos = 'kFulfillmentAuftragPos';
	const fPreisNetto = 'fPreisNetto';

	/** @var int kAmazonBestellungPos */
	public $kAmazonBestellungPos;

	/** @var int kAmazonBestellung */
	public $kAmazonBestellung;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string cName */
	public $cName;

	/** @var int nQuantityPurchased */
	public $nQuantityPurchased;

	/** @var string fItemPrice */
	public $fItemPrice;

	/** @var string fItemTax */
	public $fItemTax;

	/** @var string fShippingPrice */
	public $fShippingPrice;

	/** @var string fShippingTax */
	public $fShippingTax;

	/** @var string cOrderItemId */
	public $cOrderItemId;

	/** @var int nVersandt */
	public $nVersandt;

	/** @var string cCarrier */
	public $cCarrier;

	/** @var string cTrackingNumber */
	public $cTrackingNumber;

	/** @var string dEstimatedArrivalDate */
	public $dEstimatedArrivalDate;

	/** @var string cFulfillmentCenterId */
	public $cFulfillmentCenterId;

	/** @var string cFulfillmentChannel */
	public $cFulfillmentChannel;

	/** @var string cMerchantOrderItemId */
	public $cMerchantOrderItemId;

	/** @var int nErrorCode */
	public $nErrorCode;

	/** @var string cErrorMessage */
	public $cErrorMessage;

	/** @var string dErrorErstellt */
	public $dErrorErstellt;

	/** @var string fGeschenkverpackungKosten */
	public $fGeschenkverpackungKosten;

	/** @var string cGeschenkverpackungTyp */
	public $cGeschenkverpackungTyp;

	/** @var string cGrusstext */
	public $cGrusstext;

	/** @var int nGeschenk */
	public $nGeschenk;

	/** @var int kFulfillmentAuftragPos */
	public $kFulfillmentAuftragPos;

	/** @var string fPreisNetto */
	public $fPreisNetto;
}
