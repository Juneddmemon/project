<?php 
include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- <title>PHP Live MySQL Database Search</title> -->
<style>
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
       
        position: relative;
        display: inline-block;
        font-size: 14px;
         width: 100%;
    
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;

    }
    .result p:hover{
        background: white;
    }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>


  <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>

<!-- START PAGE SOURCE -->
<div class="container">
  <div id="header">
    <h1 id="temp" href="index.php">Movie Ticket Booking</h1>
    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">facebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
        <li><a class="rss" href="#">rss</a></li>
      </ul>
    </div>
    <div id="navigation">
      <ul>
        <li><a class="active" href="index.php">HOME</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="intheatre.php">IN THEATERS</a></li>
        <li>
         <li>

<select name="city" style="background: none; color: white; border: none; font-weight: bold; font-size: 14px;" required>
  <option  value="">SELECT CITY</option>
  <option style="background-color:black; border:none;"value="Ahmedabad">Ahmedabad</option>
  <option style="background-color:black;border:none;"value="saab">Surat</option>
  <option style="background-color:black;border:none;"value="opel">Vadodara</option>
  <option style="background-color:black;border:none;"value="audi">Mumbai</option>
</select></li>
</li>
        <li><a href="comingsoon.php">COMING SOON</a></li>
       
        <li><a href="#">LOGOUT</a></li>
      </ul>
    </div>
    <div id="sub-navigation> 
       
        <li><a href="#"></a></li> 
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      <!-- </ul> -->


    <div class="search-box">
         <input type="text" autocomplete="off" placeholder="Search movie" />
        <div class="result"></div>
    </div>
  



</div>
        </form>
      </div>
    </div>
  </div>
</div>






<!--  <div class="search-box">
  <input id="myInput" class="form-control" type="text" placeholder="Search..">
</div> -->
</div> 
        </form>
      </div>
    </div>
  </div>
</div>

</div>
</body>
</html>


