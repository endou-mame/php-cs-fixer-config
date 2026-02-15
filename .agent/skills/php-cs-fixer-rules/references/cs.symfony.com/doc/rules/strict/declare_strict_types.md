---
title: "Rule declare_strict_types - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/strict/declare_strict_types"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `declare_strict_types`[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#rule-declare-strict-types "Permalink to this heading")

Force strict types declaration in all files.

## Warnings[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#this-rule-is-risky "Permalink to this heading")

Forcing strict types will stop non strict code from working.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`preserve_existing_declaration`.

## Configuration[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#configuration "Permalink to this heading")

### `preserve_existing_declaration`[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#preserve-existing-declaration "Permalink to this heading")

Whether existing strict\_types=? should be preserved and not overridden.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php
+<?php declare(strict_types=1);
\ No newline at end of file
```

### Example #2[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#example-2 "Permalink to this heading")

With configuration: `['preserve_existing_declaration' => false]`.

```
--- Original
+++ New
 <?php
-declare(Strict_Types=0);
+declare(strict_types=1);
```

### Example #3[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#example-3 "Permalink to this heading")

With configuration: `['preserve_existing_declaration' => true]`.

```
--- Original
+++ New
 <?php
-declare(Strict_Types=0);
+declare(strict_types=0);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x0MigrationRisky.html)
* [@PHP7x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x1MigrationRisky.html)
* [@PHP7x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x4MigrationRisky.html)
* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP70Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP70MigrationRisky.html) *(deprecated)*
* [@PHP71Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP71MigrationRisky.html) *(deprecated)*
* [@PHP74Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP74MigrationRisky.html) *(deprecated)*
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Strict/DeclareStrictTypesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Strict\DeclareStrictTypesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Strict/DeclareStrictTypesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
