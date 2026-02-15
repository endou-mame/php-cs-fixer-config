---
title: "Rule native_type_declaration_casing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/casing/native_type_declaration_casing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `native_type_declaration_casing`[¶](https://cs.symfony.com/doc/rules/casing/native_type_declaration_casing.html#rule-native-type-declaration-casing "Permalink to this heading")

Native type declarations should be used in the correct case.

## Examples[¶](https://cs.symfony.com/doc/rules/casing/native_type_declaration_casing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/casing/native_type_declaration_casing.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Bar {
-    public function Foo(CALLABLE $bar): INT
+    public function Foo(callable $bar): int
     {
         return 1;
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/casing/native_type_declaration_casing.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Foo
 {
-    const INT BAR = 1;
+    const int BAR = 1;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/casing/native_type_declaration_casing.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/casing/native_type_declaration_casing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Casing\NativeTypeDeclarationCasingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Casing/NativeTypeDeclarationCasingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Casing\NativeTypeDeclarationCasingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Casing/NativeTypeDeclarationCasingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
