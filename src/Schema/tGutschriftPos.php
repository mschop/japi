<?php

namespace App\Schema;

class tGutschriftPos
{
	const TABLE_NAME = 'tGutschriftPos';
	const kGutschriftPos = 'kGutschriftPos';
	const tArtikel_kArtikel = 'tArtikel_kArtikel';
	const tGutschrift_kGutschrift = 'tGutschrift_kGutschrift';
	const fVKPreis = 'fVKPreis';
	const fMwSt = 'fMwSt';
	const nAnzahl = 'nAnzahl';
	const fRabatt = 'fRabatt';
	const cString = 'cString';
	const fVKNetto = 'fVKNetto';
	const cArtNr = 'cArtNr';
	const nLager = 'nLager';
	const kBestellPos = 'kBestellPos';
	const kGutschriftStueckliste = 'kGutschriftStueckliste';

	/** @var int kGutschriftPos */
	public $kGutschriftPos;

	/** @var int tArtikel_kArtikel */
	public $tArtikel_kArtikel;

	/** @var int tGutschrift_kGutschrift */
	public $tGutschrift_kGutschrift;

	/** @var string fVKPreis */
	public $fVKPreis;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string nAnzahl */
	public $nAnzahl;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var string cString */
	public $cString;

	/** @var string fVKNetto */
	public $fVKNetto;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var int nLager */
	public $nLager;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kGutschriftStueckliste */
	public $kGutschriftStueckliste;
}