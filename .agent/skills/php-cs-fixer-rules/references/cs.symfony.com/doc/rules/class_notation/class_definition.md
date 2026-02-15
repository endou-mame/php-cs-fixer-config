---
title: "Rule class_definition - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/class_definition"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `class_definition`[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#rule-class-definition "Permalink to this heading")

Whitespace around the keywords of a class, trait, enum or interfaces definition
should be one space.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`inline_constructor_arguments`, `multi_line_extends_each_single_line`,
`single_item_single_line`, `single_line`, `space_before_parenthesis`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#configuration "Permalink to this heading")

### `inline_constructor_arguments`[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#inline-constructor-arguments "Permalink to this heading")

Whether constructor argument list in anonymous classes should be single line.

Allowed types: `bool`

Default value: `true`

### `multi_line_extends_each_single_line`[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#multi-line-extends-each-single-line "Permalink to this heading")

Whether definitions should be multiline.

Allowed types: `bool`

Default value: `false`

### `single_item_single_line`[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#single-item-single-line "Permalink to this heading")

Whether definitions should be single line when including a single item.

Allowed types: `bool`

Default value: `false`

### `single_line`[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#single-line "Permalink to this heading")

Whether definitions should be single line.

Allowed types: `bool`

Default value: `false`

### `space_before_parenthesis`[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#space-before-parenthesis "Permalink to this heading")

Whether there should be a single space after the parenthesis of anonymous class
(PSR12) or not.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-class  Foo  extends  Bar  implements  Baz,  BarBaz
+class Foo extends Bar implements Baz, BarBaz
 {
 }

-final  class  Foo  extends  Bar  implements  Baz,  BarBaz
+final class Foo extends Bar implements Baz, BarBaz
 {
 }

-trait  Foo
+trait Foo
 {
 }

-$foo = new  class  extends  Bar  implements  Baz,  BarBaz {};
+$foo = new class extends Bar implements Baz, BarBaz {};
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#example-2 "Permalink to this heading")

With configuration: `['single_line' => true]`.

```
--- Original
+++ New
 <?php

-class Foo
-extends Bar
-implements Baz, BarBaz
+class Foo extends Bar implements Baz, BarBaz
 {}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#example-3 "Permalink to this heading")

With configuration: `['single_item_single_line' => true]`.

```
--- Original
+++ New
 <?php

-class Foo
-extends Bar
-implements Baz
+class Foo extends Bar implements Baz
 {}
```

### Example #4[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#example-4 "Permalink to this heading")

With configuration: `['multi_line_extends_each_single_line' => true]`.

```
--- Original
+++ New
 <?php

 interface Bar extends
-    Bar, BarBaz, FooBarBaz
+    Bar,
+    BarBaz,
+    FooBarBaz
 {}
```

### Example #5[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#example-5 "Permalink to this heading")

With configuration: `['space_before_parenthesis' => true]`.

```
--- Original
+++ New
 <?php
-$foo = new class(){};
+$foo = new class () {};
```

### Example #6[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#example-6 "Permalink to this heading")

With configuration: `['inline_constructor_arguments' => true]`.

```
--- Original
+++ New
 <?php
-$foo = new class(
-    $bar,
-    $baz
-) {};
+$foo = new class($bar, $baz) {};
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['inline_constructor_arguments' => false, 'space_before_parenthesis' => true]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['single_line' => true]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['single_line' => true]`

## References[¶](https://cs.symfony.com/doc/rules/class_notation/class_definition.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/ClassDefinitionFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\ClassDefinitionFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/ClassDefinitionFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
