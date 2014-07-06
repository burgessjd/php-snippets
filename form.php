<?php
  include 'includes/form_process.php';
?>


<!-- jQuery scripts for form validation, first one is the primary one, second one needed for phone number validation -->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script



<!-- CSS code for the form -->


<style type="text/css">

fieldset {
	border:solid 1px #CCC;
	padding:5px;
	
	
}

legend {
	font-weight:bold;
	text-align:center;
}



input {
	padding:0 5px 5px 5px;
}

input[type="text"],input[type="email"],input[type="url"],input[type="tel"] {
	
	width:300px;
}


input[type="submit"],input[type="reset"] {
	line-height:25px;
}


input:focus,input:hover {
	background-color:#CCC;
}


label.error { 
     color:#990000; 
	 padding: 0 5px 0 5px;
	 font-weight:bold; 
     display: none; /* initially set to none, validation script makes it visible when needed */
}



.required {
	font-weight:bold;
	
}

</style>



<!-- HTML code for the form -->

<form id="sample" method="post">

<fieldset>

<legend>Sample Form</legend>

<p class="required">Please complete all form fields.</p>
<p>Choose the competition category you are entering:<br/>
<label for="grades" class="error"></label><br/>
<input id="6-9" type="radio" name="grades" value="6-9" /><label for="6-9">6th-9th Grade</label>
<br/>
<input id="10-12" type="radio" name="grades" value="10-12" /><label for="10-12">10th-12th Grade</label>
</p>
<p>
<label for="firstname">Your First Name:</label>
<br/>
<input name="firstname" id="firstname" type="text" placeholder="Enter your first name" maxlength="30" minlength="2" title="Please enter your first name" />
</p>
<p>
<label for="lastname">Your Last Name:</label>
<br/>
<input name="lastname" id="lastname" type="text" placeholder="Enter our last name" maxlength="30" minlength="2" title="Please enter your last name" />
</p>
<p>
<label for="tel">Your Phone Number:</label><br/>
<input name="tel" id="tel" type="tel" placeholder="Enter your phone number" minlengh="10" maxlength="25" title="Please enter valid phone number" />
</p>
<p>
<label for="email">Your Email Address:</label><br/>
<input name="email" id="email" type="email"  placeholder="Enter your email address" minlength="3" maxlength="40" title="Please enter a valid email address" />
</p>
<p>
<label for="title">Your Video's Title on YouTube:</label><br/>
<input name="title" id="title" type="text" placeholder="Enter your video's title" maxlength="35" minlength="2" title="Please enter your video's title" />
</p>

<p>
<label for="url">Your Video's YouTube URL (link):</label><br/>
<input name="url" id="url" type="url" placeholder="Enter your video's URL" minlength="3" maxlength="50" title="Please enter a valid URL" />
</p>

<p>
<label for="date">Date You Posted Your Video to YouTube (mm/dd/yyy):</label><br/>
<input name="date" id="date" type="date" placeholder="Enter your video's posting date" maxlength="10" title="Please enter a valid date" />
</p>




<input type="submit" name="submit" value="Submit Form" />&nbsp;<input type="reset" name="reset" value="Reset Form" />


</fieldset>


</form>

<!-- validation script needed because HTML5 validations not implemented by all browsers -->
<script type="text/javascript">



$(document).ready(function() {
	$("#sunwise").validate({
		rules: {
			firstname:"required",lastname:"required",title:"required",grades:"required",
			tel: {
				required:true,
				phoneUS:true
				},
			email: {
				required: true,
				email:true
				},
			url: {
				required:true,
				url:true
				},
			date: {
				required:true,
				date:true
				}
		},
		 messages: {
             grades: "Please select your category"
      }	
			
});
});
</script>







        

