<?php
//This is a test version 


$meal_cost = 18.25;
$tip = $meal_cost * 15/100;
$tax = $meal_cost * 9.95/100;
$price = '';    
$total = $meal_cost + $tip + $tax;

if ($total >0 && $total < 20){
    $price = 'Good Price';
}else if ($total >= 20 && $total <= 40){
    $price = 'Reasonably priced';
}else if($total >40){
    $price = 'This is pricey';
}else{
    $price = 'Is this even a number?';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Total Meal Cost</title>
</head>
<body>
    <main>
        <h4>Part 1</h4>
        <h1>Total Meal Cost:</h1>

        <label>Meal Cost:</label>
        <span><?php echo money_format('%(#10n', $meal_cost); ?></span><br>

        <label>Tip:</label>
        <span><?php echo money_format('%(#10n',$tip); ?></span><br>

        <label>Tax:</label>
        <span><?php echo money_format('%(#10n',$tax); ?></span><br>

        <label>Total:</label>
        <span><?php echo money_format('%(#10n',$total); ?></span><br>
    </main>
    <h4>Part 2</h4>
    <h3><?php echo $price; ?></h3>
    <h4>Part 3</h4>
</body>
</html>

<?php 

$message = "";

for ($count = 0; $count <=4; $count++){
    echo $count.'<br>';
    }  
//while(true){
      $number = mt_rand(5, 7);
switch($number){
		case '5':
            $message = "5 is your random number <br> 6 <br> 7";
        echo $message.'<br>';
            break;
		case '6':
			$message = "5 <br> 6 is your random number <br> 7";
        echo $message.'<br>';
			break;
		case '7':
			$message = "5 <br> 6 <br> 7 is your random number";
        echo $message.'<br>';
			break;
}
for ($count = 8; $count <=10; $count++){
    echo $count.'<br>';
}


?>
