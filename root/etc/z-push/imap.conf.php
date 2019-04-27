<?php
    define('IMAP_SERVER', 'imap.fastmail.com');
    define('IMAP_PORT', 993);
    define('IMAP_OPTIONS', '/ssl');
    define('IMAP_AUTOSEEN_ON_DELETE', false);
    define('IMAP_FOLDER_CONFIGURED', true);
    define('IMAP_FOLDER_PREFIX', '');
    define('IMAP_FOLDER_PREFIX_IN_INBOX', false);
    define('IMAP_FOLDER_INBOX', 'INBOX');
    define('IMAP_FOLDER_SENT', 'SENT');
    define('IMAP_FOLDER_DRAFT', 'DRAFTS');
    define('IMAP_FOLDER_TRASH', 'TRASH');
    define('IMAP_FOLDER_SPAM', 'SPAM');
    define('IMAP_FOLDER_ARCHIVE', 'ARCHIVE');
    define('IMAP_INLINE_FORWARD', true);
    define('IMAP_EXCLUDED_FOLDERS', '');
    define('IMAP_DEFAULTFROM', '');
    define('IMAP_SMTP_METHOD', 'smtp');

    global $imap_smtp_params;
    $imap_smtp_params = array('host' => 'ssl://smtp.fastmail.com', 'port' => 465, 'auth' => true, 'username' => 'imap_username', 'password' => 'imap_password', 'verify_peer' => true, 'verify_peer_name' => true, 'allow_self_signed' => false);
    define('SYSTEM_MIME_TYPES_MAPPING', '/etc/mime.types');
    define('IMAP_MEETING_USE_CALDAV', true);
