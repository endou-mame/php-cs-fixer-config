---
title: "Rule integer_literal_case - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/casing/integer_literal_case"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `integer_literal_case`[¶](https://cs.symfony.com/doc/rules/casing/integer_literal_case.html#rule-integer-literal-case "Permalink to this heading")

Integer literals must be in correct case.

## Examples[¶](https://cs.symfony.com/doc/rules/casing/integer_literal_case.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/casing/integer_literal_case.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$foo = 0Xff;
-$bar = 0B11111111;
+$foo = 0xFF;
+$bar = 0b11111111;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/casing/integer_literal_case.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/casing/integer_literal_case.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Casing\IntegerLiteralCaseFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Casing/IntegerLiteralCaseFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Casing\IntegerLiteralCaseFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Casing/IntegerLiteralCaseFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
