<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domæne',
    'ad_domain_help'			=> 'Dette er nogle gange det samme som dit e-mail-domæne, men ikke altid.',
    'ad_append_domain_label'    => 'Tilføj domænenavn',
    'ad_append_domain'          => 'Tilføj domænenavn til feltet brugernavn',
    'ad_append_domain_help'     => 'Brugeren er ikke forpligtet til at skrive "username@domain.local", de kan bare skrive "brugernavn".',
    'admin_cc_email'            => 'CC email',
    'admin_cc_email_help'       => 'Hvis du vil sende en kopi af checkin/checkout emails som er sendt til brugere til en ekstra email konto, så tilføj den her. Ellers efterlad feltet tomt.',
    'admin_settings'            => 'Admin Indstillinger',
    'is_ad'				        => 'Dette er en Active Directory-server',
    'alerts'                	=> 'Advarsler',
    'alert_title'               => 'Opdater Notifikationsindstillinger',
    'alert_email'				=> 'Send advarsler til',
    'alert_email_help'    => 'E-mail-adresser eller distributionslister du vil have advarsler sendt til, kommasepareret',
    'alerts_enabled'			=> 'Advarsler aktiveret',
    'alert_interval'			=> 'Udløbsvarsel Threshold (i dage)',
    'alert_inv_threshold'		=> 'Lagervarsletærskel',
    'allow_user_skin'           => 'Tillad bruger skin',
    'allow_user_skin_help_text' => 'Afkrydsning her giver brugeren afgang til at overskrive UI skin med et andet skin.',
    'asset_ids'					=> 'Aktiv-id\'er',
    'audit_interval'            => 'Revisionsinterval',
    'audit_interval_help'       => 'Hvis du er forpligtet til regelmæssigt fysisk revidere dine aktiver, skal du indtaste intervallet i måneder, som du bruger. Hvis du opdaterer denne værdi, vil alle "næste revisionsdatoer" for aktiver med en kommende revisionsdato blive opdateret.',
    'audit_warning_days'        => 'Audit Warning Threshold',
    'audit_warning_days_help'   => 'Hvor mange dage i forvejen skal vi advare dig, når aktiver skal betales for revision?',
    'auto_increment_assets'		=> 'Generer auto-tilvækst af asset-tags',
    'auto_increment_prefix'		=> 'Præfiks (valgfrit)',
    'auto_incrementing_help'    => 'Aktiver auto-tilvækst af asset-tags først for at indstille dette',
    'backups'					=> 'Backups',
    'backups_help'              => 'Opret, download og gendan sikkerhedskopier ',
    'backups_restoring'         => 'Gendanner fra sikkerhedskopi',
    'backups_upload'            => 'Upload Sikkerhedskopi',
    'backups_path'              => 'Sikkerhedskopier på serveren gemmes i <code>:path</code>',
    'backups_restore_warning'   => 'Brug gendannelsesknappen <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> til at gendanne fra en tidligere sikkerhedskopi. (Dette virker ikke i øjeblikket med S3 fillagring eller Docker.<br><br>Hele din <strong>:app_name database og eventuelle uploadede filer vil blive fuldstændig erstattet</strong> af, hvad der er i backup-filen.  ',
    'backups_logged_out'         => 'Alle eksisterende brugere, herunder dig, vil blive logget ud, når din gendannelse er fuldført.',
    'backups_large'             => 'Meget store sikkerhedskopier kan timeout på gendannelsesforsøg og kan stadig være nødvendigt at køre via kommandolinjen. ',
    'barcode_settings'			=> 'Stregkodeindstillinger',
    'confirm_purge'			    => 'Bekræft rensning',
    'confirm_purge_help'		=> 'Indtast teksten "DELETE" i boksen nedenfor for at tømme dine slettede poster. Denne handling kan ikke fortrydes og vil slette alle soft-slettede elementer og brugere PERMANENT. (Du bør lave en sikkerhedskopi først, bare for at være sikker.)',
    'custom_css'				=> 'Brugerdefineret CSS',
    'custom_css_help'			=> 'Indtast eventuelle brugerdefinerede CSS overskridelser, du gerne vil bruge. Indsæt ikke de &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Tilpasset Kodeord reset URL',
    'custom_forgot_pass_url_help'	=> 'Dette anvendes i stedet for den indbyggede URL til "glemt kodeord" på login billedet, anvendelig til at sende besøgende til en intern eller hosted LDAP kodeord reset funktion. Den vil effektivt afstille den lokale "glemt kodeord" funktionalitet.',
    'dashboard_message'			=> 'Dashboard meddelelse',
    'dashboard_message_help'	=> 'Denne tekst vil vises på dashboard for alle som har tilladelse til at se dashbordet.',
    'default_currency'  		=> 'Standardvaluta',
    'default_eula_text'			=> 'Standard EULA',
    'default_language'			=> 'Standard sprog',
    'default_eula_help_text'	=> 'Du kan også knytte brugerdefinerede EULA til specifikke aktivkategorier.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Vis aktivnavn',
    'display_checkout_date'     => 'Vis checkout dato',
    'display_eol'               => 'Vis EOL i tabelvisning',
    'display_qr'                => 'Vis firkantede koder',
    'display_alt_barcode'		=> 'Vis 1D stregkode',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D stregkode type',
    'alt_barcode_type'			=> '1D stregkode type',
    'email_logo_size'       => 'Kvadratiske logoer i e-mail ser bedst ud. ',
    'enabled'                   => 'Aktiveret',
    'eula_settings'				=> 'EULA-indstillinger',
    'eula_markdown'				=> 'Denne EULA tillader <a href="https://help.github.com/articles/github-flavored-markdown/">Github smagsmærket markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepterede filtyper er ico, png, og gif. Andre billedformater fungerer muligvis ikke i alle browsere.',
    'favicon_size'          => 'Favicons skal være firkantede billeder, 16x16 pixels.',
    'footer_text'               => 'Ekstra footer tekst ',
    'footer_text_help'          => 'Denne tekst vil vises i footeren i højre side. Der kan anvendes links ved hjælp af <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Linjeskift, headere, billeder etc. kan føre til uforudsigelige resultater.',
    'general_settings'			=> 'Generelle indstillinger',
    'general_settings_keywords' => 'firma support, signatur, accept, e-mail format, brugernavn format, billeder, per side, miniaturebillede, eula, gravatar, tos, instrumentbræt, privatliv',
    'general_settings_help'     => 'Standard slutbrugerlicens og mere',
    'generate_backup'			=> 'Generer sikkerhedskopiering',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Hovedfarge',
    'info'                      => 'Disse indstillinger giver dig mulighed for at tilpasse visse aspekter af din installation.',
    'label_logo'                => 'Etiketlogo',
    'label_logo_size'           => 'Firkantede logoer ser bedst ud - vil blive vist øverst til højre på hver aktiv etiket. ',
    'laravel'                   => 'Laravel Version',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Standard Tilladelsesgruppe',
    'ldap_default_group_info'   => 'Vælg en gruppe der skal tilknyttes nyligt synkroniserede brugere. Husk at en bruger påtager sig tilladelserne for den gruppe, de tildeles.',
    'no_default_group'          => 'Ingen Standardgruppe',
    'ldap_help'                 => 'LDAP/Aktiv Mappe',
    'ldap_client_tls_key'       => 'Ldap Klient TLS Nøgle',
    'ldap_client_tls_cert'      => 'LDAP- Klient- Side TLS Certifikat',
    'ldap_enabled'              => 'LDAP aktiveret',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP-indstillinger',
    'ldap_client_tls_cert_help' => 'Client-Side TLS-certifikat og nøgle til LDAP-forbindelser er normalt kun nyttige i Google Workspace konfigurationer med "Secure LDAP." Begge er påkrævet.',
    'ldap_location'             => 'LDAP- Placering',
