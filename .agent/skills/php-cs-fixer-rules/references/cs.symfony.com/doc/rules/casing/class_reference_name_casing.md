---
title: "Rule class_reference_name_casing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/casing/class_reference_name_casing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `class_reference_name_casing`[¶](https://cs.symfony.com/doc/rules/casing/class_reference_name_casing.html#rule-class-reference-name-casing "Permalink to this heading")

When referencing an internal class it must be written using the correct casing.

## Examples[¶](https://cs.symfony.com/doc/rules/casing/class_reference_name_casing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/casing/class_reference_name_casing.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-throw new \exception();
+throw new \Exception();
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/casing/class_reference_name_casing.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/casing/class_reference_name_casing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Casing\ClassReferenceNameCasingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Casing/ClassReferenceNameCasingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Casing\ClassReferenceNameCasingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Casing/ClassReferenceNameCasingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
