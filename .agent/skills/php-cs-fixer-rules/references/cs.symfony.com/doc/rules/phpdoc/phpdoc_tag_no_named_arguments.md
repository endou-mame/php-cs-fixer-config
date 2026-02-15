---
title: "Rule phpdoc_tag_no_named_arguments - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_tag_no_named_arguments`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#rule-phpdoc-tag-no-named-arguments "Permalink to this heading")

There must be `@no-named-arguments` tag in PHPDoc of a
class/enum/interface/trait.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `description`,
`fix_attribute`, `fix_internal`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#configuration "Permalink to this heading")

### `description`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#description "Permalink to this heading")

Description of the tag.

Allowed types: `string`

Default value: `''`

### `fix_attribute`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#fix-attribute "Permalink to this heading")

Whether to fix attribute classes.

Allowed types: `bool`

Default value: `true`

### `fix_internal`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#fix-internal "Permalink to this heading")

Whether to fix internal elements (marked with `@internal`).

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
+
+/**
+ * @no-named-arguments
+ */
 class Foo
 {
     public function bar(string $s) {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#example-2 "Permalink to this heading")

With configuration: `['description' => 'Parameter names are not covered by the backward compatibility promise.']`.

```
--- Original
+++ New
 <?php
+
+/**
+ * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
+ */
 class Foo
 {
     public function bar(string $s) {}
 }
```

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocTagNoNamedArgumentsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocTagNoNamedArgumentsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocTagNoNamedArgumentsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocTagNoNamedArgumentsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
