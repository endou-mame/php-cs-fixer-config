---
title: "Rule modern_serialization_methods - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `modern_serialization_methods`[¶](https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods.html#rule-modern-serialization-methods "Permalink to this heading")

Use new serialization methods `__serialize` and `__unserialize` instead of
deprecated ones `__sleep` and `__wakeup`.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods.html#this-rule-is-risky "Permalink to this heading")

Risky when calling the old methods directly or having logic in the `__sleep`
and `__wakeup` methods.

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php class Foo {
-    public function __sleep() {}
-    public function __wakeup() {}
+    public function __serialize() {}
+    public function __unserialize(array $data) {}
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\ModernSerializationMethodsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/ModernSerializationMethodsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\ModernSerializationMethodsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/ModernSerializationMethodsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
