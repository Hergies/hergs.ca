<!DOCTYPE html>
<html>
<body>

<h1>PHP testing!!</h1>

<?php
if ($_POST["name"] < 5 and is_numeric($_POST["name"])){
echo "poggers you did it! you entered " . $_POST["name"]; 
} elseif ($_POST["name"] == 5) {
echo "thats not LESS than 5 you goob";
} elseif ($_POST["name"] > 5 and is_numeric($_POST["name"])){
echo "no! too big!";
} else {
echo "no! not a number!!!!!!";
}
?>
</body>
</html>