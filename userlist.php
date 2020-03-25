<?php
    include 'connect.php';
   // if(isset())
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>userlist</title>
</head>
<body>
    <div class="main-div">
        <div class="list">
            <table>
                <th>User Registered</th>
            </table>
            <?php
                $query = "select name from gauransh_user";
                $run_query = mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run_query)){
                    echo "<tr>".$row['name']."</tr><br>";
                }
            ?>
        </div>
        <div class="chat-box">
                <div class="chat-history"></div>
                <div class="chat-message">
                    <input type="text" id="message">
                    <input type="submit" name="submit" id="submit" value="send">
                </div>
        </div>
    </div>
    <script>
$(document).ready(function(){
	alert("ready");
		$("#submit").keyup(function(){
//			alert("keyup");
			var message = $("#message").val().trim();
			if(message !=0){
				$.ajax({
//					alert("ajax called");
					url: 'sendmessage.php',
					type: 'post',
					data:{message:message},
					success: function(response){
//						alert("success");
						$('#message').html(response);
					}
			});
			}else{
				alert("nothing return from duplicatecheck");
				$('#message').html="";
			}
		});
	});
</script>
</body>
</html>