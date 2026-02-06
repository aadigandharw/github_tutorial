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
        else{
            echo "You Can not Go To the Party.";
        }
    ?>


    </div>
</body>
</html>