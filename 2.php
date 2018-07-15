<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>
<center>
<form action="" method="post">
<h1>Minkowski Distance</h1>
X:
<input type="text" name="x" id="x" value="" onKeyPress="CheckNum()">
<br>
Y:	
<input type="text" name="y" id="y" value="" onKeyPress="CheckNum()">
<br>
R:	
<input type="text" name="r" id="r" value="" onKeyPress="CheckNum()">
<br>
<input type="submit" name="sm" value="Submit">
<input type="reset" value="Reset">
</form>
<br>
<?php
if(isset($_POST['sm'])&&$_POST['x']!=""&&$_POST['y']!=""&&$_POST['r']!="")
{
	echo "X:".$_POST['x']."<br> Y:".$_POST['y']."<br>"."R:".$_POST['r'];
	$x=$_POST['x'];
	$y=$_POST['y'];
	$r=$_POST['r'];
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
		$tz=0;
		for($i=0;$i<$sx;$i++)
		{
			$z=abs($xx[0][$i]-$yy[0][$i]);
			$z=pow($z,$r);
			$tz+=$z;
		}
		$tz=pow($tz,1/$r);
		echo "<h4><br>Answer:".$tz."</h4><h4>หรือ ".number_format($tz,4)."</h4>";
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