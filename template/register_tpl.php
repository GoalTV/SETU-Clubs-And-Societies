<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/register.php'); ?>
<div  class="background-main text-white">  
<div class="container py-5">
    <div class="row text-white d-flex justify-content-center align-items-center">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="/img/banners/setu_societies.jpg"
                alt="SETU Societies"
                class="img-fluid"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-white">
                <h3 class="mb-5 text-uppercase">Clubs & Societies Sign Up</h3>
                <form action="register" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-floating">
                      <input type="text" id="f_name" name="f_name" value="<?php echo $f_name; ?>" class="form-control form-control-lg <?php echo (!empty($f_name_err)) ? 'is-invalid' : ''; ?>" required />
                      <label class="form-label" for="f_name">First name <span class="invalid-feedback"><?php echo $f_name_err; ?></span></label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-floating">
                      <input type="text" id="l_name" name="l_name"  value="<?php echo $l_name; ?>" class="form-control form-control-lg <?php echo (!empty($l_name_err)) ? 'is-invalid' : ''; ?>" required />
                      <label class="form-label" for="l_name">Last name <span class="invalid-feedback"><?php echo $l_name_err; ?></span></label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-floating">
                      <input type="password" id="password" name="password"  value="<?php echo $password; ?>" class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required />
                      <label class="form-label" for="password">Password <span class="invalid-feedback"><?php echo $password_err; ?></span></label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-floating">
                      <input type="password" id="confirm_password" name="confirm_password"  value="<?php echo $confirm_password; ?>" class="form-control form-control-lg <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?> required" />
                      <label class="form-label" for="confirm_password">Confirm Password <span class="invalid-feedback"><?php echo $confirm_passwor_err; ?></span></label>
                    </div>
                  </div>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4 <?php echo (!empty($gender_err)) ? 'is-invalid' : ''; ?> ">Gender: </h6>
                  <span class="invalid-feedback"><?php echo $gender_err; ?></span>
                  <div  class="form-check form-check-inline mb-0 me-4 <?php echo (!empty($gender_err)) ? 'is-invalid' : ''; ?> ">
                    <input
                      class="form-check-input <?php echo (!empty($gender_err)) ? 'is-invalid' : ''; ?>"
                      type="radio"
                      name="gender"
                      id="femaleGender"
                      value="1"
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4 <?php echo (!empty($gender_err)) ? 'is-invalid' : ''; ?> ">
                    <input
                      class="form-check-input <?php echo (!empty($gender_err)) ? 'is-invalid' : ''; ?>"
                      type="radio"
                      name="gender"
                      id="maleGender"
                      value="2"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 <?php echo (!empty($gender_err)) ? 'is-invalid' : ''; ?> ">
                    <input
                      class="form-check-input <?php echo (!empty($gender_err)) ? 'is-invalid' : ''; ?>"
                      type="radio"
                      name="gender"
                      id="otherGender"
                      value="3"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>


                <div class="form-outline mb-4 form-floating">
                  <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" class="form-control form-control-lg <?php echo (!empty($dob_err)) ? 'is-invalid' : ''; ?>" required />
                  <label class="form-label" for="dob">Date of Birth <span class="invalid-feedback"><?php echo $dob_err; ?></span> </label>
                </div>

                <div class="form-outline mb-4 form-floating">
                  <input type="text" id="s_id" name="s_id" value="<?php echo $s_id; ?>" class="form-control form-control-lg <?php echo (!empty($s_id_err)) ? 'is-invalid' : ''; ?>" required />
                  <label class="form-label" for="s_id">Student ID</label>
                </div>

                <div class="form-outline mb-4 form-floating">
                  <input type="email" id="email" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" required />
                  <label class="form-label" for="email">Student Email <span class="invalid-feedback"><?php echo $email_err; ?></span></label>
                </div>

                <div class="form-outline mb-4">
                <div class="phone-list">
				
                <div class="input-group">
                <span class="input-group-text">Phone Number</span>
							<input type="number" name="p_country" id="p_country" value="<?php echo $p_country; ?>" class="form-control <?php echo (!empty($p_country_err)) ? 'is-invalid' : ''; ?>"  placeholder="353" required/>
						<input type="text" id="p_number" name="p_number" value="<?php echo $p_number; ?>" class="form-control <?php echo (!empty($p_number_err)) ? 'is-invalid' : ''; ?>" placeholder="0871234567" required />
