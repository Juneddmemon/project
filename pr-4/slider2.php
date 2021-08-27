<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>




</head>
<body>
    <hr class="my-4">

 <div class="container my-4">
          <div class="row">
   
        <?php


        
      $query = "select * from add_movie where status='active' order by rand() LIMIT 8 ";
    $sql = mysqli_query($conn , $query);
      while ($res= mysqli_fetch_array($sql)) {
            $path="images/".$res['image'];
?>         

            <div  class="col-md-3 card border-0 bg-transparent"><a href="movie.php?movie_name=<?php echo $res['movie_name'];?>">
              
                 
   
              <img class="card-img-top mb-1" src="<?php echo $path ;?>"  alt="Card image ">
   
                  <h4 class="card-title text-white mb-5"><?php echo strtoupper($res['movie_name']);  ?></h4> 
              </a></div>
     <?php
          }?>
         </div>
      </div> 
</body>
</html>