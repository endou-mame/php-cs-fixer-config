---
title: "Rule general_phpdoc_tag_rename - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `general_phpdoc_tag_rename`[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#rule-general-phpdoc-tag-rename "Permalink to this heading")

Renames PHPDoc tags.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `case_sensitive`,
`fix_annotation`, `fix_inline`, `replacements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#configuration "Permalink to this heading")

### `case_sensitive`[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#case-sensitive "Permalink to this heading")

Whether tags should be replaced only if they have exact same casing.

Allowed types: `bool`

Default value: `false`

### `fix_annotation`[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#fix-annotation "Permalink to this heading")

Whether annotation tags should be fixed.

Allowed types: `bool`

Default value: `true`

### `fix_inline`[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#fix-inline "Permalink to this heading")

Whether inline tags should be fixed.

Allowed types: `bool`

Default value: `true`

### `replacements`[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#replacements "Permalink to this heading")

A map of tags to replace.

Allowed types: `array<string, string>`

Default value: `[]`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#example-1 "Permalink to this heading")

With configuration: `['replacements' => ['inheritDocs' => 'inheritDoc']]`.

```
--- Original
+++ New
 <?php
 /**
- * @inheritDocs
- * {@inheritdocs}
+ * @inheritDoc
+ * {@inheritDoc}
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#example-2 "Permalink to this heading")

With configuration: `['replacements' => ['inheritDocs' => 'inheritDoc'], 'fix_annotation' => false]`.

```
--- Original
+++ New
 <?php
 /**
  * @inheritDocs
- * {@inheritdocs}
+ * {@inheritDoc}
  */
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#example-3 "Permalink to this heading")

With configuration: `['replacements' => ['inheritDocs' => 'inheritDoc'], 'fix_inline' => false]`.

```
--- Original
+++ New
 <?php
 /**
- * @inheritDocs
+ * @inheritDoc
  * {@inheritdocs}
  */
```

### Example #4[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#example-4 "Permalink to this heading")

With configuration: `['replacements' => ['inheritDocs' => 'inheritDoc'], 'case_sensitive' => true]`.

```
--- Original
+++ New
 <?php
 /**
- * @inheritDocs
+ * @inheritDoc
  * {@inheritdocs}
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['replacements' => ['inheritDocs' => 'inheritDoc']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['replacements' => ['inheritDocs' => 'inheritDoc']]`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/GeneralPhpdocTagRenameFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\GeneralPhpdocTagRenameFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/GeneralPhpdocTagRenameFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
