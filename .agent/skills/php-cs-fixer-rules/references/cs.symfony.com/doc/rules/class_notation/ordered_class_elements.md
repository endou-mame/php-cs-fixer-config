---
title: "Rule ordered_class_elements - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ordered_class_elements`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#rule-ordered-class-elements "Permalink to this heading")

Orders the elements of classes/interfaces/traits/enums.

## Description[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#description "Permalink to this heading")

Accepts a subset of pre-defined element types, special element groups, and
custom patterns.

Element types: `['use_trait', 'public', 'protected', 'private', 'case',
'constant', 'constant_public', 'constant_protected', 'constant_private',
'property', 'property_static', 'property_public', 'property_protected',
'property_private', 'property_public_abstract', 'property_public_readonly',
'property_protected_abstract', 'property_protected_readonly',
'property_private_readonly', 'property_public_static',
'property_protected_static', 'property_private_static', 'method',
'method_abstract', 'method_static', 'method_public', 'method_protected',
'method_private', 'method_public_abstract', 'method_protected_abstract',
'method_private_abstract', 'method_public_abstract_static',
'method_protected_abstract_static', 'method_private_abstract_static',
'method_public_static', 'method_protected_static', 'method_private_static']`

Special element types: `['construct', 'destruct', 'magic', 'phpunit']`

Custom values:

* `method:*`: specify a single method name (e.g. `method:__invoke`) to set

the order of that specific method.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `case_sensitive`,
`order`, `sort_algorithm`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#configuration "Permalink to this heading")

### `case_sensitive`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#case-sensitive "Permalink to this heading")

Whether the sorting should be case sensitive.

Allowed types: `bool`

Default value: `false`

### `order`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#order "Permalink to this heading")

List of strings defining order of elements.

Allowed types: `list<string>`

Default value: `['use_trait', 'case', 'constant_public', 'constant_protected', 'constant_private', 'property_public', 'property_protected', 'property_private', 'construct', 'destruct', 'magic', 'phpunit', 'method_public', 'method_protected', 'method_private']`

### `sort_algorithm`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#sort-algorithm "Permalink to this heading")

How multiple occurrences of same type statements should be sorted.

Allowed values: `'alpha'` and `'none'`

Default value: `'none'`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class Example
 {
     use BarTrait;
     use BazTrait;
     const C1 = 1;
     const C2 = 2;
-    protected static $protStatProp;
     public static $pubStatProp1;
     public $pubProp1;
+    var $pubProp2;
+    public static $pubStatProp2;
+    public $pubProp3;
+    protected static $protStatProp;
     protected $protProp;
-    var $pubProp2;
     private static $privStatProp;
     private $privProp;
-    public static $pubStatProp2;
-    public $pubProp3;
     protected function __construct() {}
-    private static function privStatFunc() {}
+    public function __destruct() {}
+    public function __toString() {}
     public function pubFunc1() {}
-    public function __toString() {}
-    protected function protFunc() {}
     function pubFunc2() {}
     public static function pubStatFunc1() {}
     public function pubFunc3() {}
     static function pubStatFunc2() {}
-    private function privFunc() {}
     public static function pubStatFunc3() {}
+    protected function protFunc() {}
     protected static function protStatFunc() {}
-    public function __destruct() {}
+    private static function privStatFunc() {}
+    private function privFunc() {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#example-2 "Permalink to this heading")

With configuration: `['order' => ['method_private', 'method_public']]`.

```
--- Original
+++ New
 <?php
 class Example
 {
+    private function B(){}
     public function A(){}
-    private function B(){}
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#example-3 "Permalink to this heading")

With configuration: `['order' => ['method_public'], 'sort_algorithm' => 'alpha']`.

```
--- Original
+++ New
 <?php
 class Example
 {
-    public function D(){}
+    public function A(){}
     public function B(){}
-    public function A(){}
     public function C(){}
+    public function D(){}
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#example-4 "Permalink to this heading")

With configuration: `['order' => ['method_public'], 'sort_algorithm' => 'alpha', 'case_sensitive' => true]`.

```
--- Original
+++ New
 <?php
 class Example
 {
+    public function AA(){}
+    public function AWs(){}
     public function Aa(){}
-    public function AA(){}
     public function AwS(){}
-    public function AWs(){}
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['order' => ['use_trait']]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['order' => ['use_trait']]`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['order' => ['use_trait']]`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['order' => ['use_trait']]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['order' => ['use_trait']]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['order' => ['use_trait']]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['order' => ['use_trait']]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['order' => ['use_trait']]`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['order' => ['use_trait']]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['order' => ['use_trait']]`

## References[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/OrderedClassElementsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\OrderedClassElementsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/OrderedClassElementsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
