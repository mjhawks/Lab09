
<html>
  <head>
    <title>reciept</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $shipping = $_POST['shipping'];
    $tv = $_POST['tvdata'];
    $cell = $_POST['celldata'];
    $asper = $_POST['asperdata'];
    $totalprice = $_POST['totalprice'];
    echo 'welcome ' .$email. '!<br>';
    echo 'password: ' .$password. '<br>';
    $tvamount = tvprice($tv);
    $cellamount = cellprice($cell);
    $asperamount = asperprice($asper);
    ?>
    <b>your reciept:</b>
    <table id = "reciepttable">
  <tr>
    <th id = "reciepthead"></th>
    <th id = "reciepthead">Quantity</th>
    <th id = "reciepthead">Cost Per Item</th>
    <th id = "reciepthead">Sub Total</th>
  </tr>
  <tr>
    <th id = "reciepthead">TV</th>
    <?php echo '<td id = "recieptbody">' .$tv. '</td>';?>
    <td id = "recieptbody">$57.00</td>
    <?php echo '<td id = "recieptbody">$' .$tvamount. '</td>';?>
  </tr>
  <tr>
    <th id = "reciepthead">Item 2</th>
    <?php echo '<td id = "recieptbody">' .$cell. '</td>';?>
    <td id = "recieptbody">$200.00</td>
    <?php echo '<td id = "recieptbody">$' .$cellamount. '</td>';?>
  </tr>
  <tr>
    <th id = "reciepthead">Item 3</th>
    <?php echo '<td id = "recieptbody">' .$asper. '</td>';?>
    <td id = "recieptbody">$14.00</td>
    <?php echo '<td id = "recieptbody">$' .$asperamount. '</td>';?>
  </tr>
  <tr>
    <th id = "reciepthead">Shipping</th>
    <?php echo '<td id = "recieptbody" colspan="2">' .$shipping. '</td>';
    if ($shipping === 'Overnight'){
      $shipcost = 50;
    }
    elseif ($shipping === 'three day') {
      $shipcost = 5;
    }
    else{
      $shipcost = 0;
    }
    echo '<td id = "recieptbody">$'.$shipcost.'</td>'
    ?>


  </tr>
  <tr>
    <th id = "reciepthead" colspan="3">Total Cost </th>
    <?php echo '<td id = "recieptbody">$' .$totalprice. '</td>';?>
  </tr>

<?php
function asperprice($asp){
  return (int)$asp*14;
}
function cellprice($cel){
  return (int)$cel*200;
}
function tvprice($t){
  return (int)$t*57;
}

?>
</table>
  </body>
</html>
