  <?php


  //$con = mysqli_connect("mysql.hostinger.in","u636508326_","12345678","u636508326_car");
  $con =new mysqli("localhost","root","","ecom_admin");

    if(!$con)
    {
        die('Connection Error'.mysqli_error());
    }
