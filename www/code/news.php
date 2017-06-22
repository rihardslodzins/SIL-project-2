<?php
// This function show the latest news record from Database
function showLatestNews(){
    $db = new PDO("mysql:host=db;dbname=sildb","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $db->exec("SET NAMES 'utf8'");
            $results = $db->query("SELECT * FROM news WHERE news_id = (SELECT MAX(news_id) FROM news)");
            $results = $results->fetchAll(PDO::FETCH_ASSOC);
            foreach( $results as $result ){
              echo '
                    <div class="col-md-6 col-lg-6 newscontainer ">
                      <div class="blog-stripe">
                          <a href="newsdetail.php?id='.$result["news_id"].'">
                              <img class="mainpicture" src="'.$result["news_picture"].'" alt="" class="feature">
                              <h2 class="text-center "><span>'.$result["news_title"].'</span></h2>
                           </a>
                      </div>
                    </div>
              ';
                 $news_id=  $result['news_id'];
                $_SESSION['news_id'] = $news_id;
            }
}
//This function shows all the news except the news with the last ID
function showAllNews(){
                   
                  try {
                    $db = new PDO("mysql:host=db;dbname=sildb","root","root");
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $db->exec("SET NAMES 'utf8'");
                  } catch (Exception $e) {  
                    echo "Could not connect to the database.";
                    exit;
                    }

                  try {
                 $results = $db->query("SELECT * FROM news WHERE news_id != (SELECT MAX(news_id) FROM news)");
                 
                } catch (Exception $e) {
                echo "Error.";
                exit;
                }


 $results = $results->fetchAll(PDO::FETCH_ASSOC);

 foreach( $results as $result )

              {
                echo '
                     <li class="media">
                    <a class="pull-left" href="newsdetail.php?id='.$result["news_id"].'">
                        <img class="picturenews" src="'.$result["news_picture"].'" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">'.$result["news_title"].'</h4>
                        <hr>
                        <p class="author">'.$result["news_author"].'</p>
                    </div>
                    </li>
                    
                ';
                $news_id=  $result['news_id'];
                $_SESSION['news_id'] = $news_id;
              } 

}
//Shows selected news details
function showDetailedNews(){
               
                
                 $news_id = $_GET['id'];
                  try {
                    $db = new PDO("mysql:host=db;dbname=sildb","root","root");
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $db->exec("SET NAMES 'utf8'");
                  } catch (Exception $e) {  
                    echo "Could not connect to the database.";
                    exit;
                    }

                  try {
                 $results = $db->query("SELECT * FROM news WHERE news_id =".$news_id."");
                 
                } catch (Exception $e) {
                echo "Error.";
                exit;
                }


 $results = $results->fetchAll(PDO::FETCH_ASSOC);

 foreach( $results as $result )

              {
                echo '

                  <div class="thumbnail">
                    <img class="img-responsive" src="'.$result["news_picture"].'" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right">'.$result['news_date'].'</h4>
                        <h4><a href="#">'.$result['news_title'].'</a>
                        </h4>
                        <p>'.$result['news_article'].'</p>
                    </div>
                </div>
                
                ';

              }


}
//List all news articles titles
function listNews (){
  $news_id = $_GET['id'];
                  try {
                    $db = new PDO("mysql:host=db;dbname=sildb","root","root");
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $db->exec("SET NAMES 'utf8'");
                  } catch (Exception $e) {  
                    echo "Could not connect to the database.";
                    exit;
                    }

                  try {
                 $results = $db->query("SELECT * FROM news");
                 
                } catch (Exception $e) {
                echo "Error.";
                exit;
                }


 $results = $results->fetchAll(PDO::FETCH_ASSOC);

 foreach( $results as $result )
 {
   echo '
       <a href="newsdetail.php?id='.$result["news_id"].'" class="list-group-item">'.$result['news_title'].'</a>
   ';
 }

 function showComments(){
              $news_id = $_GET['id'];
             $db = new PDO("mysql:host=db;dbname=sildb","root","root");
             $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
             $comments = $db->query("SELECT * FROM comments WHERE comment_id =".$news_id.""); 
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
}
?>