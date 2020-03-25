<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        echo '<script>alert("submit clicked")</script>';
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = "select * from `gauransh_user` where `name`='$name' and `password`='$password'";
        $run_query = mysqli_query($conn,$query);
        if(!$run_query){
            echo ("error".mysqli_error($conn));
        }
        else
        {
            $row = mysqli_fetch_array($run_query);
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['age'] = $row['age'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['pimage'] = $row['pimage'];
            $_SESSION['gender'] = $row['gender'];
            header("location:profile.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-Up</title>
    <script src="sign-in.js" type="text/javascript"></script>
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
                     <div><label>Name :</label></div>
                     <div><input type="text" id="name" name="name"/></div>
		     <div class="error" id="nameerror">error msg here</div>
                 </div>
                 <div class="form-sub-div">
                        <div><label>Password :</label></div>
                        <div><input type="password" id="password" name="password" /></div>
                        <div class="error" id="passworderror">error msg here</div>
                 </div>
                 <div>
                     <input type="submit" name="submit" id="submit" />
                 </div>
		</div>
		
        </form>
        </div>
    </div>
</body>
</html>
