<?php
class BackendCombinedConfig {
    public static function GetBackendCombinedConfig() {
        return array(
            'backends' => array(
                'i' => array(
                    'name' => 'BackendIMAP',
                ),
                'd' => array(
                    'name' => 'BackendCardDAV',
                ),
                'c' => array(
                    'name' => 'BackendCalDAV',
                ),
            ),
            'delimiter' => '/',
            //force one type of folder to one backend
            //it must match one of the above defined backends
            'folderbackend' => array(
                SYNC_FOLDER_TYPE_INBOX => 'i',
                SYNC_FOLDER_TYPE_DRAFTS => 'i',
                SYNC_FOLDER_TYPE_WASTEBASKET => 'i',
                SYNC_FOLDER_TYPE_SENTMAIL => 'i',
                SYNC_FOLDER_TYPE_OUTBOX => 'i',
                SYNC_FOLDER_TYPE_TASK => 'c',
                SYNC_FOLDER_TYPE_APPOINTMENT => 'c',
                SYNC_FOLDER_TYPE_CONTACT => 'd',
                SYNC_FOLDER_TYPE_NOTE => 'c',
                SYNC_FOLDER_TYPE_JOURNAL => 'c',
                SYNC_FOLDER_TYPE_OTHER => 'i',
                SYNC_FOLDER_TYPE_USER_MAIL => 'i',
                SYNC_FOLDER_TYPE_USER_APPOINTMENT => 'c',
                SYNC_FOLDER_TYPE_USER_CONTACT => 'd',
                SYNC_FOLDER_TYPE_USER_TASK => 'c',
                SYNC_FOLDER_TYPE_USER_JOURNAL => 'c',
                SYNC_FOLDER_TYPE_USER_NOTE => 'c',
                SYNC_FOLDER_TYPE_UNKNOWN => 'i',
            ),
            'rootcreatefolderbackend' => 'i',
        );
    }
}
