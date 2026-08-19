<?php

include("../config.php");


header("Content-Type: application/json");



$data = array();





// Total visitor

$visitor = mysqli_query($conn,

"SELECT COUNT(*) AS total

FROM visitor_logs"

);



$totalVisitor = mysqli_fetch_assoc($visitor);



$data['total_visitor'] = $totalVisitor['total'];






// Popular destination


$destination = mysqli_query($conn,


"SELECT 

destinations.destination_name,

COUNT(visitor_logs.destination_id) AS views


FROM visitor_logs


JOIN destinations


ON visitor_logs.destination_id = destinations.destination_id


GROUP BY visitor_logs.destination_id


ORDER BY views DESC

LIMIT 5"


);




$data['popular_destination'] = array();



while($row=mysqli_fetch_assoc($destination)){


$data['popular_destination'][]=$row;


}







// Average rating


$rating=mysqli_query($conn,


"SELECT AVG(rating) AS average_rating

FROM destination_ratings"


);



$avg=mysqli_fetch_assoc($rating);



$data['average_rating'] =

number_format(

$avg['average_rating'],

2

);







// Total events


$events=mysqli_query($conn,


"SELECT COUNT(*) AS total_event

FROM events"


);



$totalEvent=mysqli_fetch_assoc($events);



$data['total_event']=$totalEvent['total_event'];







echo json_encode($data);



?>