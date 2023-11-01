
<?php 

require_once __DIR__ . '/header.php';

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    // User is authenticated; display the content here.
    echo "Welcome to the secure area!";

    echo '<a href="logout.php">login out</a>';
} else {
    // User is not authenticated; redirect to the login page.
    header('Location: login.php');
}









echo Users::get_id('vxlrubel');


/**
 * include footer area
 * 
 * @return void
 */
require_once __DIR__ . '/footer.php';