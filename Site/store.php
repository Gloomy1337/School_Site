<?php 
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003
// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<?php 
// Run a select query to get my letest 6 items
// Connect to the MySQL database  
include "storescripts/connect_to_mysql.php"; 
$dynamicList = "";
//$sql = mysqli_query("SELECT * FROM products");
//$productCount = mysqli_num_rows($sql); // count the output amount
$query = "SELECT * FROM products ORDER BY id ASC ";
$result = mysqli_query($con,$query);
 if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_array($result)){ 
             $id = $row["id"];
			 $product_name = $row["productName"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["dateAdded"]));
			 $quantity = $row["quantity"];
			 $dynamicList .= '<table width="100%" border="0" cellspacing="0" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="store/test' . $id . '.jpg" alt="' . $product_name . '" width="77" height="102" border="1" /></a></td>
          <td width="83%" valign="top">' . $product_name . '<br />
            $' . $price . '<br />
            <a href="product.php?id=' . $id . '">View Product Details</a></td>
            <br />
            <td width="83%" valign="top">'.$quantity. '<br/>
        </tr>
      </table>';
      $_SESSION['id'] = $id;
    }
} else {
	$dynamicList = "We have no products listed in our store yet";
}
mysqli_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store Home Page</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>
<body>
<div align="center" id="mainWrapper">
  <?php include_once("template_header.php");?>
  <div id="pageContent">
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="32%" valign="top"><h3>that guy</h3>
      <p><img src="store/testtest.jpg" alt="Logo" width="300" height="400" border="0" /></td>
    <td width="35%" valign="top"><h3>Latest Designer Fashions</h3>
      <p><?php echo $dynamicList; ?><br />
        </p>
      <p><br />
      </p></td>
    <td width="33%" valign="top"><h3>same guy</h3>
      <p><img src="store/testtest.jpg" alt="Logo" width="300" height="400" border="0" /></p></td>
  </tr>
</table>

  </div>
  <?php include_once("template_footer.php");?>
</div>
</body>
</html>