<?php


include "Controller/crudupdateflatvalidation.php";

$id = $_GET["id"];
$query ="SELECT * FROM flat WHERE id='$id'";
$result=get($query);
foreach($result as $rows){
	$owner=$rows["owner"];
	$price=$rows["price"];
	$location=$rows["location"];
	$size=$rows["size"];
	$contact=$rows["contact"];
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="homepage.css">
<body>

<form action="" method="post">
<table>
<div class="search">
<div class="topnav">
      
	  <a href=http://localhost/BachApp-Web/crudaddflat.php >Back</a>
      
	  <h1 style="text-align:center;color:orange">CRUD FLAT</h1>
    </div>               
				   
                    
<form action="/" method="post">
					<tr>
					
					<p style="text-align:center;">
				    <input style="display:none" type="text" name="id" value="<?php echo $id;?>" placeholder="id">
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_owner; ?></span>
					</p>
					<p style="text-align:center;">
					<label style="color:brown">Owner:</label> <input type="text" name="owner" value="<?php echo $owner;?>" placeholder="owner name">
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_owner; ?></span>
					</p>
					<p style="text-align:center;">
					<label style="color:brown">Price:</label> <input type="text" name="price" value="<?php echo $price;?>" placeholder="bdt/month"> 
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_price; ?></span>
                    </p>
					<tr>
					<p style="text-align:center;" >
				    <label style="color:brown">Location:</label> <input type="text" name="location" placeholder="City" value="<?php echo $location;?>">
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_location; ?></span>
					</tr>
					</p>
					<tr>
					<p style="text-align:center;">
					 <label style="color:brown">Size:</label> <input type="text" name="size" value="<?php echo $size;?>" placeholder="Sft">
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_size; ?></span>
					<p style="text-align:center;">
					<label style="color:brown">Contact:</label> <input type="text" name="contact" value="<?php echo $contact;?>" placeholder="Contact"> 
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_contact; ?></span>
					</p>
					
					<p style="text-align:center;"><input type="submit" class="my-font btn-sup" name="updateBtn" value="update"></p>
					
					</tr>
					</div>
					
</table>

<p>
	  
     </p>
	 
</body>
</head>
</html>	


						