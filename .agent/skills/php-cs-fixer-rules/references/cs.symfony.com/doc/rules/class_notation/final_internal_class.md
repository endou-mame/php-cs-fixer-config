---
title: "Rule final_internal_class - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/final_internal_class"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `final_internal_class`[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#rule-final-internal-class "Permalink to this heading")

Internal classes should be `final`.

## Warnings[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#this-rule-is-risky "Permalink to this heading")

Changing classes to `final` might cause code execution to break.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `annotation_exclude`,
`annotation_include`, `consider_absent_docblock_as_internal_class`,
`exclude`, `include`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#configuration "Permalink to this heading")

### `annotation_exclude`[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#annotation-exclude "Permalink to this heading")

Warning

This option is deprecated and will be removed in the next major version. Use `exclude` to configure PHPDoc annotations tags and attributes.

Class level attribute or annotation tags that must be omitted to fix the class,
even if all of the white list ones are used as well (case insensitive).

Allowed types: `list<string>`

Default value: `['@final', '@Entity', '@ORM\\Entity', '@ORM\\Mapping\\Entity', '@Mapping\\Entity', '@Document', '@ODM\\Document']`

### `annotation_include`[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#annotation-include "Permalink to this heading")

Warning

This option is deprecated and will be removed in the next major version. Use `include` to configure PHPDoc annotations tags and attributes.

Class level attribute or annotation tags that must be set in order to fix the
class (case insensitive).

Allowed types: `list<string>`

Default value: `['@internal']`

### `consider_absent_docblock_as_internal_class`[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#consider-absent-docblock-as-internal-class "Permalink to this heading")

Whether classes without any DocBlock should be fixed to final.

Allowed types: `bool`

Default value: `false`

### `exclude`[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#exclude "Permalink to this heading")

Class level attribute or annotation tags that must be omitted to fix the class,
even if all of the white list ones are used as well (case insensitive).

Allowed types: `list<string>`

Default value: `['final', 'Entity', 'ORM\\Entity', 'ORM\\Mapping\\Entity', 'Mapping\\Entity', 'Document', 'ODM\\Document']`

### `include`[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#include "Permalink to this heading")

Class level attribute or annotation tags that must be set in order to fix the
class (case insensitive).

Allowed types: `list<string>`

Default value: `['internal']`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
  * @internal
  */
-class Sample
+final class Sample
 {
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#example-2 "Permalink to this heading")

With configuration: `['include' => ['@Custom'], 'exclude' => ['@not-fix']]`.

```
--- Original
+++ New
 <?php
 /**
  * @CUSTOM
  */
-class A{}
+final class A{}

 /**
  * @CUSTOM
  * @not-fix
  */
 class B{}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/FinalInternalClassFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\FinalInternalClassFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/FinalInternalClassFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
