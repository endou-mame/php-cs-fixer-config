---
title: "Rule error_suppression - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/error_suppression"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `error_suppression`[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#rule-error-suppression "Permalink to this heading")

Error control operator should be added to deprecation notices and/or removed
from other cases.

## Warnings[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#this-rule-is-risky "Permalink to this heading")

Risky because adding/removing `@` might cause changes to code behaviour or if
`trigger_error` function is overridden.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`mute_deprecation_error`, `noise_remaining_usages`,
`noise_remaining_usages_exclude`.

## Configuration[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#configuration "Permalink to this heading")

### `mute_deprecation_error`[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#mute-deprecation-error "Permalink to this heading")

Whether to add `@` in deprecation notices.

Allowed types: `bool`

Default value: `true`

### `noise_remaining_usages`[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#noise-remaining-usages "Permalink to this heading")

Whether to remove `@` in remaining usages.

Allowed types: `bool`

Default value: `false`

### `noise_remaining_usages_exclude`[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#noise-remaining-usages-exclude "Permalink to this heading")

List of global functions to exclude from removing `@`.

Allowed types: `list<string>`

Default value: `[]`

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-trigger_error('Warning.', E_USER_DEPRECATED);
+@trigger_error('Warning.', E_USER_DEPRECATED);
```

### Example #2[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#example-2 "Permalink to this heading")

With configuration: `['noise_remaining_usages' => true]`.

```
--- Original
+++ New
 <?php
-@mkdir($dir);
-@unlink($path);
+mkdir($dir);
+unlink($path);
```

### Example #3[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#example-3 "Permalink to this heading")

With configuration: `['noise_remaining_usages' => true, 'noise_remaining_usages_exclude' => ['unlink']]`.

```
--- Original
+++ New
 <?php
-@mkdir($dir);
+mkdir($dir);
 @unlink($path);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\ErrorSuppressionFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/ErrorSuppressionFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\ErrorSuppressionFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/ErrorSuppressionFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
