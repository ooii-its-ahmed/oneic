<?php
     session_start();
?>

<html>
<title>Rozen Bouquet</title>
<meta name="description" content="This is a website of a flowershop">
<meta name="keywords" content="product, service, about, vase, rose">
    
    <style>
  
*{
    text-align: center;
    font-family: sans-serif;
        }        
        
body {
    margin:0;
    background-color: floralwhite;
        }

ul {
  
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
  
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 30px 35px;
  text-decoration: none;    
 
}    
       
.bgimg{
    
    background-position: center;
    background-size:cover;
    min-height: 75%;
    background-attachment: fixed;
    background-image: url(../images/bg1.png);
            
        }
.search{
    border: 0px;
    height: 40px;
    width: 300px;
    padding: 20px 10px;
    border-radius: 50px;
   
        }
.div1{
    position: absolute;
    
    text-align: left;
    padding: 12px 24px;
    padding-top: -2px;
    
        }
.div2{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
        }

.div4{
    color: black;
    
    font-size: 18px;
    filter: grayscale(75%);
    text-align: center;
    
        }
.headers{
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left:10px;
    padding-right:10px;
    background-color:black;
    color:white;
    display:inline-block;
    border: 15px;
    letter-spacing: 4px;
    align-content: center;
    text-align: center;
    font-size: 15px;
        }
        
.product1{
    text-indent: 110px; 
    text-align: center;
    font-family: monospace;
    font-size: 20px;
        }   
        
       
.service{
    padding-top: 10px;
    padding-bottom: 10px;
    border: 1px solid;
    padding-right: 50px;
    padding-left: 50px;
    border-color: black;
    box-shadow: 10px;
    font-family: monospace;
        }

        .dif{
            font-family: monospace;
            background-color: darkgray;
            text-align: left;
            font-size: 20px;
        }        
        
</style>
    
    <script src="../script/jquery-3.6.0.js"> </script>
    <script>
$(document).ready(function(){
 # $(".send").mouseenter(function(){
  #  alert(" The form will be sumbited once you click the button!");
  #});
     $("input").focus(function(){
    $(this).css("background-color", "grey");
  });
  $("input").blur(function(){
    $(this).css("background-color", "floralwhite");
  });
   $(".form").click(function(){
    $(".formm").slideToggle("slow");
  });
 $(".more2").click(function(){
    $(".dif").hide();
  });
  $(".more1").click(function(){
    $(".dif").show();
  });
});
</script>
    
    
    
    
    <!--Header-->
    
    
    <header class="bgimg" id="home">
        
        
        <ul>
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#products">OUR PRODUCTS</a></li>
        <li><a href="#services">OUR SERVICES</a></li>
        <li><a href="#contact">CONTACT US</a></li>
    <?php
                if(empty($_SESSION["username"])){
                        echo '<li><a href="login.html">LOG IN</a></li>';
    }
            ?>
        
    <?php
                if(!empty($_SESSION["username"])){
                        echo '<li><a href="logout.php">LOG OUT</a></li>';
    }
            ?>
        
        <li><a href="update2.php">UPDATE ACCOUNT INFO</a></li>
        
        <?php
            
            if($_SESSION['username'] == 'admin_me'){
                echo "<li><a href='add_products.php'>ADD PRODUCTS</a></li>";
            }
            
            ?>
        <li> <div style="margin-top: 15px; margin-left: 950px;"> <form action="https://www.google.com/search" method="get">
    <input class="search" type="search" name="q" placeholder="Search about" >
        

        </form></div></li>
            
        
    </ul>
       
        
    </header>
    
    
    <header>
    
        
    
     <div class="div1">
    <span style="background-color: transparent; color: black; font-family: cursive;">Available 24/7</span></div>   
    
    <div class="div2"><span style="font-size: 80px; color: black; font-family:cursive;">Rozen<br>Bouquet</span></div> 
    
        
       
    
    </header>


