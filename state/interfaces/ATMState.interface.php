<?php

interface ATMState
{
	public function insertCard();
	public function ejectCard();
	public function enterPin($pinEntered);
	public function requestCash($cashToWithdraw);
}