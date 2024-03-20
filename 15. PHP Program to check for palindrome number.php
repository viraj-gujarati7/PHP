<html>
<title>Palindrome Numbers</title>

<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Enter a number : <input type="text" name="txtnum">
        <input type="submit" />
    </form>
</body>

</html>

<?php
    $n = $_POST['txtnum'];
    $x=$n;
    $sum=0;
    while (floor($x)>0) {
        $r=$x%10;
        $sum=$sum*10+$r;
        $x/=10;
    }
    if($sum==$n)
        echo"Number is Palindrome";
    else
        echo"Number is Not Palindrome";
?>