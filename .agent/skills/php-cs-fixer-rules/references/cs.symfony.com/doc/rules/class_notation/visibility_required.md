---
title: "Rule visibility_required - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/visibility_required"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `visibility_required`[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#rule-visibility-required "Permalink to this heading")

Classes, constants, properties, and methods MUST have visibility declared, and
keyword modifiers MUST be in the following order: inheritance modifier
(`abstract` or `final`), visibility modifier (`public`, `protected`, or
`private`), set-visibility modifier (`public(set)`, `protected(set)`, or
`private(set)`), scope modifier (`static`), mutation modifier
(`readonly`), type declaration, name.

## Warnings[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#warnings "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `modifier_keywords` instead.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `elements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#configuration "Permalink to this heading")

### `elements`[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#elements "Permalink to this heading")

The structural elements to fix.

Allowed values: a subset of `['const', 'method', 'property']`

Default value: `['const', 'method', 'property']`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#example-1 "Permalink to this heading")

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

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#example-2 "Permalink to this heading")

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

### Example #3[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#example-3 "Permalink to this heading")

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

### Example #4[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#example-4 "Permalink to this heading")

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

## References[¶](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/VisibilityRequiredFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\VisibilityRequiredFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/VisibilityRequiredFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
