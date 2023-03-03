<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="osucalculator.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="get">
<p>Calculate the amount of AR with DT (use . not ,):</p>
<input type="text" name="DT" placeholder="Base AR without DT here">
<button type="submit">Calculate</button>   
</form>
<?php
    if ($DT != "" or $DT > 0) { 
        $input = $_GET["DT"];
        echo ($input * 2 + 13) / 3;
    }
?>  

<form method="get">
<p>Calculate the amount of OD, AR, CS and HP Drain with HR (use . not ,):</p>
<input type="text" name="ODHR" placeholder="Base OD here">
<input type="text" name="ARHR" placeholder="Base AR here">
<input type="text" name="CSHR" placeholder="Base CS here">
<input type="text" name="HPHR" placeholder="Base HP Drain here">
<button type="submit">Calculate</button>   
</form>
<?php
    if ($ODHR != "" or $ODHR > 0) { 
        $input = $_GET["ODHR"];
        echo $input * 1.4;
    }
?>  
<?php
    if ($ARHR != "" or $ARHR > 0) { 
        $input = $_GET["ARHR"];
        echo $input * 1.4;
    }
?>  
<?php
    if ($CSHR != "" or $CSHR > 0) { 
        $input = $_GET["CSHR"];
        echo $input * 1.3;
    }
?>  
<?php
    if ($HPHR != "" or $HPHR > 0) { 
        $input = $_GET["HPHR"];
        if ($input * 1.4 > 10){ 
            echo 10;
        } 
        else { 
            echo $input * 1.4;
        }
        
    }
?>  
</body>
</html>