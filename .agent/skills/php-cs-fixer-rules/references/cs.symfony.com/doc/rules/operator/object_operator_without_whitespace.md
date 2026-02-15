---
title: "Rule object_operator_without_whitespace - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/object_operator_without_whitespace"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `object_operator_without_whitespace`[¶](https://cs.symfony.com/doc/rules/operator/object_operator_without_whitespace.html#rule-object-operator-without-whitespace "Permalink to this heading")

There should not be space before or after object operators `->` and `?->`.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/object_operator_without_whitespace.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/object_operator_without_whitespace.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a  ->  b;
+<?php $a->b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/object_operator_without_whitespace.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/object_operator_without_whitespace.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/ObjectOperatorWithoutWhitespaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/ObjectOperatorWithoutWhitespaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
