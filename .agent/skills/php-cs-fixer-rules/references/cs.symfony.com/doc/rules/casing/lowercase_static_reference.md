---
title: "Rule lowercase_static_reference - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/casing/lowercase_static_reference"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `lowercase_static_reference`[¶](https://cs.symfony.com/doc/rules/casing/lowercase_static_reference.html#rule-lowercase-static-reference "Permalink to this heading")

Class static references `self`, `static` and `parent` MUST be in lower
case.

## Examples[¶](https://cs.symfony.com/doc/rules/casing/lowercase_static_reference.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/casing/lowercase_static_reference.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo extends Bar
 {
     public function baz1()
     {
-        return STATIC::baz2();
+        return static::baz2();
     }

     public function baz2($x)
     {
-        return $x instanceof Self;
+        return $x instanceof self;
     }

-    public function baz3(PaRent $x)
+    public function baz3(parent $x)
     {
         return true;
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/casing/lowercase_static_reference.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo extends Bar
 {
-    public function baz(?self $x) : SELF
+    public function baz(?self $x) : self
     {
         return false;
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/casing/lowercase_static_reference.html#rule-sets "Permalink to this heading")

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

## References[¶](https://cs.symfony.com/doc/rules/casing/lowercase_static_reference.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Casing/LowercaseStaticReferenceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Casing\LowercaseStaticReferenceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Casing/LowercaseStaticReferenceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
