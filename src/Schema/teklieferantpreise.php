<?php

namespace App\Schema;

class teklieferantpreise
{
	const TABLE_NAME = 'teklieferantpreise';
	const kEKLieferantPreise = 'kEKLieferantPreise';
	const kArtikel = 'kArtikel';
	const kLieferant = 'kLieferant';
	const nAnzahl1 = 'nAnzahl1';
	const nAnzahl2 = 'nAnzahl2';
	const nAnzahl3 = 'nAnzahl3';
	const nAnzahl4 = 'nAnzahl4';
	const nAnzahl5 = 'nAnzahl5';
	const fPreis1 = 'fPreis1';
	const fPreis2 = 'fPreis2';
	const fPreis3 = 'fPreis3';
	const fPreis4 = 'fPreis4';
	const fPreis5 = 'fPreis5';

	/** @var int kEKLieferantPreise */
	public $kEKLieferantPreise;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int nAnzahl1 */
	public $nAnzahl1;

	/** @var int nAnzahl2 */
	public $nAnzahl2;

	/** @var int nAnzahl3 */
	public $nAnzahl3;

	/** @var int nAnzahl4 */
	public $nAnzahl4;

	/** @var int nAnzahl5 */
	public $nAnzahl5;

	/** @var string fPreis1 */
	public $fPreis1;

	/** @var string fPreis2 */
	public $fPreis2;

	/** @var string fPreis3 */
	public $fPreis3;

	/** @var string fPreis4 */
	public $fPreis4;

	/** @var string fPreis5 */
	public $fPreis5;
}
