<?php
class instrumentType extends Instrument {

	public function getInstrumentType(): string {
		return ($this->instrumentType);
	}

	public function setInstrumentType(string $newInstrumentType): void {
		$this->instrumentType = $newInstrumentType;
	}
}