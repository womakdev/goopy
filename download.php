<?php 

include 'config.php';

$id = $_GET['id']; // Get id from url bar

if (!$id) {
    header("Location: index.php");
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
          <?php 
                    
                    $sql = "SELECT * FROM uploaded_files WHERE id='$id'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        if ($row = mysqli_fetch_assoc($result)) {
                    ?>
            <div class="col download-infos">
              <div class="infos__author">
                <p>Name file :</p>
              </div>

              <div class="infos__name">
                <p><?php echo $row['name']; ?></p>
              </div>

              <div class="infos__arquivetype">
                <p>VISIBILITÉ : <span class="arquivetype">PUBLIC</span></p>
              </div>
            </div>

            <div class="col download-area">
              <div class="download-logo">
                <img src="./assets/image/file.png" alt="Filezip">
              </div>

              <div class="download-certify">
                <img src="./assets/image/shield.png" width="20" height="20" alt="Virustotal Protect">
              </div>

              <button class="btn btn-primary" onclick="window.location.href='uploads/<?php echo $row['new_name']; ?>';">
                DOWNLOAD
              </button>
            </div>
            <?php
                    }
                }
                
                ?>
            <div class="col download-size">
              <div class="infos__size p-3">
             
              <div class="uploaded text-right">
                  <p>A problem to make to us? </p>
                  <span class="download-destaque"><a href ="sdh.html" span class="arquivetype">REPORT</span> </a></span>
                </div>
            
              </div>
            </div>
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
            </p>
          </div>

        </div>
      </div>
    </div>
  </main>
  <?php
require 'include/footer.php';
?>