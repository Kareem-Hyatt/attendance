<?php 

    require_once 'db/conn.php';

    if(!$_GET['id'])
    {
        header('Location: viewrecords.php');
        include 'includes/errormessage.php';
        // echo 'error';
    }
    else
    {
        $id = $_GET['id'];
        $result = $crud->deleteAttendee($id);

        if($result)
        {
            header("Location: viewrecords.php");
        }
        else{
            // echo 'error';
        include 'includes/errormessage.php';
        }
    }

?>