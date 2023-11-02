
<?php 

require_once __DIR__ . '/header.php';


if( Users::is_user_logged_in() ){

    include __DIR__ . '/view/welcome.php';
    
}else{
    include __DIR__ . '/view/regular.php';
}

/**
 * include footer area
 * 
 * @return void
 */
require_once __DIR__ . '/footer.php';