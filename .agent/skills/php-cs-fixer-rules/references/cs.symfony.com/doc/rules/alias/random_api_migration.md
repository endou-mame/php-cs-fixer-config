---
title: "Rule random_api_migration - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/random_api_migration"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `random_api_migration`[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#rule-random-api-migration "Permalink to this heading")

Replaces `rand`, `srand`, `getrandmax` functions calls with their `mt_*`
analogs or `random_int`.

## Warnings[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#this-rule-is-risky "Permalink to this heading")

Risky when the configured functions are overridden. Or when relying on the seed
based generating of the numbers.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `replacements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#configuration "Permalink to this heading")

### `replacements`[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#replacements "Permalink to this heading")

Mapping between replaced functions with the new ones.

Allowed types: `array<string, string>`

Default value: `['getrandmax' => 'mt_getrandmax', 'rand' => 'mt_rand', 'srand' => 'mt_srand']`

Default value (future-mode): `['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']`

## Examples[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$a = getrandmax();
-$a = rand($b, $c);
-$a = srand();
+$a = mt_getrandmax();
+$a = mt_rand($b, $c);
+$a = mt_srand();
```

### Example #2[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#example-2 "Permalink to this heading")

With configuration: `['replacements' => ['getrandmax' => 'mt_getrandmax']]`.

```
--- Original
+++ New
 <?php
-$a = getrandmax();
+$a = mt_getrandmax();
 $a = rand($b, $c);
 $a = srand();
```

### Example #3[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#example-3 "Permalink to this heading")

With configuration: `['replacements' => ['rand' => 'random_int']]`.

```
--- Original
+++ New
-<?php $a = rand($b, $c);
+<?php $a = random_int($b, $c);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x0MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP7x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x1MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP7x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x4MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html) with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP70Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP70MigrationRisky.html) *(deprecated)* with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP71Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP71MigrationRisky.html) *(deprecated)* with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP74Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP74MigrationRisky.html) *(deprecated)* with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)* with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)* with config:

  `['replacements' => ['mt_getrandmax' => 'getrandmax', 'mt_rand' => 'random_int', 'mt_srand' => 'srand', 'rand' => 'random_int']]`

## References[¶](https://cs.symfony.com/doc/rules/alias/random_api_migration.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/RandomApiMigrationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\RandomApiMigrationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/RandomApiMigrationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
