<?php
include 'database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>search</title>
    <style>
    body{
				background-image: url("https://img.freepik.com/premium-photo/bay-leaf-black-pepper-black-background-condiments-flat-view-space-text_350891-622.jpg?w=740");
				
                background-attachment: fixed;
                background-size: cover;
            }
            h1{
              color:aliceblue;
              text-align: center;
              margin-top: 80px;
              

            }
            table{
              border-color: darkgray;
              font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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

    <h1 align="center" >Search Result</h1>
  <table class="table" align="center" border="2px "  cellspacing="5" style="width:75%; line-height:70px;margin-top: 10px;">
  <thead>
    <tr>
      <th  scope="col"><b>ID</b></th>
      <th  scope="col"><b>IMAGE</b></th>
      <th  scope="col">NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">DISCOUNT</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">PLACE ORDER</th>
      
    </tr>
  </thead>
  <tbody>
<?php
if(isset($_POST['search_btn'])){
    $value_search=$_POST['search_value'];
    $query="select * from products where concat(name,oprise,discount) like '%$value_search%'";
    $query_run=mysqli_query($con,$query);

    if($query_run === false)
    {
        printf("Error: %s\n", mysqli_error($con));
    }
    elseif(mysqli_num_rows($query_run)>0)
    {
        while($row=mysqli_fetch_array($query_run))
        {
            ?>
            <tr >
                <td style="text-align: center;"><?php echo $row['id'] ?></td>
                <td><img  position="center" width="80" height="80" src="image/<?php echo $row['img']?>"></td>
                <td style="text-align: center;"><?php echo $row['name'] ?></td>
                <td style="text-align: center;"><?php echo $row['oprise'] ?></td>
                <td style="text-align: center;"><?php echo $row['discount'] ?></td>
                <td style="text-align: center;"><?php echo $row['description'] ?></td>
                <td style="text-align: center;">
                  <a href="index.php"><input background-color='gray'type='submit' value='order' class='order'></a>
                
            </tr>
            <?php


        }


    }
    else{
      ?>
      <tr>
        <td colspan="8">No record found</td>
      </tr>
      <?php

    }
}
?>
    

  </tbody>
</table>
  </body>
</html>
