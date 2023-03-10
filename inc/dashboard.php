<?php

if(isset($_SESSION["loggedin"]) === false){
    header("location: login");
    exit;
}

$query = $pdo->prepare("SELECT email, image, iv, enc_iv, f_name, l_name, gender, s_id, p_country, p_number, dob, m_d_1, m_d_2, m_d_3, m_d_4, m_d_5, m_d_6, m_d_7, m_d_8, m_d_9, m_d_10, m_d_11, m_d_12, m_d_13, m_c, d_i_n, d_i_p_c, d_i_p_n, n_o_k_f_n, n_o_k_l_n, n_o_k_p_c, n_o_k_p_n, n_o_k_r_s, registred FROM users WHERE email=:email");
$query->bindValue(':email', $_SESSION['email'], PDO::PARAM_STR);
$query->execute();
$query->setFetchMode(PDO::FETCH_ASSOC);

?>