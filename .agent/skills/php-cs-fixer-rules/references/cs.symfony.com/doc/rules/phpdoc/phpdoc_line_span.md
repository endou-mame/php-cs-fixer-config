---
title: "Rule phpdoc_line_span - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_line_span`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#rule-phpdoc-line-span "Permalink to this heading")

Changes doc blocks from single to multi line, or reversed. Works for class
constants, properties and methods only.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `const`, `method`,
`property`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#configuration "Permalink to this heading")

### `const`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#const "Permalink to this heading")

Whether const blocks should be single or multi line.

Allowed values: `'multi'`, `'single'` and `null`

Default value: `'multi'`

### `method`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#method "Permalink to this heading")

Whether method doc blocks should be single or multi line.

Allowed values: `'multi'`, `'single'` and `null`

Default value: `'multi'`

### `property`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#property "Permalink to this heading")

Whether property doc blocks should be single or multi line.

Allowed values: `'multi'`, `'single'` and `null`

Default value: `'multi'`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

 class Foo{
-    /** @var bool */
+    /**
+     * @var bool
+     */
     public $var;
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#example-2 "Permalink to this heading")

With configuration: `['property' => 'single']`.

```
--- Original
+++ New
 <?php

 class Foo{
-    /**
-    * @var bool
-    */
+    /** @var bool */
     public $var;
 }
```

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocLineSpanFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocLineSpanFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocLineSpanFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
