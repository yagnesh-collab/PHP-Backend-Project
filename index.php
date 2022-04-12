<?php 
error_reporting(0);
include 'controller/database.php'   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
	<title>Fetch API with PHP</title>
</head>
<body>
<h2 align="center">List of Properties</h2>
  <table id="details" class="table table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Country</th>
        <th>County</th>
        <th>Town</th>
        <th>Description</th>
        <th>Image</th>
        <th>thumbnail</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Bedrooms</th>
        <th>Bathrooms</th>
        <th>Price</th>
        <th>Type</th>
        <th>Property Description</th>
    </thead>
    <tbody class="tbody">
        <?php $sql="select * from details";
          $result=mysqli_query($link,$sql);
          while($row=mysqli_fetch_array($result)) {
          ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['county']; ?></td>
            <td><?php echo $row['town']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><?php echo $row['image_thumb']; ?></td>
            <td><?php echo $row['latitude']; ?></td>
            <td><?php echo $row['longitude']; ?></td>
            <td><?php echo $row['bedrooms']; ?></td>
            <td><?php echo $row['bathrooms']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['property_desc']; ?></td>                                                          
          </tr>
        <?php } ?>
    </tbody>
  </table>
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('#details').DataTable();  
 });  
 </script>  