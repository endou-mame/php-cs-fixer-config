---
title: "Rule ternary_operator_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/ternary_operator_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ternary_operator_spaces`[¶](https://cs.symfony.com/doc/rules/operator/ternary_operator_spaces.html#rule-ternary-operator-spaces "Permalink to this heading")

Standardize spaces around ternary operator.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/ternary_operator_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/ternary_operator_spaces.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = $a   ?1 :0;
+<?php $a = $a ? 1 : 0;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/ternary_operator_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/ternary_operator_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/TernaryOperatorSpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\TernaryOperatorSpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/TernaryOperatorSpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
