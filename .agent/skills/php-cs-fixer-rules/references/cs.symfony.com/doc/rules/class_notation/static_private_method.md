---
title: "Rule static_private_method - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/static_private_method"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `static_private_method`[¶](https://cs.symfony.com/doc/rules/class_notation/static_private_method.html#rule-static-private-method "Permalink to this heading")

Converts private methods to `static` where possible.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/static_private_method.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/static_private_method.html#this-rule-is-risky "Permalink to this heading")

Risky when the method: contains dynamic generated calls to the instance, is
dynamically referenced, is referenced inside a Trait the class uses.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/static_private_method.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/static_private_method.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo
 {
     public function bar()
     {
-        return $this->baz();
+        return self::baz();
     }

-    private function baz()
+    private static function baz()
     {
         return 1;
     }
 }
```

## References[¶](https://cs.symfony.com/doc/rules/class_notation/static_private_method.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\StaticPrivateMethodFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/StaticPrivateMethodFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\StaticPrivateMethodFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/StaticPrivateMethodFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
