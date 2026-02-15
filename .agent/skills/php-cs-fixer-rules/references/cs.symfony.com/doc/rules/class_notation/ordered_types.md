---
title: "Rule ordered_types - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/ordered_types"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ordered_types`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#rule-ordered-types "Permalink to this heading")

Sort union types and intersection types using configured order.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `case_sensitive`,
`null_adjustment`, `sort_algorithm`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#configuration "Permalink to this heading")

### `case_sensitive`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#case-sensitive "Permalink to this heading")

Whether the sorting should be case sensitive.

Allowed types: `bool`

Default value: `false`

### `null_adjustment`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#null-adjustment "Permalink to this heading")

Forces the position of `null` (overrides `sort_algorithm`).

Allowed values: `'always_first'`, `'always_last'` and `'none'`

Default value: `'always_first'`

Default value (future-mode): `'always_last'`

### `sort_algorithm`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#sort-algorithm "Permalink to this heading")

Whether the types should be sorted alphabetically, or not sorted.

Allowed values: `'alpha'` and `'none'`

Default value: `'alpha'`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 try {
     cache()->save($foo);
-} catch (\RuntimeException|CacheException $e) {
+} catch (CacheException|\RuntimeException $e) {
     logger($e);

     throw $e;
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#example-2 "Permalink to this heading")

With configuration: `['case_sensitive' => true]`.

```
--- Original
+++ New
 <?php
 interface Foo
 {
-    public function bar(\Aaa|\AA $foo): string|int;
+    public function bar(\AA|\Aaa $foo): int|string;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#example-3 "Permalink to this heading")

With configuration: `['null_adjustment' => 'always_last']`.

```
--- Original
+++ New
 <?php
 interface Foo
 {
-    public function bar(null|string|int $foo): string|int;
+    public function bar(int|string|null $foo): int|string;

-    public function foo(\Stringable&\Countable $obj): int;
+    public function foo(\Countable&\Stringable $obj): int;
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#example-4 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'none', 'null_adjustment' => 'always_last']`.

```
--- Original
+++ New
 <?php
 interface Bar
 {
-    public function bar(null|string|int $foo): string|int;
+    public function bar(string|int|null $foo): string|int;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['null_adjustment' => 'always_last', 'sort_algorithm' => 'none']`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['null_adjustment' => 'always_last', 'sort_algorithm' => 'none']`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['null_adjustment' => 'always_last', 'sort_algorithm' => 'none']`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['null_adjustment' => 'always_last', 'sort_algorithm' => 'none']`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['null_adjustment' => 'always_last']`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['null_adjustment' => 'always_last', 'sort_algorithm' => 'none']`

## References[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\OrderedTypesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/OrderedTypesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\OrderedTypesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/OrderedTypesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
