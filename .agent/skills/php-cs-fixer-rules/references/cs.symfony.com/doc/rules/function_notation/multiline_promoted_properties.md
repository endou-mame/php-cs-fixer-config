---
title: "Rule multiline_promoted_properties - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `multiline_promoted_properties`[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#rule-multiline-promoted-properties "Permalink to this heading")

Promoted properties must be on separate lines.

## Warnings[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#warnings "Permalink to this heading")

### This rule is EXPERIMENTAL[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#this-rule-is-experimental "Permalink to this heading")

Rule is not covered with backward compatibility promise and may produce unstable
or unexpected results, use it at your own risk. Rule’s behaviour may be changed
at any point, including rule’s name; its options’ names, availability and
allowed values; its default configuration. Rule may be even removed without
prior notice. Feel free to provide feedback and help with determining final
state of the rule.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `keep_blank_lines`,
`minimum_number_of_parameters`.

## Configuration[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#configuration "Permalink to this heading")

### `keep_blank_lines`[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#keep-blank-lines "Permalink to this heading")

Whether to keep blank lines between properties.

Allowed types: `bool`

Default value: `false`

### `minimum_number_of_parameters`[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#minimum-number-of-parameters "Permalink to this heading")

Minimum number of parameters in the constructor to fix.

Allowed types: `int`

Default value: `1`

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class Foo {
-    public function __construct(private array $a, private bool $b, private int $i) {}
+    public function __construct(
+        private array $a,
+        private bool $b,
+        private int $i
+    ) {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#example-2 "Permalink to this heading")

With configuration: `['minimum_number_of_parameters' => 3]`.

```
--- Original
+++ New
 <?php
 class Foo {
-    public function __construct(private array $a, private bool $b, private int $i) {}
+    public function __construct(
+        private array $a,
+        private bool $b,
+        private int $i
+    ) {}
 }
 class Bar {
     public function __construct(private array $x) {}
 }
```

## References[¶](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\MultilinePromotedPropertiesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/MultilinePromotedPropertiesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\MultilinePromotedPropertiesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/MultilinePromotedPropertiesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
