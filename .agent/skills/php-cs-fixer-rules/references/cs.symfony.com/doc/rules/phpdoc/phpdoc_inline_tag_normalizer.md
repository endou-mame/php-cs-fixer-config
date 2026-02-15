---
title: "Rule phpdoc_inline_tag_normalizer - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_inline_tag_normalizer`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#rule-phpdoc-inline-tag-normalizer "Permalink to this heading")

Fixes PHPDoc inline tags.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `tags`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#configuration "Permalink to this heading")

### `tags`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#tags "Permalink to this heading")

The list of tags to normalize.

Allowed types: `list<string>`

Default value: `['example', 'id', 'internal', 'inheritdoc', 'inheritdocs', 'link', 'source', 'toc', 'tutorial']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * @{TUTORIAL}
- * {{ @link }}
+ * {@TUTORIAL}
+ * {@link}
  * @inheritDoc
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#example-2 "Permalink to this heading")

With configuration: `['tags' => ['TUTORIAL']]`.

```
--- Original
+++ New
 <?php
 /**
- * @{TUTORIAL}
+ * {@TUTORIAL}
  * {{ @link }}
  * @inheritDoc
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocInlineTagNormalizerFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocInlineTagNormalizerFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
