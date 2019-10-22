<html>  
<head>  
<title>Mencari Faktorial</title>  
</head>  
<body>  
<form method="post">  
    Masukan angka :<br>  
    <input type="number" name="number" id="number">  
</form>  
<?php   
    if($_POST){  
        $fak = 1;  

        $number = $_POST['number'];  
        echo "Faktorial dari $number:<br><br>";   
        for ($i = 1; $i <= $number; $i++){         
            $fak = $fak * $i;  
            }  
            echo $fak . "<br>";  
    }  
?>  
</body>  
</html>  