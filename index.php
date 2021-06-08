<!doctype html>
<html lang-"en">
 <head>
  <!-- required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content-" width= device-width, initial-scale=1, shrink-to-fit=no ">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="Stylesheet" type="text/css" href="css/navbar.css">

  <title> Dart Bank </title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
    <!-- Introduction section -->
        <div class="row into py-1" >
         <img src="https://cutewallpaper.org/21/professional-website-background/professional-images-for-website-background-13-Ride-Now-Pte-Ltd.jpg" style="width:100%; height:100%;position:absolute;" style="float:left;" >
         <br>
         <div class="col-sm-15 col-md-10">
          <div class="heading text-center mt-5 py-2">
            <h3 class="text-center pt-4" style="color : black;"> Welcome to Dart Bank </h3>
            
          </div>
         </div>
         

   <!-- Activity section -->
    <div class="row activity text-center">
      <div class="col-md act">
       <img src="data:image/png;base64,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" style="width:500px;height:200px;">
       <br>
       <br>
       <br>
       <a href="createuser.php"><button style="background-color : #000080 ; color:white">Create a User</button>
      </div>
      <div class="col-md act">  
       <img src="https://www.pngarea.com/pngs/101/1104308_money-icon-png-money-png-icon-hd-png.png"  style="width:500px;height:200px;" >
       <br>
       <br>
       <br>
       <a href="transfermoney.php"><button style="background-color : #000080 ; color: white;">Make a Transaction</button>
      </div>
      <div class="col-md act">
       <img src="https://securityintelligence.com/wp-content/uploads/2018/05/mobile-financial-transactions-are-faster-but-are-they-any-safer.jpg" style="width:500px;height:200px;">
       <br>
       <br>
       <br>
       <a href="transactionhistory.php"><button style="background-color : #000080 ; color: white">Transaction History</button>
      </div> 
    </div>
   </div>
   <footer class="text-center mt-5 py-2">
    <p>&copy 2021.  <b> Dart Bank </b> <br> For any queries contact Sumeli Mitra </p> 
   </footer>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"></script>
  </body>
  </html>
   
