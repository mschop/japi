<?php

namespace App\Schema;

class tPicklistePos
{
	const TABLE_NAME = 'tPicklistePos';
	const kPicklistePos = 'kPicklistePos';
	const kPickliste = 'kPickliste';
	const kWarenLager = 'kWarenLager';
	const kWarenLagerEingang = 'kWarenLagerEingang';
	const fAnzahl = 'fAnzahl';
	const kBestellPos = 'kBestellPos';
	const kPicklistePosStatus = 'kPicklistePosStatus';
	const kArtikel = 'kArtikel';
	const kWarenlagerPlatz = 'kWarenlagerPlatz';
	const kPicklistePos_Ursprung = 'kPicklistePos_Ursprung';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kBestellung = 'kBestellung';
	const nPickPrio = 'nPickPrio';
	const nStatus = 'nStatus';
	const kAnsprechpartner = 'kAnsprechpartner';

	/** @var int kPicklistePos */
	public $kPicklistePos;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int kWarenLagerEingang */
	public $kWarenLagerEingang;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kPicklistePosStatus */
	public $kPicklistePosStatus;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenlagerPlatz */
	public $kWarenlagerPlatz;

	/** @var int kPicklistePos_Ursprung */
	public $kPicklistePos_Ursprung;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int nPickPrio */
	public $nPickPrio;

	/** @var int nStatus */
	public $nStatus;

	/** @var int kAnsprechpartner */
	public $kAnsprechpartner;
}