<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domeen',
    'ad_domain_help'			=> 'See on mõnikord sama kui teie e-posti domeen, kuid mitte alati.',
    'ad_append_domain_label'    => 'Lisa domeeninimi',
    'ad_append_domain'          => 'Lisa domeeninimi kasutaja lahtrisse',
    'ad_append_domain_help'     => 'Kasutaja ei pea kirjutama "username@domain.local", nad võivad lihtsalt kirjutada "username".',
    'admin_cc_email'            => 'CC e-mail',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'See on Active Directory server',
    'alerts'                	=> 'Märguanded',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Saada hoiatusi',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Hoiatused on lubatud',
    'alert_interval'			=> 'Aegumatu häiretaseme künnis (päevades)',
    'alert_inv_threshold'		=> 'Inventari hoiatuslävi',
    'allow_user_skin'           => 'Luba kasutaja teemavaade',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'Varade ID-d',
    'audit_interval'            => 'Auditi intervall',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Auditi hoiatuslävi',
    'audit_warning_days_help'   => 'Mitu päeva peaksime ette hoiatama varade auditeerimise tähtajast?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Eesliide (valikuline)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Varukoopiad',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Triipkoodide seadistused',
    'confirm_purge'			    => 'Kinnitage puhastamine',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Kohandatud CSS',
    'custom_css_help'			=> 'Sisestage kõik kohandatud CSS-i muudatused, mida soovite kasutada. Ärge lisage silte &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Avalehe sõnum',
    'dashboard_message_help'	=> 'See tekst ilmub avalehele igaühele kellel on õigused vaadata avalehte.',
    'default_currency'  		=> 'Valuuta vaikimisi',
    'default_eula_text'			=> 'EULA vaikimisi',
    'default_language'			=> 'Vaikimisi keel',
    'default_eula_help_text'	=> 'Võite ka kohandatud EULA-sid siduda kindlate varakategooriatega.',
    'acceptance_note'           => 'Lisa märkus oma otsusele (Valikuline)',
    'display_asset_name'        => 'Kuvatava vara nimi',
    'display_checkout_date'     => 'Display Checkout Kuupäev',
    'display_eol'               => 'Kuva EOL tabeli vaates',
    'display_qr'                => 'Kuva ruudukoodid',
    'display_alt_barcode'		=> 'Kuvage 1D vöötkood',
    'email_logo'                => 'Emaili logo',
    'barcode_type'				=> '2D-triipkoodi tüüp',
    'alt_barcode_type'			=> '1D-vöötkoodi tüüp',
    'email_logo_size'       => 'Kandilised logod paistavad emailis paremini välja. ',
    'enabled'                   => 'Lubatud',
    'eula_settings'				=> 'EULA seaded',
    'eula_markdown'				=> 'EULA võimaldab <a href="https://help.github.com/articles/github-flavored-markdown/">Githubi maitsestatud hinnalisa</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Lubatud failitüübid on ico, png ja gif. Teised failitüübid ei pruugi kõigis lehitsejates töödata.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'üldised seaded',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Loo varundamine',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Päise värv',
    'info'                      => 'Need sätted võimaldavad teil kohandada oma installi teatud aspekte.',
    'label_logo'                => 'Sildi logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laraveli versioon',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP on lubatud',
    'ldap_integration'          => 'LDAP-i integreerimine',
    'ldap_settings'             => 'LDAP seaded',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP server',
    'ldap_server_help'          => 'See peaks algama ldap: // (krüpteerimata või TLS-i puhul) või ldaps: // (SSL-i puhul)',
    'ldap_server_cert'			=> 'LDAP SSL-sertifikaadi valideerimine',
    'ldap_server_cert_ignore'	=> 'Lubage kehtetu SSL-sertifikaat',
    'ldap_server_cert_help'		=> 'Märkige see ruut, kui kasutate ennastkasutatud SSL-i sertifikaati ja soovite nõustuda sobiva SSL-sertifikaadiga.',
    'ldap_tls'                  => 'Kasutage TLS-i',
    'ldap_tls_help'             => 'Seda tuleks kontrollida ainult siis, kui kasutate oma LDAP-serveris STARTTLS-i.',
    'ldap_uname'                => 'LDAP Bind\'i kasutajanimi',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP bind parool',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-filter',
    'ldap_pw_sync'              => 'LDAP paroolide sünkroonimine',
    'ldap_pw_sync_help'         => 'Tühjendage see ruut, kui te ei soovi LDAP paroole sünkroonida kohalike paroolidega. Selle keelamine tähendab, et teie kasutajad ei pruugi siseneda, kui teie LDAP-server mingil põhjusel pole saavutatav.',
    'ldap_username_field'       => 'Kasutajanimi väli',
    'ldap_lname_field'          => 'Perekonnanimi',
    'ldap_fname_field'          => 'LDAP eesnimi',
    'ldap_auth_filter_query'    => 'LDAP-i autentimise päring',
    'ldap_version'              => 'LDAP versioon',
    'ldap_active_flag'          => 'LDAP aktiivne lipp',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'LDAPi töötaja number',
    'ldap_email'                => 'LDAP-e-post',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Software License',
    'load_remote'               => 'Use Gravatar',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load images from Gravatar.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Edukas?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Logi sisse Märkus',
    'login_note_help'           => 'Soovi korral lisage oma sisselogimisekraanile mõni lause, näiteks selleks, et aidata inimesi, kes on leidnud kadunud või varastatud seadme. See väli võtab vastu <a href="https://help.github.com/articles/github-flavored-markdown/">Github maitsestatud markdown</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Kasutajate (sh administraatorite) piiramine, mis on määratud firmadele ettevõtte varadele.',
    'full_multiple_companies_support_text' => 'Terve mitu ettevõtete toetust',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'vabatahtlik',
    'per_page'                  => 'Tulemused lehel',
    'php'                       => 'PHP versioon',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Peate installima php-gd, et kuvada QR-koode, vt installijuhiseid.',
    'php_gd_warning'            => 'PHP pilditöötlust ja GD pluginat ei ole installitud.',
    'pwd_secure_complexity'     => 'Parool keerukus',
    'pwd_secure_complexity_help' => 'Valige mis parooli keerukuse reeglid soovite jõustada.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Parool miinimummärke',
    'pwd_secure_min_help'       => 'Minimaalne lubatud väärtus on 8',
    'pwd_secure_uncommon'       => 'Vältida tavapäraseid paroole',
    'pwd_secure_uncommon_help'  => 'See keelab kasutajatel kasutada tavapäraseid paroole 10 000 paroole, mis on teatatud rikkumistest.',
    'qr_help'                   => 'Luba QR-koodid esmalt selle seadistamiseks',
    'qr_text'                   => 'QR-koodi tekst',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Seadistus',
    'settings'                  => 'Seaded',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Arhiveeritud vahendid',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Saidi nimi',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT versioon',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Süsteemi informatsioon',
    'update'                    => 'Värskenda seaded',
    'value'                     => 'Väärtus',
    'brand'                     => 'Branding',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Seadistuste kohta',
    'about_settings_text'       => 'Need sätted võimaldavad teil kohandada oma installi teatud aspekte.',
    'labels_per_page'           => 'Sildid lehel',
    'label_dimensions'          => 'Märgise mõõtmed (tollid)',
    'next_auto_tag_base'        => 'Järgmine automaatne juurdekasv',
    'page_padding'              => 'Lehe marginaalid (tollid)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Puhasta kustutatud dokumendid',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Sildi alumine veekraan',
    'labels_display_sgutter'    => 'Märgise külgrauad',
    'labels_fontsize'           => 'Sildi suuruse font',
    'labels_pagewidth'          => 'Märgistri laius',
    'labels_pageheight'         => 'Märgistuste lehe kõrgus',
    'label_gutters'        => 'Märgise vahe (tollides)',
    'page_dimensions'        => 'Lehe mõõtmed (tolli kohta)',
    'label_fields'          => 'Märgistage nähtavaid välju',
    'inches'        => 'tolli',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link Snipe-IT-ile meilides',
    'show_url_in_emails_help_text'      => 'Tühjendage see ruut, kui te ei soovi teie e-posti jalustisse naasta Snipe-IT-i installatsioonile. Kasulik, kui enamik teie kasutajaid kunagi ei logi sisse.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maksimaalne pisipildi kõrgus',
    'thumbnail_max_h_help'   => 'Pikilehtede maksimaalne kõrgus võib pisipilte lugeda loendi vaates. Min 25, max 500.',
    'two_factor'        => 'Kaks teguri autentimist',
    'two_factor_secret'        => 'Kahe faktori kood',
    'two_factor_enrollment'        => 'Kahe faktori registreerimine',
    'two_factor_enabled_text'        => 'Luba kaks tegurit',
    'two_factor_reset'        => 'Lähtesta kahefaktori saladus',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Kahe faktori seade on edukalt lähtestatud',
    'two_factor_reset_error'          => 'Kaks tegurit seadete lähtestamine nurjus',
    'two_factor_enabled_warning'        => 'Kaheteguri lubamine, kui see pole praegu lubatud, viib teid otsekohe Google Auth-seadmesse autentimiseks. Teil on võimalus oma seadet registreeruda, kui seda praegu ei ole.',
    'two_factor_enabled_help'        => 'See lülitab kaheteguri autentimise abil Google Authenticatori.',
    'two_factor_optional'        => 'Valikuline (Kasutajad saavad lubada või keelata)',
    'two_factor_required'        => 'Nõutav kõigile kasutajatele',
    'two_factor_disabled'        => 'Keelatud',
    'two_factor_enter_code'	=> 'Sisestage kahe faktori kood',
    'two_factor_config_complete'	=> 'Esita koodeks',
    'two_factor_enabled_edit_not_allowed' => 'Teie administraator ei luba seda sätet muuta.',
    'two_factor_enrollment_text'	=> "Vaja on kahte tegurit, kuid teie seadet ei ole veel registreeritud. Avage oma Google Authenticatori rakendus ja skannige oma seadme registreerimiseks allolevat QR-koodi. Kui olete oma seadme sisestanud, sisestage allolev kood",
    'require_accept_signature'      => 'Nõuda allkirja',
    'require_accept_signature_help_text'      => 'Selle funktsiooni lubamine nõuab, et kasutajad võtaksid vara füüsiliselt alla.',
    'left'        => 'lahkus',
    'right'        => 'õige',
    'top'        => 'üleval',
    'bottom'        => 'põhja',
    'vertical'        => 'vertikaalne',
    'horizontal'        => 'horisontaalne',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Varasiltide, sealhulgas zerofilli pikkus',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Puhasta kustutatud dokumendid',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Töötaja number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Pealkiri',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => '2D-triipkoodi tüüp',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The URL the 2D barcode points to when scanned',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',

];
