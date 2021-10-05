<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php'; ?>
  <?php include 'style/style.php'; ?>
</head>

<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3" >
  <a class="navbar-brand pl-5" href="#">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactid">Contacts</a>
      </li>
      
     
    </ul>
   
  </div>
</nav>
	<div class="main-header">
		<div class="row w-100 h-100">
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/image1.png" width="300" height="300">	
				</div>
				
			</div>
			<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
				<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				     <h1>Let's Stay Safe & Fight Together Against Cor<span class= "corona_rot"><img src="images/image2.png"></span>na Virus</h1>	
				</div>
			</div>
		</div>
		
	</div>
	<section class="corona_update container-fluid">
		<div class="mb-3">
			<h3 class="text-uppercase text-center">Covid-19 Live updates Of The World </h3>
		</div>       
		<div class= "table-responsive">
			<table class="table table-bordered table-striped text-center" id= "tbval">
				<tr>
					<th>Country</th>
					<th>TotalConfirmed</th>
					<th>TotalRecovered</th>
					<th>TotalDeath</th>
					<th>NewConfirmrd</th>
					<th>NewRecovered</th>
					<th>NewDeaths</th>
				</tr>

			</table>
		</div>
	</section>
	<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
		<div class="section_header text-center mb-5 mt-4">
			<h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
    	<div class="col-lg-5 col-md-6 col-12 ml-5">
    		<img src="images/about-covid.png" class="img-fluid">
    	</div>
    	<div class="col-lg-6 col-md-6 col-12">
    		<h2>What is Covid-19 (Corona-Virus)</h2>
    		<p>Coronaviruses are a large family of viruses that usually cause mild to moderate upper-respiratory tract illnesses, like the common cold. However, three new coronaviruses have emerged from animal reservoirs over the past two decades to cause serious and widespread illness and death.</p> 
    		<p>The virus can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols.</p>
    	</div>
    </div>	
  </div>
<!--  ////////////coronavirus symptoms /////// --->
<div class="container-fluid pt-5 pb-5" id="sympid"> 
	<div class="section_header text-center mb-5 mt-4">
		<h1> Coronavirus symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/c1.png" class="img-fluid" width="120" height="120">
					<figcaption>fever</figcaption>
				</figure>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/c2.png" class="img-fluid" width="120" height="120">
					<figcaption>cough</figcaption>
				</figure>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/c3.png" class="img-fluid" width="120" height="120">
					<figcaption>fatigue</figcaption>
				</figure>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/c4.png" class="img-fluid" width="120" height="120">
					<figcaption>loss of taste</figcaption>
				</figure>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/c5.png" class="img-fluid" width="120" height="120">
					<figcaption>difficulty breathing</figcaption>
				</figure>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/c6.png" class="img-fluid" width="120" height="120">
					<figcaption>runny nose</figcaption>
				</figure>
		</div>
	</div>		
</div>
<div class="container-fluid sub-section pt-5 pb-5" id="preventid"> 
	<div class="section_header text-center mb-5 mt-5">
		<h1>How to protect yourself from Coronavirus</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-8">
				<div class="row">

				    <figure >
					  <img src="images/c1.png" class="img-fluid" width="90" height="90">
				    </figure>
				    <figcaption>Get vaccinated</figcaption>
			  </div>
			</div>  
			<div class="col-lg-4 col-md-8 col-12">
				<p>Authorized COVID-19 vaccines can help protect you from COVID-19.You should get a COVID-19 vaccine as soon as you can.Once you are fully vaccinated, you may be able to start doing some things that you had stopped doing because of the pandemic.</p>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-8">
				<div class="row">

				    <figure class="text-center">
					  <img src="images/c1.png" class="img-fluid" width="90" height="90">
				    </figure>
				    <figcaption>Wear Mask</figcaption>
			  </div>
			</div>  
			<div class="col-lg-4 col-md-8 col-12">
				<p>If you are fully vaccinated, to maximize protection from the Delta variant and prevent possibly spreading it to others, wear a mask indoors in public if you are in an area of substantial or high transmission.</p>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-8">
				<div class="row">

				    <figure class="text-center">
					  <img src="images/c1.png" class="img-fluid" width="90" height="90">
				    </figure>
				    <figcaption>Stay 6 fet away from others</figcaption>
			  </div>
			</div>  
			<div class="col-lg-4 col-md-8 col-12">
				<p> Put 6 feet of distance between yourself and people who don’t live in your household.Remember that some people without symptoms may be able to spread virus.Stay at least 6 feet (about 2 arm lengths) from other people.Keeping distance from others is especially important for people who are at higher risk of getting very sick.</p>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-8">
				<div class="row">

				    <figure class="text-center">
					  <img src="images/c1.png" class="img-fluid" width="90" height="90">
				    </figure>
				    <figcaption>Wash your hands often</figcaption>
			  </div>
			</div>  
			<div class="col-lg-4 col-md-8 col-12">
				<p>Wash your hands often with soap and water for at least 20 seconds especially after you have been in a public place, or after blowing your nose, coughing, or sneezing.</p>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-8">
				<div class="row">

				    <figure class="text-center">
					  <img src="images/c1.png" class="img-fluid" width="90" height="90">
				    </figure>
				    <figcaption>Monitor your Health Daily</figcaption>
			  </div>
			</div>  
			<div class="col-lg-4 col-md-8 col-12">
				<p>Take your temperature if symptoms develop.Don’t take your temperature within 30 minutes of exercising or after taking medications that could lower your temperature, like acetaminophen.
