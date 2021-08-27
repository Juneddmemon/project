<?php
include 'db.php';
include('header.php');

?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	

  <style>




.xyz{

  float: right; width: 70%; margin-top: 10px; margin-left: 50px;


}
/* Clear floats after the columns */

</style>

	<meta charset="utf-8">
	<title></title>
</head>
<body>

	  <!-- <hr class="my-4"> -->

 <div class="container my-3"> 
          <div class="row "> 
   
        <?php
        $movie=$_GET['movie_name'];


        
      $query = "select * from add_movie where movie_name='$movie'"; 	
    $sql = mysqli_query($conn , $query);
      while ($res= mysqli_fetch_array($sql)) {
            $path="images/".$res['image'];


?>        
             


              <div class="col-md-3 card border-0 bg-transparent"><a href="movie.php?movie_name=<?php echo $res['movie_name'];?>"> <img class="card-img-top my-3 " src="<?php echo $path ;?>"  alt="Card image "> </a>
               </div>


    <div class="xyz">
                <h3><?php echo strtoupper($res['movie_name']);  ?></h3> 
                <br>


                <h4><?php echo $res['description'];  ?></h4> <br><br>
                <h5 style="color:white;"><?php echo $res['language'];  ?></h5> <br>

                <a href="hello.php"><button type="submit"  name="book_ticket" class="form-control">Book Ticket</button></a> 

</div>

            <!-- <div  class="col-md-3 card border-0 bg-transparent"><a href="movie.php?movie_name=<?php echo $res['movie_name'];?>"> <img class="card-img-top my-3 " src="<?php echo $path ;?>"  alt="Card image "> </a>
               </div> -->

           
         
    
         </div>
      </div>  
   

  

</div>


                  <br><br>
                

          </div>
             
     <?php
          }?> </div>

</body>
</html>