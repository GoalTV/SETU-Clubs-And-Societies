<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard");
    exit;
}

// Define variables and initialize with empty values
$email = $password = $confirm_password = $f_name = $l_name = $gender = $s_id = $p_country = $p_number = $dob = $m_d_1 = $m_d_2 = $m_d_3 = $m_d_4 = $m_d_5 = $m_d_6 = $m_d_7 = $m_d_8 = $m_d_9 = $m_d_10 = $m_d_11 = $m_d_12 = $m_d_13 = $m_c = $d_i_n = $d_i_p_c = $d_i_p_n = $n_o_k_f_n = $n_o_k_l_n = $n_o_k_p_c = $n_o_k_p_n = $n_o_k_r_s = $registred = "";
$email_err = $password_err = $confirm_password_err = $f_name_err = $l_name_err = $gender_err = $p_number_err = $s_id_err = $p_countr_err = $p_number_err = $dob_err = $m_d_1_err = $m_d_2_err = $m_d_3_err = $m_d_4_err = $m_d_5_err = $m_d_6_err = $m_d_7_err = $m_d_8_err = $m_d_9_err = $m_d_10_err = $m_d_11_err = $m_d_12_err = $m_d_13_err = $m_c_err = $d_i_n_err = $d_i_p_c_err = $d_i_p_n_err = $n_o_k_f_n_err = $n_o_k_l_n_err = $n_o_k_p_c_err = $n_o_k_p_n_err = $n_o_k_r_s_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } elseif(!preg_match('/^\S+@\S+\.\S+$/', trim($_POST["email"]))){
        $email_err = "Please Enter Valid IT Carlow Student E-mail.";
    } else{
        // Prepare a select statement
        $sql = "SELECT user_id FROM users WHERE email = :email LIMIT 1";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $email_err = "Email is already in Use!.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate First Name
    if(empty(trim($_POST["f_name"]))){
        $f_name_err = "Please enter first name.";     
    } else{
        $f_name = trim($_POST["f_name"]);
    }
    
    // Validate Last Name
    if(empty(trim($_POST["l_name"]))){
        $l_name_err = "Please enter first name.";     
    } else{
        $l_name = trim($_POST["l_name"]);
    }

    // Validate gender
   if(empty(trim($_POST["gender"]))){
        $gender_err = "Please select gender.";     
    } else{
        $gender = trim($_POST["gender"]);
    } 

        // Validate Student Number
        if(empty(trim($_POST["s_id"]))){
            $s_id_err = "Please enter Student Number.";     
        } else{
            $s_id = trim($_POST["s_id"]);
        }

      // Validate Phone Country
      if(empty(trim($_POST["p_country"]))){
        $p_country_err = "Please enter phone country code";     
   } elseif(!preg_match('/^([0-9]{0,3})$/', trim($_POST["p_country"]))){
    $p_country_err = "Phone contry code Can Only Include Numbers!.";
} else{
       $p_country = trim($_POST["p_country"]);
   }

       // Validate Phone Number
       if(empty(trim($_POST["p_number"]))){
        $p_number_err = "Please enter phone number.";     
   } elseif(!preg_match('/^([0-9]{0,15})$/', trim($_POST["p_number"]))){
    $p_number_err = "Phone Number Can Only Include Numbers!.";
} else{
       $p_number = trim($_POST["p_number"]);
   }

    // Validate Date of Birth
    if(empty(trim($_POST["dob"]))){
        $dob_err = "Please enter date of birth.";     
    } else{
        $dob = trim($_POST["dob"]);
    }

    // Validate Asthma, wheezing, Respiratory
    if(empty(trim($_POST["m_d_1"]))){
        $m_d_1_err = "Please respond Yes or No to Asthma, wheezing, Respiratory.";     
    } else{
        $m_d_1 = trim($_POST["m_d_1"]);
    }

      // Validate Bronchitis and/or shortness of breath
      if(empty(trim($_POST["m_d_2"]))){
        $m_d_2_err = "Please respond Yes or No to Bronchitis and/or shortness of breath.";     
    } else{
        $m_d_2 = trim($_POST["m_d_2"]);
    }

     // Validate Physical disability or other disability
       if(empty(trim($_POST["m_d_3"]))){
            $m_d_3_err = "Please respond Yes or No to Physical disability or other disability.";     
        } else{
            $m_d_3 = trim($_POST["m_d_3"]);
        }

     // Validate Are you pregnant
     if(empty(trim($_POST["m_d_4"]))){
        $m_d_4_err = "Please respond Yes or No to Are you pregnant.";     
    } else{
        $m_d_4 = trim($_POST["m_d_4"]);
    }

     // Validate Do you smoke
     if(empty(trim($_POST["m_d_5"]))){
        $m_d_5_err = "Please respond Yes or No to Do you smoke.";     
    } else{
        $m_d_5 = trim($_POST["m_d_5"]);
    }

    // Validate Epilepsy, seizures, fainting attacks or convulsions
     if(empty(trim($_POST["m_d_6"]))){
         $m_d_6_err = "Please respond Yes or No to Epilepsy, seizures, fainting attacks or convulsions.";     
    } else{
        $m_d_6 = trim($_POST["m_d_6"]);
    }

    // Validate Any other neurological problem
    if(empty(trim($_POST["m_d_7"]))){
        $m_d_7_err = "Please respond Yes or No to Any other neurological problem.";     
   } else{
       $m_d_7 = trim($_POST["m_d_7"]);
   }

    // Validate Recurring migraine headaches, Blackouts
    if(empty(trim($_POST["m_d_8"]))){
        $m_d_8_err = "Please respond Yes or No to Recurring migraine headaches, Blackouts.";     
   } else{
       $m_d_8 = trim($_POST["m_d_8"]);
   }

    // Validate Recurring joint, mobility or back problems/surgery
    if(empty(trim($_POST["m_d_9"]))){
        $m_d_9_err = "Please respond Yes or No to Recurring joint, mobility or back problems/surgery.";     
   } else{
       $m_d_9 = trim($_POST["m_d_9"]);
   }

    // Validate Diabetes
    if(empty(trim($_POST["m_d_10"]))){
        $m_d_10_err = "Please respond Yes or No to Diabetes.";     
   } else{
       $m_d_10 = trim($_POST["m_d_10"]);
   }
   
    // Validate Any hearing loss or problems with balance
    if(empty(trim($_POST["m_d_11"]))){
        $m_d_11_err = "Please respond Yes or No to Any hearing loss or problems with balance.";     
   } else{
       $m_d_11 = trim($_POST["m_d_11"]);
   }

    // Validate Any serious eyesight issues
    if(empty(trim($_POST["m_d_12"]))){
        $m_d_12_err = "Please respond Yes or No to Any serious eyesight issues.";     
   } else{
       $m_d_12 = trim($_POST["m_d_12"]);
   }

    // Validate Drug or alcohol dependency
    if(empty(trim($_POST["m_d_13"]))){
        $m_d_13_err = "Please respond Yes or No to Drug or alcohol dependency.";     
   } else{
       $m_d_13 = trim($_POST["m_d_13"]);
   }

    // Validate Medical Conditions
    if(empty(trim($_POST["m_c"]))){
        $m_c = null;    
   } else{
       $m_c = trim($_POST["m_c"]);
   }

    // Validate Doctor Name
    if(empty(trim($_POST["d_i_n"]))){
        $d_i_n_err = "Please enter doctor's full name.";     
   } else{
       $d_i_n = trim($_POST["d_i_n"]);
   }

      // Validate Doctor Phone Country
      if(empty(trim($_POST["d_i_p_c"]))){
        $d_i_p_c_err = "Please enter doctor's phone country code";     
   } elseif(!preg_match('/^([0-9]{0,3})$/', trim($_POST["d_i_p_c"]))){
    $d_i_p_c_err = "Doctor's contry code Can Only Include Numbers!.";
} else{
       $d_i_p_c = trim($_POST["d_i_p_c"]);
   }

    // Validate Doctor Phone Number
    if(empty(trim($_POST["d_i_p_n"]))){
        $d_i_p_n_err = "Please enter doctor's phone number.";     
   } elseif(!preg_match('/^([0-9]{0,15})$/', trim($_POST["d_i_p_n"]))){
    $d_i_p_n_err = "Doctor's Phone Number Can Only Include Numbers!.";
} else{
       $d_i_p_n = trim($_POST["d_i_p_n"]);
   }

    // Validate Next of Kim First Name
    if(empty(trim($_POST["n_o_k_f_n"]))){
        $n_o_k_f_n_err = "Please enter next of kim's first name.";     
   } else{
       $n_o_k_f_n = trim($_POST["n_o_k_f_n"]);
   }

    // Validate Next of Kim Last Name
    if(empty(trim($_POST["n_o_k_l_n"]))){
        $n_o_k_l_n_err = "Please enter next of kim's last name.";     
   } else{
       $n_o_k_l_n = trim($_POST["n_o_k_l_n"]);
   }


      // Validate Next of Kim Phone Country
      if(empty(trim($_POST["n_o_k_p_c"]))){
        $n_o_k_p_c_err = "Please enter next of kim country code.";     
   } elseif(!preg_match('/^([0-9]{0,3})$/', trim($_POST["n_o_k_p_c"]))){
    $n_o_k_p_c_err = "Next of kim contry code Can Only Include Numbers!.";
} else{
       $n_o_k_p_c = trim($_POST["n_o_k_p_c"]);
   }

    // Validate Next of Kim Phone Number
    if(empty(trim($_POST["n_o_k_p_n"]))){
        $n_o_k_p_n_err = "Please enter next of kim phone number.";     
   } elseif(!preg_match('/^([0-9]{0,15})$/', trim($_POST["n_o_k_p_n"]))){
    $n_o_k_p_n_err = "Next of kim Phone Number Can Only Include Numbers!.";
} else{
       $n_o_k_p_n = trim($_POST["n_o_k_p_n"]);
   }

    // Validate Next of Kim Relation
    if(empty(trim($_POST["n_o_k_r_s"]))){
        $n_o_k_r_s_err = "Please enter next of kim's relation.";     
   } else{
       $n_o_k_r_s = trim($_POST["n_o_k_r_s"]);
   }


//img upload

// Set the target directory for uploaded images
$targetDir = '../encrypted/';

// Check if the file was uploaded successfully
if (!isset($_FILES["fileToUpload"]) || $_FILES["fileToUpload"]["error"] != UPLOAD_ERR_OK) {
    echo "Sorry, there was an error uploading your file.";
    exit();
}

// Generate a random filename with the same extension as the uploaded file
$fileExt = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
$newFileName = md5(rand()) . '.' . $fileExt;

// Set the path to the uploaded file
$filePath = $_FILES["fileToUpload"]["tmp_name"];

// Load the encryption key and IV
$key = file_get_contents('../conf/key.bin');
$ivHex = openssl_random_pseudo_bytes(16);
$iv = bin2hex($ivHex);

// Read the file data and encrypt it using AES-256-CBC encryption with the secret key and the IV
$encryptedData = openssl_encrypt(file_get_contents($filePath), 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $ivHex);

// Base64 encode the IV and encrypted data
$ivBase64 = base64_encode($ivHex);
$encryptedDataBase64 = base64_encode($encryptedData);

// Combine the IV and encrypted data into a single string separated by a colon
$encryptedString = $ivBase64 . ':' . $encryptedDataBase64;

// Move the encrypted file to the target directory with the new filename
if (!file_put_contents($targetDir . $newFileName, $encryptedString)) {
    echo "Sorry, there was an error uploading your file.";
    exit();
}

// Save the filename to a variable
$image = $newFileName;


    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($f_name_err) && empty($l_name_err) && empty($gender_err) && empty($s_id_err) && empty($p_country_err) && empty($p_number_err) && empty($dob_err) && empty($m_d_1_err) && empty($m_d_2_err) && empty($m_d_3_err) && empty($m_d_4_err) && empty($m_d_5_err) && empty($m_d_6_err) && empty($m_d_7_err) && empty($m_d_8_err) && empty($m_d_9_err) && empty($m_d_10_err) && empty($m_d_11_err) && empty($m_d_12_err) && empty($m_d_13_err) && empty($d_i_n_err) && empty($d_i_p_c_err) && empty($d_i_p_n_err) && empty($n_o_k_f_n_err) && empty($n_o_k_l_n_err) && empty($n_o_k_p_c_err) && empty($n_o_k_p_n_err) && empty($n_o_k_r_s_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (email, image, iv, enc_iv, password, f_name, l_name, gender, s_id, p_country, p_number, dob, m_d_1, m_d_2, m_d_3, m_d_4, m_d_5, m_d_6, m_d_7, m_d_8, m_d_9, m_d_10, m_d_11, m_d_12, m_d_13, m_c, d_i_n, d_i_p_c, d_i_p_n, n_o_k_f_n, n_o_k_l_n, n_o_k_p_c, n_o_k_p_n, n_o_k_r_s) VALUES (:email, :image, :iv, :enc_iv, :password, :f_name, :l_name, :gender, :s_id, :p_country, :p_number, :dob, :m_d_1, :m_d_2, :m_d_3, :m_d_4, :m_d_5, :m_d_6, :m_d_7, :m_d_8, :m_d_9, :m_d_10, :m_d_11, :m_d_12, :m_d_13, :m_c, :d_i_n, :d_i_p_c, :d_i_p_n, :n_o_k_f_n, :n_o_k_l_n, :n_o_k_p_c, :n_o_k_p_n, :n_o_k_r_s)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":image", $param_image, PDO::PARAM_STR); //image name
            $stmt->bindParam(":iv", $param_iv, PDO::PARAM_STR);
            $stmt->bindParam(":enc_iv", $param_enc_iv, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":f_name", $param_f_name, PDO::PARAM_STR);
            $stmt->bindParam(":l_name", $param_l_name, PDO::PARAM_STR);
            $stmt->bindParam(":gender", $param_gender, PDO::PARAM_STR);
            $stmt->bindParam(":s_id", $param_s_id, PDO::PARAM_STR);
            $stmt->bindParam(":p_country", $param_p_country, PDO::PARAM_STR);
            $stmt->bindParam(":p_number", $param_p_number, PDO::PARAM_STR);
            $stmt->bindParam(":dob", $param_dob, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_1", $param_m_d_1, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_2", $param_m_d_2, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_3", $param_m_d_3, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_4", $param_m_d_4, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_5", $param_m_d_5, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_6", $param_m_d_6, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_7", $param_m_d_7, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_8", $param_m_d_8, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_9", $param_m_d_9, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_10", $param_m_d_10, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_11", $param_m_d_11, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_12", $param_m_d_12, PDO::PARAM_STR);
            $stmt->bindParam(":m_d_13", $param_m_d_13, PDO::PARAM_STR);
            $stmt->bindParam(":m_c", $param_m_c, PDO::PARAM_STR);
            $stmt->bindParam(":d_i_n", $param_d_i_n, PDO::PARAM_STR);
            $stmt->bindParam(":d_i_p_c", $param_d_i_p_c, PDO::PARAM_STR);
            $stmt->bindParam(":d_i_p_n", $param_d_i_p_n, PDO::PARAM_STR);
            $stmt->bindParam(":n_o_k_f_n", $param_n_o_k_f_n, PDO::PARAM_STR);
            $stmt->bindParam(":n_o_k_l_n", $param_n_o_k_l_n, PDO::PARAM_STR);
            $stmt->bindParam(":n_o_k_p_c", $param_n_o_k_p_c, PDO::PARAM_STR);
            $stmt->bindParam(":n_o_k_p_n", $param_n_o_k_p_n, PDO::PARAM_STR);
            $stmt->bindParam(":n_o_k_r_s", $param_n_o_k_r_s, PDO::PARAM_STR);

            //password security
            $options = [
                'memory_cost' => 64 * 1024, // 64 MB
                'time_cost' => 2,
                'threads' => 4,
            ];

            // Set the encryption key and IV
            $encryption_key = file_get_contents('../conf/encryption_key.bin');
            $encryption_iv_hex = openssl_random_pseudo_bytes(16);
            $encryption_iv_base64 = base64_encode($encryption_iv_hex);


            // Set parameters
            $param_email = $email;
            $param_image = $image;
            $param_iv = $ivBase64;
            $param_enc_iv = $encryption_iv_base64;
            $param_password = password_hash($password, PASSWORD_ARGON2ID, $options); // Creates a password hash
            $param_f_name = base64_encode(openssl_encrypt($f_name, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_l_name = base64_encode(openssl_encrypt($l_name, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_gender = base64_encode(openssl_encrypt($gender, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_s_id = base64_encode(openssl_encrypt($s_id, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_p_country = base64_encode(openssl_encrypt($p_country, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_p_number = base64_encode(openssl_encrypt($p_number, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_dob = base64_encode(openssl_encrypt($dob, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_1 = base64_encode(openssl_encrypt($m_d_1, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_2 = base64_encode(openssl_encrypt($m_d_2, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_3 = base64_encode(openssl_encrypt($m_d_3, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_4 = base64_encode(openssl_encrypt($m_d_4, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_5 = base64_encode(openssl_encrypt($m_d_5, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_6 = base64_encode(openssl_encrypt($m_d_6, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_7 = base64_encode(openssl_encrypt($m_d_7, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_8 = base64_encode(openssl_encrypt($m_d_8, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_9 = base64_encode(openssl_encrypt($m_d_9, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_10 = base64_encode(openssl_encrypt($m_d_10, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_11 = base64_encode(openssl_encrypt($m_d_11, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_12 = base64_encode(openssl_encrypt($m_d_12, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_d_13 = base64_encode(openssl_encrypt($m_d_13, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_m_c = base64_encode(openssl_encrypt($m_c, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_d_i_n = base64_encode(openssl_encrypt($d_i_n, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_d_i_p_c = base64_encode(openssl_encrypt($d_i_p_c, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_d_i_p_n = base64_encode(openssl_encrypt($d_i_p_n, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_n_o_k_f_n = base64_encode(openssl_encrypt($n_o_k_f_n, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_n_o_k_l_n = base64_encode(openssl_encrypt($n_o_k_l_n, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_n_o_k_p_c = base64_encode(openssl_encrypt($n_o_k_p_c, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_n_o_k_p_n = base64_encode(openssl_encrypt($n_o_k_p_n, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));
            $param_n_o_k_r_s = base64_encode(openssl_encrypt($n_o_k_r_s, 'aes-256-cbc', $encryption_key, OPENSSL_RAW_DATA, $encryption_iv));

            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: register-confirm");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>