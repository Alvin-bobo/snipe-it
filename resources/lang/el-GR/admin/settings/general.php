<?php

return [
    'ad'				        => 'Υπηρεσία καταλόγου Active Directory',
    'ad_domain'				    => 'Τομέα Active Directory',
    'ad_domain_help'			=> 'Αυτό είναι μερικές φορές το ίδιο με τον τομέα ηλεκτρονικού ταχυδρομείου σας, αλλά όχι πάντα.',
    'ad_append_domain_label'    => 'Προσάρτηση ονόματος τομέα',
    'ad_append_domain'          => 'Προσάρτηση ονόματος τομέα στο πεδίο ονόματος χρήστη',
    'ad_append_domain_help'     => 'Ο χρήστης δεν απαιτείται για να γράψει "username@domain.local", μπορεί απλά να πληκτρολογήσει "username".',
    'admin_cc_email'            => 'Επασύναψη email',
    'admin_cc_email_help'       => 'Εάν θέλετε να στείλετε ένα αντίγραφο checkin/checkout emails που αποστέλλονται στους χρήστες σε έναν επιπλέον λογαριασμό email, εισαγάγετέ το εδώ. Διαφορετικά, αφήστε αυτό το πεδίο κενό.',
    'admin_settings'            => 'Ρυθμίσεις Διαχειριστή',
    'is_ad'				        => 'Αυτός είναι ένας διακομιστής υπηρεσίας καταλόγου Active Directory',
    'alerts'                	=> 'Ειδοποιήσεις',
    'alert_title'               => 'Ενημέρωση Ρυθμίσεων Ειδοποιήσεων',
    'alert_email'				=> 'Αποστολή ειδοποιήσεων προς',
    'alert_email_help'    => 'Διευθύνσεις ηλεκτρονικού ταχυδρομείου ή λίστες διανομής στις οποίες θέλετε να αποστέλλονται ειδοποιήσεις, χωρισμένες με κόμμα',
    'alerts_enabled'			=> 'Ειδοποιήσεις ενεργοποιημένες',
    'alert_interval'			=> 'Ελάχιστο όριο λήξης ειδοποιήσεων (σε ημέρες)',
    'alert_inv_threshold'		=> 'Ειδοποιήση ορίου αποθήκης',
    'allow_user_skin'           => 'Επιτρέπεται Το Θέμα Χρήστη',
    'allow_user_skin_help_text' => 'Ενεργοποιώντας αυτό το πλαίσιο θα επιτρέπεται σε έναν χρήστη να παρακάμπτει το UI skin με ένα διαφορετικό.',
    'asset_ids'					=> 'Στοιχεία ταυτότητας περιουσιακών στοιχείων',
    'audit_interval'            => 'Διάρκεια ελέγχου',
    'audit_interval_help'       => 'Εάν απαιτείται να ελέγχετε τακτικά τα περιουσιακά σας στοιχεία, εισάγετε το διάστημα σε μήνες που χρησιμοποιείτε. Εάν ενημερώσετε αυτήν την τιμή, όλες οι "επόμενες ημερομηνίες ελέγχου" για τα περιουσιακά στοιχεία με μια επερχόμενη ημερομηνία ελέγχου θα ενημερωθούν.',
    'audit_warning_days'        => 'Όριο προειδοποίησης ελέγχου',
    'audit_warning_days_help'   => 'Πόσες μέρες νωρίτερα θα πρέπει να σας προειδοποιήσουμε όταν τα περιουσιακά στοιχεία οφείλονται για έλεγχο;',
    'auto_increment_assets'		=> 'Δημιουργία ετικετών στοιχείων ενεργητικού αυτόματης αύξησης',
    'auto_increment_prefix'		=> 'Πρόθεμα (μη υποχρεωτικό)',
    'auto_incrementing_help'    => 'Ενεργοποιήστε πρώτα τις ετικέτες στοιχείων αυτόματης αύξησης για να το ορίσετε',
    'backups'					=> 'Αντίγραφα Ασφαλείας',
    'backups_help'              => 'Δημιουργήστε, κατεβάστε και επαναφέρετε αντίγραφα ασφαλείας ',
    'backups_restoring'         => 'Επαναφορά από αντίγραφο ασφαλείας',
    'backups_upload'            => 'Μεταφόρτωση Αντιγράφου Ασφαλείας',
    'backups_path'              => 'Τα αντίγραφα ασφαλείας στο διακομιστή αποθηκεύονται στο <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'Όλοι οι υπάρχοντες χρήστες, συμπεριλαμβανομένου και σας, θα αποσυνδεθούν μόλις ολοκληρωθεί η επαναφορά σας.',
    'backups_large'             => 'Πολύ μεγάλα αντίγραφα ασφαλείας μπορεί να τερματίσουν στην προσπάθεια επαναφοράς και μπορεί ακόμα να χρειαστεί να εκτελεστούν μέσω της γραμμής εντολών. ',
    'barcode_settings'			=> 'Ρυθμίσεις γραμμωτού κώδικα',
    'confirm_purge'			    => 'Επιβεβαίωση καθαρισμού',
    'confirm_purge_help'		=> 'Εισάγετε το κείμενο "Διαγραφή" στο παρακάτω πλαίσιο για να καθαρίσετε τις διαγραμμένες εγγραφές σας. Αυτή η ενέργεια δεν μπορεί να αναιρεθεί και θα διαγράψει PERMANENTLY όλα τα μαλακά διαγραμμένα στοιχεία και χρήστες. (Θα πρέπει να κάνετε ένα αντίγραφο ασφαλείας πρώτα, μόνο για να είστε ασφαλείς).',
    'custom_css'				=> 'Προσαρμοσμένο CSS',
    'custom_css_help'			=> 'Εισαγάγετε τυχόν προσαρμοσμένες επικαλύψεις CSS που θέλετε να χρησιμοποιήσετε. Μην συμπεριλάβετε τις ετικέτες &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'URL επαναφοράς προσαρμοσμένου κωδικού πρόσβασης',
    'custom_forgot_pass_url_help'	=> 'Αυτό αντικαθιστά την ενσωματωμένη ξεχασμένη διεύθυνση URL κωδικού πρόσβασης στην οθόνη σύνδεσης, χρήσιμη για να κατευθύνει τα άτομα σε λειτουργία εσωτερικής ή φιλοξενούμενης επαναφοράς κωδικού πρόσβασης LDAP. Θα απενεργοποιήσει αποτελεσματικά τη λειτουργικότητα ξεχασμένου κωδικού πρόσβασης τοπικού χρήστη.',
    'dashboard_message'			=> 'Όνομα Εμφάνισης Στο Μενού',
    'dashboard_message_help'	=> 'Αυτό το κείμενο θα εμφανίζεται στον πίνακα ελέγχου για οποιονδήποτε έχει άδεια να δει τον πίνακα ελέγχου.',
    'default_currency'  		=> 'Προεπιλεγμένο νόμισμα',
    'default_eula_text'			=> 'Προεπιλογή EULA',
    'default_language'			=> 'Προκαθορισμένη γλώσσα',
    'default_eula_help_text'	=> 'Μπορείτε επίσης να συσχετίσετε προσαρμοσμένες ΑΔΕΚ με συγκεκριμένες κατηγορίες περιουσιακών στοιχείων.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Εμφάνιση ονόματος παγίου',
    'display_checkout_date'     => 'Εμφάνιση ημερομηνίας αποχώρησης',
    'display_eol'               => 'Εμφάνιση του EOL στην προβολή πίνακα',
    'display_qr'                => 'Εμφάνιση τετραγώνων κωδίκων',
    'display_alt_barcode'		=> 'Εμφάνιση 1D barcode',
    'email_logo'                => 'Λογότυπο Email',
    'barcode_type'				=> '2D Barcode Type',
    'alt_barcode_type'			=> '1D τύπο γραμμωτού κώδικα',
    'email_logo_size'       => 'Πλατεία λογότυπα στο email φαίνονται καλύτερα. ',
    'enabled'                   => 'Ενεργοποιημένο',
    'eula_settings'				=> 'Ρυθμίσεις EULA',
    'eula_markdown'				=> 'Αυτή η EULA επιτρέπει <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Αγαπημένο',
    'favicon_format'            => 'Αποδεκτοί τύποι αρχείων είναι ico, png και gif. Άλλες μορφές εικόνας μπορεί να μην λειτουργούν σε όλα τα προγράμματα περιήγησης.',
    'favicon_size'          => 'Τα Favicons πρέπει να είναι τετράγωνες εικόνες, 16x16 pixels.',
    'footer_text'               => 'Πρόσθετο κείμενο Footer',
    'footer_text_help'          => 'Αυτό το κείμενο θα εμφανιστεί στο υποσέλιδο στη δεξιά πλευρά. Οι σύνδεσμοι επιτρέπονται χρησιμοποιώντας την <a href="https://help.github.com/articles/github-flavored-markdown/"> Github flavored markdown </a>. Διακοπή γραμμής, κεφαλίδες, εικόνες κ.λπ. μπορεί να οδηγήσουν σε απρόβλεπτα αποτελέσματα.',
    'general_settings'			=> 'Γενικές ρυθμίσεις',
    'general_settings_keywords' => 'υποστήριξη της εταιρείας, υπογραφή, αποδοχή, μορφή ηλεκτρονικού ταχυδρομείου, μορφή ονόματος χρήστη, εικόνες, ανά σελίδα, μικρογραφία, eula, gravatar, tos, ταμπλό, ιδιωτικότητα',
    'general_settings_help'     => 'Προεπιλογή EULA και άλλα',
    'generate_backup'			=> 'Δημιουργία Αντίγραφου Ασφαλείας',
    'google_workspaces'         => 'Χώροι Εργασίας Google',
    'header_color'              => 'Χρώμα επικεφαλίδας',
    'info'                      => 'Αυτές οι ρυθμίσεις σάς επιτρέπουν να προσαρμόσετε ορισμένες πτυχές της εγκατάστασής σας.',
    'label_logo'                => 'Λογότυπο Ετικέτας',
    'label_logo_size'           => 'Τετραγωνικά λογότυπα φαίνονται καλύτερα - θα εμφανιστεί στην επάνω δεξιά γωνία της κάθε ετικέτας περιουσιακών στοιχείων. ',
    'laravel'                   => 'Έκδοση οδηγού',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Προεπιλεγμένη Ομάδα Δικαιωμάτων',
    'ldap_default_group_info'   => 'Επιλέξτε μια ομάδα για να εκχωρήσετε σε πρόσφατα συγχρονισμένους χρήστες. Θυμηθείτε ότι ένας χρήστης αναλαμβάνει τα δικαιώματα της ομάδας που έχουν εκχωρηθεί.',
    'no_default_group'          => 'Καμία Προεπιλεγμένη Ομάδα',
    'ldap_help'                 => 'LDAP/Ενεργός Κατάλογος',
    'ldap_client_tls_key'       => 'Κλειδί TLS Πελάτη Ldap',
    'ldap_client_tls_cert'      => 'Πιστοποιητικό TLS Πλευράς Πελάτη Ldap',
    'ldap_enabled'              => 'Ενεργό LDAP',
    'ldap_integration'          => 'Ενσωμάτωση LDAP',
    'ldap_settings'             => 'Ρυθμίσεις LDAP',
    'ldap_client_tls_cert_help' => 'Το Πιστοποιητικό TLS και το Κλειδί για συνδέσεις LDAP είναι συνήθως χρήσιμα μόνο στις ρυθμίσεις του Google Workspace με το "Secure LDAP".',
    'ldap_location'             => 'Τοποθεσία LDAP',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Εισαγάγετε ένα έγκυρο όνομα χρήστη και κωδικό πρόσβασης LDAP από τη βάση DN που καθορίσατε παραπάνω για να ελέγξετε εάν η σύνδεσή LDAP έχει ρυθμιστεί σωστά. ΠΡΩΤΑ ΑΠΟΘΗΚΕΥΣΤΕ ΤΙΣ ΡΥΘΜΙΣΕΙΣ ΣΑΣ ΣΤΟ LDAP.',
    'ldap_login_sync_help'      => 'Αυτό ελέγχει μόνο ότι το LDAP μπορεί να συγχρονιστεί σωστά. Εάν το Authentication στο LDAP δεν είναι σωστό, οι χρήστες ενδέχεται να μην μπορούν να συνδεθούν. ΠΡΩΤΑ ΑΠΟΘΗΚΕΥΣΤΕ ΤΙΣ ΡΥΘΜΙΣΕΙΣ ΣΑΣ ΣΤΟ LDAP.',
    'ldap_manager'              => 'Διαχειριστής LDAP',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Πιστοποίηση πιστοποιητικού SSL για LDAP',
    'ldap_server_cert_ignore'	=> 'Να επιτρέπεται η μη έγκυρη πιστοποίηση SSL',
    'ldap_server_cert_help'		=> 'Επιλέξτε αυτό το πλαίσιο ελέγχου εάν χρησιμοποιείτε έναν αυτόματο έλεγχο SSL και θέλετε να αποδεχτείτε ένα μη έγκυρο πιστοποιητικό SSL.',
    'ldap_tls'                  => 'Χρήση TLS',
    'ldap_tls_help'             => 'Αυτό θα πρέπει να ελέγχεται μόνο αν εκτελείτε το STARTTLS στο διακομιστή LDAP.',
    'ldap_uname'                => 'LDAP δεσμεύει το όνομα χρήστη',
    'ldap_dept'                 => 'Τμήμα LDAP',
    'ldap_phone'                => 'Αριθμός Τηλεφώνου Ldap',
    'ldap_jobtitle'             => 'Τίτλος Εργασίας Ldap',
    'ldap_country'              => 'Χώρα LDAP',
    'ldap_pword'                => 'Κωδικός πρόσβασης δεσμού LDAP',
    'ldap_basedn'               => 'Δέσμευση βάσης DN',
    'ldap_filter'               => 'LDAP Φίλτρο',
    'ldap_pw_sync'              => 'LDAP συγχρονισμός κωδικού πρόσβασης',
    'ldap_pw_sync_help'         => 'Καταργήστε την επιλογή αυτού του πλαισίου αν δεν θέλετε να διατηρείτε τους κωδικούς LDAP συγχρονισμένους με τοπικούς κωδικούς πρόσβασης. Απενεργοποιώντας αυτό σημαίνει ότι οι χρήστες σας ενδέχεται να μην μπορούν να συνδεθούν αν ο διακομιστής LDAP δεν είναι προσβάσιμος για κάποιο λόγο.',
    'ldap_username_field'       => 'Πεδίο ονόματος χρήστη',
    'ldap_lname_field'          => 'Επίθετο',
    'ldap_fname_field'          => 'Όνομα LDAP',
    'ldap_auth_filter_query'    => 'Ερώτημα ελέγχου ταυτότητας LDAP',
    'ldap_version'              => 'Έκδοση LDAP',
    'ldap_active_flag'          => 'Ενεργή σημαία LDAP',
    'ldap_activated_flag_help'  => 'Αυτή η τιμή χρησιμοποιείται για να καθοριστεί αν ένας συγχρονισμένος χρήστης μπορεί να συνδεθεί στο Snipe-IT. <strong>Δεν επηρεάζει τη δυνατότητα ελέγχου αντικειμένων μέσα ή έξω σε αυτά</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>Εάν αυτό το πεδίο έχει οριστεί σε ένα όνομα πεδίου που δεν υπάρχει στην AD/LDAP, ή η τιμή στο πεδίο AD/LDAP ορίζεται σε <code>0</code> ή <code>false</code>, <strong>η σύνδεση χρήστη θα απενεργοποιηθεί</strong>. Εάν η τιμή στο πεδίο AD/LDAP έχει οριστεί σε <code>1</code> ή <code>true</code> ή <em>οποιοδήποτε άλλο κείμενο</em> σημαίνει ότι ο χρήστης μπορεί να συνδεθεί. Όταν το πεδίο είναι κενό στη AD, σεβόμαστε το χαρακτηριστικό <code>userAccountControl</code> , το οποίο συνήθως επιτρέπει στους χρήστες να συνδεθούν.',
    'ldap_emp_num'              => 'Αριθμός υπαλλήλου LDAP',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => 'Δοκιμή LDAP',
    'ldap_test_sync'            => 'Δοκιμή Συγχρονισμού Ldap',
    'license'                   => 'Άδειες λογισμικού',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Προσπάθειες Σύνδεσης',
    'login_attempt'             => 'Προσπάθεια Σύνδεσης',
    'login_ip'                  => 'Διεύθυνση IP',
    'login_success'             => 'Επιτυχία?',
    'login_user_agent'          => 'Πράκτορας Χρήστη',
    'login_help'                => 'Λίστα των επιχειρούμενων συνδέσεων',
    'login_note'                => 'Σύνδεση Σημείωση',
    'login_note_help'           => 'Προαιρετικά συμπεριλάβετε μερικές προτάσεις στην οθόνη σύνδεσης, για παράδειγμα για να βοηθήσετε άτομα που έχουν βρει μια χαμένη ή κλεμμένη συσκευή. Αυτό το πεδίο δέχεται <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Επιλογές σύνδεσης απομακρυσμένου χρήστη',
    'login_remote_user_enabled_text' => 'Ενεργοποίηση απομακρησμένου χρήστη',
    'login_remote_user_enabled_help' => 'Αυτή η επιλογή επιτρέπει το Authentication μέσω του REMOTE_USER σύμφωνα με το "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Απενεργοποιήστε άλλους μηχανισμούς authentication',
    'login_common_disabled_help' => 'Αυτή η επιλογή απενεργοποιεί άλλους μηχανισμούς authentication. Απλώς ενεργοποιήστε αυτήν την επιλογή εάν είστε βέβαιοι ότι η σύνδεση REMOTE_USER λειτουργεί ήδη',
    'login_remote_user_custom_logout_url_text' => 'Προσαρμοσμένη διεύθυνση URL αποσύνδεσης',
    'login_remote_user_custom_logout_url_help' => 'Εάν παρέχεται ένα url εδώ, οι χρήστες θα ανακατευθυνθούν σε αυτήν τη διεύθυνση URL αφού ο χρήστης αποσυνδεθεί από το Snipe-IT. Σε περίπτωση που χρησιμοποιήτε κάποιο συγκεκριμένο πάρωχο Authentication.',
    'login_remote_user_header_name_text' => 'Προσαρμοσμένη κεφαλίδα ονόματος χρήστη',
    'login_remote_user_header_name_help' => 'Χρησιμοποιήστε την καθορισμένη κεφαλίδα αντί για REMOTE_USER',
    'logo'                    	=> 'Λογότυπο',
    'logo_print_assets'         => 'Χρήση σε Εκτύπωση',
    'logo_print_assets_help'    => 'Χρήση εμπορικών σημάτων σε λίστες εκτυπώσιμων στοιχείων ',
    'full_multiple_companies_support_help_text' => 'Περιορισμός των χρηστών (συμπεριλαμβανομένων των διαχειριστών) που εκχωρούνται σε εταιρείες στα περιουσιακά στοιχεία της εταιρείας τους.',
    'full_multiple_companies_support_text' => 'Πλήρης υποστήριξη πολλαπλών εταιρειών',
    'show_in_model_list'   => 'Εμφάνιση στο μοντέλο Dropdowns',
    'optional'					=> 'προαιρετικός',
    'per_page'                  => 'Αποτελέσματα ανά σελίδα',
    'php'                       => 'Έκδοση PHP',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, σύστημα, πληροφορίες',
    'php_overview_help'         => 'Πληροφορίες συστήματος PHP',
    'php_gd_info'               => 'Πρέπει να εγκαταστήσετε το php-gd για να εμφανίσετε τους QR κώδικες, δείτε τις οδηγίες εγκατάστασης.',
    'php_gd_warning'            => 'Η επεξεργασία εικόνας PHP και το πρόσθετο GD ΔΕΝ έχουν εγκατασταθεί.',
    'pwd_secure_complexity'     => 'Πολυπλοκότητα κωδικού πρόσβασης',
    'pwd_secure_complexity_help' => 'Επιλέξτε τους κανόνες περίπλοκου κωδικού πρόσβασης που θέλετε να επιβάλλετε.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Ο κωδικός πρόσβασης δεν μπορεί να είναι ο ίδιος με όνομα, επώνυμο, email ή όνομα χρήστη',
    'pwd_secure_complexity_letters' => 'Απαιτείται τουλάχιστον ένα γράμμα',
    'pwd_secure_complexity_numbers' => 'Απαιτείται τουλάχιστον ένας αριθμός',
    'pwd_secure_complexity_symbols' => 'Απαιτείται τουλάχιστον ένα σύμβολο',
    'pwd_secure_complexity_case_diff' => 'Απαιτείται τουλάχιστον ένα κεφαλαίο και ένα πεζό',
    'pwd_secure_min'            => 'Κωδικοί ελάχιστων χαρακτήρων',
    'pwd_secure_min_help'       => 'Η ελάχιστη επιτρεπόμενη τιμή είναι 8',
    'pwd_secure_uncommon'       => 'Αποτρέψτε τους κοινούς κωδικούς πρόσβασης',
    'pwd_secure_uncommon_help'  => 'Αυτό θα αποκλείσει τους χρήστες από τη χρήση κοινών κωδικών πρόσβασης από τους κορυφαίους 10.000 κωδικούς πρόσβασης που αναφέρονται σε παραβιάσεις.',
    'qr_help'                   => 'Ενεργοποιήστε πρώτα τους κωδικούς QR για να τις ορίσετε',
    'qr_text'                   => 'QR Code Κείμενο',
    'saml'                      => 'SAML',
    'saml_title'                => 'Ενημέρωση ρυθμίσεων SAML',
    'saml_help'                 => 'Ρυθμίσεις SAML',
    'saml_enabled'              => 'SAML ενεργοποιημένη',
    'saml_integration'          => 'Ενσωμάτωση SAML',
    'saml_sp_entityid'          => 'Αναγνωριστικό Οντότητας',
    'saml_sp_acs_url'           => 'Διεύθυνση Url Υπηρεσίας Καταναλωτών (ACS)',
    'saml_sp_sls_url'           => 'Διεύθυνση Url Υπηρεσίας Ενιαίας Αποσύνδεσης (Sls)',
    'saml_sp_x509cert'          => 'Δημόσιο Πιστοποιητικό',
    'saml_sp_metadata_url'      => 'Url Μεταδεδομένων',
    'saml_idp_metadata'         => 'Μεταδεδομένα SAML IdP',
    'saml_idp_metadata_help'    => 'Μπορείτε να καθορίσετε τα μεταδεδομένα IdP χρησιμοποιώντας ένα URL ή ένα αρχείο XML.',
    'saml_attr_mapping_username' => 'Αντιστοίχιση Χαρακτηριστικού - Όνομα Χρήστη',
    'saml_attr_mapping_username_help' => 'Το NameID θα χρησιμοποιηθεί αν η αντιστοίχιση χαρακτηριστικών είναι μη καθορισμένη ή μη έγκυρη.',
    'saml_forcelogin_label'     => 'SAML Force Σύνδεση',
    'saml_forcelogin'           => 'Κάντε SAML την κύρια σύνδεση',
    'saml_forcelogin_help'      => 'Μπορείτε να χρησιμοποιήσετε το \'/login?nosaml\' για να φτάσετε στην κανονική σελίδα σύνδεσης.',
    'saml_slo_label'            => 'SAML Ενιαία Αποσύνδεση',
    'saml_slo'                  => 'Στείλτε ένα αίτημα σύνδεσης στο IdP κατά την αποσύνδεση',
    'saml_slo_help'             => 'Αυτό θα προκαλέσει την πρώτη ανακατεύθυνση του χρήστη στο IdP κατά την αποσύνδεση. Αφήστε το ανεξέλεγκτο αν το IdP δεν υποστηρίζει σωστά το SAML SLO.',
    'saml_custom_settings'      => 'Προσαρμοσμένες Ρυθμίσεις SAML',
    'saml_custom_settings_help' => 'Μπορείτε να καθορίσετε πρόσθετες ρυθμίσεις στη βιβλιοθήκη onelogin/php-saml. Χρησιμοποιήστε τη με δική σας ευθύνη.',
    'saml_download'             => 'Λήψη Μεταδεδομένων',
    'setting'                   => 'Ρύθμιση',
    'settings'                  => 'Ρυθμίσεις',
    'show_alerts_in_menu'       => 'Εμφάνιση ειδοποιήσεων στο μενού στην κορυφή',
    'show_archived_in_list'     => 'Αρχειοθετημένα Αντικείμενα',
    'show_archived_in_list_text'     => 'Εμφάνιση αρχειοθετημένων περιουσιακών στοιχείων στην λίστα "όλα τα περιουσιακά στοιχεία"',
    'show_assigned_assets'      => 'Εμφάνιση περιουσιακών στοιχείων που έχουν αποδοθεί σε περιουσιακά στοιχεία',
    'show_assigned_assets_help' => 'Εμφάνιση περιουσιακών στοιχείων που έχουν ανατεθεί στα άλλα περιουσιακά στοιχεία στην Προβολή χρήστη -> Περιουσιακά, Προβολή πληροφοριών χρήστη -> Εκτύπωση όλων των ανατεθέντων και στο λογαριασμό -> Προβολή των περιουσιακών στοιχείων που έχουν ανατεθεί.',
    'show_images_in_email'     => 'Εμφάνιση εικόνων σε email',
    'show_images_in_email_help'   => 'Απενεργοποιήστε αυτό το πλαίσιο αν η εγκατάσταση Snipe-IT βρίσκεται πίσω από ένα VPN ή ένα κλειστό δίκτυο και οι χρήστες έξω από το δίκτυο δεν θα μπορούν να φορτώσουν εικόνες που σερβίρονται από αυτήν την εγκατάσταση στα μηνύματα ηλεκτρονικού ταχυδρομείου τους.',
    'site_name'                 => 'Όνομα ιστότοπου',
    'integrations'               => 'Ενσωματώσεις',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Γενικά Webhook',
    'ms_teams'                  => 'Ομάδες Microsoft',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Δοκιμή για αποθήκευση',
    'webhook_title'               => 'Ενημέρωση Ρυθμίσεων Webhook',
    'webhook_help'                => 'Ρυθμίσεις ενσωμάτωσης',
    'webhook_botname'             => ':app Όνομα',
    'webhook_channel'             => ':app Κανάλι',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Ρυθμίσεις',
    'webhook_test'                 =>'Δοκιμή ενσωμάτωσης :app',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Μόλις αποθηκεύσετε τις πληροφορίες :app, θα εμφανιστεί ένα κουμπί δοκιμής.',
    'webhook_test_help'           => 'Ελέγξτε αν η :app ενσωμάτωση σας έχει ρυθμιστεί σωστά. ΠΡΕΠΕΙ ΝΑ ΑΠΟΘΗΚΕΥΣΕΤΕ ΝΑ ΑΝΑΦΕΡΕΤΑΙ :app ΡΥΘΜΙΣΕΙΣ ΠΡΩΤΩΝ.',
    'snipe_version'  			=> 'Snipe-It έκδοση',
    'support_footer'            => 'Σύνδεσμοι Υποσέλιδου Υποστήριξης ',
    'support_footer_help'       => 'Καθορίστε ποιος βλέπει τους συνδέσμους με τις πληροφορίες υποστήριξης Snipe-IT και το εγχειρίδιο χρήσης',
    'version_footer'            => 'Έκδοση στο υποσέλιδο ',
    'version_footer_help'       => 'Καθορίστε ποιός μπορεί να δει την έκδοση και τον αριθμό κατασκευής του Snipe-ΙΤ.',
    'system'                    => 'Πληροφορίες συστήματος',
    'update'                    => 'Ενημέρωση ρυθμίσεων',
    'value'                     => 'Τιμή',
    'brand'                     => 'Μάρκα',
    'brand_keywords'            => 'υποσέλιδο, λογότυπο, εκτύπωση, θέμα, δέρμα, κεφαλίδα, χρώματα, χρώμα, css',
    'brand_help'                => 'Λογότυπο, Όνομα Ιστοσελίδας',
    'web_brand'                 => 'Τύπος Μάρκετινγκ Web',
    'about_settings_title'      => 'Σχετικά με τις ρυθμίσεις',
    'about_settings_text'       => 'Αυτές οι ρυθμίσεις σάς επιτρέπουν να προσαρμόσετε ορισμένες πτυχές της εγκατάστασής σας.',
    'labels_per_page'           => 'Ετικέτες ανά σελίδα',
    'label_dimensions'          => 'Διαστάσεις ετικέτας (ίντσες)',
    'next_auto_tag_base'        => 'Επόμενη αυτόματη αύξηση',
    'page_padding'              => 'Περιθώρια σελίδας (ίντσες)',
    'privacy_policy_link'       => 'Σύνδεσμος στην Πολιτική Απορρήτου',
    'privacy_policy'            => 'Πολιτική Απορρήτου',
    'privacy_policy_link_help'  => 'Αν μια διεύθυνση url περιλαμβάνεται εδώ, ένας σύνδεσμος στην πολιτική απορρήτου σας θα συμπεριληφθεί στο υποσέλιδο της εφαρμογής και σε οποιαδήποτε μηνύματα ηλεκτρονικού ταχυδρομείου στέλνει το σύστημα, σε συμμόρφωση με το GDPR. ',
    'purge'                     => 'Καθαρισμός αρχείων που έχουν διαγραφεί',
    'purge_deleted'             => 'Εκκαθάριση Διαγραμμένων ',
    'labels_display_bgutter'    => 'Ετικέτα κάτω υδρορροή',
    'labels_display_sgutter'    => 'Εσωτερική υδρορροή ετικέτας',
    'labels_fontsize'           => 'Μέγεθος γραμματοσειράς ετικέτας',
    'labels_pagewidth'          => 'Πλάτος ετικέτας',
    'labels_pageheight'         => 'Ύψος φύλλου ετικέτας',
    'label_gutters'        => 'Απόσταση ετικετών (ίντσες)',
    'page_dimensions'        => 'Διαστάσεις σελίδας (ίντσες)',
    'label_fields'          => 'Ετικέτα ορατά πεδία',
    'inches'        => 'ίντσες',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Σύνδεση με το Snipe-IT στα ηλεκτρονικά ταχυδρομεία',
    'show_url_in_emails_help_text'      => 'Καταργήστε την επιλογή αυτού του πλαισίου αν δεν θέλετε να συνδεθείτε πίσω στην εγκατάσταση Snipe-IT στα υποσέλιδα ηλεκτρονικού ταχυδρομείου σας. Χρήσιμο αν οι περισσότεροι χρήστες σας δεν συνδέονται ποτέ.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Μέγιστο ύψος μικρογραφιών',
    'thumbnail_max_h_help'   => 'Το μέγιστο ύψος σε εικονοστοιχεία που ενδέχεται να εμφανίζονται στην εικ να. Ελάχιστο 25, μέγιστο 500.',
    'two_factor'        => 'Έλεγχος ταυτότητας δύο παραγόντων',
    'two_factor_secret'        => 'Κωδικός δύο συντελεστών',
    'two_factor_enrollment'        => 'Εγγραφή δύο συντελεστών',
    'two_factor_enabled_text'        => 'Ενεργοποίηση ελέγχου ταυτότητας δύο παραγόντων',
    'two_factor_reset'        => 'Επαναφορά του μυστικού δύο παραγόντων',
    'two_factor_reset_help'        => 'Αυτό θα αναγκάσει τον χρήστη να εγγράψει τη συσκευή του με την εφαρμογή ελέγχου ταυτότητας και πάλι. Αυτό μπορεί να είναι χρήσιμο εάν χαθεί ή κλαπεί η συσκευή που έχει εγγραφεί. ',
    'two_factor_reset_success'          => 'Επαναφορά της συσκευής δύο παραγόντων',
    'two_factor_reset_error'          => 'Επαναφορά συσκευής δύο παραγόντων απέτυχε',
    'two_factor_enabled_warning'        => 'Εάν ενεργοποιήσετε τον παράγοντα δύο παραγόντων, εάν δεν είναι ενεργοποιημένος, θα σας αναγκάσει αμέσως να επαληθεύσετε την ταυτότητά σας με μια συσκευή εγγραφής στο Google Auth. Θα έχετε τη δυνατότητα να εγγραφείτε στη συσκευή σας εάν δεν είστε εγγεγραμμένος.',
    'two_factor_enabled_help'        => 'Αυτό θα ενεργοποιήσει τον έλεγχο ταυτότητας δύο παραγόντων χρησιμοποιώντας το Google Authenticator.',
    'two_factor_optional'        => 'Επιλεκτική (Οι χρήστες μπορούν να ενεργοποιήσουν ή να απενεργοποιήσουν αν επιτρέπεται)',
    'two_factor_required'        => 'Απαιτείται για όλους τούς χρήστες',
    'two_factor_disabled'        => 'Έχει απενεργοποιηθεί',
    'two_factor_enter_code'	=> 'Εισαγάγετε τον κωδικό δύο συντελεστών',
    'two_factor_config_complete'	=> 'Υποβολή Κωδικού',
    'two_factor_enabled_edit_not_allowed' => 'Ο διαχειριστής σας δεν σας επιτρέπει να επεξεργαστείτε αυτήν τη ρύθμιση.',
    'two_factor_enrollment_text'	=> "Απαιτείται έλεγχος ταυτότητας δύο παραγόντων, ωστόσο η συσκευή σας δεν έχει εγγραφεί ακόμα. Ανοίξτε την εφαρμογή Google Authenticator και σαρώστε τον παρακάτω κωδικό QR για να εγγραφείτε στη συσκευή σας. Μόλις εγγραφείτε στη συσκευή σας, πληκτρολογήστε τον παρακάτω κώδικα",
    'require_accept_signature'      => 'Απαιτείται υπογραφή',
    'require_accept_signature_help_text'      => 'Η ενεργοποίηση αυτής της λειτουργίας θα απαιτεί από τους χρήστες να αποδεχθούν φυσικά την αποδοχή ενός στοιχείου.',
    'left'        => 'αριστερά',
    'right'        => 'δεξιά',
    'top'        => 'κορυφή',
    'bottom'        => 'κάτω μέρος',
    'vertical'        => 'κάθετα',
    'horizontal'        => 'οριζόντιος',
    'unique_serial'                => 'Μοναδικοί σειριακοί αριθμοί',
    'unique_serial_help_text'                => 'Με την επιλογή αυτή θα επιβληθεί ο περιορισμός μοναδικότητας σειριακού αριθμού στα πάγια',
    'zerofill_count'        => 'Μήκος ετικετών ενεργητικού, συμπεριλαμβανομένου του zerofill',
    'username_format_help'   => 'Αυτή η ρύθμιση θα χρησιμοποιηθεί μόνο από τη διαδικασία εισαγωγής εάν δεν παρέχεται ένα όνομα χρήστη και πρέπει να δημιουργήσουμε ένα όνομα χρήστη για εσάς.',
    'oauth_title' => 'Ρυθμίσεις Oauth Api',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'Oauth',
    'oauth_help' => 'Ρυθμίσεις Τελικού Σημείου Oauth',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Ενημέρωση Ρυθμίσεων Ετικετών Παγίων',
    'barcode_title' => 'Ενημέρωση Ρυθμίσεων Barcode',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; Ρυθμίσεις QR',
    'barcodes_help' => 'Αυτό θα προσπαθήσει να διαγράψει τους προσωρινά αποθηκευμένους barcodes. Αυτό συνήθως θα μπορούσε να χρησιμοποιηθεί μόνο αν οι ρυθμίσεις barcode έχουν αλλάξει, ή αν το URL σας Snipe-IT έχει αλλάξει. Οι γραμμωτοί κώδικες θα αναπαραχθούν όταν γίνει πρόσβαση στο επόμενο.',
    'barcodes_spinner' => 'Προσπάθεια διαγραφής αρχείων...',
    'barcode_delete_cache' => 'Διαγραφή Μνήμης Barcode',
    'branding_title' => 'Ενημέρωση Ρυθμίσεων Branding',
    'general_title' => 'Ενημέρωση Γενικών Ρυθμίσεων',
    'mail_test' => 'Αποστολή Δοκιμής',
    'mail_test_help' => 'Αυτό θα προσπαθήσει να στείλει ένα δοκιμαστικό μήνυμα στο :replyto.',
    'filter_by_keyword' => 'Φιλτράρισμα κατά ρύθμιση λέξης-κλειδιού',
    'security' => 'Ασφάλεια',
    'security_title' => 'Ενημέρωση Ρυθμίσεων Ασφαλείας',
    'security_keywords' => 'κωδικός πρόσβασης, κωδικοί πρόσβασης, απαιτήσεις, δύο παράγοντες, δύο παράγοντες, κοινοί κωδικοί πρόσβασης, απομακρυσμένη σύνδεση, αποσύνδεση, έλεγχος ταυτότητας',
    'security_help' => 'Δύο Παράγοντες, Περιορισμοί Κωδικού Πρόσβασης',
    'groups_keywords' => 'άδειες, ομάδες δικαιωμάτων, εξουσιοδότηση',
    'groups_help' => 'Ομάδες δικαιωμάτων λογαριασμού',
    'localization' => 'Τοπικοποίηση',
    'localization_title' => 'Ενημέρωση Ρυθμίσεων Τοπικοποίησης',
    'localization_keywords' => 'τοπικοποίηση, νόμισμα, τοπική, τοπική, ζώνη ώρας, ζώνη ώρας, διεθνές, διαγεννητικότητα, γλώσσα, γλώσσες, μετάφραση',
    'localization_help' => 'Γλώσσα, εμφάνιση ημερομηνίας',
    'notifications' => 'Ειδοποιήσεις',
    'notifications_help' => 'Ρυθμίσεις Ειδοποιήσεων & Ελέγχου Email',
    'asset_tags_help' => 'Αυξήσεις και προθέματα',
    'labels' => 'Ετικέτες',
    'labels_title' => 'Ενημέρωση Ρυθμίσεων Ετικετών',
    'labels_help' => 'Label sizes &amp; settings',
    'purge_keywords' => 'μόνιμη διαγραφή',
    'purge_help' => 'Καθαρισμός αρχείων που έχουν διαγραφεί',
    'ldap_extension_warning' => 'Δεν φαίνεται ότι η επέκταση LDAP είναι εγκατεστημένη ή ενεργοποιημένη σε αυτόν τον διακομιστή. Μπορείτε ακόμα να αποθηκεύσετε τις ρυθμίσεις σας, αλλά θα πρέπει να ενεργοποιήσετε την επέκταση LDAP για PHP πριν το συγχρονισμό LDAP ή σύνδεση θα λειτουργήσει.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Αριθμός Υπάλληλου',
    'create_admin_user' => 'Δημιουργία χρήστη ::',
    'create_admin_success' => 'Επιτυχία! Ο διαχειριστής σας έχει προστεθεί!',
    'create_admin_redirect' => 'Κάντε κλικ εδώ για να μεταβείτε στην είσοδο της εφαρμογής σας!',
    'setup_migrations' => 'Μετανάστευση Βάσης Δεδομένων ::',
    'setup_no_migrations' => 'Δεν υπήρχε τίποτα για να μεταναστεύσετε. Οι πίνακες της βάσης δεδομένων σας έχουν ήδη ρυθμιστεί!',
    'setup_successful_migrations' => 'Οι πίνακες της βάσης δεδομένων σας έχουν δημιουργηθεί',
    'setup_migration_output' => 'Έξοδος μετανάστευσης:',
    'setup_migration_create_user' => 'Επόμενο: Δημιουργία Χρήστη',
    'ldap_settings_link' => 'Σελίδα Ρυθμίσεων Ldap',
    'slack_test' => 'Δοκιμή <i class="fab fa-slack"></i> Ενσωμάτωση',
    'label2_enable'           => 'Νέα Μηχανή Ετικέτας',
    'label2_enable_help'      => 'Μετάβαση στη νέα μηχανή ετικετών. <b>Σημείωση: Θα χρειαστεί να αποθηκεύσετε αυτήν τη ρύθμιση πριν ρυθμίσετε άλλες.</b>',
    'label2_template'         => 'Πρότυπο',
    'label2_template_help'    => 'Επιλέξτε το πρότυπο που θα χρησιμοποιηθεί για τη δημιουργία ετικέτας',
    'label2_title'            => 'Τίτλος',
    'label2_title_help'       => 'Ο τίτλος που θα εμφανίζεται σε ετικέτες που τον υποστηρίζουν',
    'label2_title_help_phold' => 'Το placeholder <code>{COMPANY}</code> θα αντικατασταθεί με το περιουσιακό στοιχείο&apos;s εταιρική επωνυμία',
    'label2_asset_logo'       => 'Χρήση Λογότυπου Αντικειμένων',
    'label2_asset_logo_help'  => 'Χρησιμοποιήστε το λογότυπο της συνδεδεμένης εταιρείας&apos;και όχι την τιμή σε <code>:setting_name</code>',
    'label2_1d_type'          => '1D Τύπος Barcode',
    'label2_1d_type_help'     => 'Μορφή για γραμμωτούς κωδικούς 1D',
    'label2_2d_type'          => '2D Barcode Type',
    'label2_2d_type_help'     => 'Μορφή για barcodes 2D',
    'label2_2d_target'        => 'Στόχος 2D Barcode',
    'label2_2d_target_help'   => 'Το URL των σημείων 2D γραμμωτού κώδικα όταν σαρωθεί',
    'label2_fields'           => 'Ορισμοί Πεδίων',
    'label2_fields_help'      => 'Τα πεδία μπορούν να προστεθούν, να αφαιρεθούν και να παραγγελθούν στην αριστερή στήλη. Για κάθε πεδίο, μπορούν να προστεθούν, να αφαιρεθούν πολλαπλές επιλογές για την Ετικέτα και την Πηγή Δεδομένων και να παραγγελθούν στη δεξιά στήλη.',
    'help_asterisk_bold'    => 'Το κείμενο που έχει εισαχθεί ως <code>**text**</code> θα εμφανιστεί ως έντονο',
    'help_blank_to_use'     => 'Αφήστε κενό για να χρησιμοποιήσετε την τιμή από <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Προεπιλογή',
    'none'                  => 'Κανένα',
    'google_callback_help' => 'Αυτό θα πρέπει να εισαχθεί ως το URL επιστροφής κλήσης στις ρυθμίσεις της εφαρμογής Google OAuth στον οργανισμό σας&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">κονσόλα προγραμματιστών Google <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Ρυθμίσεις Σύνδεσης Google Workspace',
    'enable_google_login'  => 'Ενεργοποιήστε τους χρήστες για να συνδεθείτε με το Google Workspace',
    'enable_google_login_help'  => 'Οι χρήστες δεν θα παρέχονται αυτόματα. Πρέπει να έχουν έναν υπάρχοντα λογαριασμό εδώ ΚΑΙ στο Google Workspace, και το όνομα χρήστη τους εδώ πρέπει να ταιριάζει με τη διεύθυνση ηλεκτρονικού ταχυδρομείου Google Workspace τους. ',
    'mail_reply_to' => 'Διεύθυνση Απάντησης Email',
    'mail_from' => 'Διεύθυνση Αποστολής',
    'database_driver' => 'Οδηγός Βάσης Δεδομένων',
    'bs_table_storage' => 'Αποθηκευτικός Χώρος',
    'timezone' => 'Timezone',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload custom default avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',

];
