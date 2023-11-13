<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required >
        <label for="birth">Birth: </label>
        <input type="date" name="birth" id="birth" >
        <select name="jobs" id="">
            <option value="">--Select Jobs--</option>
            <option value="Full Stack Web Developer">Full Stack Web Developer</option>
            <option value="Front End Web Developer">Front End Web Developer</option>
            <option value="Back End Web Developer">Back End Web Developer</option>
        </select>
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['name'], $_POST['birth'], $_POST['jobs'])) {
            echo "Name: " . $_POST['name'] . "<br>";
            echo "Birth: " . $_POST['birth'] . "<br>";
            $age = floor((time() - strtotime($_POST['birth'])) / 31556926);
            echo "Age: " . $age . "<br>";
            echo "Jobs: " . $_POST['jobs'] . "<br>";
            if($_POST['jobs'] == "Full Stack Web Developer") {
                echo "Average salarry: Rp. 10.000.000 - Rp. 15.000.000";
            } elseif ($_POST['jobs'] == "Front End Web Developer") {
                echo "Average salarry: Rp. 7.000.000 - 10.000.000";
            } elseif ($_POST['jobs'] == "Back End Web Developer") {
                echo "Average salarry: Rp. 9.000.000 - 12.000.000";
            } else {
                echo "Average salarry: Jobs not found";
            }
        }
    ?>
</body>
</html>