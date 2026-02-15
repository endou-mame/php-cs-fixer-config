---
title: "Rule doctrine_annotation_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `doctrine_annotation_spaces`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#rule-doctrine-annotation-spaces "Permalink to this heading")

Fixes spaces in Doctrine annotations.

## Description[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#description "Permalink to this heading")

There must not be any space around parentheses; commas must be preceded by no
space and followed by one space; there must be no space around named arguments
assignment operator; there must be one space around array assignment operator.

## Warning[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`after_argument_assignments`, `after_array_assignments_colon`,
`after_array_assignments_equals`, `around_commas`, `around_parentheses`,
`before_argument_assignments`, `before_array_assignments_colon`,
`before_array_assignments_equals`, `ignored_tags`.

## Configuration[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#configuration "Permalink to this heading")

### `after_argument_assignments`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#after-argument-assignments "Permalink to this heading")

Whether to add, remove or ignore spaces after argument assignment operator.

Allowed types: `null` and `bool`

Default value: `false`

### `after_array_assignments_colon`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#after-array-assignments-colon "Permalink to this heading")

Whether to add, remove or ignore spaces after array assignment `:` operator.

Allowed types: `null` and `bool`

Default value: `true`

### `after_array_assignments_equals`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#after-array-assignments-equals "Permalink to this heading")

Whether to add, remove or ignore spaces after array assignment `=` operator.

Allowed types: `null` and `bool`

Default value: `true`

### `around_commas`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#around-commas "Permalink to this heading")

Whether to fix spaces around commas.

Allowed types: `bool`

Default value: `true`

### `around_parentheses`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#around-parentheses "Permalink to this heading")

Whether to fix spaces around parentheses.

Allowed types: `bool`

Default value: `true`

### `before_argument_assignments`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#before-argument-assignments "Permalink to this heading")

Whether to add, remove or ignore spaces before argument assignment operator.

Allowed types: `null` and `bool`

Default value: `false`

### `before_array_assignments_colon`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#before-array-assignments-colon "Permalink to this heading")

Whether to add, remove or ignore spaces before array `:` assignment operator.

Allowed types: `null` and `bool`

Default value: `true`

### `before_array_assignments_equals`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#before-array-assignments-equals "Permalink to this heading")

Whether to add, remove or ignore spaces before array `=` assignment operator.

Allowed types: `null` and `bool`

Default value: `true`

### `ignored_tags`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#ignored-tags "Permalink to this heading")

List of tags that must not be treated as Doctrine Annotations.

Allowed types: `list<string>`

Default value: `['abstract', 'access', 'code', 'deprec', 'encode', 'exception', 'final', 'ingroup', 'inheritdoc', 'inheritDoc', 'magic', 'name', 'toc', 'tutorial', 'private', 'static', 'staticvar', 'staticVar', 'throw', 'api', 'author', 'category', 'copyright', 'deprecated', 'example', 'filesource', 'global', 'ignore', 'internal', 'license', 'link', 'method', 'package', 'param', 'property', 'property-read', 'property-write', 'return', 'see', 'since', 'source', 'subpackage', 'throws', 'todo', 'TODO', 'usedBy', 'uses', 'var', 'version', 'after', 'afterClass', 'backupGlobals', 'backupStaticAttributes', 'before', 'beforeClass', 'codeCoverageIgnore', 'codeCoverageIgnoreStart', 'codeCoverageIgnoreEnd', 'covers', 'coversDefaultClass', 'coversNothing', 'dataProvider', 'depends', 'expectedException', 'expectedExceptionCode', 'expectedExceptionMessage', 'expectedExceptionMessageRegExp', 'group', 'large', 'medium', 'preserveGlobalState', 'requires', 'runTestsInSeparateProcesses', 'runInSeparateProcess', 'small', 'test', 'testdox', 'ticket', 'uses', 'SuppressWarnings', 'noinspection', 'package_version', 'enduml', 'startuml', 'psalm', 'phpstan', 'template', 'fix', 'FIXME', 'fixme', 'override']`

## Examples[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * @Foo ( )
+ * @Foo()
  */
 class Bar {}

 /**
- * @Foo("bar" ,"baz")
+ * @Foo("bar", "baz")
  */
 class Bar2 {}

 /**
- * @Foo(foo = "foo", bar = {"foo":"foo", "bar"="bar"})
+ * @Foo(foo="foo", bar={"foo" : "foo", "bar" = "bar"})
  */
 class Bar3 {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#example-2 "Permalink to this heading")

With configuration: `['after_array_assignments_equals' => false, 'before_array_assignments_equals' => false]`.

```
--- Original
+++ New
 <?php
 /**
- * @Foo(foo = "foo", bar = {"foo":"foo", "bar"="bar"})
+ * @Foo(foo="foo", bar={"foo" : "foo", "bar"="bar"})
  */
 class Bar {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@DoctrineAnnotation](https://cs.symfony.com/doc/ruleSets/DoctrineAnnotation.html) with config:

  `['before_array_assignments_colon' => false]`

## References[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/DoctrineAnnotation/DoctrineAnnotationSpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/DoctrineAnnotation/DoctrineAnnotationSpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
