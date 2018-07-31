<?php

class Instrument {
	public $instrumentName;
	public $instrumentType;

	public function __construct(string $newInstrumentName, string $newInstrumentType) {
		$this->setInstrumentName($newInstrumentName);
		$this->setInstrumentType($newInstrumentType);
	}

	public function getInstrumentName(): string {
		return ($this->instrumentName);
	}

	public function setInstrumentName(string $newInstrumentName): void {
		$this->instrumentName = $newInstrumentName;
	}

	public function getInstrumentType(): string {
		return ($this->instrumentType);
	}

	public function setInstrumentType(string $newInstrumentType): void {
		$this->instrumentType = $newInstrumentType;
	}
}

