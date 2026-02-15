---
title: "Rule no_useless_nullsafe_operator - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/no_useless_nullsafe_operator"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_useless_nullsafe_operator`[¶](https://cs.symfony.com/doc/rules/operator/no_useless_nullsafe_operator.html#rule-no-useless-nullsafe-operator "Permalink to this heading")

There should not be useless Null-safe operator `?->` used.

## Examples[¶](https://cs.symfony.com/doc/rules/operator/no_useless_nullsafe_operator.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/no_useless_nullsafe_operator.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo extends Bar
 {
     public function test() {
-        echo $this?->parentMethod();
+        echo $this->parentMethod();
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/no_useless_nullsafe_operator.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/no_useless_nullsafe_operator.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\NoUselessNullsafeOperatorFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/NoUselessNullsafeOperatorFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\NoUselessNullsafeOperatorFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/NoUselessNullsafeOperatorFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
