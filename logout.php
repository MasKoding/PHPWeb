<?php 
// session_start() ; untuk membuat session
//session_destroy(); menghapus session
session_start();
session_destroy();
   
// location.href = sama dengan kode header untuk redirect ke halaman yang dituju
echo "<script>
 
        window.location.href='login.php';
 
</script>";

?>