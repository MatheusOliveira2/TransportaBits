<?php   
    #controlador responsável por realizar o logout do usuário
    unset($_SESSION['cnpj']);
    header('location:../index.php?logout=true');
?>	    