'ldap_location_help'             => 'Feltet Ldap Location skal anvendes, hvis <strong>en OU ikke anvendes i Base Bind DN.</strong> Efterlad dette tomt hvis en OU søgning bruges.',
    'ldap_login_test_help'      => 'Indtast validt LDAP brugernavn og kodeord fra den basis DN du angav ovenfor for at teste om dit LDAP login er korrekt konfigureret. DU SKAL FØRST OPDATERE og GEMME DINE LDAP INDSTILLINGER.',
    'ldap_login_sync_help'      => 'Dette tester kun om LDAP kan synkronisere korrekt. Hvis din LDAP authentisering ikke er korrekt, er det usikkert om brugere kan logge ind. DU SKAL FØRST OPDATERE OG GEMME DINE LDAP INDSTILLINGER.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP-server',
    'ldap_server_help'          => 'Dette skal starte med ldap: // (for ukrypteret eller TLS) eller ldaps: // (for SSL)',
    'ldap_server_cert'			=> 'Validering af LDAP SSL-certifikat',
    'ldap_server_cert_ignore'	=> 'Tillad ugyldigt SSL-certifikat',
    'ldap_server_cert_help'		=> 'Marker dette afkrydsningsfelt, hvis du bruger et selvtegnet SSL cert og vil gerne acceptere et ugyldigt SSL-certifikat.',
    'ldap_tls'                  => 'Brug TLS',
    'ldap_tls_help'             => 'Dette bør kun kontrolleres, hvis du kører STARTTLS på din LDAP-server.',
    'ldap_uname'                => 'LDAP Bind Brugernavn',
    'ldap_dept'                 => 'LDAP Afdeling',
    'ldap_phone'                => 'LDAP-telefonnummer',
    'ldap_jobtitle'             => 'LDAP Jobtitel',
    'ldap_country'              => 'LDAP Land',
    'ldap_pword'                => 'LDAP-bindingsadgangskode',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP-filter',
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Fjern markeringen i dette felt, hvis du ikke vil beholde LDAP-adgangskoder synkroniseret med lokale adgangskoder. Deaktivering dette betyder, at dine brugere muligvis ikke kan logge ind, hvis din LDAP-server ikke er tilgængelig af en eller anden grund.',
    'ldap_username_field'       => 'Brugernavn felt',
    'ldap_lname_field'          => 'Efternavn',
    'ldap_fname_field'          => 'LDAP fornavn',
    'ldap_auth_filter_query'    => 'LDAP-godkendelse forespørgsel',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'Denne værdi bruges til at afgøre, om en synkroniseret bruger kan logge ind på Snipe-IT. <strong>Det påvirker ikke muligheden for at tjekke elementer ind eller ud til dem</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>Hvis dette felt er sat til et feltnavn, der ikke findes i din AD/LDAP, eller værdien i AD/LDAP feltet er sat til <code>0</code> eller <code>false</code>, <strong>bruger login vil blive deaktiveret</strong>. Hvis værdien i AD/LDAP feltet er sat til <code>1</code> eller <code>true</code> eller <em>enhver anden tekst</em> betyder, at brugeren kan logge ind. Når feltet er tomt i din AD, respekterer vi <code>userAccountControl</code> attributten, som normalt tillader ikke-suspenderede brugere at logge ind.',
    'ldap_emp_num'              => 'LDAP medarbejdernummer',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synkronisering',
    'license'                   => 'Software licens',
    'load_remote'               => 'Brug Gravatar',
    'load_remote_help_text'		=> 'Afmarkér dette felt, hvis din installation ikke kan indlæse scripts fra det eksterne internet. Dette vil forhindre Snipe-IT i at prøve at indlæse billeder fra Gravatar.',
    'login'                     => 'Log Ind Forsøg',
    'login_attempt'             => 'Log Ind Forsøg',
    'login_ip'                  => 'Ip Adresse',
    'login_success'             => 'Succes?',
    'login_user_agent'          => 'Bruger Agent',
    'login_help'                => 'Liste over forsøg på logins',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Indsæt eventuelt nogle sætninger på din loginskærm, for eksempel for at hjælpe personer, der har fundet en tabt eller stjålet enhed. Dette felt accepterer <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Loginoptions for fjernbrugere',
    'login_remote_user_enabled_text' => 'Tillad login med fjernbrugerheader',
    'login_remote_user_enabled_help' => 'Denne option tillader authentisering via REMOTE_USER headr jf. "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Deaktiver andre authentiseringsmekanismer',
    'login_common_disabled_help' => 'Denne option deaktiverer andre authentiseringsmekanismer. Aktiver denne option, hvis du er sikker på at dit REMOTE_USER login allerede virker',
    'login_remote_user_custom_logout_url_text' => 'Tilpasset logout URL',
    'login_remote_user_custom_logout_url_help' => 'Hvis en URL er angivet her, vil brugere blive omstillet til den efter de har logget ud af Snipe-IT. Det er anvendeligt for at lukke bruger sessions i din authentiseringsmekanisme korrekt.',
    'login_remote_user_header_name_text' => 'Brugerdefineret brugernavn header',
    'login_remote_user_header_name_help' => 'Brug den angivne overskrift i stedet for REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Brug i udskrift',
    'logo_print_assets_help'    => 'Brug branding på udskrevne aktivlister ',
    'full_multiple_companies_support_help_text' => 'Begrænsning af brugere (herunder admins) tildelt virksomheder til deres virksomheds aktiver.',
    'full_multiple_companies_support_text' => 'Fuld flere virksomheder support',
    'show_in_model_list'   => 'Vis i modeldropdown',
    'optional'					=> 'valgfri',
    'per_page'                  => 'Resultater pr. Side',
    'php'                       => 'PHP Version',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'Php System info',
    'php_gd_info'               => 'Du skal installere php-gd for at vise QR-koder, se installationsvejledningen.',
    'php_gd_warning'            => 'PHP Image Processing og GD plugin er IKKE installeret.',
    'pwd_secure_complexity'     => 'Password Complexity',
    'pwd_secure_complexity_help' => 'Vælg, hvilke regler for adgangskompleksitet du ønsker at håndhæve.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Adgangskode kan ikke være det samme som fornavn, efternavn, e-mail, eller brugernavn',
    'pwd_secure_complexity_letters' => 'Kræv mindst et bogstav',
    'pwd_secure_complexity_numbers' => 'Kræv mindst et tal',
    'pwd_secure_complexity_symbols' => 'Kræv mindst et symbol',
    'pwd_secure_complexity_case_diff' => 'Kræv mindst én store og én små bogstaver',
    'pwd_secure_min'            => 'Minimumskode til adgangskode',
    'pwd_secure_min_help'       => 'Mindste tilladte værdi er 8',
    'pwd_secure_uncommon'       => 'Forhindre almindelige adgangskoder',
    'pwd_secure_uncommon_help'  => 'Dette vil gøre det muligt for brugere at bruge almindelige adgangskoder fra de 10.000 passwords, der er rapporteret i tilfælde af brud.',
    'qr_help'                   => 'Aktiver QR-koder først for at indstille dette',
    'qr_text'                   => 'QR Kode Tekst',
    'saml'                      => 'SAML',
    'saml_title'                => 'Opdater SAML-indstillinger',
    'saml_help'                 => 'Indstillinger for SAML',
    'saml_enabled'              => 'SAML aktiveret',
    'saml_integration'          => 'SAML-integration',
    'saml_sp_entityid'          => 'Enheds ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Offentligt Certifikat',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Du kan angive IdP metadata ved hjælp af en URL eller XML-fil.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Brugernavn',
    'saml_attr_mapping_username_help' => 'NavnID vil blive brugt hvis attributmapping er uspecificeret eller ugyldig.',
    'saml_forcelogin_label'     => 'SAML gennemtving Login',
    'saml_forcelogin'           => 'Gør SAML til det primære login',
    'saml_forcelogin_help'      => 'Du kan bruge \'/login?nosaml\' for at komme til den normale loginside.',
    'saml_slo_label'            => 'SAML Single log af',
    'saml_slo'                  => 'Send en LogoutRequest til IdP ved Log af',
    'saml_slo_help'             => 'Dette vil omdirigere brugeren til IdP ved logout. Lad være umarkeret hvis IdP ikke korrekt understøtter SP-initieret SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'Du kan angive yderligere indstillinger til onelogin/php-saml biblioteket. Brug på egen risiko.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Indstilling',
    'settings'                  => 'Indstillinger',
    'show_alerts_in_menu'       => 'Vis meddelelser i top menu',
    'show_archived_in_list'     => 'Arkiverede aktiver',
    'show_archived_in_list_text'     => 'Vis arkiverede aktiver i "Alle aktiver" listen',
    'show_assigned_assets'      => 'Vis assets tildelt til assets',
    'show_assigned_assets_help' => 'Vis assets som blev tildelt til andre assets i Vis bruger -> Aktiver, Vis bruger -> Info -> Udskriv alle Tildelt og på konto -> Vis Tildelte aktiver.',
    'show_images_in_email'     => 'Vis billeder i emails',
    'show_images_in_email_help'   => 'Afkryds denne boks hvis din Snipe-IT installation er bag en VPN eller i et lukket netværk og brugere udenfor netværket vil forhinderes i at anvende billeder fra netværket i deres emails.',
    'site_name'                 => 'Side navn',
    'integrations'               => 'Integrationer',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Generel Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test for at gemme',
    'webhook_title'               => 'Opdater Webhook-indstillinger',
    'webhook_help'                => 'Indstillinger for integration',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Kanal',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Indstillinger',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration er valgfri, men endepunktet og kanalen er påkrævet, hvis du ønsker at bruge det. For at konfigurere :app integration, skal du først <a href=":webhook_link" target="_new" rel="noopener">oprette en indgående webhook</a> på din :app konto. Klik på knappen <strong>Test :app Integration</strong> for at bekræfte, at dine indstillinger er korrekte, før du gemmer. ',
    'webhook_integration_help_button'    => 'Når du har gemt dine :app oplysninger, vil en test knap vises.',
    'webhook_test_help'           => 'Test om din :app integration er konfigureret korrekt. DU SKAL GEM DIN OPDATERET: app INDSTILLINGER FØRST.',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => 'Understøt footer links ',
    'support_footer_help'       => 'Angiv hvem der kan se links i Snipe-IT Support info og brugermanual',
    'version_footer'            => 'Version in footer ',
    'version_footer_help'       => 'Angiv hvem der kan se Snipe-IT versions- og buildnummer.',
    'system'                    => 'Systemoplysninger',
    'update'                    => 'Opdater indstillinger',
    'value'                     => 'Værdi',
    'brand'                     => 'Branding',
    'brand_keywords'            => 'footer, logo, print, tema, hud, header, farver, farve, css',
    'brand_help'                => 'Logo, Webstedsnavn',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Om indstillinger',
    'about_settings_text'       => 'Disse indstillinger giver dig mulighed for at tilpasse visse aspekter af din installation.',
    'labels_per_page'           => 'Etiketter pr. Side',
    'label_dimensions'          => 'Etiket dimensioner (inches)',
    'next_auto_tag_base'        => 'Næste automatisk stigning',
    'page_padding'              => 'Sidemarginer (tommer)',
    'privacy_policy_link'       => 'Link til persondatapolitik',
    'privacy_policy'            => 'Persondatapolitik',
    'privacy_policy_link_help'  => 'Hvis der inkluderes en URL her, vil der blive inkluderet et link til din persondatapolitik i app\'ens footer og i alle emails systemet sender ud ( overensstemmelse med GDPR). ',
    'purge'                     => 'Ryd slettet poster',
    'purge_deleted'             => 'Ryd Slettet ',
    'labels_display_bgutter'    => 'Etiket bundgitter',
    'labels_display_sgutter'    => 'Label side rende',
    'labels_fontsize'           => 'Etiket skriftstørrelse',
    'labels_pagewidth'          => 'Labelark bredde',
    'labels_pageheight'         => 'Etiketark højde',
    'label_gutters'        => 'Etiketafstand (tommer)',
    'page_dimensions'        => 'Side dimensioner (tommer)',
    'label_fields'          => 'Label synlige felter',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link til Snipe-IT i e-mails',
    'show_url_in_emails_help_text'      => 'Fjern markeringen i dette felt, hvis du ikke vil linke tilbage til din Snipe-IT-installation i dine e-mail-fodbold. Nyttigt, hvis de fleste af dine brugere aldrig logger ind.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max miniaturehøjde',
    'thumbnail_max_h_help'   => 'Maksimal højde i pixels, som miniaturer kan vises i listevisningen. Min 25, maks 500.',
    'two_factor'        => 'To faktor godkendelse',
    'two_factor_secret'        => 'Tofaktorkode',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Aktivér to faktorer',
    'two_factor_reset'        => 'Reset 2-Factor Secret',
    'two_factor_reset_help'        => 'Dette vil tvinge brugeren til at tilmelde deres enhed med deres autentificerings-app igen. Dette kan være nyttigt, hvis deres aktuelt tilmeldte enhed er tabt eller stjålet. ',
    'two_factor_reset_success'          => 'To faktor enhed nulstilles',
    'two_factor_reset_error'          => 'To-faktor enhed reset mislykkedes',
    'two_factor_enabled_warning'        => 'Aktivering af to-faktor, hvis den ikke er aktiveret, vil straks tvinge dig til at godkende med en Google Auth-indskrevet enhed. Du vil have mulighed for at tilmelde din enhed, hvis en ikke er indskrevet på nuværende tidspunkt.',
    'two_factor_enabled_help'        => 'Dette aktiverer tofaktors godkendelse ved hjælp af Google Authenticator.',
    'two_factor_optional'        => 'Selektiv (Brugere kan aktivere eller deaktivere hvis tilladt)',
    'two_factor_required'        => 'Påkrævet for alle brugere',
    'two_factor_disabled'        => 'handicappet',
    'two_factor_enter_code'	=> 'Indtast tofaktorkode',
    'two_factor_config_complete'	=> 'Indsend kode',
    'two_factor_enabled_edit_not_allowed' => 'Din administrator tillader ikke dig at redigere denne indstilling.',
    'two_factor_enrollment_text'	=> "To faktor godkendelse er påkrævet, men din enhed er endnu ikke blevet tilmeldt. Åbn din Google Authenticator-app og scan QR-koden nedenfor for at tilmelde din enhed. Når du har tilmeldt din enhed, skal du indtaste koden nedenfor",
    'require_accept_signature'      => 'Kræver Signatur',
    'require_accept_signature_help_text'      => 'Aktivering af denne funktion kræver, at brugerne fysisk logger af ved at acceptere et aktiv.',
    'left'        => 'venstre',
    'right'        => 'højre',
    'top'        => 'top',
    'bottom'        => 'bund',
    'vertical'        => 'lodret',
    'horizontal'        => 'vandret',
    'unique_serial'                => 'Unikke serienumre',
    'unique_serial_help_text'                => 'Markering af denne boks medfører en unik begrænsning af aktivserier',
    'zerofill_count'        => 'Længde af aktivetiketter, herunder zerofill',
    'username_format_help'   => 'Denne indstilling vil kun blive brugt af importprocessen, hvis et brugernavn ikke er angivet, og vi er nødt til at generere et brugernavn til dig.',
    'oauth_title' => 'OAuth API Indstillinger',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Indstillinger',
    'asset_tag_title' => 'Opdater Aktiv Tag Indstillinger',
    'barcode_title' => 'Opdater Stregkode Indstillinger',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Stregkode &amp; QR indstillinger',
    'barcodes_help' => 'Dette vil forsøge at slette cachede stregkoder. Dette vil typisk kun blive brugt, hvis dine stregkodeindstillinger er ændret, eller hvis din Snipe-IT-URL er ændret. Stregkoder vil blive gengenereret når tilgås næste.',
    'barcodes_spinner' => 'Forsøger at slette filer...',
    'barcode_delete_cache' => 'Slet Stregkode Cache',
    'branding_title' => 'Opdater Branding Indstillinger',
    'general_title' => 'Opdater Generelle Indstillinger',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'Dette vil forsøge at sende en test mail til :replyto.',
    'filter_by_keyword' => 'Filtrer efter indstilling af søgeord',
    'security' => 'Sikkerhed',
    'security_title' => 'Opdater Sikkerhedsindstillinger',
    'security_keywords' => 'adgangskode, adgangskoder, krav, to faktor, to-faktor, almindelige adgangskoder, fjernlogin, logout, godkendelse',
    'security_help' => 'To-faktor, Adgangskodebegrænsninger',
    'groups_keywords' => 'tilladelser, tilladelsesgrupper, tilladelse',
    'groups_help' => 'Konto tilladelsesgrupper',
    'localization' => 'Lokalisering',
    'localization_title' => 'Opdater Lokaliseringsindstillinger',
    'localization_keywords' => 'lokalisering, valuta, lokal, lokal, tidszone, international, internatinalisering, sprog, oversættelse',
    'localization_help' => 'Sprog og datovisning',
    'notifications' => 'Notifikationer',
    'notifications_help' => 'E-Mail Advarsler Og Revisionsindstillinger',
    'asset_tags_help' => 'Stigende og præfikser',
    'labels' => 'Etiketter',
    'labels_title' => 'Opdater Etiketindstillinger',
    'labels_help' => 'Etiketstørrelser &amp; indstillinger',
    'purge' => 'Purge',
    'purge_keywords' => 'slet permanent',
    'purge_help' => 'Ryd slettet poster',
    'ldap_extension_warning' => 'Det ser ikke ud som om LDAP- udvidelsen er installeret eller aktiveret på denne server. Du kan stadig gemme dine indstillinger, men du bliver nødt til at aktivere LDAP-udvidelsen til PHP, før LDAP-synkronisering eller login vil virke.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Medarbejdernummer',
    'create_admin_user' => 'Opret en bruger ::',
    'create_admin_success' => 'Succes! Din admin bruger er blevet tilføjet!',
    'create_admin_redirect' => 'Klik her for at gå til din app login!',
    'setup_migrations' => 'Database Migrationer ::',
    'setup_no_migrations' => 'Der var intet at migrere. Dine databasetabeller var allerede opsat!',
    'setup_successful_migrations' => 'Dine databasetabeller er blevet oprettet',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Næste: Opret Bruger',
    'ldap_settings_link' => 'LDAP- Indstillingsside',
    'slack_test' => 'Integration Af Test <i class="fab fa-slack"></i>',
    'label2_enable'           => 'Ny Etiketmotor',
    'label2_enable_help'      => 'Skift til den nye etiketmotor. <b>Bemærk: Du skal gemme denne indstilling, før du indstiller andre.</b>',
    'label2_template'         => 'Skabelon',
    'label2_template_help'    => 'Vælg hvilken skabelon der skal bruges til etiketgenerering',
    'label2_title'            => 'Titel',
    'label2_title_help'       => 'Titlen der vises på etiketter der understøtter den',
    'label2_title_help_phold' => 'Pladsholderen <code>{COMPANY}</code> vil blive erstattet med aktivet&apos;s firmanavn',
    'label2_asset_logo'       => 'Brug Aktiv Logo',
    'label2_asset_logo_help'  => 'Brug logoet for aktivet&apos;s tildelt virksomhed, i stedet for værdien på <code>:setting_name</code>',
    'label2_1d_type'          => '1D Stregkode Type',
    'label2_1d_type_help'     => 'Format for 1D stregkoder',
    'label2_2d_type'          => '2D stregkode type',
    'label2_2d_type_help'     => 'Format for 2D stregkoder',
    'label2_2d_target'        => '2D Stregkode Mål',
    'label2_2d_target_help'   => 'URL\'en 2D stregkode peger på, når der scannes',
    'label2_fields'           => 'Feltdefinitioner',
    'label2_fields_help'      => 'Felter kan tilføjes, fjernes og omordnes i venstre kolonne. For hvert felt kan flere muligheder for Label og DataSource tilføjes, fjernes og omordnet i den rigtige kolonne.',
    'help_asterisk_bold'    => 'Tekst indtastet som <code>**text**</code> vil blive vist som fed',
    'help_blank_to_use'     => 'Efterlad blank for at bruge værdien fra <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> vil bruge værdien fra <code>:setting_name</code>. <br>Bemærk, at værdien af stregkoderne skal overholde den respektive stregkode spec for at blive genereret med succes. Se venligst <a href="https://snipe-it.readme.io/docs/barcodes">dokumentationen <i class="fa fa-external-link"></i></a> for flere detaljer. ',
    'default'               => 'Standard',
    'none'                  => 'Ingen',
    'google_callback_help' => 'Dette skal indtastes som callback URL i dine Google OAuth app indstillinger i din organisation&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google udvikler konsol <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Indstillinger For Google Workspace Login',
    'enable_google_login'  => 'Aktivér brugere for at logge ind med Google Workspace',
    'enable_google_login_help'  => 'Brugere vil ikke blive stillet til rådighed automatisk. De skal have en eksisterende konto her OG i Google Workspace, og deres brugernavn her skal matche deres Google Workspace e-mailadresse. ',
    'mail_reply_to' => 'Mail Svar-Til Adresse',
    'mail_from' => 'Mail Fra Adresse',
    'database_driver' => 'Database Chauffør',
    'bs_table_storage' => 'Lagerplads I Tabel',
    'timezone' => 'Timezone',

];
