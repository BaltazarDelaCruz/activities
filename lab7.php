<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lab7 | APPDEV</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 1</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-3xl font-semibold">Bank Transaction</h3>
        <?php
        class bankTransaction{
            public $bank_name;
            public $transaction;
            private $account_no;
            private $amount;
            private $saving_amount = 10000;

            public function __construct($bank_name, $account_no, $transaction, $amount){
                $this->bank_name = $bank_name;
                $this->transaction = $transaction;
                $this->account_no = $account_no;
                $this->amount = $amount;
            }

            public function getInfo(){
                echo   "Bank Name : {$this->bank_name}<br>".
                       "Account No : {$this->account_no}<br>".
                       "Type of Transaction : {$this->transaction}<br>".
                       "Current Balance : {$this->saving_amount}<br>".
                       "Amount : {$this->amount}<br>";
            } 

            public function newBalance(){
               switch($this->transaction){
                case 'D':
                    $this->saving_amount += $this->amount;
                    break;
                case 'W':
                    $this->saving_amount -= $this->amount;
                    break;
                default:
               echo "Unable to process this transaction! Invalid Transaction type!";
               return;
            
               }
               echo "New Balance : {$this->saving_amount}";
            }
        }

       $customer1 = new bankTransaction("BDO", "ACNO0000001", "W", 3000 );
       echo "Object: Customer 1<br><br>";
       $customer1->getInfo();
       $customer1->newBalance();
       echo "<br><br>";
       $customer2 = new bankTransaction("BPI", "ACNO0000002", "D", 3000 );
       echo "Object: Customer 2<br><br>";
       $customer2->getInfo();
       $customer2->newBalance();
       echo "<br><br>";
       $customer3 = new bankTransaction("METROBANK", "ACNO0000003", "AB", 3000 );
       echo "Object: Customer 1<br><br>";
       $customer3->getInfo();
       $customer3->newBalance();
       echo "<br><br>";
        ?>
        </div>
    </div>
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 2</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-3xl font-semibold">Shout</h3>
        <?php

        class stringUtility{
            public static function shout($string){
                return strtoupper($string) . "!";
            }
            public static function whisper($string){
                return strtolower($string);
            }
            public static function repeat($string, $times = 2){
                return str_repeat($string . ' ' , $times);
            }
        }
        echo stringUtility::shout('Hello Word') , "<br>";
        echo stringUtility::whisper('Hello Word') , "<br>";
        echo stringUtility::repeat('Hello Word') , "<br>";
        echo stringUtility::repeat('Hello Word', 5) , "<br>";



        ?>


        </div>
    </div>
    
</body>

</html> 
