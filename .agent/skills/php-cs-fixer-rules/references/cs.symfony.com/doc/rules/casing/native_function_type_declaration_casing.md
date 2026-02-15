---
title: "Rule native_function_type_declaration_casing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `native_function_type_declaration_casing`[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#rule-native-function-type-declaration-casing "Permalink to this heading")

Native type declarations for functions should use the correct case.

## Warning[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `native_type_declaration_casing` instead.

## Examples[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Bar {
-    public function Foo(CALLABLE $bar)
+    public function Foo(callable $bar)
     {
         return 1;
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function Foo(INT $a): Bool
+function Foo(int $a): bool
 {
     return true;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#example-3 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function Foo(Iterable $a): VOID
+function Foo(iterable $a): void
 {
     echo 'Hello world';
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#example-4 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function Foo(Object $a)
+function Foo(object $a)
 {
     return 'hi!';
 }
```

## References[¶](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Casing/NativeFunctionTypeDeclarationCasingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Casing/NativeFunctionTypeDeclarationCasingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
