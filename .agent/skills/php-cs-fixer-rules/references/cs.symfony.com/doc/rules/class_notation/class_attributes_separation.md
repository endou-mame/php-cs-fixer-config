---
title: "Rule class_attributes_separation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `class_attributes_separation`[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#rule-class-attributes-separation "Permalink to this heading")

Class, trait and interface elements must be separated with one or none blank
line.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `elements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#configuration "Permalink to this heading")

### `elements`[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#elements "Permalink to this heading")

Dictionary of `const|method|property|trait_import|case` =>
`none|one|only_if_meta` values.

Allowed types: `array<string, string>`

Default value: `['const' => 'one', 'method' => 'one', 'property' => 'one', 'trait_import' => 'none', 'case' => 'none']`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 final class Sample
 {
     protected function foo()
     {
     }
+
     protected function bar()
     {
     }
-
-
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#example-2 "Permalink to this heading")

With configuration: `['elements' => ['property' => 'one']]`.

```
--- Original
+++ New
 <?php
 class Sample
-{private $a; // foo
+{
+private $a; // foo
+
     /** second in a hour */
     private $b;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#example-3 "Permalink to this heading")

With configuration: `['elements' => ['const' => 'one']]`.

```
--- Original
+++ New
 <?php
 class Sample
 {
     const A = 1;
+
     /** seconds in some hours */
     const B = 3600;
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#example-4 "Permalink to this heading")

With configuration: `['elements' => ['const' => 'only_if_meta']]`.

```
--- Original
+++ New
 <?php
 class Sample
 {
     /** @var int */
     const SECOND = 1;
+
     /** @var int */
     const MINUTE = 60;
-
     const HOUR = 3600;
-
     const DAY = 86400;
 }
```

### Example #5[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#example-5 "Permalink to this heading")

With configuration: `['elements' => ['property' => 'only_if_meta']]`.

```
--- Original
+++ New
 <?php
 class Sample
 {
     public $a;
+
     #[SetUp]
     public $b;
+
     /** @var string */
     public $c;
+
     /** @internal */
     #[Assert\String()]
     public $d;
-
     public $e;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['elements' => ['method' => 'one']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['elements' => ['method' => 'one']]`

## References[¶](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/ClassAttributesSeparationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\ClassAttributesSeparationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/ClassAttributesSeparationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
