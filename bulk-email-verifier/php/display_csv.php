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
 $csv=array();
 $path = 'uploads/'.$user.'.csv';
    $fp = fopen ( 'uploads/'.$user.'.csv' , "r" );

    while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) {
        $i = 0;
        foreach($data as $row) {
           $csv[]= '
           <tr>'.
           $row.'
           </tr>';
           $i++ ;
        }
    }
    fclose ( $fp );
echo json_encode($csv);
exit();
?>