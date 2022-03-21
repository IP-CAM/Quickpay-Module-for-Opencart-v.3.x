<?php
require_once DIR_SYSTEM . 'library/quickpay/config.php';

// Heading
$_['heading_title'] = QUICKPAY_NAME;

// Text
$_['text_extension']                 = 'Udvidelser';
$_['text_success']                   = 'Sådan! Ændringerne til dine ' . QUICKPAY_NAME . '-indstillinger er blevet gemt.';
$_['text_edit']                      = 'Rediger ' . QUICKPAY_NAME;
$_['text_quickpay']                  = '<a target="_blank" href="' . QUICKPAY_LINK . '"><img style="height: 30px;" src="' . QUICKPAY_LOGO . '" alt="' . QUICKPAY_NAME . '" title="' . QUICKPAY_NAME . '" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_enabled']                   = 'Aktiveret';
$_['text_disabled']                  = 'Deaktiveret';
$_['text_panel_heading_api']         = 'API-indstillinger';
$_['text_panel_heading_transaction'] = 'Transaktions-indstillinger';
$_['text_panel_heading_gateway']     = 'Gateway-indstillinger';
$_['text_panel_heading_others']      = 'Andre indstillinger';
$_['text_remote_cron']               = 'Remote CRON URL:';

// Entry
$_['entry_api_key']             = 'API nøgle';
$_['entry_private_key']         = 'Privat nøgle';
$_['entry_test']                = 'Test mode';
$_['entry_total']               = 'Total';
$_['entry_order_status']        = 'Completed Status';
$_['entry_geo_zone']            = 'Geo Zone';
$_['entry_status']              = 'Status';
$_['entry_sort_order']          = 'Sorterings-rækkefølge';
$_['entry_autofee']             = 'Automatisk gebyr';
$_['entry_autocapture']         = 'Automatisk trækning';
$_['entry_payment_methods']     = 'Betalingsmetoder';
$_['entry_text_on_statement']   = 'Tekst på kontooversigt';
$_['entry_branding_id']         = 'Branding ID';
$_['entry_order_number_prefix'] = 'Prefix ordrenummer';

// Help
$_['help_total']               = 'Kurvens total skal overstige dette beløb for at aktivere betalingsmetoden.';
$_['help_quickpay_setup']      = '<a target="_blank" href="https://learn.quickpay.net/helpdesk/en/articles/integrations/opencart/">Klik her</a> for at lære hvordan du opsætter din ' . QUICKPAY_NAME . '-konto.';
$_['help_test']                = 'Tillad transaktioner med test-kort.';
$_['help_autocapture']         = 'Træk automatisk betaliner, når de er blevet autoriseret.';
$_['help_autofee']             = 'Tilføj automatisk betalingsgebyr på transaktionerne.';
$_['help_branding_id']         = 'Lad feltet være blankt hvis du ikke har tilpasset branding.';
$_['help_text_on_statement']   = 'Tekst der skal vises på kortholders kontooversigt. Max 22 ASCII karakterer. Supporteres i øjeblikket kun af ' . QUICKPAY_NAME . '.';
$_['help_remote_cron']         = 'Brug denne URL til at opsætte et cronjob via en webbaseret ccron service. Bør køres minimum en gang i døgnet.';
$_['help_order_number_prefix'] = 'Indtast en streng, hvis du ønsker at prefixe det ordrenummer, der sendes til ' . QUICKPAY_NAME . '. Dette har ikke effekt på ordrenumrene i butikken.';
$_['tab_setting']              = 'Indstillinger';
$_['tab_recurring']            = 'Abonnementer';


// Error
$_['error_permission']      = 'Advarsel: Du har ikke rettigheder til at administrere ' . QUICKPAY_NAME . '!';
$_['error_api_key']         = 'API nøgle er påkrævet!';
$_['error_private_key']     = 'Privat nøgle er påkrævet!';
$_['error_payment_methods'] = 'Betalingsmetoder skal udfyldes!';
