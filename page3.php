<?php
echo "<html><body style='background:aquamarine;color:".$_POST['txtcolor'].";'><center>";
	$sr=$_POST['sr'];
	$ct=0;
	echo "<form><div style='width:400px;box-shadow:2px 3px 4px grey;background:black;border-width:10px 10px 10px 10px;border-radius:15px;'><h1 style='box-shadow:1px 3px 2px grey;border-width:10px 10px 10px 10px;
	width:300px;border-radius:100px;'>INPUT DATA</h1><form>";
	while($ct<$sr){
		echo "<br><br><b>".$_POST['label'][$ct].": </b>
		<u><i>".$_POST['ans'][$ct]."</u></i>";
		$ct++;
	}
echo "</div></center></body></html>";
?>