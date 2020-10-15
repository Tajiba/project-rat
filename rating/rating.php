<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
   
    <style>
	body {
  background-image: url('pink.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%  ;

}
input[type=text],input[type=email],input[type=password]{
            width:100% !important;
        }
        
        
        form {
            margin: 10% auto 0;
        }
    </style>
</head>
<body>
<div class="jumbotron" style="background: url('gg.webp') no-repeat; background-size:cover; height:700px; ">
<div class="container">
    <div class="row">

<form action="" method="post">

    <div>
        <h3 style=" color:blue;">Traviling Tour Review Rating</h3>
    </div>

    <div>
         <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
         <label>Place Name</label>
        <input type="text" name="place">
    </div>

         <div class="rateyo" id= "rating"
        
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

         <span class='result'></span>
    <input type="hidden" name="rating">
    
    

    </div>
    <div align="center" ><input type="submit" value="submit" name="btninsert"></div>

 

   

</form>
</div>
</div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
           
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            $(this).parent().find('input[place=rating]').val(rating);
        });
    });

</script>
</body>

</html>

<?php
$con=mysqli_connect("localhost","root","","crud");
if($con)
{
    echo "connect";
}
else
{
    echo "not connect";
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    

    
    $sql="insert into rating(name,place,rating) values('".$_POST["name"]."','".$_POST["place"]."','".$_POST["rating"]."')";

    if(mysqli_query($con,$sql))
    {
        echo "Added Successfully!";

    }
    else
    {
        echo "Error: ".$sql."<br>" .mysqli_error($con);
    }

    
}

mysqli_close($con);

?>