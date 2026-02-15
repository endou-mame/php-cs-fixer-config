---
title: "Rule regular_callable_call - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/regular_callable_call"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `regular_callable_call`[¶](https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html#rule-regular-callable-call "Permalink to this heading")

Callables must be called without using `call_user_func*` when possible.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html#this-rule-is-risky "Permalink to this heading")

Risky when the `call_user_func` or `call_user_func_array` function is
overridden or when are used in constructions that should be avoided, like
`call_user_func_array('foo', ['bar' => 'baz'])` or `call_user_func($foo, $foo
= 'bar')`.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-    call_user_func("var_dump", 1, 2);
+    var_dump(1, 2);

-    call_user_func("Bar\Baz::d", 1, 2);
+    Bar\Baz::d(1, 2);

-    call_user_func_array($callback, [1, 2]);
+    $callback(...[1, 2]);
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-call_user_func(function ($a, $b) { var_dump($a, $b); }, 1, 2);
+(function ($a, $b) { var_dump($a, $b); })(1, 2);

-call_user_func(static function ($a, $b) { var_dump($a, $b); }, 1, 2);
+(static function ($a, $b) { var_dump($a, $b); })(1, 2);
```

## References[¶](https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\RegularCallableCallFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/RegularCallableCallFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\RegularCallableCallFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/RegularCallableCallFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
