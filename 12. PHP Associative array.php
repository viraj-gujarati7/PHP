<html>

<body>
    <?php
    /* First method to associate create array. */
    $salaries = array("savan" => 2000, "rohan" => 1000, "paresh" => 500);
    echo "Salary of Savan is " . $salaries['savan'] . "<br />";
    echo "Salary of Rohan is " . $salaries['rohan'] . "<br />";
    echo "Salary of Paresh is " . $salaries['paresh'] . "<br />";

    /* Second method to create array. */
    $salaries['savan'] = "high";
    $salaries['rohan'] = "medium";
    $salaries['paresh'] = "low";
    echo "Salary of Savan is " . $salaries['savan'] . "<br />";
    echo "Salary of Rohan is " . $salaries['rohan'] . "<br />";
    echo "Salary of Paresh is " . $salaries['paresh'] . "<br />";
    ?>
</body>

</html>