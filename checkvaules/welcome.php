<html>
<body>

<?php

// Variables
// 1. Define variables
// 2. Set variables to empty value

$name = "";
$email = "";
$telephone = "";
$website = "";

$expect = array('name', 'email', 'telephone', 'website');
    
foreach($expect AS $key) {
    if ( !empty($_POST[$key]) ) {
        ${$key} = trim($_POST[$key]);
        ${$key} = stripslashes(${$key});
        ${$key} = htmlspecialchars(${$key});
    } else {
        ${$key} == NULL;
    }
}

// Request Method
// 1. Check POST or GET
// 2. Set variable with Checked Value


// $name = inputChecked($_POST["name"]);
// function inputChecked($var) {

// }


?>

    Welkom <?php echo $name; ?><br><br>
    E-mail: <?php echo $email; ?><br><br>
    Telefoon <?php echo $telephone; ?><br><br>
    Website <?php echo $website; ?><br><br>

</body>
</html>