<html>

<body>
    <?php
        $name = "Dr. Malay Dave"; //Global Variable
        function global_var() {
            global $name;
            echo "Variable in function: ". $name;
            echo "<br>";
        }
        global_var();
        echo "Variable outside the function: ". $name;
    ?>
</body>

</html>