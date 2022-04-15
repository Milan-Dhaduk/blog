<?php
    //Require libraries from folder libraries



    require_once 'app/libraries/Route.php';
    require_once 'app/libraries/BaseController.php';
    require_once 'app/libraries/Database.php';

    //require_once 'helpers/session_helper.php';

    require_once 'app/configuration/config.php';

    //Instantiate core class
    $init = new Route();