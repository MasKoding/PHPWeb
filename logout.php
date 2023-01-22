<?php 
// session_start() ; untuk membuat session
//session_destroy(); menghapus session
session_start();
session_destroy();
   
echo "<script>
 
        window.location.href='login.php';
 
</script>";

?>