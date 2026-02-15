---
title: "Rule protected_to_private - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/protected_to_private"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `protected_to_private`[¶](https://cs.symfony.com/doc/rules/class_notation/protected_to_private.html#rule-protected-to-private "Permalink to this heading")

Converts `protected` variables and methods to `private` where possible.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/protected_to_private.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/protected_to_private.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class Sample
 {
-    protected $a;
+    private $a;

-    protected function test()
+    private function test()
     {
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/protected_to_private.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/protected_to_private.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/ProtectedToPrivateFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\ProtectedToPrivateFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/ProtectedToPrivateFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
