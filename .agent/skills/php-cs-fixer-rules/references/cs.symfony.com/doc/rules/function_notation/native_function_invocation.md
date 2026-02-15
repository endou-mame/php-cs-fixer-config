---
title: "Rule native_function_invocation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/native_function_invocation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `native_function_invocation`[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#rule-native-function-invocation "Permalink to this heading")

Add leading `\` before function invocation to speed up resolving.

## Warnings[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#this-rule-is-risky "Permalink to this heading")

Risky when any of the functions are overridden.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `exclude`,
`include`, `scope`, `strict`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#configuration "Permalink to this heading")

### `exclude`[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#exclude "Permalink to this heading")

List of functions to ignore.

Allowed types: `list<string>`

Default value: `[]`

### `include`[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#include "Permalink to this heading")

List of function names or sets to fix. Defined sets are `@internal` (all
native functions), `@all` (all global functions) and `@compiler_optimized`
(functions that are specially optimized by Zend).

Allowed types: `list<string>`

Default value: `['@compiler_optimized']`

### `scope`[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#scope "Permalink to this heading")

Only fix function calls that are made within a namespace or fix all.

Allowed values: `'all'` and `'namespaced'`

Default value: `'all'`

### `strict`[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#strict "Permalink to this heading")

Whether leading `\` of function call not meant to have it should be removed.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

 function baz($options)
 {
-    if (!array_key_exists("foo", $options)) {
+    if (!\array_key_exists("foo", $options)) {
         throw new \InvalidArgumentException();
     }

     return json_encode($options);
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#example-2 "Permalink to this heading")

With configuration: `['exclude' => ['json_encode']]`.

```
--- Original
+++ New
 <?php

 function baz($options)
 {
-    if (!array_key_exists("foo", $options)) {
+    if (!\array_key_exists("foo", $options)) {
         throw new \InvalidArgumentException();
     }

     return json_encode($options);
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#example-3 "Permalink to this heading")

With configuration: `['scope' => 'all']`.

```
--- Original
+++ New
 <?php
 namespace space1 {
-    echo count([1]);
+    echo \count([1]);
 }
 namespace {
-    echo count([1]);
+    echo \count([1]);
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#example-4 "Permalink to this heading")

With configuration: `['scope' => 'namespaced']`.

```
--- Original
+++ New
 <?php
 namespace space1 {
-    echo count([1]);
+    echo \count([1]);
 }
 namespace {
     echo count([1]);
 }
```

### Example #5[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#example-5 "Permalink to this heading")

With configuration: `['include' => ['myGlobalFunction']]`.

```
--- Original
+++ New
 <?php
-myGlobalFunction();
+\myGlobalFunction();
 count();
```

### Example #6[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#example-6 "Permalink to this heading")

With configuration: `['include' => ['@all']]`.

```
--- Original
+++ New
 <?php
-myGlobalFunction();
-count();
+\myGlobalFunction();
+\count();
```

### Example #7[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#example-7 "Permalink to this heading")

With configuration: `['include' => ['@internal']]`.

```
--- Original
+++ New
 <?php
 myGlobalFunction();
-count();
+\count();
```

### Example #8[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#example-8 "Permalink to this heading")

With configuration: `['include' => ['@compiler_optimized']]`.

```
--- Original
+++ New
 <?php
 $a .= str_repeat($a, 4);
-$c = get_class($d);
+$c = \get_class($d);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html) with config:

  `['include' => ['@compiler_optimized'], 'scope' => 'namespaced', 'strict' => true]`
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html) with config:

  `['include' => ['@compiler_optimized'], 'scope' => 'namespaced', 'strict' => true]`

## References[¶](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/NativeFunctionInvocationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\NativeFunctionInvocationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/NativeFunctionInvocationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
