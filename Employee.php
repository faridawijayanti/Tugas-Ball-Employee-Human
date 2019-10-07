<?php

interface Payable 
{
	function getPaymentAmount () ;
}

class Employee implements Payable 
{
	private $firstName;
	private $lastName ;
	private $socialSecurityNumber ;
	
	function __construct ($firstName, $lastName, $socialSecurityNumber)
	{
		$this -> firstName = $firstName;
		$this -> lastName = $lastName ;
		$this -> socialSecurityNumber = $socialSecurityNumber ;
	}
}

class Invoice implements Payable
{
	private $partNumber ;
	private $partDecription ;
	private $quantity ;
	private $pricePerItem ;
	
	function __construct ($partNumber, $partDecription,$quantity, $pricePerItem)
	{
		$this -> partNumber = $partNumber ;
		$this -> partDecription = $ partDecription ;
		$this -> quantity = $quantity ;
		$this -> pricePerItem = $pricePerItem ;
	}
}

clas HourlyEmployee extends Employee 
{
	private $wage ;
	private $hours ;
	
	function __construct ($wage, $hours)
	{
		$this -> wage = $wage ;
		$this -> hours = $hours ;
	}
}

class SalariedEmployee extends Employee
{
	private $weeklySalary ;
	
	function __construct ($weeklySalary)
	{
		$this -> weeklySalary = $weeklySalary ;
	}
}

class BasePlusComissionEmployee extends Employee
{
	private $BaseSalary ;
	
	function __construct ($BaseSalary)
	{
		$this -> BaseSalary = $BaseSalary ;
	}
}

?>