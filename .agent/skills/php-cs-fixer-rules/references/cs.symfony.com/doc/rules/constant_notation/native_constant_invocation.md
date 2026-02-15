---
title: "Rule native_constant_invocation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `native_constant_invocation`[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#rule-native-constant-invocation "Permalink to this heading")

Add leading `\` before constant invocation of internal constant to speed up
resolving. Constant name match is case-sensitive, except for `null`, `false`
and `true`.

## Warnings[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#this-rule-is-risky "Permalink to this heading")

Risky when any of the constants are namespaced or overridden.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `exclude`,
`fix_built_in`, `include`, `scope`, `strict`.

## Configuration[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#configuration "Permalink to this heading")

### `exclude`[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#exclude "Permalink to this heading")

List of constants to ignore.

Allowed types: `list<string>`

Default value: `['null', 'false', 'true']`

### `fix_built_in`[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#fix-built-in "Permalink to this heading")

Whether to fix constants returned by `get_defined_constants`. User constants
are not accounted in this list and must be specified in the include one.

Allowed types: `bool`

Default value: `true`

### `include`[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#include "Permalink to this heading")

List of additional constants to fix.

Allowed types: `list<string>`

Default value: `[]`

### `scope`[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#scope "Permalink to this heading")

Only fix constant invocations that are made within a namespace or fix all.

Allowed values: `'all'` and `'namespaced'`

Default value: `'all'`

### `strict`[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#strict "Permalink to this heading")

Whether leading `\` of constant invocation not meant to have it should be
removed.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php var_dump(PHP_VERSION, M_PI, MY_CUSTOM_PI);
+<?php var_dump(\PHP_VERSION, \M_PI, MY_CUSTOM_PI);
```

### Example #2[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#example-2 "Permalink to this heading")

With configuration: `['scope' => 'namespaced']`.

```
--- Original
+++ New
 <?php
 namespace space1 {
-    echo PHP_VERSION;
+    echo \PHP_VERSION;
 }
 namespace {
     echo M_PI;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#example-3 "Permalink to this heading")

With configuration: `['include' => ['MY_CUSTOM_PI']]`.

```
--- Original
+++ New
-<?php var_dump(PHP_VERSION, M_PI, MY_CUSTOM_PI);
+<?php var_dump(\PHP_VERSION, \M_PI, \MY_CUSTOM_PI);
```

### Example #4[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#example-4 "Permalink to this heading")

With configuration: `['fix_built_in' => false, 'include' => ['MY_CUSTOM_PI']]`.

```
--- Original
+++ New
-<?php var_dump(PHP_VERSION, M_PI, MY_CUSTOM_PI);
+<?php var_dump(PHP_VERSION, M_PI, \MY_CUSTOM_PI);
```

### Example #5[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#example-5 "Permalink to this heading")

With configuration: `['exclude' => ['M_PI']]`.

```
--- Original
+++ New
-<?php var_dump(PHP_VERSION, M_PI, MY_CUSTOM_PI);
+<?php var_dump(\PHP_VERSION, M_PI, MY_CUSTOM_PI);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html) with config:

  `['fix_built_in' => false, 'include' => ['DIRECTORY_SEPARATOR', 'PHP_INT_SIZE', 'PHP_SAPI', 'PHP_VERSION_ID'], 'scope' => 'namespaced', 'strict' => true]`
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html) with config:

  `['strict' => false]`

## References[¶](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ConstantNotation/NativeConstantInvocationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ConstantNotation\NativeConstantInvocationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ConstantNotation/NativeConstantInvocationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
