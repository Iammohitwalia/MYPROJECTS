
  <?php
    /**
     * Creat the header.php file function
     * i.e file_header()
     * @author Ework lab
     * @version 1.0.0
     * @return string path of the header.php file
     */
    function file_header()
    {
        return realpath(__DIR__ . "/layouts/header.php");
    }
    /**
     * Creat the footer.php file function
     * i.e file_footer()
     *@return path of the footer.php file
     */
    function file_footer()
    {
        return realpath(__DIR__ . "/layouts/footer.php");
    };
    /**
     * creat action function.
     *  @return the path of the file that have in action folder
     * with file extansion '.php'
     * 
     */
    function action($action)
    {
        $actions = __DIR__ . './actions/' . $action . '.php';
        if (has_Action($actions)) {
            return realpath($actions);
        } else {
            return __DIR__ . "/action/fallbacks.php";
        }
    }
    /**
     * creat has_Action
     *@return the file is exists or not
     *if file exists then the action is successsfully submit
     *else
     *It goes to the fallbacks.php file in action folder 
     */

    function has_Action($actions)
    {
        return file_exists($actions);
    }
    /**
     *creat file_app() 
     *
     *@return the path of bootstrap/app.php file path
     */
    function file_app()
    {
        return realpath(__DIR__ . "/../../bootstrap/app.php");
    };
    /**
     * creat file_kernel()
     * 
     * @return the path of kernel.php file path
     */
    function file_kernel()
    {
        return realpath(__DIR__ . '/kernel.php');
    }
    /**
     * @return the path of database/users.json file path
     */
    function file_user()
    {
        return realpath(__DIR__ . "/../../database/users.json");
    }
   /**
     * creat file_profile()
     * 
     * @return the path of profile.json file path
     */
    function file_profile()
    {
        return realpath(__DIR__ . "/../../database/profiles.json");
    }

    function file_indexes()
    {
        return realpath(__DIR__ . "/../../database/indexes.json");
    }

      /**
     * creat file_contact()
     * 
     * @return the path of contact.json file path
     */
function file_contact()
{
    return realpath(__DIR__ ."/../../database/contact.json");
}


function file_pro(){
    return realpath(__DIR__ ."/../../profile.php");
}
function storage_path()
 {
return realpath(__DIR__ ."/../../storage/app/public/contact");
}
function storage_link()
{
  return __DIR__ ."../../storage/app/public";
}
function user_profile()
{
  return realpath(__DIR__ ."/../profile.php");
}
function file_master()
{
    return realpath(__DIR__ . "/layouts/master.php");
}