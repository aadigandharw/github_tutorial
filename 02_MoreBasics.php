<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin:0;
            padding:0;
        }
        .container{
            max-width:100%;
            background-color:gray;
            box-sizing:border-box;
        }
    </style>
</head>
<body>
    <div class="container">
       <h1>Let's Learn About PHP</h1>
       <p>Your Party Is here</p>
    <?php
        $age = 18;
        if($age > 18){
            echo "You Can Go To party.";
        }
        else if($age = 3){
        echo "You are 3 years Old.";
        }
        else{
            echo "You Can not Go To the Party.";
        }


        // Arrays In Php
        echo "<br>";
        $language = array("python" , "c++" , "Java" , "javascript.");
        echo "size Of Array : " , count($language) , "<br>";
        echo $language[0] , "<br>";

        // Loops in Php
        $a = 0;
        while ($a <= 10) {
            echo "The value Of a Is : " , $a , "<br>";
            $a = $a + 1 ;
        }
        
        $a = 0;
        while ($a < count($language)) {
            echo "The value Of Langaunge Is : " , $language[$a] , "<br>";
            $a = $a + 1 ;
        }

        // do While In PHP
        $a = 0;
        do {
            echo "The value Of a Is : " , $a , "<br>";
            $a = $a + 1 ;
        }
        while ($a < 10);
        
        // For Loop in Php.
        for($a=0; $a <20 ; $a++) { 
            echo "This Is The Value of A : " , $a  , "<br>"; 
        }
        // For each in PHP.
        foreach ($language as $key => $value) {
            echo "<br>The Value OF Array is : " , $value , "<br>";
        }

        // Functions 
        function print5(){
            echo "<br>Five";
        }
        print5();
        print5();
        print5(); 
        print5();
        print5();
        print5();

        function print_number($number){
            echo "<br> Your Number Is : ";
            echo $number;
        }
        
        print_number(5);
        print_number(7);
    ?>


    </div>
</body>
</html>