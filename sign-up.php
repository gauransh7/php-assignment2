<?php 
    include 'connect.php';
if(isset($_POST['submit'])){
	echo '<script>alert("submit clicked")</script>'; 
        $mobile=$_POST['mobile'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $gender=$_POST['gender'];
        $query = "insert into gauransh_user (mobile,name,age,email,password,gender,pimage) values ('$mobile','$name',$age,'$email','$password','$gender','')";
        $run_query = mysqli_query($conn,$query);
	if (!$run_query) {
		echo '<script>alert("run query not executed")</script>'; 
  echo("Error description: " . mysqli_error($conn));
}
else{
    $query1 = "select `id` from `gauransh_user` where `name`='$name'";
    $run_query1 = mysqli_query($conn,$query1);
    $row = mysqli_fetch_array($run_query1);
    $_SESSION['id']= $row['id'];
//    echo '<script>alert('.$_SESSION['id'].')</script>';
    $_SESSION['name'] = $name;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['age'] = $age;
    $_SESSION['gender'] = $gender;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    header("location:profile.php");    
}
    }
    else{
	    echo '<script>alert("submit not clicked")</script>'; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-Up</title>
    <script src="sign-up.js" type="text/javascript"></script>
<script src="jquery.min.js" type="text/javascript"></script>   
 <style>
        .form-div{
            display: flex;
    flex-flow: column;
    /* text-align-last: center; */
        }
        .form-sub-div{
            display: grid;
            margin: 10px 0px 0px 10px;
        }
        .label{

        }
        .error{
            color: red;
            display: none;
        }
        .errorshow{
            color: red;
        }
        select{
            width: 185px;
        }
    </style>
</head>
<body>
    <div>
        <div>
            <form onsubmit="return validation()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-div">
                 <div class="form-sub-div">
                     <div class="label"><label>Mobile :</label></div>
                     <div class="input"><input type="number" id="mobile" name="mobile" /></div>
                     <div class="error" id="mobileerror">error msg here</div>
                    </div>
                 <div class="form-sub-div">
                     <div><label>Name :</label></div>
                     <div><input type="text" id="name" name="name"/></div>
		     <div class="error" id="nameerror">error msg here</div>
			<div id="duplicate"></div>
                 </div>
                 <div class="form-sub-div">
                        <div><label>Age :</label></div>
			<div><input type="number" id="age" name="age" /></div>
                        <div class="error" id="ageerror">error msg here</div>
                 </div>
                 <!-- <div class="form-sub-div">
                     <div><label>City :</label></div>
                     <div><input type="text" id="city" /></div>
                     <div class="error" id="cityerror">error msg here</div>
                 </div> -->
                 <div class="form-sub-div">
                     <div><label>E-mail :</label></div>
                     <div><input type="text" id="email" name="email" /></div>
                     <div class="error" id="emailerror">error msg here</div>
                    </div>
                 <div class="form-sub-div">
                        <div><label>Password :</label></div>
                        <div><input type="password" id="password" name="password" /></div>
                        <div class="error" id="passworderror">error msg here</div>
                 </div>
                 <div class="form-sub-div">
                        <div><label>Confirm Password :</label></div>
                        <div><input type="password" id="cpassword" name="cpassword" /></div>
                        <div class="error" id="cpassworderror">error msg here</div>
                 </div>
                 <div class="form-sub-div">
                        <div><label>Gender :</label></div>
                        <div>
                                <select id="gender" name="gender">
                                    <option value="select">Select</option>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="others">others</option>
                                    </select>
                                </div>
                        <div class="error" id="gendererror">error msg here</div>
                 </div>   
                 <div>
                     <input type="submit" name="submit" id="submit" />
                 </div>
		</div>
		
	    </form>

<script>
$(document).ready(function(){
//	alert("ready");
		$("#name").keyup(function(){
//			alert("keyup");
			var username = $(this).val().trim();
			if(username !=0){
				$.ajax({
//					alert("ajax called");
					url: 'checkduplicate.php',
					type: 'post',
					data:{username:username},
					success: function(response){
//						alert("success");
						$('#duplicate').html(response);
					}
			});
			}else{
				alert("nothing return from duplicatecheck");
				$('#duplicate').html="";
			}
		});
	});
</script>
        </div>
    </div>
</body>
</html>