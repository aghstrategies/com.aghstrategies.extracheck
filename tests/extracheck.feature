Scenario: CIVICRM_TEMPLATE_COMPILE_CHECK system check

Feature: Notice if CIVICRM_TEMPLATE_COMPILE_CHECK is not FALSE

WHEN there is NOT a line in civicrm.settings.php "define('CIVICRM_TEMPLATE_COMPILE_CHECK', FALSE);"
THEN there is a notice on the system status page
