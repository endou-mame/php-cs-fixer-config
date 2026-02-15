---
title: "Rule standardize_not_equals - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/standardize_not_equals"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `standardize_not_equals`[¶](https://cs.symfony.com/doc/rules/operator/standardize_not_equals.html#rule-standardize-not-equals "Permalink to this heading")

Replace all `<>` with `!=`.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/standardize_not_equals.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/standardize_not_equals.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = $b <> $c;
+$a = $b != $c;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/standardize_not_equals.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/standardize_not_equals.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/StandardizeNotEqualsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\StandardizeNotEqualsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/StandardizeNotEqualsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
