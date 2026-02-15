---
title: "Rule final_public_method_for_abstract_class - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `final_public_method_for_abstract_class`[¶](https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class.html#rule-final-public-method-for-abstract-class "Permalink to this heading")

All `public` methods of `abstract` classes should be `final`.

## Description[¶](https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class.html#description "Permalink to this heading")

Enforce API encapsulation in an inheritance architecture. If you want to
override a method, use the Template method pattern.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class.html#this-rule-is-risky "Permalink to this heading")

Risky when overriding `public` methods of `abstract` classes.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php

 abstract class AbstractMachine
 {
-    public function start()
+    final public function start()
     {}
 }
```

## References[¶](https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\FinalPublicMethodForAbstractClassFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/FinalPublicMethodForAbstractClassFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\FinalPublicMethodForAbstractClassFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/FinalPublicMethodForAbstractClassFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
