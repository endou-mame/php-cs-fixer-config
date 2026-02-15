---
title: "Rule modernize_strpos - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/modernize_strpos"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `modernize_strpos`[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#rule-modernize-strpos "Permalink to this heading")

Replace `strpos()` and `stripos()` calls with `str_starts_with()` or
`str_contains()` if possible.

## Warnings[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#this-rule-is-risky "Permalink to this heading")

Risky if `strpos`, `stripos`, `str_starts_with`, `str_contains` or
`strtolower` functions are overridden.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `modernize_stripos`.

## Configuration[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#configuration "Permalink to this heading")

### `modernize_stripos`[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#modernize-stripos "Permalink to this heading")

Whether to modernize `stripos` calls as well.

Allowed types: `bool`

Default value: `false`

Default value (future-mode): `true`

## Examples[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-if (strpos($haystack, $needle) === 0) {}
-if (strpos($haystack, $needle) !== 0) {}
-if (strpos($haystack, $needle) !== false) {}
-if (strpos($haystack, $needle) === false) {}
+if (str_starts_with($haystack, $needle)  ) {}
+if (!str_starts_with($haystack, $needle)  ) {}
+if (str_contains($haystack, $needle)  ) {}
+if (!str_contains($haystack, $needle)  ) {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#example-2 "Permalink to this heading")

With configuration: `['modernize_stripos' => true]`.

```
--- Original
+++ New
 <?php
-if (strpos($haystack, $needle) === 0) {}
-if (strpos($haystack, $needle) !== 0) {}
-if (strpos($haystack, $needle) !== false) {}
-if (strpos($haystack, $needle) === false) {}
-if (stripos($haystack, $needle) === 0) {}
-if (stripos($haystack, $needle) !== 0) {}
-if (stripos($haystack, $needle) !== false) {}
-if (stripos($haystack, $needle) === false) {}
+if (str_starts_with($haystack, $needle)  ) {}
+if (!str_starts_with($haystack, $needle)  ) {}
+if (str_contains($haystack, $needle)  ) {}
+if (!str_contains($haystack, $needle)  ) {}
+if (str_starts_with(strtolower($haystack), strtolower($needle))  ) {}
+if (!str_starts_with(strtolower($haystack), strtolower($needle))  ) {}
+if (str_contains(strtolower($haystack), strtolower($needle))  ) {}
+if (!str_contains(strtolower($haystack), strtolower($needle))  ) {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\ModernizeStrposFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/ModernizeStrposFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\ModernizeStrposFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/ModernizeStrposFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
