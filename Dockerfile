FROM debian:stretch-slim

# configuration n
LABEL com.ldaws.fastmailzpush.version "2.5.1-1"
LABEL com.ldaws.fastmailzpush.version.upstream "2.5.1"
LABEL com.ldaws.fastmailzpush.version.revision "1"
VOLUME [ "/var/lib/z-push" ]
ENV EXPECTED_UID=1513 EXPECTED_GID=1513 FORWARDED_FOR_HEADER='X-Forwarded-For' \
  caldav_protocol='https' \
  caldav_server='nc.example.com' \
  caldav_port='443' \
  caldav_path='/dav/%u/' \
  caldav_personal='PRINCIPAL' \
  caldav_supports_sync='false' \
  caldav_max_sync_period=2147483647 \
  carddav_protocol='https' \
  carddav_server='nc.example.com' \
  carddav_port='443' \
  carddav_path='/dav/addressbooks/user/%u/' \
  carddav_default_path='/dav/addressbooks/user/%u/Default' \
  carddav_contacts_folder_name='%u Addressbook' \
  carddav_supports_sync='false' \
  carddav_supports_fn_search='false' \
  carddav_url_vcard_extension='.vcf' \
  imap_server='imap.example.com' \
  imap_port=993 \
  imap_options='/ssl' \
  imap_autoseen_on_delete='false' \
  imap_folder_configured='true' \
  imap_folder_prefix='' \
  imap_folder_prefix_in_inbox='false' \
  imap_folder_inbox='INBOX' \
  imap_folder_sent='SENT' \
  imap_folder_draft='DRAFT' \
  imap_folder_trash='TRASH' \
  imap_folder_spam='JUNK' \
  imap_folder_archive='ARCHIVE' \
  imap_inline_forward='true' \
  imap_excluded_folders='' \
  imap_defaultfrom='' \
  imap_smtp_method='smtp' \
  imap_meeting_use_caldav='true' \
  system_mime_types_mapping='/etc/mime.types' \
  imap_smtp_host='ssl://smtp.example.com' \
  imap_smtp_port='465' \
  imap_smtp_auth='true' \
  imap_smtp_username='imap_username' \
  imap_smtp_password='password' \
  imap_smtp_verify_peer='true' \
  imap_smtp_verify_peer_name='true' \
  imap_smtp_allow_self_signed='false' \
  TZ='Europe/Berlin' \
  zpush_script_timeout=0 \
  zpush_use_custom_remote_ip_header='HTTP_X_FORWARDED_FOR' \
  zpush_use_fullemail_for_login='true' \
  zpush_state_machine='FILE' \
  zpush_state_dir='/var/lib/z-push/' \
  zpush_ipc_provider='' \
  zpush_logbackend='filelog' \
  zpush_loglevel=LOGLEVEL_INFO \
  zpush_logauthfail='true' \
  zpush_loguserlevel=LOGLEVEL_DEVICEID \
  zpush_logfiledir='/var/log/z-push/' \
  zpush_logfile='zpush.log' \
  zpush_logerrorfile='zpush-err.log' \
  zpush_provisioning='false' \
  zpush_loose_provisioning='true' \
  zpush_provisioning_file='policies.ini' \
  zpush_sync_conflict_default=SYNC_CONFLICT_OVERWRITE_PIM \
  zpush_sync_filtertime_max=SYNC_FILTERTYPE_ALL \
  zpush_ping_intervall=60 \
  zpush_fileas_order=SYNC_FILEAS_LASTFIRST \
  zpush_sync_max_items=512 \
  zpush_unset_undefined_properties='false' \
  zpush_sync_contacts_maxpicturesize=5242880 \
  zpush_allow_webservice_users_access='false' \
  zpush_use_partial_foldersync='false' \
  zpush_ping_lower_bound_lifetime='false' \
  zpush_ping_higher_bound_lifetime='false' \
  zpush_sync_timeout_medium_devicetypes='SAMSUNGGTI' \
  zpush_sync_timeout_long_devicetypes='iPod, iPad, iPhone, WP, WindowsOutlook, WindowsMail' \
  zpush_retry_after_delay=300 \
  zpush_backend_provider='BackendCombined' \
  zpush_search_provider=''

EXPOSE 80
CMD [ "bash", "/usr/bin/docker-entry" ]

RUN apt-get update && apt-get install -y \
  php-curl \
  php-xml \
  php-imap \
  libawl-php \
  php \
  php-soap \
  php-mbstring \
  libapache2-mod-php \
  && rm -rf /var/lib/apt/lists/*

COPY /vendor /vendor

# note: failures are expected
RUN mkdir /var/log/z-push && chown www-data.www-data /var/log/z-push \
  && dpkg -i /vendor/z-push-*.deb && rm -rf /vendor

COPY root /
