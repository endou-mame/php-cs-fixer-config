---
title: "Rule self_static_accessor - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/self_static_accessor"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `self_static_accessor`[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#rule-self-static-accessor "Permalink to this heading")

Inside an enum or `final`/anonymous class, `self` should be preferred over
`static`.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class Sample
 {
     private static $A = 1;

     public function getBar()
     {
-        return static::class.static::test().static::$A;
+        return self::class.self::test().self::$A;
     }

     private static function test()
     {
         return 'test';
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class Foo
 {
     public function bar()
     {
-        return new static();
+        return new self();
     }
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#example-3 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class Foo
 {
     public function isBar()
     {
-        return $foo instanceof static;
+        return $foo instanceof self;
     }
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#example-4 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 $a = new class() {
     public function getBar()
     {
-        return static::class;
+        return self::class;
     }
 };
```

### Example #5[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#example-5 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 enum Foo
 {
     public const A = 123;

     public static function bar(): void
     {
-        echo static::A;
+        echo self::A;
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\SelfStaticAccessorFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/SelfStaticAccessorFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\SelfStaticAccessorFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/SelfStaticAccessorFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
