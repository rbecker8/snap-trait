<?php

class Instrument {
	protected $instrumentName;
	protected $instrumentType;

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

trait Tune {
	protected $instrumentTune;

	public function getInstrumentTune(): bool {
		return($this->instrumentTune);
	}

	public function setInstrumentTune(bool $newInstrumentTune): void {
		$this->instrumentTune = $newInstrumentTune;
	}

	public function run(): void {
		if($this->instrumentTune === true) {
		} else {
			echo "Instrument Needs Tuning!" . PHP_EOL;
		}
	}
}

