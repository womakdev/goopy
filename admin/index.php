<?php
	$host = 'localhost';
	$dbname = 'tuto';
	$username = 'root';
	$password = '';
		
	$dsn = "mysql:host=$host;dbname=$dbname"; 
	// récupérer tous les utilisateurs
	$sql = "SELECT * FROM uploaded_files";
	 
	try{
	 $pdo = new PDO($dsn, $username, $password);
	 $stmt = $pdo->query($sql);
	 
	 if($stmt === false){
		die("Erreur");
	 }
	 
	}catch (PDOException $e){
		echo $e->getMessage();
	}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Goopy : Manager</title>
  <link rel='stylesheet' href='./materialize.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./style.css">

</head>
<body>
<body style="background-color:#23272a;">
</body>
<!-- partial:index.partial.html -->
<div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
      <span class="table-title">Hello Admin ! </span>

        <div class="actions">
       
        </div>
      </div>
      <br>
      <center>  <p>Total visitors : <?php
require '../guests.txt';
?></p></center> 
      <table id=" ">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>NEW NAME</th>
            <th>DATE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
          <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['new_name']); ?></td>
            <td>2011/04/25</td>
            <td><button type="button" class="btn btn-danger">Delete</button></td>
          </tr>
          <tr>
            <?php endwhile; ?>
        
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js'></script><script  src="./script.js"></script>

</body>
</html>
