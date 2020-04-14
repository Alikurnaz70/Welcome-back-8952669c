<?php 

if (isset($_POST)) {
    $i1 = $_POST['input1'];
    $i2 = $_POST['input2'];
    
    if ($i1 > $i2 || $i2 > $i1 ) {
        echo 'oneven';
    }else {
        echo 'even';
    }
}
?>

<form method="post">
    <input type="number" name="input1" id="input1">
    <input type="number" name="input2" id="input2">
    <input type="submit" name="versturen" value="Verzenden">
</form>