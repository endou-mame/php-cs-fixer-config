---
title: "Rule phpdoc_single_line_var_spacing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_single_line_var_spacing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_single_line_var_spacing`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_single_line_var_spacing.html#rule-phpdoc-single-line-var-spacing "Permalink to this heading")

Single line `@var` PHPDoc should have proper spacing.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_single_line_var_spacing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_single_line_var_spacing.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php /**@var   MyClass   $a   */
+<?php /** @var MyClass $a */
 $a = test();
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_single_line_var_spacing.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_single_line_var_spacing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocSingleLineVarSpacingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocSingleLineVarSpacingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
