<?php
	//include 'create.php';
	//ob_end_clean();
   //no. of elements
	//echo $ct;
	$sr=0;
	//creation of a form
	echo "<html><body style='font-size:".$_POST['size'].";background:".$_POST['color'].";color:".$_POST['txtcolor'].";'><center>
	<form action='page3.php' method='POST' style='box-shadow:2px 3px 4px ".$_POST['txtcolor'].";width:300px;'><table>";
	echo "<tr>
		<h1>".$_POST['ftitle']."</h1>
	</tr>";
	
	while($sr<$_POST['ct']){
		echo"<tr><th><label for='".$_POST['id'][$sr]."'>".$_POST['formlabel'][$sr]."</label></th>";
		echo "<th><input type='".$_POST['ele'][$sr]."' name='ans[]' id='".$_POST['id'][$sr]."' required></th></tr>";
		echo "<th><input type='hidden' name='label[]' value=".$_POST['formlabel'][$sr]."></th>";
		$sr++;
	}
	echo "<th><input type='hidden' name='color' value=".$_POST['color']."></th>";
	echo "<th><input type='hidden' name='txtcolor' value=".$_POST['txtcolor']."></th>";
	echo "<tr><th><input type='hidden' name='sr' value='".$_POST['ct']."' readonly></th></tr>";
	echo "<tr><th><input type=submit value=SUBMIT style='border-radius:20px;background:".$_POST['txtcolor'].";color:".$_POST['color'].";border:".$_POST['color'].";box-shadow:1px 2px 3px ".$_POST['txtcolor'].";margin:30px'></th>";
	echo "<th><input type=reset value='RESET' style='border-radius:20px;background:".$_POST['txtcolor'].";color:".$_POST['color'].";border:".$_POST['color'].";box-shadow:1px 2px 3px ".$_POST['txtcolor']."margin:30px'></th></tr>";
	echo "</table></form></center></body></html>";
?>