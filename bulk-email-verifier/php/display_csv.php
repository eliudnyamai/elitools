<?php
session_start();
set_time_limit(0);
include 'functions.php';
if(isset($_SESSION['user'])){
 $user=$_SESSION['user'];
}
else{
 header("Location: ../");
exit;
}
$dat=array();
    $fp = fopen ( "uploads/".$user.".csv" , "r" );
    while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) {
        $i = 0;
        $tr=array();
        foreach($data as $row) {
        $tr[]= $row;
           $i++ ;
        }
        $dat[]=$tr;
        $tr=[];
    }
    fclose ( $fp );
    echo json_encode($dat);
    ?>
