<?php

class Instrument {
	public $instrumentName;
	public $instrumentType;

	public function __construct(string $newInstrumentName, string $newInstrumentType) {
		$this->setInstrumentName($newInstrumentName);
		$this->setInstrumentType($newInstrumentType);
	}
}