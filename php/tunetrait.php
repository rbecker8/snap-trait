<?php
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

