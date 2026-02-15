---
title: "Rule general_phpdoc_annotation_remove - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `general_phpdoc_annotation_remove`[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#rule-general-phpdoc-annotation-remove "Permalink to this heading")

Removes configured annotations from PHPDoc.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `annotations`,
`case_sensitive`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#configuration "Permalink to this heading")

### `annotations`[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#annotations "Permalink to this heading")

List of annotations to remove, e.g. `["author"]`.

Allowed types: `list<string>`

Default value: `[]`

### `case_sensitive`[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#case-sensitive "Permalink to this heading")

Should annotations be case sensitive.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#example-1 "Permalink to this heading")

With configuration: `['annotations' => ['author']]`.

```
--- Original
+++ New
 <?php
 /**
  * @internal
- * @author John Doe
  * @AuThOr Jane Doe
  */
 function foo() {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#example-2 "Permalink to this heading")

With configuration: `['annotations' => ['author'], 'case_sensitive' => false]`.

```
--- Original
+++ New
 <?php
 /**
  * @internal
- * @author John Doe
- * @AuThOr Jane Doe
  */
 function foo() {}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#example-3 "Permalink to this heading")

With configuration: `['annotations' => ['package', 'subpackage']]`.

```
--- Original
+++ New
 <?php
 /**
  * @author John Doe
- * @package ACME API
- * @subpackage Authorization
  * @version 1.0
  */
 function foo() {}
```

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocAnnotationRemoveFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/GeneralPhpdocAnnotationRemoveFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\GeneralPhpdocAnnotationRemoveFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/GeneralPhpdocAnnotationRemoveFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
