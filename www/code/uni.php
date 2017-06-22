<?php
// Displaying all universities
function showAllUnis(){
                $db = new PDO("mysql:host=db;dbname=sildb","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->exec("SET NAMES 'utf8'");
            $results = $db->query("SELECT * FROM uni");
            $results = $results->fetchAll(PDO::FETCH_ASSOC);
            foreach( $results as $result ){
              echo '
                     <li class="media">
                    <a class="pull-left" href="university.php?id='.$result["uni_id"].'">
                        <img class="picturenews" src="'.$result["uni_picture"].'" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">'.$result["uni_name"].'</h4>
                        <hr>
                    </div>
                    </li>
              ';
              $uni_id=  $result['uni_id'];
                $_SESSION['uni_id'] = $news_id;
            }
}
// Displaying names of all universites
function listUnis(){
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
                 $results = $db->query("SELECT * FROM uni");
                 
                } catch (Exception $e) {
                echo "Error.";
                exit;
                }


 $results = $results->fetchAll(PDO::FETCH_ASSOC);

 foreach( $results as $result )
 {
   echo '
       <a href="university.php?id='.$result["uni_id"].'" class="list-group-item">'.$result['uni_name'].'</a>
   ';
 }
}
//Showing a detailed descripton of university
function showDetailedUni(){
                   
                
                 $uni_id = $_GET['id'];
                  try {
                    $db = new PDO("mysql:host=db;dbname=sildb","root","root");
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $db->exec("SET NAMES 'utf8'");
                  } catch (Exception $e) {  
                    echo "Could not connect to the database.";
                    exit;
                    }

                  try {
                 $results = $db->query("SELECT * FROM uni WHERE uni_id =".$uni_id."");
                 
                } catch (Exception $e) {
                echo "Error.";
                exit;
                }


 $results = $results->fetchAll(PDO::FETCH_ASSOC);

 foreach( $results as $result )

              {
                echo '

                  <div class="thumbnail">
                    <img class="img-responsive" src="'.$result["uni_picture"].'" alt="">
                    <div class="caption-full">
                        <h4><a href="#">'.$result['uni_name'].'</a>
                        </h4>
                        <p>'.$result['uni_description'].'</p>
                    </div>
                </div>
                
                ';

              }
}
?>