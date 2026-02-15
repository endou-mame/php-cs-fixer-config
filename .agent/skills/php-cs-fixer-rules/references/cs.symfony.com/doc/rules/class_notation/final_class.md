---
title: "Rule final_class - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/final_class"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `final_class`[¶](https://cs.symfony.com/doc/rules/class_notation/final_class.html#rule-final-class "Permalink to this heading")

All classes must be final, except abstract ones and Doctrine entities.

## Description[¶](https://cs.symfony.com/doc/rules/class_notation/final_class.html#description "Permalink to this heading")

No exception and no configuration are intentional. Beside Doctrine entities and
of course abstract classes, there is no single reason not to declare all classes
final. If you want to subclass a class, mark the parent class as abstract and
create two child classes, one empty if necessary: you’ll gain much more fine
grained type-hinting. If you need to mock a standalone class, create an
interface, or maybe it’s a value-object that shouldn’t be mocked at all. If you
need to extend a standalone class, create an interface and use the Composite
pattern. If these rules are too strict for you, you can use
`FinalInternalClassFixer` instead.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/final_class.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/final_class.html#this-rule-is-risky "Permalink to this heading")

Risky when subclassing non-abstract classes.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/final_class.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/final_class.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-class MyApp {}
+final class MyApp {}
```

## References[¶](https://cs.symfony.com/doc/rules/class_notation/final_class.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\FinalClassFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/FinalClassFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\FinalClassFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/FinalClassFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
