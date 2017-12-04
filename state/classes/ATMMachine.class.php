<?php
/**
 * State Design Pattern
 */
class ATMMachine
{
	private $hasCardState;
	private $noCardState;
	private $hasCorrectPinState;
	private $atmOutOfMoneyState;

	private $currentState;
	private $cashInMachine = 2000;
	private $correctPinEntered = false;


	public function __construct()
	{
		$this->hasCardState = new HasCardState($this);
		$this->noCardState = new NoCardState($this);
		$this->hasCorrectPinState = new HasCorrectPinState($this);
		$this->atmOutOfMoneyState = new ATMOutOfMoneyState($this);

		$this->currentState = $this->noCardState;

		if ($this->cashInMachine <= 0) {
			$currentState = $this->atmOutOfMoneyState;
		}
	}

	public function setATMState($newATMState)
	{
		$this->currentState = $newATMState;
	}

	public function setCashInMachine($cashInMachine)
	{
		$this->cashInMachine = $cashInMachine;
	}

	public function insertCard()
	{
		$this->currentState->insertCard();
	}

	public function ejectCard()
	{
		$this->currentState->ejectCard();
	}

	public function enterPin($pinEntered)
	{
		$this->currentState->enterPin($pinEntered);
	}

	public function requestCash($cashToWithdraw)
	{
		$this->currentState->requestCash($cashToWithdraw);
	}

	public function markCorrectPinTrue()
	{
		$this->correctPinEntered = true;
	}

	public function markCorrectPinFalse()
	{
		$this->correctPinEntered = false;
	}

	public function getHasCardState() { return $this->hasCardState; }
	public function getNoCardState() { return $this->noCardState; }
	public function getHashCorrectPinState() { return $this->hasCorrectPinState; }
	public function getATMOutOfMoneyState() { return $this->atmOutOfMoneyState; }
}