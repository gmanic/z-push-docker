
<?php
	define('IMAP_SERVER',			(string)	getenv("imap_server"));
	define('IMAP_PORT',			(int)		getenv("imap_port"));
	define('IMAP_OPTIONS',			(string)	getenv("imap_options"));
	define('IMAP_AUTOSEEN_ON_DELETE',	(bool)		constant(getenv("imap_autoseen_on_delete")));
	define('IMAP_FOLDER_CONFIGURED',	(bool)		constant(getenv("imap_folder_configured")));
	define('IMAP_FOLDER_PREFIX',		(string)	getenv("imap_folder_prefix"));
	define('IMAP_FOLDER_PREFIX_IN_INBOX',	(bool)		constant(getenv("imap_folder_prefix_in_inbox")));
	define('IMAP_FOLDER_INBOX',		(string)	getenv("imap_folder_inbox"));
	define('IMAP_FOLDER_SENT',		(string)	getenv("imap_folder_sent"));
	define('IMAP_FOLDER_DRAFT',		(string)	getenv("imap_folder_draft"));
	define('IMAP_FOLDER_TRASH',		(string)	getenv("imap_folder_trash"));
	define('IMAP_FOLDER_SPAM',		(string)	getenv("imap_folder_spam"));
	define('IMAP_FOLDER_ARCHIVE',		(string)	getenv("imap_folder_archve"));
	define('IMAP_INLINE_FORWARD',		(bool)		constant(getenv("imap_inline_forward")));
	define('IMAP_EXCLUDED_FOLDERS',		(string)	getenv("imap_excluded_folders"));
	define('IMAP_DEFAULTFROM',		(string)	getenv("imap_defaultfrom"));
	define('IMAP_SMTP_METHOD',		(string)	getenv("imap_smtp_method"));

	global $imap_smtp_params;
	$imap_smtp_params = array('host' => (string) getenv("imap_smtp_host"), 'port' => (int) getenv("imap_smtp_port"), 'auth' => (bool) constant(getenv("imap_smtp_auth")), 'username' => (string) getenv("imap_smtp_username"), 'password' => (string) getenv("imap_smtp_password"), 'verify_peer' => (bool) constant(getenv("imap_smtp_verify_peer")), 'verify_peer_name' => (bool) constant(getenv("imap_smtp_verify_peer_name")), 'allow_self_signed' => (bool) constant(getenv("imap_smtp_allow_self_signed")));
	define('SYSTEM_MIME_TYPES_MAPPING',	(string)	getenv("system_mime_types_mapping"));
	define('IMAP_MEETING_USE_CALDAV',	(bool)		constant(getenv("imap_meeting_use_caldav")));
