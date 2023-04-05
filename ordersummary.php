<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtmlll/DTD/xhtmlll.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Order Summary</title>
    <link href="ordersummary.css" type="text/css" rel="stylesheet"/>
  </head>

  <body> 

  <?php
  if($_POST["items"] && $_POST["firstname"] && $_POST["lastnane"] && $_POST["street"] && $_POST["city"] && $_POST["state"] && $_POST["zip"])
  {
    $items=$_POST["items"];
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $street=$_POST["street"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
    $total=0;
    $shipping=0;

      ?>
        <h1>Order Summary<h1>
        <p>Thank you <?=$firstname ?> for your order to:</p>
        <p><?=street?></p>
        <p><?=$city ?>, <?=$state?> <?=$zip ?> </p>

        <p>You ordered the follow</p>

        <table>
          <tr>
            <th>Item</th>
            <th>Price</th>
          </tr>


      <?php

      foreach($items as $item=>$price){

      
      ?>
      <tr>
        <td><?=$item?></td>
        <td><?=$price?></td>
      </tr>
      <?php
      $total+=$price;
      }

      if($total >= 500){
        $shipping=0;
      }else if($total >= 200){
        $shipping = 20;
      }else{
        $shipping = 30;
      }
      $total+=$shipping;
      ?>
      <tr>
        <td>Shipping</td>
        <td><?=$shipping?></td>
      </tr>
      <tr>
        <td><?=$total?></td>
      </tr>
    </table>

    <?php

  }
  else{
    ?>
    <a href="MockWebsite.html">Go back and complete form properly</a>
    <?php
  }
  ?>
  
  </body>
</html> 