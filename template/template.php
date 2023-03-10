<!--
*     Template Layout.
*     Project for Institute of Technology Carlow
*     @Janusz Czeropski C00176885@itcarlow.ie 
*     2022
-->
<?php 
  session_start();
  require_once($_SERVER['DOCUMENT_ROOT'].'/inc/db.inc.php');
  ?>


<html>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/template/header_tpl.php'); //Calling Header ?>
<body>

<?php
            if(!isset($_GET['page']) || $_GET['page'] == ''){
                $page = 'home';
            } else {
                $page = $_GET['page'];
            }

            switch($page)
            {
                case 'home':
                    require($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); 
                    break;
                case 'login':
                    require($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); 
                    break;
                case 'register':
                    require($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); 
                    break;
                case 'register-confirm':
                    require($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); 
                    break;
                case 'logout':
                    require($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); 
                    break;
                case 'logout-confirm':
                    require($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); 
                    break;
                case 'dashboard':
                    require($_SERVER['DOCUMENT_ROOT'].'/template/' . $page . '_tpl.php'); 
                    break;
                default:
                require($_SERVER['DOCUMENT_ROOT'].'/template/' . '404' . '_tpl.php'); 

            }
        ?>



    </body>

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/template/footer_tpl.php'); //Calling Footer ?>
        
</html>