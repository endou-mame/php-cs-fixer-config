---
title: "Rule fully_qualified_strict_types - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `fully_qualified_strict_types`[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#rule-fully-qualified-strict-types "Permalink to this heading")

Removes the leading part of fully qualified symbol references if a given symbol
is imported or belongs to the current namespace.

## Warning[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `import_symbols`,
`leading_backslash_in_global_namespace`, `phpdoc_tags`.

## Configuration[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#configuration "Permalink to this heading")

### `import_symbols`[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#import-symbols "Permalink to this heading")

Whether FQCNs should be automatically imported.

Allowed types: `bool`

Default value: `false`

### `leading_backslash_in_global_namespace`[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#leading-backslash-in-global-namespace "Permalink to this heading")

Whether FQCN is prefixed with backslash when that FQCN is used in global
namespace context.

Allowed types: `bool`

Default value: `false`

### `phpdoc_tags`[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#phpdoc-tags "Permalink to this heading")

Collection of PHPDoc annotation tags where FQCNs should be processed. As of now
only simple tags with `@tag \F\Q\C\N` format are supported (no complex types).

Allowed types: `list<string>`

Default value: `['param', 'phpstan-param', 'phpstan-property', 'phpstan-property-read', 'phpstan-property-write', 'phpstan-return', 'phpstan-var', 'property', 'property-read', 'property-write', 'psalm-param', 'psalm-property', 'psalm-property-read', 'psalm-property-write', 'psalm-return', 'psalm-var', 'return', 'see', 'throws', 'var']`

## Examples[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

 use Foo\Bar;
 use Foo\Bar\Baz;
 use Foo\OtherClass;
 use Foo\SomeContract;
 use Foo\SomeException;

 /**
- * @see \Foo\Bar\Baz
+ * @see Baz
  */
-class SomeClass extends \Foo\OtherClass implements \Foo\SomeContract
+class SomeClass extends OtherClass implements SomeContract
 {
     /**
-     * @var \Foo\Bar\Baz
+     * @var Baz
      */
     public $baz;

     /**
-     * @param \Foo\Bar\Baz $baz
+     * @param Baz $baz
      */
     public function __construct($baz) {
         $this->baz = $baz;
     }

     /**
-     * @return \Foo\Bar\Baz
+     * @return Baz
      */
     public function getBaz() {
         return $this->baz;
     }

-    public function doX(\Foo\Bar $foo, \Exception $e): \Foo\Bar\Baz
+    public function doX(Bar $foo, Exception $e): Baz
     {
         try {}
-        catch (\Foo\SomeException $e) {}
+        catch (SomeException $e) {}
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#example-2 "Permalink to this heading")

With configuration: `['leading_backslash_in_global_namespace' => true]`.

```
--- Original
+++ New
 <?php

 class SomeClass
 {
-    public function doY(Foo\NotImported $u, \Foo\NotImported $v)
+    public function doY(\Foo\NotImported $u, \Foo\NotImported $v)
     {
     }
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#example-3 "Permalink to this heading")

With configuration: `['leading_backslash_in_global_namespace' => true]`.

```
--- Original
+++ New
 <?php
 namespace {
     use Foo\A;
     try {
         foo();
-    } catch (\Exception|\Foo\A $e) {
+    } catch (\Exception|A $e) {
     }
 }
 namespace Foo\Bar {
-    class SomeClass implements \Foo\Bar\Baz
+    class SomeClass implements Baz
     {
     }
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#example-4 "Permalink to this heading")

With configuration: `['import_symbols' => true]`.

```
--- Original
+++ New
 <?php

 namespace Foo\Test;
+use Other\BaseClass;
+use Other\CaughtThrowable;
+use Other\FunctionArgument;
+use Other\FunctionReturnType;
+use Other\Interface1;
+use Other\Interface2;
+use Other\PropertyPhpDoc;
+use Other\StaticFunctionCall;

-class Foo extends \Other\BaseClass implements \Other\Interface1, \Other\Interface2
+class Foo extends BaseClass implements Interface1, Interface2
 {
-    /** @var \Other\PropertyPhpDoc */
+    /** @var PropertyPhpDoc */
     private $array;
-    public function __construct(\Other\FunctionArgument $arg) {}
-    public function foo(): \Other\FunctionReturnType
+    public function __construct(FunctionArgument $arg) {}
+    public function foo(): FunctionReturnType
     {
         try {
-            \Other\StaticFunctionCall::bar();
-        } catch (\Other\CaughtThrowable $e) {}
+            StaticFunctionCall::bar();
+        } catch (CaughtThrowable $e) {}
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['import_symbols' => true]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Import/FullyQualifiedStrictTypesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Import\FullyQualifiedStrictTypesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Import/FullyQualifiedStrictTypesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
