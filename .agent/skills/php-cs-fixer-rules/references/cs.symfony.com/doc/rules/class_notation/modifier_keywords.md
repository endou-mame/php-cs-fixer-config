---
title: "Rule modifier_keywords - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/modifier_keywords"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `modifier_keywords`[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#rule-modifier-keywords "Permalink to this heading")

Classes, constants, properties, and methods MUST have visibility declared, and
keyword modifiers MUST be in the following order: inheritance modifier
(`abstract` or `final`), visibility modifier (`public`, `protected`, or
`private`), set-visibility modifier (`public(set)`, `protected(set)`, or
`private(set)`), scope modifier (`static`), mutation modifier
(`readonly`), type declaration, name.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `elements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#configuration "Permalink to this heading")

### `elements`[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#elements "Permalink to this heading")

The structural elements to fix.

Allowed values: a subset of `['const', 'method', 'property']`

Default value: `['const', 'method', 'property']`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 abstract class ClassName
 {
-    const SAMPLE = 1;
+    public const SAMPLE = 1;

-    var $a;
+    public $a;

     protected string $foo;

-    static protected int $beep;
+    protected static int $beep;

-    static public final function bar() {}
+    final public static function bar() {}

-    protected abstract function zim();
+    abstract protected function zim();

-    function zex() {}
+    public function zex() {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#example-2 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 abstract class ClassName
 {
-    const SAMPLE = 1;
+    public const SAMPLE = 1;

-    var $a;
+    public $a;

-    readonly protected string $foo;
+    protected readonly string $foo;

-    static protected int $beep;
+    protected static int $beep;

-    static public final function bar() {}
+    final public static function bar() {}

-    protected abstract function zim();
+    abstract protected function zim();

-    function zex() {}
+    public function zex() {}
 }

 readonly final class ValueObject
 {
     // ...
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#example-3 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 abstract class ClassName
 {
-    const SAMPLE = 1;
+    public const SAMPLE = 1;

-    var $a;
+    public $a;

-    protected abstract string $bar { get => "a"; set; }
+    abstract protected string $bar { get => "a"; set; }

-    readonly final protected string $foo;
+    final protected readonly string $foo;

-    static protected final int $beep;
+    final protected static int $beep;

-    static public final function bar() {}
+    final public static function bar() {}

-    protected abstract function zim();
+    abstract protected function zim();

-    function zex() {}
+    public function zex() {}
 }

 readonly final class ValueObject
 {
     // ...
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#example-4 "Permalink to this heading")

With configuration: `['elements' => ['const']]`.

```
--- Original
+++ New
 <?php
 class Sample
 {
-    const SAMPLE = 1;
+    public const SAMPLE = 1;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PHP7x1Migration](https://cs.symfony.com/doc/ruleSets/PHP7x1Migration.html)
* [@PHP7x3Migration](https://cs.symfony.com/doc/ruleSets/PHP7x3Migration.html)
* [@PHP7x4Migration](https://cs.symfony.com/doc/ruleSets/PHP7x4Migration.html)
* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html)
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html)
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP71Migration](https://cs.symfony.com/doc/ruleSets/PHP71Migration.html) *(deprecated)*
* [@PHP73Migration](https://cs.symfony.com/doc/ruleSets/PHP73Migration.html) *(deprecated)*
* [@PHP74Migration](https://cs.symfony.com/doc/ruleSets/PHP74Migration.html) *(deprecated)*
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)*
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)*
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html) with config:

  `['elements' => ['method', 'property']]`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\ModifierKeywordsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/ModifierKeywordsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\ModifierKeywordsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/ModifierKeywordsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
