<?php

return array(

    'accepted'                  => 'Έχετε αποδεχθεί με επιτυχία αυτό το πάγιο.',
    'declined'                  => 'Έχετε απορρίψει επιτυχώς αυτό το στοιχείο.',
    'bulk_manager_warn'	        => 'Οι χρήστες σας ενημερώθηκαν με επιτυχία, ωστόσο η καταχώριση του διαχειριστή σας δεν αποθηκεύτηκε, επειδή ο διαχειριστής που επιλέξατε ήταν επίσης στη λίστα χρηστών για επεξεργασία και οι χρήστες ενδέχεται να μην είναι ο δικός τους διαχειριστής. Επιλέξτε ξανά τους χρήστες σας, εξαιρουμένου του διαχειριστή.',
    'user_exists'               => 'Ο χρήστης υπάρχει ήδη!',
    'user_not_found'            => 'Ο χρήστης [:id] δεν υπάρχει.',
    'user_login_required'       => 'Το πεδίο εισόδου είναι υποχρεωτικό',
    'user_password_required'    => 'Ο κωδικός είναι απαραίτητος.',
    'insufficient_permissions'  => 'Δεν έχετε επαρκή δικαιώματα.',
    'user_deleted_warning'      => 'Αυτός ο χρήστης έχει διαγραφεί. Θα πρέπει να επαναφέρετε αυτό το χρήστη για να τον επεξεργαστείτε ή να του εκχωρήσετε νέα πάγια.',
    'ldap_not_configured'        => 'Η ενσωμάτωση LDAP δεν έχει ρυθμιστεί για αυτήν την εγκατάσταση.',
    'password_resets_sent'      => 'The selected users who are activated and have a valid email addresses have been sent a password reset link.',
    'password_reset_sent'       => 'A password reset link has been sent to :email!',
    'user_has_no_email'         => 'This user does not have an email address in their profile.',
    'user_has_no_assets_assigned'   => 'This user does not have any assets assigned',


    'success' => array(
        'create'    => 'Ο χρήστης δημιουργήθηκε με επιτυχία.',
        'update'    => 'Ο χρήστης ενημερώθηκε με επιτυχία.',
        'update_bulk'    => 'Οι χρήστες ενημερώθηκαν με επιτυχία!',
        'delete'    => 'Ο χρήστης διαφράφηκε με επιτυχία.',
        'ban'       => 'Ο χρήστης έχει αποκλειστεί επιτυχώς.',
        'unban'     => 'Ο Χρήστης επαναφέρθηκε με επιτυχία.',
        'suspend'   => 'Ο χρήστης αναβλήθηκε με επιτυχία.',
        'unsuspend' => 'Ο χρήστης καταργήθηκε με επιτυχία.',
        'restored'  => 'Ο Χρήστης επαναφέρθηκε με επιτυχία.',
        'import'    => 'Οι χρήστες εισήχθησαν με επιτυχία.',
    ),

    'error' => array(
        'create' => 'Παρουσιάστηκε ένα πρόβλημα δημιουργίας του χρήστη. ΠΑΡΑΚΑΛΩ προσπαθησε ξανα.',
        'update' => 'Παρουσιάστηκε ένα πρόβλημα ενημέρωσης του χρήστη. ΠΑΡΑΚΑΛΩ προσπαθησε ξανα.',
        'delete' => 'Παρουσιάστηκε πρόβλημα κατά τη διαγραφή του χρήστη. ΠΑΡΑΚΑΛΩ προσπαθησε ξανα.',
        'delete_has_assets' => 'Αυτός ο χρήστης έχει αναθέσει στοιχεία και δεν ήταν δυνατή η διαγραφή του.',
        'unsuspend' => 'Παρουσιάστηκε ένα ζήτημα που δεν ανέβαλε τον χρήστη. ΠΑΡΑΚΑΛΩ προσπαθησε ξανα.',
        'import'    => 'Παρουσιάστηκε πρόβλημα κατά την εισαγωγή χρηστών. ΠΑΡΑΚΑΛΩ προσπαθησε ξανα.',
        'asset_already_accepted' => 'Το στοιχείο αυτό έχει ήδη γίνει αποδεκτό.',
        'accept_or_decline' => 'Πρέπει είτε να αποδεχθείτε είτε να απορρίψετε αυτό το στοιχείο.',
        'incorrect_user_accepted' => 'Το περιουσιακό στοιχείο που προσπαθήσατε να δεχτείτε δεν σας έχει αποσταλεί.',
        'ldap_could_not_connect' => 'Δεν ήταν δυνατή η σύνδεση με το διακομιστή LDAP. Ελέγξτε τη διαμόρφωση του διακομιστή LDAP στο αρχείο ρύθμισης LDAP. <br>Ερώτηση από διακομιστή LDAP:',
        'ldap_could_not_bind' => 'Δεν ήταν δυνατή η δέσμευση του διακομιστή LDAP. Ελέγξτε τη διαμόρφωση του διακομιστή LDAP στο αρχείο ρύθμισης LDAP. <br>Ερώτηση από διακομιστή LDAP:',
        'ldap_could_not_search' => 'Δεν ήταν δυνατή η αναζήτηση στον διακομιστή LDAP. Ελέγξτε τη διαμόρφωση του διακομιστή LDAP στο αρχείο ρύθμισης LDAP. <br>Ερώτηση από διακομιστή LDAP:',
        'ldap_could_not_get_entries' => 'Δεν ήταν δυνατή η λήψη καταχωρήσεων από το διακομιστή LDAP. Ελέγξτε τη διαμόρφωση του διακομιστή LDAP στο αρχείο ρύθμισης LDAP. <br>Ερώτηση από διακομιστή LDAP:',
        'password_ldap' => 'Ο κωδικός πρόσβασης για αυτόν τον λογαριασμό γίνεται από το LDAP / Active Directory. Επικοινωνήστε με το τμήμα πληροφορικής σας για να αλλάξετε τον κωδικό πρόσβασής σας.',
    ),

    'deletefile' => array(
        'error'   => 'Το αρχείο δεν έχει διαγραφεί. Παρακαλώ δοκιμάστε ξανά.',
        'success' => 'Το αρχείο διαγράφηκε με επιτυχία.',
    ),

    'upload' => array(
        'error'   => 'Τα αρχεία δεν μεταφορτώθηκαν. Παρακαλώ δοκιμάστε ξανά.',
        'success' => 'Τα αρχεία ενημερώθηκαν με επιτυχία.',
        'nofiles' => 'Δεν έχετε επιλέξει κανένα αρχείο για ενημέρωση',
        'invalidfiles' => 'Ένα ή περισσότερα από τα αρχεία σας είναι πολύ μεγάλα ή είναι τύπου αρχείου που δεν επιτρέπεται. Τα επιτρεπόμενα αρχεία τύπου png, gif, jpg, doc, docx, pdf και txt.',
    ),

    'inventorynotification' => array(
        'error'   => 'This user has no email set.',
        'success' => 'The user has been notified about their current inventory.'
    )
);