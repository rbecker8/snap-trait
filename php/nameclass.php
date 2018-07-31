<?php
class instrumentName extends Instrument {

	public function getInstrumentName(): string {
		return ($this->instrumentName);
	}

	public function setInstrumentName(string $newInstrumentName): void {
		$this->instrumentName = $newInstrumentName;
	}
}