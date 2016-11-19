<?php

####### NEW MVC project ##########
####### AUTH Valeh ###############


// Auto Loads
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'config/path.php';
require 'config/database.php';

// Library

require 'libs/Database.php';
require 'libs/Session.php';


// Utils

require 'utils/Auth.php';
require 'utils/Nano.php';
require 'utils/Helper.php';
require 'utils/Hash.php';

$app = new Bootstrap();
