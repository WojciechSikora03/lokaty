<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <form action="" method="post">
    <!--      okres-->
            <label>duration</label>
            <input type="number" name="duration">

    <!--      okres  -->
            <label>months</label>
                <input type="radio" name="scale" value="months">
            <label>years</label>
            <input type="radio" name="scale" value="years">

            <!-- kwota -->
            <label>amount</label>
            <input type="number" name="amount">

    <!--     oprocentowanie-->
            <label>percentage</label>
            <input type="text" name="percentage">
            <input type="submit" name="submit">
    </form>

    </body>
</html>
<?php
//    sprawdzanie czy nie sa puste
    if(!empty($_POST['duration']) && !empty($_POST['amount']) && !empty($_POST['percentage']) &&
        !empty($_POST['scale'])){

            $scale = $_POST['scale'];
            $duration = $_POST['duration'];
            $amount = $_POST['amount'];
            $percentage = $_POST['percentage'];

//        $finalAmount = $amount * 1 * 0.1;
//        print_r($finalAmount);
        if ($scale == "months") {
            $durationInYears = $duration / 12;
        } else {
            $durationInYears = $duration;
        }
//        obliczenie lokaty
        $interest = $amount * ($percentage / 100) * $durationInYears;
        $finalAmount = $amount + $interest;
//        $tax = 19 / 100;
//        $totalAmount = $finalAmount * (1 - 0.19);

        echo "kwota po lokacie  $finalAmount<br>";

        } else {
            echo "<div> Nie wszystkie pola zostały podane </div>";
    }

