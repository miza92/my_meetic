<?php

if(isset($_POST['save'])) {
        if (isset($_POST['username']) && $_POST['username'] !== "")
        {
            $modif = new change();
            $modif->change_username();

          echo '<script>alert("Your updates have been update successfully!")</script>';
        }
        if (isset($_POST['display_name']) && $_POST['display_name'] !== "") {
            $modif = new change();
            $modif->change_display_name();
            echo "<script>alert('Your updates have been done successfully ! ')</script>";
        }
        
        if (isset($_POST['email']) && $_POST['email'] !== "")
        {
            $modif = new change();
            $modif->change_email();
            echo "<script>alert('Your updates have been done successfully ! ')</script>";
        } 
        if (isset($_POST['phone']) && $_POST['phone'] !== "")
        {
            $modif = new change();
            $modif->change_phone();
            echo "<script>alert('Your updates have been done successfully ! ')</script>";
        }  
        if (isset($_POST['localisation']) && $_POST['localisation'] !== "")
        {
            $modif = new change();
            $modif->change_localisation();
            echo "<script>alert('Your updates have been done successfully ! ')</script>";
		} 
		if (isset($_POST['bio']) && $_POST['bio'] !== "")
        {
            $modif = new change();
            $modif->change_bio();
            echo "<script>alert('Your updates have been done successfully ! ')</script>";
		} 
		if (isset($_POST['website']) && $_POST['website'] !== "")
        {
            $modif = new change();
            $modif->change_website();
            echo "<script>alert('Your updates have been done successfully ! ')</script>";
        } 

        if(isset($_POST['theme_black']))
        {
            include 'edit.php'; 
        }
    }