</p>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-8">
				<div class="row">

				    <figure class="text-center">
					  <img src="images/c1.png" class="img-fluid" width="90" height="90">
				    </figure>
				    <figcaption>Avoid crowd and poorly ventilated spaces</figcaption>
			  </div>
			</div>  
			<div class="col-lg-4 col-md-8 col-12">
				<p>Being in crowds like in restaurants, bars, fitness centers, or movie theaters puts you at higher risk for COVID-19.
Avoid indoor spaces that do not offer fresh air from the outdoors as much as possible.
If indoors, bring in fresh air by opening windows and doors, if possible.</p>
			</div>
		</div>	
	</div>
<div class="container-fluid sub-section pt-5 pb-5" id="contactid"> 
	<div class="section_header text-center mb-5 mt-5">
		<h1>How to protect yourself from Coronavirus</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-2 col-12">
				<form action="" method="Post">
  <div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name="username"  placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"name="email"  placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>mobile</label>
    <input type="number" class="form-control"name="mobile"  placeholder="mobile" autocomplete="off" required>
  </div>
  <div class="form-group">
	   <label>select symptoms</label><br>
	    <div class="custom-control custom-checkbox custom-control-inline text-capitalize"><input type="checkbox" class="custom-control-input" id="customcheckbox1"name="coronasym[]" value="cold">  
	  	<label class='custom-control-label' for="customcheckbox1">Cold</label>
	    </div>
	    <div class="custom-control custom-checkbox custom-control-inline text-capitalize"><input type="checkbox" class="custom-control-input" id="customcheckbox2"name="coronasym[]" value="fever">  
	  	<label class='custom-control-label' for="customcheckbox2">Fever</label>
	    </div>
	    <div class="custom-control custom-checkbox custom-control-inline text-capitalize"><input type="checkbox" class="custom-control-input" id="customcheckbox3"name="coronasym[]" value="difficulty in breathing">  
	  	<label class='custom-control-label' for="customcheckbox3">Difficulty In Breath</label>
	    </div>
	    <div class="custom-control custom-checkbox custom-control-inline text-capitalize"><input type="checkbox" class="custom-control-input" id="customcheckbox4"name="coronasym[]" value="Feeling weak">  
	  	<label class='custom-control-label' for="customcheckbox4">Feeling Weak</label>
	    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">How are you Feeling</label>
    <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></input>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
		  </div>
		</div>
  </div>  
</div>
<div class="container scrolltop float-right pr-5">
	  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<script type="text/javascript">
	$(".count").counterUp({
		delay:10,
		time:3000
	})
	mybutton= document.getElementById("myBtn");
	window.onscroll=function() {scrollFunction()};
	function scrollFunction(){
	if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
		  mybutton.style.display="block";
	}else{
			mybutton.style.display="none";

	}
	}
	function topFunction(){
		document.body.scrollTop=0;
		document.documentElement.scrollTop=0;
	}

function fetch() 
{
	$.get("https://api.covid19api.com/summary",
		function(data)
		{
       //console.log(data['Countries'].length)
       var tbval= document.getElementById('tval');
       for(var i=1; i<(data['Countries'].length); i++)
       {
       	   var x= tval.insertRow();
       	   x.insertCell(0);
       	   tbval.rows[i].cells[0].innerHTML= data["countries"][i-1]['Country'];
       	   tbval.rows[i].cells[0].style.background= '#7a4a91';
       	   tbval.rows[i].cells[0].style.color= '#fff';
       	   x.insertCell(1);
       	   tbval.rows[i].cells[1].innerHTML= data["countries"][i-1]['TotalConfirmed'];
       	   tbval.rows[i].cells[1].style.background= '#4bb7d8';
       	  x.insertCell(2);
       	   tbval.rows[i].cells[2].innerHTML= data["countries"][i-1]['TotalRecovered'];
       	   tbval.rows[i].cells[2].style.background= '#4bb7d8';
       	  x.insertCell(3);
       	   tbval.rows[i].cells[3].innerHTML= data["countries"][i-1]['TotalDeaths'];
       	   tbval.rows[i].cells[3].style.background= '#f36e23';
       	   x.insertCell(4);
       	   tbval.rows[i].cells[4].innerHTML= data["countries"][i-1]['NewConfirmed'];
       	   tbval.rows[i].cells[4].style.background= '#4bb7d8';
       	   x.insertCell(5);
       	   tbval.rows[i].cells[5].innerHTML= data["countries"][i-1]['NewRecovered'];
       	   tbval.rows[i].cells[5].style.background= '#9cc850';
       	   x.insertCell(6);
       	   tbval.rows[i].cells[6].innerHTML= data["countries"][i-1]['NewDeaths'];
       	   tbval.rows[i].cells[6].style.background= '#f36e23'; 
        } 
    } 
    );
} 
       


</script>

			
</body>
</html>



<?php
include "dbcon.php";
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symptom = $_POST['coronasym'];
    $message = $_POST['message'];

    $chk = " ";
    foreach($symptom as $chk){
     $chk .= $chk.",";
    }
    $insertquery= "insert into coronacases(  username, email,    mobile,   symptom,  message)values('$username',    '$email',           '$mobile', '$chk', '$message')";

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