<!--About us container-->
    <div class="div4" style="margin: 250px" >
    <div  style="max-width: 700px; text-align: center;">
    
    <body >
        <?php
            include "db_connect.php"; 
            echo "<br><br>";
        $id = $_SESSION['id'];
        
         $sql_2 = "SELECT * FROM user where id = '$id'";

    $result_2 = mysqli_query($conn, $sql_2);

    // fetch rows

    $row = mysqli_fetch_assoc($result_2);
        
   
    echo "<br><br>";

   echo "<b>Welcome ", $row["name"], " your ID is ", $id, "<b>";
    echo "<br><br><hr>";
        
        
        ?>
        <br><br>
    <h5 class="headers" id="about">ABOUT US</h5>
    <p  class="p1" style="font-family: monospace; line-height: 2.0;">We offer you a variety of options and distinctive assortments of natural and artificial roses, to reach your homes with high quality and satisfactory speed.<br>
    Rozen Bouquet allows the user to choose the flowers according to their desire in color and quantity and provides the option of collections designed from the store and ready for immediate delivery daily. </p>  
        

   

        </body>
    
</div>
    </div>  
        
        
<!--Our products container-->
    <br><br>
     <div class="div4" style="margin: 250px">
    <div  style="max-width: 700px;">
    <h5 class="headers" id="products">OUR PRODUCTS</h5>
        
     
<table>
          <tbody>
<br><br><br>
         <td  class="product1"> <a href="../html/bouquets.php"><h5>BOUQUETS</h5></a> </td> 
          
         <td class="product1"><a href="../html/Vases.php"><h5>VASES</h5></a></td>
              
        <td class="product1"> <a href="../html/Roses.php"><h5>ROSES</h5></a>
          </td>
     
              </tbody>
</table>
        <br><br>
         <button class="more1" style="width: 50%; color: white; background-color: black; font-family: monospace; font-size: 15px">Click here to SHOW extra information </button>
        <br><br>
         <button class="more2" style="width: 50%; color: white; background-color: black; font-family: monospace; font-size: 15px">Click here to HIDE extra information </button>
        <br><br>
        <ul class="dif">
        <li><a>BOUQUET: an attractively arranged bunch of flowers, especially one presented as a gift or carried at a ceremony.</a></li>
        <li><a>VASE: a decorative container without handles, typically made of glass or china and used as an ornament or for displaying cut flowers.</a></li>
        <li><a>ROSE: a fragrant flower that comes in many different varieties and colors, including red, white, pink, and yellow.</a></li>
        
        </ul>
         </div>
        </div>

       

<!--Our services container-->
   <br><br><br><br>
         <div class="div4" style="margin: 250px">
    <div  style="max-width: 700px;">

    <body>
 <h5 class="headers" id="services">OUR SERVICES</h5>
    
    <p class="p1" style="font-family: monospace; line-height: 2.0;">We also provide event decoration services (e.g: weddings, birthdays..etc).<br> We understand your requirements and will create a space that meets your expectations.</p>
    
    <p class="p1" style="font-family: monospace; line-height: 2.0;">We will be happy to serve you, Please fill in this form!</p>
        
        <br>
    <button class="form" style="width: 30%; color: white; background-color: black">click here to fill a form</button>
        
    <form class="formm" method="post" target="_blank" action="insert_service.php">
       
    <p><input type="text" placeholder="Your Name" required class="service" name="name"></p>
    <p ><input type="email" placeholder="Your Email" required class="service" name="email"></p>  
    <p><input type="tel" placeholder="Your Phone Number" required class="service" name="phone"></p> 
    <p><input type="number" placeholder="How many people?" required min="1" class="service" name="people"></p>    
    <p><input type="text" placeholder="Your Location" required class="service" name="location"></p>  
    <p><input type="text" placeholder="Special Requirements" class="service" name="req"></p>
    <p><input type="date" placeholder="Date" required class="service" value="Date" name="date"></p> 
        <br>
        
    <p><button class="send" type="submit" style="width: 20%; color: white; background-color: black">SEND</button></p>    
    </form>
    
    </body>
        
             </div>
        </div>


<!--Footer-->
    <br><br><br>
    <footer style="color: white; background-color: black">
    <p id="contact">CONTACT US</p>
    <a href="tel:+968 1234 5678"><img src="../images/phone.png" width="40" alt="Call Us"></a> 
    <a href="https://www.twitter.com"><img src="../images/twitter.png" width="40" alt="Twitter"></a>    
    <a href="https://www.instagram.com"><img src="../images/instagram.png" width="40" alt="Instagram"></a>
        <hr>
        <p>©2022 RozenBouquet.com</p>
    </footer>










</html>