<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $sid = $_SESSION['id'];
        $pimg = $_FILES['pimage']['name'];
        $pimg_temp = $_FILES['pimage']['tmp_name'];
        move_uploaded_file($pimg_temp, "./pimg/$pimg");
        $query = "UPDATE `gauransh_user` SET `pimage`='$pimg' WHERE `id`='$sid'";
      //  echo '<script>alert($query)</script>';
        $run_query = mysqli_query($conn,$query);
        if(!$run_query){
            echo("Error description: ".mysqli_error($conn));
        }
        else{
            //echo '<script>alert("1")</script>';
            $_SESSION['pimage'] = $pimg;
        }
        location.reload();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
</head>
<body>

<?php
if(isset($_SESSION['pimage'])){ ?>
    <div id="pimage"><label>Profile Image :</label><img src="./pimg/<?php echo $_SESSION['pimage'];?>" style="width:100px ; height:100px"/>
  <?php  } else { ?>
    
    <form id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
    <label>Add Profile Image</label><input type="file" name="pimage" id="pimage">
    <div>
        <input type="submit" name="submit" id="submit" value="save"/>
    </div>
</form>
  <?php } ?>
<div><label>name :</label><?php echo $_SESSION['name']?></div>
    <div><label>age :</label><?php echo $_SESSION['age']?></div>
    <div><label>gender :</label><?php echo $_SESSION['gender']?></div>
    <div><label>email :</label><?php echo $_SESSION['email']?></div>
    <div><label>password :</label><?php echo $_SESSION['password']?></div>
    <div><label>mobile :</label><?php echo $_SESSION['mobile']?></div>
    <div>
        <a href="edit.php">
            <button id="edit">Edit Profiile</button>
        </a>
    </div>
</body>
</html>