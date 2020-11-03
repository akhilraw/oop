<?php

class BankAccount

{
   private $accountName;
   private $accountNumber;
   private $balance;
   private $interestRate;

   public function BankAccount(string $name, int $number, float $balance = 0.0, float $rate)
   {
	   $this->accountName = $name;
	   $this->accountNumber = $number;
	   $this->balance = $balance;
	   $this->interestRate = $rate;
   }

   public function setAccountName(string $name)
   {
      if(!(strlen($name) < 16))
      {
         return 'name can not be longer than 15 characters';
      }		
      $this->accountName = $name;
   }

   public function getBalance()
   {
      return 'Account balacnce is '. $this->balance;
   }

   public function getAccountName()
   {
      return 'Account user name is '. $this->accountName;
   }

   public function getInterestRate()
   {
      return 'Interest rate on your account is '.$this->interestRate;
   }

   public function setInterestRate(float $newRate)
   {
      if (!$newRate)
      {
         return 'interest rate can not be null';
      }
      return $this->interestRate = $newRate;
   }

   public function getAccountNumber()
   {
      return 'Account number is '.$this->accountNumber;
   }

   public function balanceDeposit(int $deposit)
   {
      if(!($deposit > 100))
      {
         echo 'you can not deposit money lesser than 101';
      }
      return $this->balance += $deposit;
   }

}


// create new object
$object = new BankAccount('akhil', 234, 2234, 2);
var_dump($object);

// set balance or deposit
$object->balanceDeposit(52);

// get balance
echo '<pre>';
print_r($object->getBalance());
