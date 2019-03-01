<?php

//check email
if(empty($_POST['a'])){
    echo 'Email Required <br/>';
    
}
else {
 $email = $_POST['a'];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Enter Valid Email <br />';
    }
}

//check title
if(empty($_POST['b'])){
    echo 'b required <br />';
    
}


else {
    $title = $_POST['b'];
    
    if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
        echo 'Title must not contain Digits of Special Characters';
    }
}
    
    



//check list
if(empty($_POST['c'])){
    echo 'c empty <br />';
    
}
else {
    $list = $_POST['c'];
    
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $list)) {
        echo 'List must be comma separated list';
    }
}
   

?>


<form method="POST">
<label>a</label><input type="text" name="a">
<label>b</label><input type="text" name="b">
    <label>c</label><input type="text" name="c">
    <input type="submit" value="submit" name="submitted">
</form>
<pre>
