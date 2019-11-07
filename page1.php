<!doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	  $(".button").hover(function() {
                
                $(this).css("background-color","aquamarine");
                
            }, function() {
                
                $(this).css("background-color","white");
                
            });
	  $(".button1").hover(function() {
                
                $(this).css("background-color","grey");
                
            }, function() {
                
                $(this).css("background-color","white");
                
            });
        $("#p2").click(function(){
    $("form").css({"background-color": "yellow", "font-size": "150%"});
	  });
        $("#p3").click(function(){
    $("form").css({"background-color": "white", "font-size": "100%"});
 
	  });
	});
	</script>
	<meta charset="UTF-8">
	<title>Dynamic Form</title>
	<style type="text/css">
	  #form{
	      border:10px blue ridge;
		  border-width:10px 10px 10px 10px;
		  border-radius:20px;
          margin:30px 500px;
          box-shadow: 2px 5px 5px;	  
	  }
	  #buttonContainer {
                
                width:233px;
                margin: 0 auto;
                
            }
	 .button {
                
                float:left;
                padding: 6px;
                font-size: 90%; 			
            } 		
	 .button1 {
                padding: 6px;
                border-radius:10px;					
            } 	
     .submit  {
	           padding: 6px;
               border-radius:10px;	
			   margin:50px 0px;
			   border-width:10px;
	 }		 
	</style>
</head>
<body>
	<center>
		<form  name="elements" method="POST" action="page1.php"id="form">
		<table>
			<tr>
				<th colspan=2  id="buttonContainer">
					<h2>Page Attributes</h2>
				</th>
			</tr>
			<tr>
				<th><label for="color" class="button">Background Color:</label></th>
				<th><input class="button1"type="color" id=color name=color title='Background Color of the form'></th>
			</tr>
			<tr>
				<th><label for="txtcolor" class="button">Text Color:</label></th>
				<th><input class="button1"type="color" id=txtcolor name="txtcolor" title="font color" value="#ffffff"></th>
			</tr>
			<tr>
				<th><label for="ftitle" class="button">Form Title</label></th>
				<th><input  class="button1" type="text" id=ftitle name=ftitle title='Heading of the Form' required></th>
			</tr>
			<tr>
				<th><label for="size" class="button">Font Size</label></th>
				<th><input  class="button1" type="text" id=size name=size title='Font Size for the form' pattern='[0-9].{0,}'></th>
			</tr>
			<tr>
				<th><label for="num" class="button">No. of Elements:</label></th>
				<th><input class="button1" type="text" name="num" title="Numbers Only" pattern="[0-9].{0,}" id="num" required></th>
			</tr>
			<tr>
				<th><input type="submit" name="sub1" value="  ADD  " class="submit"></th>
				<th><input type="reset" name="reset" value="RESET" class="submit" ></th>
			</tr>
		</table>
		</form>
		<b><p align="center">To change color and text size of form:<b><b class="p2" id="p2"><u>click here</u></b></p>
		<b><p align="center">To change color and text size to default:<b><b class="p3" id="p3"><u>click here</u></b></p>
		<?php
		if(isset($_POST['num'])){
		        ob_end_clean();    
				global $sr;
				$ct=$_POST['num'];
				$sr=1;
				echo "
				<style type='text/css'>
				.serial{
					text-align:center;
					width:100px;
				}
				</style>
				<center><form action='page2.php' method='POST' style='background-color:lightblue;box-shadow:2px 4px 5px black;border-radius:10px;width:800px;'>
					<table>
							<thead>
							<tr>
								<th colspan=5><h1>FORM ATTRIBUTES</h1></th>
							</tr>
								<tr>
									<th><label for='ct'>No. of elements:</label></th>
									<th><input type='text'   name='ct' id='ct' value='".$ct."' readonly></th>
									<th><input type='hidden' name='color' id='color' value='".$_POST['color']."' readonly></th>
									<th><input type='hidden' name='txtcolor' id='txtcolor' value='".$_POST['txtcolor']."' readonly></th>
									<th><input type='hidden' name='ftitle' id='ftitle' value='".$_POST['ftitle']."' readonly></th>
									<th><input type='hidden' name='size' id='size' value='".$_POST['size']."' readonly></th>
								</tr>
								<tr>
									<th>Sr.No</th>
									<th>LABEL</th>
									<th>INPUT TYPE</th>
									<th>NAME</th>
									<th>ID</th>
								</tr>
							</thead>
							<tbody>";
					while( $ct != 0 ){
						echo "
							<tr>
							<td class='serial'>".$sr."</td>
							<td><input type='text' name='formlabel[]' style='border-radius:7px;'></td>
								<td><select name='ele[]' style='border-radius:7px;' id='selection'>
								<option value='text'>TEXT</option>
								<option value='email'>EMAIL</option>
								<option value='password'>PASSWORD</option>
								<option value='radio' id='rd'>RADIO</option>
								<option value='checkbox'>CHECKBOX</option>
								<option value='file'>FILE</option>
								<option value='textarea'>TEXTAREA</option>
								<option value='date'>DATE</option>
								<option value='color'>COLOR</option>
							</select></td>
							<td><input type='text' name='name[]' style='border-radius:7px;'></td>
							<td><input type='text' name='id[]' style='border-radius:7px;'></td>   
							</tr>
						";
						echo '<br>';
					--$ct;
					++$sr;
					}
				echo "<tr><td><input type='submit' value='SUBMIT' 
				style='width:100px;
				font-size:18px;
				background:white;
				color:black;
				border-radius:10px;
				box-shadow:2px 3px 4px black;
				margin:30px' name='sub2'></td>
				      <td><input type='reset' value='RESET' 
				style='width:100px;
				font-size:18px;
				background:white;
				color:black;
				border-radius:10px;
				box-shadow:2px 3px 4px black;
				margin:30px'>
				   </td>
				   </tr>
				   </tbody>
				   </table>
				   </form>
				   </center>";
			
		}
	?>
	</center>
	
</body>
</html>