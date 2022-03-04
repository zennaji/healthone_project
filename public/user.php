<?php
global $params;
// Controleer of de user een admin is 
if ($_SESSION["myrole"] == 'user') {
    if (isset($params[2])) {
        switch ($params[2]) {

            case 'settings':
                $titleSuffix .= ' | Settings';
                include_once(TEMPLATE_ROOT . "/user/settings.php");
                break;
            case 'profile':
                $titleSuffix .= ' | Profile';
                $profileName =  strip_tags(filter_input(INPUT_POST, 'profileName'));


                if (isset($_POST['nameSubmit'])) {
                    updateUserinfo($profileName);
                }

                include_once(TEMPLATE_ROOT . "/user/profile.php");
                break;
            default:
                $titleSuffix = ' | Home';
                include_once "../Templates/home.php";
        }
    } else {
        $titleSuffix = ' | Home';
        include_once(TEMPLATE_ROOT . "/home.php");
    }
} else {
    header("location:/404");
}
