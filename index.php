<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<?php 

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'dblatihan';

		// Mengkoneksikan kedalam serve

	$con = new mysqli("localhost", "root", "", "dblatihan");
// Check koneksi
if ($con->connect_error) {
die("Connection failed". $con->connect_error);	
}
	// Mengambil data dari database
 		$sql = "SELECT * FROM tblbarang";
	 	
	 	$result = $con->query($sql);
	 
	 if ($result -> num_rows > 0) {
	// Keluarkan data yang ada
	 while ($row = $result->fetch_assoc()) {
			echo  $row["nama"]."<br>";     
		 }
	}
?>
</body>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Kode</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Jumlah</th>
	      <th scope="col">Jumlah</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	       <td><?php echo $row['kode'] ?></td>
	      <td>Otto</td>
	      <td>@mdo</td>
	    </tr>
	    <tr>
	    	<script src="js/for.js"></script>
	  </tbody>
	</table>
</html>