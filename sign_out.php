<?php

if(isset($_POST['sign_out'])){
    session_destroy(); 
    header ('Location: index_page.php'); 
}

?>