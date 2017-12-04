<?php

class HasCardState implements ATMState
{
	private $atmMachine;

	public function __construct($atmMachine)
	{
		$this->atmMachine = $atmMachine;
	}

	public function insertCard()
	{
		echo "<br/> You can't enter more than one card";
	}

	public function ejectCard()
	{
		echo "<br/> Card ejected";
		$noCardState = $this->atmMachine->getNoCardState();
		$this->atmMachine->setATMState($noCardState);
	}

	public function enterPin($pinEntered)
	{
		if ($pinEntered == 1234) {
			echo "<br/> Correct PIN entered";
			$correctPinState = $this->atmMachine->getHashCorrectPinState();
			$this->atmMachine->setATMState($correctPinState);
			$this->atmMachine->markCorrectPinTrue();
		} else {
			echo "<br/> Wrong PIN";
			$this->atmMachine->markCorrectPinFalse();
			echo "<br/> Card ejected";
			$noCardState = $this->atmMachine->getNoCardState();
			$this->atmMachine->setATMState($noCardState);
		}
	}

	public function requestCash($cashToWithdraw)
	{
		echo "<br/> Please enter your PIN";
	}

}