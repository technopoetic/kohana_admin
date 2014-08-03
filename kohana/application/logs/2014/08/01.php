<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-01 06:54:12 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'phpuser'@'localhost' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-08-01 06:54:12 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/rhibbitts/webhost/site1/kohana/application/classes/Controller/User.php(31): Kohana_ORM::factory('User')
#8 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/rhibbitts/webhost/site1/public/index.php(118): Kohana_Request->execute()
#14 {main} in /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-08-01 06:55:11 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'phpuser'@'localhost' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-08-01 06:55:11 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/rhibbitts/webhost/site1/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/rhibbitts/webhost/site1/kohana/application/classes/Controller/User.php(31): Kohana_ORM::factory('User')
#8 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/rhibbitts/webhost/site1/public/index.php(118): Kohana_Request->execute()
#14 {main} in /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php:171