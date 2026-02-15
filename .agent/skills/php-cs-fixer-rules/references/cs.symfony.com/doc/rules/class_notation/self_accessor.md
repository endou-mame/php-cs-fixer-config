---
title: "Rule self_accessor - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/self_accessor"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `self_accessor`[¶](https://cs.symfony.com/doc/rules/class_notation/self_accessor.html#rule-self-accessor "Permalink to this heading")

Inside class or interface element `self` should be preferred to the class name
itself.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/self_accessor.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/self_accessor.html#this-rule-is-risky "Permalink to this heading")

Risky when using dynamic calls like get\_called\_class() or late static binding.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/self_accessor.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/self_accessor.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Sample
 {
     const BAZ = 1;
-    const BAR = Sample::BAZ;
+    const BAR = self::BAZ;

     public function getBar()
     {
-        return Sample::BAR;
+        return self::BAR;
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/self_accessor.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/self_accessor.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/SelfAccessorFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\SelfAccessorFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/SelfAccessorFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