</div>
            <span class="invalid-feedback"><?php echo $p_number_err; ?></span> 
            <span class="invalid-feedback"><?php echo $p_country_err; ?></span> 
</div></div>
                <div class="form-group">
                <input type="file" id="inputImage" name="fileToUpload" class="form-control form-control-lg <?php echo (!empty($photo_err)) ? 'is-invalid' : ''; ?>" required />
                <label for="formFile" class="form-label">Student Photo</label>
                <span class="invalid-feedback"><?php echo $photo_err; ?></span> 
                </div>

                <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Medical Declaration
      </button>
    </h2>
    <span class="invalid-feedback">: <?php echo $m_d_1_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_2_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_3_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_4_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_5_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_6_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_7_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_8_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_9_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_10_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_11_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_12_err; ?></span>
        <span class="invalid-feedback">: <?php echo $m_d_13_err; ?></span>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Asthma, wheezing, Respiratory?  
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_1_err)) ? 'is-invalid' : ''; ?>" name="m_d_1" id="m_d_1" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_1_err)) ? 'is-invalid' : ''; ?>" name="m_d_1" id="m_d_1" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Bronchitis and/or shortness of breath?
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_2_err)) ? 'is-invalid' : ''; ?>" name="m_d_2" id="m_d_2" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_2_err)) ? 'is-invalid' : ''; ?>" name="m_d_2" id="m_d_2" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Physical disability or other disability?
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_3_err)) ? 'is-invalid' : ''; ?>" name="m_d_3" id="m_d_3" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_3_err)) ? 'is-invalid' : ''; ?>" name="m_d_3" id="m_d_3" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Are you pregnant?
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_4_err)) ? 'is-invalid' : ''; ?>" name="m_d_4" id="m_d_4" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_4_err)) ? 'is-invalid' : ''; ?>" name="m_d_4" id="m_d_4" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Do you smoke?   
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_5_err)) ? 'is-invalid' : ''; ?>" name="m_d_5" id="m_d_5" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_5_err)) ? 'is-invalid' : ''; ?>" name="m_d_5" id="m_d_5" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Epilepsy, seizures, fainting attacks or convulsions?
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_6_err)) ? 'is-invalid' : ''; ?>" name="m_d_6" id="m_d_6" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_6_err)) ? 'is-invalid' : ''; ?>" name="m_d_6" id="m_d_6" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Any other neurological problem?  
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_7_err)) ? 'is-invalid' : ''; ?>" name="m_d_7" id="m_d_7" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_7_err)) ? 'is-invalid' : ''; ?>" name="m_d_7" id="m_d_7" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Recurring migraine headaches, Blackouts?  
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_8_err)) ? 'is-invalid' : ''; ?>" name="m_d_8" id="m_d_8" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_8_err)) ? 'is-invalid' : ''; ?>" name="m_d_8" id="m_d_8" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Recurring joint, mobility or back problems/surgery?  
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_9_err)) ? 'is-invalid' : ''; ?>" name="m_d_9" id="m_d_9" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_9_err)) ? 'is-invalid' : ''; ?>" name="m_d_9" id="m_d_9" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Diabetes?
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_10_err)) ? 'is-invalid' : ''; ?>" name="m_d_10" id="m_d_10" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_10_err)) ? 'is-invalid' : ''; ?>" name="m_d_10" id="m_d_10" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Any hearing loss or problems with balance?
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_11_err)) ? 'is-invalid' : ''; ?>" name="m_d_11" id="m_d_11" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_11_err)) ? 'is-invalid' : ''; ?>" name="m_d_11" id="m_d_11" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Any serious eyesight issues?
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_12_err)) ? 'is-invalid' : ''; ?>" name="m_d_12" id="m_d_12" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_12_err)) ? 'is-invalid' : ''; ?>" name="m_d_12" id="m_d_12" value="1">
         No
        </label>
    </span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  Drug or alcohol dependency?      
    <span>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_13_err)) ? 'is-invalid' : ''; ?>" name="m_d_13" id="m_d_13" value="2">
          Yes
        </label>
        <label>
          <input type="radio" class="form-check-input <?php echo (!empty($m_d_13_err)) ? 'is-invalid' : ''; ?>" name="m_d_13" id="m_d_13" value="1">
         No
        </label>
    </span>
  </li>
</ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Medical Conditions
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="form-group">
      <label for="m_c">Please Provide any Medical Condiotions if any</label>
      <textarea class="form-control" value="<?php echo $m_c; ?>" id="m_c" name="m_c" rows="14"></textarea>
    </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Emergancy Contact
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <div class="form-floating">
                      <input type="text" id="d_i_n" name="d_i_n" value="<?php echo $d_i_n; ?>" class="form-control form-control-lg <?php echo (!empty($d_i_n_err)) ? 'is-invalid' : ''; ?>" required />
                      <label class="form-label" for="d_i_n">Doctor's Full Name <span class="invalid-feedback">: <?php echo $d_i_n_err; ?></span></label>
                    </div></div>

                    <div class="form-outline mb-4">
                <div class="phone-list">
				
                <div class="input-group">
              <span class="input-group-text">Doctor's Phone Number</span>
							<input type="number" name="d_i_p_c" id="d_i_p_c" name="d_i_p_c" placeholder="353" value="<?php echo $d_i_p_c; ?>" class="form-control <?php echo (!empty($d_i_p_c_err)) ? 'is-invalid' : ''; ?>" requried />
						<input type="text" id="d_i_p_n" name="d_i_p_n" value="<?php echo $d_i_p_n; ?>" class="form-control <?php echo (!empty($d_i_p_n_err)) ? 'is-invalid' : ''; ?>" placeholder="0871234567" required />
          </div>
          <span class="invalid-feedback">: <?php echo $d_i_p_n_err; ?></span>
          <span class="invalid-feedback">: <?php echo $d_i_p_c_err; ?></span>
</div>
              </div>

              <div class="form-floating">
                      <input type="text" id="n_o_k_f_n" name="n_o_k_f_n" value="<?php echo $n_o_k_f_n; ?>" class="form-control form-control-lg <?php echo (!empty($n_o_k_f_n_err)) ? 'is-invalid' : ''; ?>" required />
                      <span class="invalid-feedback">: <?php echo $n_o_k_f_n_err; ?></span>
                      <label class="form-label" for="n_o_k_f_n">Next of Kim First Name</label>
                    </div><br>

                    <div class="form-floating">
                      <input type="text" id="n_o_k_l_n" name="n_o_k_l_n" value="<?php echo $n_o_k_l_n; ?>" class="form-control form-control-lg <?php echo (!empty($n_o_k_l_n_err)) ? 'is-invalid' : ''; ?>" required  />
                      <span class="invalid-feedback">: <?php echo $n_o_k_l_n_err; ?></span>
                      <label class="form-label" for="n_o_k_l_n">Next of Kim Last Name</label>
                    </div><br>

                    <div class="form-outline mb-4">
                <div class="phone-list">
				
                <div class="input-group">
              <span class="input-group-text">Next of Kim Phone Number</span>
							<input type="number" name="n_o_k_p_c" id="n_o_k_p_c" placeholder="353"  value="<?php echo $n_o_k_p_c; ?>" class="form-control <?php echo (!empty($n_o_k_p_c_err)) ? 'is-invalid' : ''; ?>" required />
						<input type="text" name="n_o_k_p_n" name="n_o_k_p_n" value="<?php echo $n_o_k_p_n; ?>" class="form-control <?php echo (!empty($n_o_k_p_n_err)) ? 'is-invalid' : ''; ?>" placeholder="0871234567" required />
          </div>
          <span class="invalid-feedback">: <?php echo $n_o_k_p_n_err; ?></span>
          <span class="invalid-feedback">: <?php echo $n_o_k_p_c_err; ?></span>
</div>
              </div>

              <div class="form-floating">
                      <input type="text" id="n_o_k_r_s" name="n_o_k_r_s" value="<?php echo $n_o_k_r_s; ?>" class="form-control form-control-lg <?php echo (!empty($n_o_k_r_s_err)) ? 'is-invalid' : ''; ?>" required />
                      <label class="form-label" for="n_o_k_l_n">Next of Kim Relationship <span class="invalid-feedback">: <?php echo $n_o_k_r_s_err; ?></span></label>
                    </div><br>

    </div>
    </div>
  </div>
</div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Register</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </form>