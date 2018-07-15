<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>
<center>
<form action="" method="post" name="form">
<h1>Similar Coefficient</h1>
X:
<input type="text" name="x" id="x" value="" onKeyPress="CheckNum()">
<br>
Y:	
<input type="text" name="y" id="y" value="" onKeyPress="CheckNum()">
<br><br>
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
		$smc=0;
		$a=0;
		$b=0;
		for($i=0;$i<$sx;$i++)
		{
			if($xx[0][$i]=="1"&&$yy[0][$i]=="1")
			{
				$a++;
			}
			if($xx[0][$i]=="0"&&$yy[0][$i]=="0")
			{
				$b++;
			}
			if($xx[0][$i]==$yy[0][$i])
			{
				$smc++;
			}
		}
		$t=$a/($sx-$b);
		$smc=$smc/$sx;
		echo "<h4>SMC:".$smc."</h4><h4>Jaccard:".$t."</h4>";
	}
}
?>
<script>
function CheckNum(){
		if (event.keyCode == 48 || event.keyCode == 49 || event.keyCode == 44 || event.keyCode == 13){
		      event.returnValue = true;
	    	}
			else
			{
				event.returnValue = false;
			}
	}
	document.getElementById("x").focus();
</script>
</body>
</html>