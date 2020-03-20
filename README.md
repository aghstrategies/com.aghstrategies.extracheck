# com.aghstrategies.extracheck

This extension adds some extra system checks including:

###  Extra Check: CIVICRM_TEMPLATE_COMPILE_CHECK

Which checks whether `CIVICRM_TEMPLATE_COMPILE_CHECK` is defined as False. If `CIVICRM_TEMPLATE_COMPILE_CHECK` is set as anything other then FALSE as system notice is generated. For more information on why this matters visit: https://civicrm.org/blog/daved/new-setting-available-in-517-should-improve-performance-on-most-sites
![Extra Check: CIVICRM_TEMPLATE_COMPILE_CHECK screenshot](/images/xtraX.png)

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.0+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.aghstrategies.extracheck@https://github.com/aghstrategies/com.aghstrategies.extracheck/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/aghstrategies/com.aghstrategies.extracheck.git
cv en extracheck
```

## Usage

Go to the CiviCRM System Status page (CiviCRM Menu -> Administer -> Administration Console -> System Status). Extra checks should show up here if they are failing.

## Known Issues

None Yet.
