<?php
session_destroy();
//header('Location:../?page=login');
echo '<script>
window.location = "login.php";
</script>'
?>