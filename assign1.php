<form action="" method="get">
    <input type="text" placeholder="What is Your Age?" name="age">
    <input type="submit" value="GO" name="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    $age = $_GET['age'];
    if (!is_numeric($age)) {
        echo "This is Text please try again";
        die();
    }
    if ($age >= 18) {
        echo "You are old enough to vote!";
    } else {
        echo "You are not old enough to vote!";
    }
}
?>