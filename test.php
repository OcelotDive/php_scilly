<!DOCTYPE html>
<?php
$myArr = ["one"=> 5, "two"=> 6, "three" => 8];
?>
<html>
<head></head>
<body>


<h1><?php foreach($myArr as $key => $val): ?></h1>
    <div><?php echo $key." ".$val ?></div>
   <?php endforeach; ?>
</body>

</html>

