<br>
<?php   require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dashboard.php'); ?>
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-white text-center">
                  <?php while ($row = $query->fetch()): ?>

                    
                    
                    <?php
// Load the encryption key and IV
$key = file_get_contents('../conf/key.bin');
$encryptedFolder =  '../encrypted/';
$ivBase64 = $row['iv'];
$encryptedDataBase64 = file_get_contents($encryptedFolder . $row['image']);
list($ivBase64, $encryptedDataBase64) = explode(':', $encryptedDataBase64);
$iv = base64_decode($ivBase64);

// Decrypt the file data using AES-256-CBC encryption with the secret key and the IV
$decryptedData = openssl_decrypt(base64_decode($encryptedDataBase64), 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

// Check if decryption succeeded
if ($decryptedData === false) {
    // Handle decryption errors
    while (($msg = openssl_error_string()) !== false) {
        echo $msg . "<br>\n";
    }
    exit();
}

// Create a temporary directory to store the image if it doesn't exist
$tempDir = $_SERVER['DOCUMENT_ROOT'] . '/img/temp';
if (!file_exists($tempDir)) {
    mkdir($tempDir);
}

// Save the decrypted image data to a temporary file without the file extension
$tempFileName = tempnam($tempDir, 'img');
if (file_put_contents($tempFileName, $decryptedData) === false) {
    echo 'Failed to save image to file';
    exit();
}

// Get the file extension of the original file
$fileExt = pathinfo($row['image'], PATHINFO_EXTENSION);

// Rename the temporary file with the file extension of the original file
$newFileName = $tempFileName . '.' . $fileExt;
rename($tempFileName, $newFileName);
$tempFileName = $newFileName;

// Display the decrypted image
echo '<img id="temp-image" src="/img/temp/' . basename($tempFileName) . '" alt="Profile Picture" class="rounded-circle" width="150">';
?>

<script>
// Send an AJAX request to delete the temporary file on page load
$(document).ready(function() {
  var tempFileName = '<?php echo $tempFileName; ?>';

  // Send a request to delete the file with extension
  $.ajax({
    type: 'POST',
    url: '/inc/delete-temp-file.php',
    data: {filename: tempFileName},
  });

  // Wait one second before sending request to delete file without extension
  setTimeout(function() {
    $.ajax({
      type: 'POST',
      url: '/inc/delete-temp-file.php',
      data: {filename: tempFileName.substring(0, tempFileName.lastIndexOf('.'))},
    });
  }, 1000);
});
</script>

<?php

$encryption_key = file_get_contents('../conf/encryption_key.bin');
$encrypted_iv = base64_decode($row['enc_iv']);


$f_name = openssl_decrypt(base64_decode($row['f_name']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$l_name = openssl_decrypt(base64_decode($row['l_name']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$gender = openssl_decrypt(base64_decode($row['gender']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$s_id = openssl_decrypt(base64_decode($row['s_id']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$p_country = openssl_decrypt(base64_decode($row['p_country']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$p_number = openssl_decrypt(base64_decode($row['p_number']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$dob = openssl_decrypt(base64_decode($row['dob']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_1 = openssl_decrypt(base64_decode($row['m_d_1']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_2 = openssl_decrypt(base64_decode($row['m_d_2']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_3 = openssl_decrypt(base64_decode($row['m_d_3']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_4 = openssl_decrypt(base64_decode($row['m_d_4']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_5 = openssl_decrypt(base64_decode($row['m_d_5']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_6 = openssl_decrypt(base64_decode($row['m_d_6']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_7 = openssl_decrypt(base64_decode($row['m_d_7']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_8 = openssl_decrypt(base64_decode($row['m_d_8']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_9 = openssl_decrypt(base64_decode($row['m_d_9']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_10 = openssl_decrypt(base64_decode($row['m_d_10']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_11 = openssl_decrypt(base64_decode($row['m_d_11']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_12 = openssl_decrypt(base64_decode($row['m_d_12']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_d_13 = openssl_decrypt(base64_decode($row['m_d_13']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$m_c = openssl_decrypt(base64_decode($row['m_c']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$d_i_n = openssl_decrypt(base64_decode($row['d_i_n']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$d_i_p_c = openssl_decrypt(base64_decode($row['d_i_p_c']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$d_i_p_n = openssl_decrypt(base64_decode($row['d_i_p_n']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$n_o_k_f_n = openssl_decrypt(base64_decode($row['n_o_k_f_n']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$n_o_k_l_n = openssl_decrypt(base64_decode($row['n_o_k_l_n']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$n_o_k_p_c = openssl_decrypt(base64_decode($row['n_o_k_p_c']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$n_o_k_p_n = openssl_decrypt(base64_decode($row['n_o_k_p_n']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);
$n_o_k_r_s = openssl_decrypt(base64_decode($row['n_o_k_r_s']), 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA);

?>

                    <div class="mt-3">
                      <h4><td><?php echo htmlspecialchars($f_name) ?></td> <td><?php echo htmlspecialchars($l_name) ?></td></h4>
                      <p class="mb-1">Registred On:</p>
                      <p class="text-muted font-size-sm"><?php echo htmlspecialchars($row['registred']) ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <p class="mb-1">Medical Conditons:</p>
                  <textarea class="form-control" id="m_c" placeholder="<?php echo htmlspecialchars($m_c) ?>" disabled rows="14"></textarea>
                  </li>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <td><?php echo htmlspecialchars($f_name) ?></td> <td><?php echo htmlspecialchars($l_name) ?></td>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo htmlspecialchars($row['email']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    +<td><?php echo htmlspecialchars($p_country) ?></td> <td><?php echo htmlspecialchars($p_number) ?></td>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    <?php
                    if ($gender == "1") {
                    echo "Female";
                    } elseif ($gender == "2") {
                    echo "Male";
                    } else {
                    echo "Other";
                    }
                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo htmlspecialchars($dob) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Doctor Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo htmlspecialchars($d_i_n) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Doctor Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    +<td><?php echo htmlspecialchars($d_i_p_c) ?></td> <td><?php echo htmlspecialchars($d_i_p_n) ?></td>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Next of Kim Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo htmlspecialchars($n_o_k_f_n) ?> <?php echo htmlspecialchars($n_o_k_l_n) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Next of Kim Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    +<td><?php echo htmlspecialchars($n_o_k_p_c) ?></td> <td><?php echo htmlspecialchars($n_o_k_p_n) ?></td>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Next of Kim Relation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <td><?php echo htmlspecialchars($n_o_k_r_s) ?></td>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Medical Declaration:</h6>
                      <div><small>Asthma, wheezing, Respiratory</small>
                      <?php
                    if ($m_d_1  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Bronchitis and/or shortness of breath</small>
                      <?php
                    if ($m_d_2  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Physical disability or other disability</small>
                      <?php
                    if ($m_d_3  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Are you pregnant</small>
                      <?php
                    if ($m_d_4  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Do you smoke</small>
                      <?php
                    if ($m_d_5  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Epilepsy, seizures, fainting attacks or convulsions</small>
                      <?php
                    if ($m_d_6  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Any other neurological problem</small>
                      <?php
                    if ($m_d_7  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Medical Declaration:</h6>
                      <div><small>Recurring migraine headaches, Blackouts:</small>
                      <?php
                    if ($m_d_8  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                    <div><small>Recurring joint, mobility or back problems/surgery</small>
                    <?php
                    if ($m_d_9  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                    <div><small>Diabetes</small>
                    <?php
                    if ($m_d_10  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Any hearing loss or problems with balance</small>
                      <?php
                    if ($m_d_11  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Any serious eyesight issues</small>
                      <?php
                    if ($m_d_12  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Drug or alcohol dependencys</small> 
                      <?php
                    if ($m_d_13  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>


            </div>
          </div>

        </div>
    </div>
    <br><br><br><br>
