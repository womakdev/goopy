<?php 

include 'config.php';

$link = "";
$link_status = "display: none;";

if (isset($_POST['upload'])) { // If isset upload button or not
	// Declaring Variables
	$location = "uploads/";
	$file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
	$file_name = $_FILES["file"]["name"]; // Get uploaded file name
	$file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
	$file_size = $_FILES["file"]["size"]; // Get uploaded file size

	/*
	How we can get mb from bytes
	(mb*1024)*1024

	In my case i'm 10 mb limit
	(10*1024)*1024
	*/

	if ($file_size > 10485760) { // Check file size 10mb or not
		echo "<script>alert('Woops! File is too big. Maximum file size allowed for upload 10 MB.')</script>";
	} else {
		$sql = "INSERT INTO uploaded_files (name, new_name)
				VALUES ('$file_name', '$file_new_name')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			move_uploaded_file($file_temp, $location . $file_new_name);
			echo "<script>alert('Wow! File uploaded successfully.')</script>";
			// Select id from database
			$sql = "SELECT id FROM uploaded_files ORDER BY id DESC";
			$result = mysqli_query($conn, $sql);
			if ($row = mysqli_fetch_assoc($result)) {
				$link = $base_url . "download.php?id=" . $row['id'];
				$link_status = "display: block;";
			}
		} else {
			echo "<script>alert('Woops! Something wong went.')</script>";
		}
	}
}

?>

<?php
require 'include/header.php';
?>
  
  <main class="mt-5">
    <div class="container-fluid">
      <div class="download-section">
        <div class="download-background">
          <div class="row">
            
            <div class="col download-infos">
              <div class="infos__author">
			  <form action="" method="POST" enctype="multipart/form-data" class="body">
                <p>LINK SHARE:</p>
              </div>
              
              <div class="infos__name">
                <p><?php echo $link; ?></p>
              </div>
              
              <div class="infos__arquivetype">
                <p><?php echo $link_status; ?></p>
              </div>
            </div>
            
            <div class="col download-area">
              
              
              
			 
			  <div class="uploaded text-right">
                  <p>Uploaded:</p>
				 <!-- <input type="file" name="file" id="upload" required> -->
				 
				  
				  <div class="input-group mb-3">
  				<div class="custom-file">
    			<input type="file"name="file" class="custom-file-input" id="upload">
    			<label class="custom-file-label" for="upload" > </label>
 				</div>
				</div>


                </div>
				<br>
				<button name="upload" class="btn btn-primary">Upload</button>
            </div>
			
            
            <div class="col download-size">
              <div class="infos__size p-3">   
              </div>
            </div>
            </form>
          </div>
        </div>
        
      </div>
      
      <div class="middle-section mt-4">
        <div class="row">
          
          <div class="adverseting col-3" id="adverseting">
            <img src="./assets/image/anuncio.jpeg" alt="">
          </div>
          
          <div class="info-archivetype col-9 p-4" id="info-archivetype">
            <h3><p style="color:white";>Le saviez vous ?<p></h3>

            <p>
            <?php
require 'include/generate.php';
?>

<?php
if(file_exists('guests.txt'))
{
        $compteur_f = fopen('guests.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('guests.txt', 'a+');
        $compte = 0;
}
$compte++;
fseek($compteur_f, 0);
fputs($compteur_f, $compte);
fclose($compteur_f); 
?>
            </p>
          </div>
          
        </div>
      </div>
    </div>
  </main>
  
  <?php
require 'include/footer.php';
?>