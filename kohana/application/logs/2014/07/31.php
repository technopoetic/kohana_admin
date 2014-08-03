<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-31 17:00:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php:137
2014-07-31 17:00:09 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/info')
#1 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/info', NULL)
#2 /home/rhibbitts/webhost/site1/kohana/application/classes/Controller/User.php(7): Kohana_View::factory('user/info')
#3 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/rhibbitts/webhost/site1/public/index.php(118): Kohana_Request->execute()
#9 {main} in /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php:137
2014-07-31 17:01:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php:137
2014-07-31 17:01:49 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/info')
#1 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/info', NULL)
#2 /home/rhibbitts/webhost/site1/kohana/application/classes/Controller/User.php(7): Kohana_View::factory('user/info')
#3 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/rhibbitts/webhost/site1/public/index.php(118): Kohana_Request->execute()
#9 {main} in /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php:137
2014-07-31 17:02:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php:137
2014-07-31 17:02:12 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/rhibbitts/webhost/site1/public/index.php(118): Kohana_Request->execute()
#9 {main} in /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php:137
2014-07-31 17:03:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/user/info.php [ 1 ] in /home/rhibbitts/webhost/site1/kohana/application/views/user/info.php:1
2014-07-31 17:03:58 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/application/views/user/info.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/rhibbitts...', 1, Array)
#1 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(61): include('/home/rhibbitts...')
#2 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/rhibbitts...', Array)
#3 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/rhibbitts/webhost/site1/kohana/application/classes/Controller/User.php(7): Kohana_Response->body(Object(View))
#6 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/rhibbitts/webhost/site1/public/index.php(118): Kohana_Request->execute()
#12 {main} in /home/rhibbitts/webhost/site1/kohana/application/views/user/info.php:1
2014-07-31 17:03:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 8 ] in file:line
2014-07-31 17:03:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 17:04:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2014-07-31 17:04:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 17:07:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in file:line
2014-07-31 17:07:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 17:14:14 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Cookie.php:67
2014-07-31 17:14:14 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/rhibbitts/webhost/site1/public/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/rhibbitts/webhost/site1/kohana/system/classes/Kohana/Cookie.php:67
2014-07-31 17:16:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-07-31 17:16:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-31 17:19:19 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-31 17:19:19 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
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
2014-07-31 17:21:47 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'www-data'@'localhost' (using password: NO) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-31 17:21:47 --- DEBUG: #0 /home/rhibbitts/webhost/site1/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
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