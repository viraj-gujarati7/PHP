<html>

<body>
    <?php
    function static_var()
    {
        static $num1 = 3; //static Variable
        $num2 = 6;       // Non-static Variable
        //increment in non-static Variable
        $num1++;
        //increment in static Variable
        $num2++;
        echo "Static: " . $num1 . "</br>";
        echo "Non-static: " . $num2 . "</br>";
    }

    //first function call
    static_var();
    //second function call
    static_var();
    ?>
</body>

</html>