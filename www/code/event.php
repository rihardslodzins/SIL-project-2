<?php
// Shows all events - picture, name, date
function showAllEvents(){
            $db = new PDO("mysql:host=db;dbname=sildb","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->exec("SET NAMES 'utf8'");
            $results = $db->query("SELECT * FROM events");
            $results = $results->fetchAll(PDO::FETCH_ASSOC);
            foreach( $results as $result ){
              echo '
                     <li class="media">
                    <a class="pull-left" href="eventdetails.php?id='.$result["event_id"].'">
                        <img class="picturenews" src="'.$result["event_picture"].'" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">'.$result["event_name"].'</h4>
                        <hr>
                        <p class="author">'.$result["event_date"].'</p>
                    </div>
                    </li>
              ';
              $event_id=  $result['event_id'];
                $_SESSION['event_id'] = $news_id;
            }
}
// Displays all events titles 
function listEvents(){
                    $event_id = $_GET['id'];
                  try {
                    $db = new PDO("mysql:host=db;dbname=sildb","root","root");
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $db->exec("SET NAMES 'utf8'");
                  } catch (Exception $e) {  
                    echo "Could not connect to the database.";
                    exit;
                    }

                  try {
                 $results = $db->query("SELECT * FROM events");
                 
                } catch (Exception $e) {
                echo "Error.";
                exit;
                }


 $results = $results->fetchAll(PDO::FETCH_ASSOC);

 foreach( $results as $result )
 {
   echo '
       <a href="eventdetails.php?id='.$result["event_id"].'" class="list-group-item">'.$result['event_name'].'</a>
   ';
 }
}
// Displays a specific event in detail - picture, date, name, description
function showDetailedEvent(){
                   
                
                 $event_id = $_GET['id'];
                  try {
                    $db = new PDO("mysql:host=db;dbname=sildb","root","root");
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $db->exec("SET NAMES 'utf8'");
                  } catch (Exception $e) {  
                    echo "Could not connect to the database.";
                    exit;
                    }

                  try {
                 $results = $db->query("SELECT * FROM events WHERE event_id =".$event_id."");
                 
                } catch (Exception $e) {
                echo "Error.";
                exit;
                }


 $results = $results->fetchAll(PDO::FETCH_ASSOC);

 foreach( $results as $result )

              {
                echo '

                  <div class="thumbnail">
                    <img class="img-responsive" src="'.$result["event_picture"].'" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">'.$result['event_date'].'</h4>
                        <h4><a href="#">'.$result['event_name'].'</a>
                        </h4>
                        <p>'.$result['event_description'].'</p>
                    </div>
                </div>
                
                ';

              }
}
// Displays all comments for a specific event 
 function showComments(){
              $event_id = $_GET['id'];
             $db = new PDO("mysql:host=db;dbname=sildb","root","root");
             $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
             $comments = $db->query("SELECT * FROM comment_ev WHERE comment_id =".$event_id.""); 
             $comments = $comments->fetchAll(PDO::FETCH_ASSOC);
             foreach( $comments as $comment ){
               echo '

                    <div class="row">
                        <div class="col-md-12" id="cm">
                            '.$comment["cm_name"].'
                            <span class="pull-right">'.$comment["cm_date"].'</span>
                            <p>'.$comment["comment"].'</p>
                        </div>
                    </div>  
                    <hr>
               ';
             }
 }

?>