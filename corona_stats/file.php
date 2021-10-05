<?php

include 'dbcon.php';
if (isset($_POST['submit'])){
     $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symptom = $_POST['coronasym'];
    $msg = $_POST['message'];

    $chk = " ";
    foreach($symptom as $chk1){
    	$chk. = $chk1.",";
    }
    $insertquery= "insert into coronacases(	username,	email,	mobile,	symptom,	message)values('$username',	 '$email',           '$mobile', '$chk', '$message')";

    $query= mysqli_query($con, $insertquery);

  if($query){
	?>
    <script >
    	alert("inserted success");
    </script>

	<?php

  }else{
	?>
    <script >
    	alert("not inserted");
    </script>

	<?php

  }

}
	  

?>