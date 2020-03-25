<?php
session_start();
echo '<script>alert("logout")</script>';
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("location:index.html")
?>

</body>
</html>