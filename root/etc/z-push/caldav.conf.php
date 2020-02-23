<?php
/***********************************************
* File      :   config.php
* Project   :   Z-Push
* Descr     :   CalDAV backend configuration file
*
* Created   :   27.11.2012
*
* Copyright 2012 - 2014 Jean-Louis Dupond
*
* Jean-Louis Dupond released this code as AGPLv3 here: https://github.com/dupondje/PHP-Push-2/issues/93
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License, version 3,
* as published by the Free Software Foundation.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* Consult LICENSE file for details
************************************************/

// ************************
//  BackendCalDAV settings
// ************************

// Server protocol: http or https
define('CALDAV_PROTOCOL',	(string)	getenv("caldav_protocol"));

// Server name
define('CALDAV_SERVER',		(string)	getenv("caldav_server"));

// Server port
define('CALDAV_PORT',		(int)		getenv("caldav_port"));

// Path
define('CALDAV_PATH',		(string)	getenv("caldav_path"));

// Default CalDAV folder (calendar folder/principal). This will be marked as the default calendar in the mobile
define('CALDAV_PERSONAL',	(string)	getenv("caldav_personal"));

// If the CalDAV server supports the sync-collection operation
// DAViCal, SOGo and SabreDav support it
// SabreDav version must be at least 1.9.0, otherwise set this to false
// Setting this to false will work with most servers, but it will be slower
define('CALDAV_SUPPORTS_SYNC',	(bool)		constant(getenv("caldav_supports_sync")));


// Maximum period to sync.
// Some servers don't support more than 10 years so you will need to change this
define('CALDAV_MAX_SYNC_PERIOD',	(int)	getenv("caldav_max_sync_period"));
