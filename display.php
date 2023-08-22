<?php 
include 'database.php';
$selectquery="select * from booktable order by id desc limit 1";
$query = mysqli_query($con, $selectquery);

if(!$query){
  die("Query failed: " . mysqli_error($con));
}
?> 

<!DOCTYPE html> 
<html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavour Bites</title>
    <link rel="stylesheet" href="styledisplay.css">
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous"
  />
	<head> 
		<title>Display Reservations</title> 
        <style>
            body{

				
				background-image: url("https://img.freepik.com/free-photo/top-view-indian-food-with-copy-space_23-2148747659.jpg?size=626&ext=jpg&ga=GA1.1.291625234.1682441559&semt=robertav1_2_sidr");
				
                background-attachment: fixed;
                background-size: cover;
            }
            tr:nth-child(even){
                background-color: #c0c0c0;

            }
            tr:nth-child(odd){
                background-color: #a9a9a9;

            }

        </style>
	</head> 
	<body> 
		</head>
<body>
    <header>
        <div class="hedbg">
        <div class=" row mar">
            <div class="logo active">
                <p ><font size="6" face="Freestyle Script" color="#FDBD01"><b>Flavour Bites</b></font><p>
            </div>
            <nav class="nav row">
                <ul class="nav__list nav__list__primary--list">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Order Now</a></li>
                    <li class="nav-item"><a class="nav-link " href="insertb.php">Book Table</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                </ul>
                <ul class="nav__list nav__list__secondary--list">
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-search"></i></a>
                      </li>
                </ul>
            </nav>
        </div>
    </div>
    </header>
    <section class="conbg">
    <div class="container">
      <p><font size="4" face="Arial" color="#FFFFFF"><b>Welcome to Flavour Bites<b><br>
         Flavours for Royality!</p>
  </div>
	<table align="center" border="1px " cellspacing="5" style="width:800px; line-height:40px;margin-top: 40px;"> 
	<tr> 
		<th colspan="8"><h2>Table Reservations</h2></th> 
		</tr> 
		      <th> ID </th> 
			  <th> FNAME </th> 
			  <th> LNAME </th> 
			  <th> GUEST </th> 
			  <th> DATE </th> 
              <th> TIME </th> 
              <th> MOBILITY ISSUES</th> 
			  <th> OPERATIONS</th> 
			  
		</tr> 
		
		<?php if(mysqli_num_rows($query)>0) 
		{ 
			$rows = mysqli_fetch_array($query);
		?> 

		<tr align="center"> 
		<td><?php echo $rows['id']; ?></td>
		<td><?php echo $rows['fname']; ?></td> 
		<td><?php echo $rows['lname']; ?></td> 
		<td><?php echo $rows['guest']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 
        <td><?php echo $rows['time']; ?></td> 
        <td><?php echo $rows['radio1']; ?></td> 
		<td>
		<a href="updatedesign.php?id=<?=$rows['id'];?>"><input type='submit' value='update' class='update'></a>
		<a href="delete.php?id=<?=$rows['id'];?>"><input type='submit' value='cancel' class='cancel'></a>
	    </td>
		</tr> 
	
	    <?php 
             } 
        ?> 

	</table> 
	</body> 
	</html>
