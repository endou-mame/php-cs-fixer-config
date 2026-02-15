---
title: "Rule magic_constant_casing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/casing/magic_constant_casing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `magic_constant_casing`[¶](https://cs.symfony.com/doc/rules/casing/magic_constant_casing.html#rule-magic-constant-casing "Permalink to this heading")

Magic constants should be referred to using the correct casing.

## Examples[¶](https://cs.symfony.com/doc/rules/casing/magic_constant_casing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/casing/magic_constant_casing.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-echo __dir__;
+echo __DIR__;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/casing/magic_constant_casing.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/casing/magic_constant_casing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Casing/MagicConstantCasingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Casing\MagicConstantCasingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Casing/MagicConstantCasingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
