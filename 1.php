<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>
<center>
<form action="" method="post">
<h1>Euclidean Distance</h1>
X:
<input type="text" name="x" id="x" value="" onKeyPress="CheckNum()">
<br>
Y:	
<input type="text" name="y" id="y" value="" onKeyPress="CheckNum()">
<br>
<input type="submit" name="sm" value="Submit">
<input type="reset" value="Reset">
</form>
<br>
<?php
if(isset($_POST['sm'])&&$_POST['x']!=""&&$_POST['y']!="")
{
	echo "X:".$_POST['x']."<br> Y:".$_POST['y']."<br>";
	$x=$_POST['x'];
	$y=$_POST['y'];
	$xx[]=explode(",",$x);
	$yy[]=explode(",",$y);
	$sx=sizeof(explode(",",$x));
	$sy=sizeof(explode(",",$y));
	if($sx!=$sy)
	{
		echo 'สับเซ็ตไม่เท่ากัน';
	}
	else
	{
		$total=0;
		for($i=0;$i<$sx;$i++)
		{
			$z=$xx[0][$i]-$yy[0][$i];
			$z=$z*$z;
			$total+=$z;
		}
		$total=sqrt($total);
		echo "<h4>Answer:".$total."</h4><h4>หรือ ".number_format($total,4)."</h4>";
	}
}

?>
<script>
function CheckNum(){
		if (event.keyCode > 57){
		      event.returnValue = false;
	    	}
	}
	document.getElementById("x").focus();
</script>
</body>
</html>