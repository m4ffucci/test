<?php

class Prova
{
	private string $variabile;

	public static function stampaVariabilePrivata()
	{
		echo $this->variabile;
	}

	public static function stampaVariabile(string $variabile = '')
	{
		echo $variabile;
	}
}

// Test 1
Prova::stampaVariabilePrivata();

// Test 2
Prova::stampaVariabile('Ciao');

?>