---
title: "Rule phpdoc_tag_type - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_tag_type`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#rule-phpdoc-tag-type "Permalink to this heading")

Forces PHPDoc tags to be either regular annotations or inline.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `tags`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#configuration "Permalink to this heading")

### `tags`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#tags "Permalink to this heading")

The list of tags to fix.

Allowed types: `array<string, 'annotation'|'inline'>`

Default value: `['api' => 'annotation', 'author' => 'annotation', 'copyright' => 'annotation', 'deprecated' => 'annotation', 'example' => 'annotation', 'global' => 'annotation', 'inheritDoc' => 'annotation', 'internal' => 'annotation', 'license' => 'annotation', 'method' => 'annotation', 'package' => 'annotation', 'param' => 'annotation', 'property' => 'annotation', 'return' => 'annotation', 'see' => 'annotation', 'since' => 'annotation', 'throws' => 'annotation', 'todo' => 'annotation', 'uses' => 'annotation', 'var' => 'annotation', 'version' => 'annotation']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * {@api}
+ * @api
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#example-2 "Permalink to this heading")

With configuration: `['tags' => ['inheritdoc' => 'inline']]`.

```
--- Original
+++ New
 <?php
 /**
- * @inheritdoc
+ * {@inheritdoc}
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['tags' => ['inheritDoc' => 'inline']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['tags' => ['inheritDoc' => 'inline']]`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocTagTypeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocTagTypeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocTagTypeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocTagTypeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
