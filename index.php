<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PROJECT</title>
</head>
<body>
    <h1>hello world</h1>
    <div>
     hello world2
    <?php 

    $first_name = "umang";
    $last_name = "vansh";
    echo $first_name,$last_name;
    Echo "hello BABY";
    <?php  
function add(...$nums) {  
    $sum = 0;  
    foreach ($nums as $n) {  
        $sum += $n;  
    }  
    return $sum;  
} 
echo add(1, 2, 3, 4);  
?>  
    
    ?>
    </div>
</body>
</html>