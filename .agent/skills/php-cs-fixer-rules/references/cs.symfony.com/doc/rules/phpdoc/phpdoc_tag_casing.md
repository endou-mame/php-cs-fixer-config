---
title: "Rule phpdoc_tag_casing - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_tag_casing`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#rule-phpdoc-tag-casing "Permalink to this heading")

Fixes casing of PHPDoc tags.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `tags`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#configuration "Permalink to this heading")

### `tags`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#tags "Permalink to this heading")

List of tags to fix with their expected casing.

Allowed types: `list<string>`

Default value: `['inheritDoc']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * @inheritdoc
+ * @inheritDoc
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#example-2 "Permalink to this heading")

With configuration: `['tags' => ['foo']]`.

```
--- Original
+++ New
 <?php
 /**
  * @inheritdoc
- * @Foo
+ * @foo
  */
```

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocTagCasingFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocTagCasingFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocTagCasingFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocTagCasingFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
