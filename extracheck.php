<?php

require_once 'extracheck.civix.php';
use CRM_Extracheck_ExtensionUtil as E;


/**
 * Implementation of hook_civicrm_check
 *
 * Add a check to the status page/System.check results if $ctcc is TRUE.
 */
function extracheck_civicrm_check(&$messages) {
  // check for define in civicrm.settings.php as FALSE, otherwise returns TRUE
  $ctcc =  CRM_Utils_Constant::value('CIVICRM_TEMPLATE_COMPILE_CHECK', TRUE);
  if ($ctcc) {
    $messages[] = new CRM_Utils_Check_Message(
      'com.aghstrategies.extracheck',
      ts("<p>'CIVICRM_TEMPLATE_COMPILE_CHECK' is not set to FALSE.</p><p> 'CIVICRM_TEMPLATE_COMPILE_CHECK' should be set to FALSE for all production sites for more information see this <a href='%1' title='Blog post'>blog post</a>.</p>", [1 => "https://civicrm.org/blog/daved/new-setting-available-in-517-should-improve-performance-on-most-sites"]),
      ts('Extra Check: CIVICRM_TEMPLATE_COMPILE_CHECK'),
      \Psr\Log\LogLevel::NOTICE,
      'fa-check'
    );
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function extracheck_civicrm_config(&$config) {
  _extracheck_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function extracheck_civicrm_xmlMenu(&$files) {
  _extracheck_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *;
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function extracheck_civicrm_install() {
  _extracheck_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function extracheck_civicrm_postInstall() {
  _extracheck_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function extracheck_civicrm_uninstall() {
  _extracheck_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function extracheck_civicrm_enable() {
  _extracheck_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function extracheck_civicrm_disable() {
  _extracheck_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function extracheck_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _extracheck_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function extracheck_civicrm_managed(&$entities) {
  _extracheck_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function extracheck_civicrm_caseTypes(&$caseTypes) {
  _extracheck_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function extracheck_civicrm_angularModules(&$angularModules) {
  _extracheck_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function extracheck_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _extracheck_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function extracheck_civicrm_entityTypes(&$entityTypes) {
  _extracheck_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function extracheck_civicrm_themes(&$themes) {
  _extracheck_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *
function extracheck_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
function extracheck_civicrm_navigationMenu(&$menu) {
  _extracheck_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _extracheck_civix_navigationMenu($menu);
} // */
