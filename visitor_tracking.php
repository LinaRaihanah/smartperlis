<?php

include("config.php");



function trackVisitor($conn,$destination_id=null,$page){



$page = mysqli_real_escape_string(

$conn,

$page

);



if($destination_id != null){



mysqli_query($conn,


"INSERT INTO visitor_logs

(destination_id,page)

VALUES

('$destination_id','$page')"


);



}

else{


mysqli_query($conn,


"INSERT INTO visitor_logs

(page)

VALUES

('$page')"


);



}



}


?>