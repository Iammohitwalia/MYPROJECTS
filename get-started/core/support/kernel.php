 
 <?php
    /**
     * include the helpers.php file in kernel.php file
     */
    require_once  __DIR__ . "/helpers.php";

    // check the action is set or not

    if (isset($_POST['action'])) {
        require_once action($_POST['action']);
    }

    ?>
  