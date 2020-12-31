$(document).ready(function(){	
  $("#form").on("submit",function(){
    var val_fname= /^[a-zA-Z]{3,10}$/;
    var val_lname= /^[a-zA-Z]*$/;
    var val_storename=/^[0-9a-zA-Z]+$/;
    var val_mobilenumber= /^[0-9]{9,12}$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_gstnumber= /^[0-9]{6,6}$/;
    var val_username= /^[0-9a-zA-Z]+$/;
    var val_password= /^[0-9a-zA-Z]+$/;
    var val_password1= /^[0-9a-zA-Z]+$/;

    $fname= $('#fname').val();
    $lname= $('#lname').val();
    $storename= $('#storename').val();
    $mobilenumber= $('#mobilenumber').val();
    $email= $('#email').val();
    $gstnumber= $('#gstnumber').val();
    $username=$('#username').val();
    $password= $('#password').val();
    $password1= $('#password1').val();


    if(!val_fname.test($fname)){
      alert("Enter Name,Invalid Name!");
      return false;
    }
    else if (!val_lname.test($lname)) {
      //alert(" Enter A Valid lastnamne ");
      return true;
    }
    else if (!val_storename.test($storename)) {
      //alert("enter storename");
      return true;
    }
    else if (!val_mobilenumber.test($mobilenumber)) {
      alert("enter valid phone number");
      return false;
    }
    else if (!val_email.test($email)) {
      alert("enter email");
      return false;
    }
    else if (!val_gstnumber.test($gstnumber)) {
      //alert("enter gstnumber");
      return true;
    } 
    else if (!val_username.test($username)) {
      alert("enter username");
      return false;
    }
    else if (!val_password.test($password)) {
      alert("enter password");
      return false;
    }
    else if (!val_password1.test($password)) {
      alert("enter password1");
      return false;
    }
    else {
      return true;
    }
  });
  
  $("#fname").focusout(function(){
    var val_fname=  /^[a-zA-Z]{3,10}$/;
    $fname= $('#fname').val();
	if($fname == "" ){
		$('#fname_error').html(" Enter Name");
		return false;
		}
    else if(!val_fname.test($fname)){
		$(this).css('border','2px solid red');
		$('#fname_error').html("Invalid Name!");
		return false;
        }
    else {
		$(this).css('border','NONE');
		$('#fname_error').html("");
      return true;
    }
  });
     
  $("#lname").focusout(function(){
		return true;
  });
   
    $("#storename").focusout(function(){
      return true;
  });

        $("#mobilenumber").focusout(function(){
		var val_mobilenumber= /^[0-9]{9,12}$/;
		$mobilenumber= $('#mobilenumber').val();
		if($mobilenumber == "" ){
		$('#mobilenumber_error').html(" Enter phone number");
		return false;
		}
		else if(!val_mobilenumber.test($mobilenumber)){
			$(this).css('border','2px solid red');
	  		$('#mobilenumber_error').html("Phone Number Must Contain Digits Only,Maximum 12 digits including code");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#mobilenumber_error').html("");
		return true;
			}
  });
         $("#email").focusout(function(){
			var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
			$email= $('#email').val();
			if($email == "" ){
			$('#email_error').html(" Enter Email");
			return false;
		}
			
			else if(!val_email.test($email)){
				$(this).css('border','2px solid red');
	  	  		$('#email_error').html("Invalid email , Email must Like abc@gmail.com");	
				return false;
			}
			else {
				$(this).css('border','NONE');
				$('#email_error').html("");
				return true;
			}
	});
		$("#gstnumber").focusout(function(){
			return true;
	});

       $("#username").focusout(function(){
		var val_username= /^[0-9a-zA-Z]+$/;
		$username= $('#username').val();
		if(!val_username.test($username)){
			$(this).css('border','2px solid red');
	  	  	$('#username_error').html("Invalid Username ");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#username_error').html("");

		return true;
		}
  });
   
		$("#password").focusout(function(){
		var val_password= /^[0-9a-zA-Z]+$/;
		$password= $('#password').val();
		if(!val_password.test($password)){
			$(this).css('border','2px solid red');
	  	  	$('#password_error').html("Invalid password ");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#password_error').html("");
		return true;
		}
  });
  		$("#password1").focusout(function(){
		var val_password1= /^[0-9a-zA-Z]+$/;
		$password1= $('#password1').val();
		if(!val_password1.test($password1)){
			$(this).css('border','2px solid red');
	  	  	$('#password1_error').html(" Password Does't Match");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#password1_error').html("");
		return true;
		}
  });
  
 });