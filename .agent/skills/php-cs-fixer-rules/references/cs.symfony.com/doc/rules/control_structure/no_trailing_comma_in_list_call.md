---
title: "Rule no_trailing_comma_in_list_call - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/no_trailing_comma_in_list_call"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_trailing_comma_in_list_call`[¶](https://cs.symfony.com/doc/rules/control_structure/no_trailing_comma_in_list_call.html#rule-no-trailing-comma-in-list-call "Permalink to this heading")

Remove trailing commas in list function calls.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/no_trailing_comma_in_list_call.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/control_structure/no_trailing_comma_in_list_call.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `no_trailing_comma_in_singleline` instead.

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/no_trailing_comma_in_list_call.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/no_trailing_comma_in_list_call.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-list($a, $b,) = foo();
+list($a, $b) = foo();
```

## References[¶](https://cs.symfony.com/doc/rules/control_structure/no_trailing_comma_in_list_call.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\NoTrailingCommaInListCallFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/NoTrailingCommaInListCallFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\NoTrailingCommaInListCallFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/NoTrailingCommaInListCallFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
