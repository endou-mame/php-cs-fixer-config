---
title: "Rule no_alias_functions - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/no_alias_functions"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_alias_functions`[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#rule-no-alias-functions "Permalink to this heading")

Master functions shall be used instead of aliases.

## Warnings[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#this-rule-is-risky "Permalink to this heading")

Risky when any of the alias functions are overridden.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `sets`.

## Configuration[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#configuration "Permalink to this heading")

### `sets`[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#sets "Permalink to this heading")

List of sets to fix. Defined sets are:

* `@all` (all listed sets);
* `@internal` (native functions);
* `@exif` (EXIF functions);
* `@ftp` (FTP functions);
* `@IMAP` (IMAP functions);
* `@ldap` (LDAP functions);
* `@mbreg` (from `ext-mbstring`);
* `@mysqli` (mysqli functions);
* `@oci` (oci functions);
* `@odbc` (odbc functions);
* `@openssl` (openssl functions);
* `@pcntl` (PCNTL functions);
* `@pg` (pg functions);
* `@posix` (POSIX functions);
* `@snmp` (SNMP functions);
* `@sodium` (libsodium functions);
* `@time` (time functions).

Allowed values: a subset of `['@all', '@exif', '@ftp', '@IMAP', '@internal', '@ldap', '@mbreg', '@mysqli', '@oci', '@odbc', '@openssl', '@pcntl', '@pg', '@posix', '@snmp', '@sodium', '@time']`

Default value: `['@internal', '@IMAP', '@pg']`

## Examples[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$a = chop($b);
-close($b);
-$a = doubleval($b);
-$a = fputs($b, $c);
-$a = get_required_files();
-ini_alter($b, $c);
-$a = is_double($b);
-$a = is_integer($b);
-$a = is_long($b);
-$a = is_real($b);
-$a = is_writeable($b);
-$a = join($glue, $pieces);
-$a = key_exists($key, $array);
-magic_quotes_runtime($new_setting);
-$a = pos($array);
-$a = show_source($filename, true);
-$a = sizeof($b);
-$a = strchr($haystack, $needle);
-$a = imap_header($imap_stream, 1);
-user_error($message);
+$a = rtrim($b);
+closedir($b);
+$a = floatval($b);
+$a = fwrite($b, $c);
+$a = get_included_files();
+ini_set($b, $c);
+$a = is_float($b);
+$a = is_int($b);
+$a = is_int($b);
+$a = is_float($b);
+$a = is_writable($b);
+$a = implode($glue, $pieces);
+$a = array_key_exists($key, $array);
+set_magic_quotes_runtime($new_setting);
+$a = current($array);
+$a = highlight_file($filename, true);
+$a = count($b);
+$a = strstr($haystack, $needle);
+$a = imap_headerinfo($imap_stream, 1);
+trigger_error($message);
 mbereg_search_getregs();
```

### Example #2[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#example-2 "Permalink to this heading")

With configuration: `['sets' => ['@mbreg']]`.

```
--- Original
+++ New
 <?php
 $a = is_double($b);
-mbereg_search_getregs();
+mb_ereg_search_getregs();
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x4MigrationRisky.html)
* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html) with config:

  `['sets' => ['@all']]`
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html) with config:

  `['sets' => ['@all']]`
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html) with config:

  `['sets' => ['@all']]`
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html) with config:

  `['sets' => ['@all']]`
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html) with config:

  `['sets' => ['@all']]`
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html) with config:

  `['sets' => ['@all']]`
* [@PHP74Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP74MigrationRisky.html) *(deprecated)*
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)* with config:

  `['sets' => ['@all']]`
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)* with config:

  `['sets' => ['@all']]`
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html) with config:

  `['sets' => ['@all']]`
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/NoAliasFunctionsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\NoAliasFunctionsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/NoAliasFunctionsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
