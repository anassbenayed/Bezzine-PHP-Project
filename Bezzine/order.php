<?php 
session_start();
if (isset($_POST['submit'])){
	if(!empty($_SESSION['user_info'])) {
		$qty1=$_POST['qty1'];
		$qty2=$_POST['qty2'];
		$qty3=$_POST['qty3'];
		$qty4=$_POST['qty4'];
		$qty5=$_POST['qty5'];
		$qty6=$_POST['qty6'];
		$qty7=$_POST['qty7'];
		$qty8=$_POST['qty8'];
		$qty9=$_POST['qty9'];
		$user_info=$_SESSION['user_info'];
		$sum=3*$qty1+4*$qty2+3*$qty3+10*$qty4+24*$qty5+5*$qty6+10*$qty7+13*$qty8+8*$qty9;
		
		$msg="Order placed successfully. Please make a payment of ".$sum." Dinars by cash on successful delivery";
		$connect = mysqli_connect("localhost","root","","bezzine");

		//mysqli_select_db("bezzine") or die("couldn't find database");
$sql1="INSERT INTO orders(email,qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9)VALUES('$user_info','$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9');";
		if(mysqli_query($connect, $sql1))
		{  
			echo '<script type="text/javascript"> alert("'.$msg.'")</script>';
		}
		else
		{  
			echo "<script type='text/javascript'>alert('Could not place order');</script>";
		} 
	}
	else
		echo "<script type='text/javascript'>alert('Please login');</script>";
}
?>
<html>
<head>
<title>Order</title>
<style type="text/css">
@import url(style.css);
   a:link {color: #ffffff}
   a:visited {color: #ffffff}
   a:hover {color: #ffffff}
   a:active {color: #ffffff}
  font{color:white}
img{width:300; height:200;}
table{border-color:white;height:90%;}
img{border-color:white}
body{no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;}
</style>
<script type="text/javascript">
	function subtractQty(qty){
		if(qty.value - 1 < 0)
			return;
	else
	qty.value--;
	}
	function chk()
	{
		var qty1=document.getElementById("qty1");
		var qty2=document.getElementById("qty2");
		var qty3=document.getElementById("qty3");
		var qty4=document.getElementById("qty4");
		var qty5=document.getElementById("qty5");
		var qty6=document.getElementById("qty6");
		var qty7=document.getElementById("qty7");
		var qty8=document.getElementById("qty8");
		var qty9=document.getElementById("qty9");
		if((qty1.value=='' && qty2.value=='' && qty3.value=='' && qty4.value=='' &&qty5.value=='' && qty6.value=='' && qty7.value=='' && qty8.value=='' &&qty9.value=='')||(qty1.value=='0' && qty2.value=='0' && qty3.value=='0' && qty4.value=='0' && qty5.value=='0' && qty6.value=='0' && qty7.value=='0' && qty8.value=='0' && qty9.value=='0' ))
		{
			alert("Please select atleast One meal");
			return false;
		}
		return true;	
	}
</script>
</head>



<body background="bg1.jpg">
<FONT size="4" color="white">
<NAV align="right">
<A HREF="index.php">Home</A>&nbsp&nbsp&nbsp

<?php  
if(isset($_SESSION['user_info']))
	echo 'Welcome <A HREF="login.php"> '.$_SESSION['user_info'].'</a>';
else
	echo '<A HREF="register.php">Login/Register</A>';
?>

</FONT></NAV>
<form action="order.php" name="orderform" method="post">
<table cellspacing="5" cellpadding="2" align="center">
<caption><font size="5"><U>ORDER HERE</U></font></caption>
<tr><td>
<img src="menu/gulab_jamun.jpg" width="300" height="200" border="5"><br/>
<font size="4">ELmraweb</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty1);' value='-'/>
<font size="4">3 DT</font>
</td>
<td>
<img src="menu/indian_cuisine.jpg" width="300" height="200" border="2"><br/>
<font size="4">Samssa</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty2").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty2);' value='-'/>
<font size="4">4 DT</font>
</td>
<td>
<img src="menu/plain_naan.jpg" width="300" height="200" border="2"><br/>
<font size="4">Mlewi</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty3").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty3);' value='-'/>
<font size="4">3 DT</font>
</td>
</tr>
<tr>
<td>
<img src="menu/pulav.jpg" width="300" height="200" border="2" ><br/>
<font size="4">Rice Jerbi</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty4").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty4);' value='-'/>
<font size="4">10 DT</font>
</td><td>
<img src="menu/pizza.jpg" width="300" height="200" border="2"><br/>
<font size="4">Pizza Chef</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty5").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty5);' value='-'/>
			<font size="4">24 DT</font>
</td>
<td>
<img src="menu/paneer-bhurji.jpg" width="300" height="200" border="2"><br/>
<font size="4">Keftaji</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty6").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty6);' value='-'/>
<font size="4">5 DT</font>
</td>
</tr>
<tr>
<td>
<img src="menu/prawn_biryani.jpg" width="300" height="200" border="2"><br/>
<font size="4">Couscous</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty7' id='qty7' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty7").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty7);' value='-'/>
<font size="4">10 DT</font>
</td><td>
<img src="menu/fish.jpg" width="300" height="200" border="2"><br/>
<font size="4">Poisson Grillee</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty8' id='qty8' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty8").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty8);' value='-'/>
<font size="4">13 DT</font>
</td>
<td>
<img src="menu/mutton_dum_biryani.jpg" width="300" height="200" border="2"><br/>
<font size="4">Rice non-Jerbi</font>
&nbsp;&nbsp;<input type='number' value="0" name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty9").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty9);' value='-'/>
<font size="4">8 DT</font>
</td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr><td colspan="3">
<input type="submit" name="submit" value="Order now!"  class="button" onclick="return chk()"></input></td></tr>
</table>
</form>
</body>
</html>