---
title: "Rule doctrine_annotation_braces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `doctrine_annotation_braces`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#rule-doctrine-annotation-braces "Permalink to this heading")

Doctrine annotations without arguments must use the configured syntax.

## Warning[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `ignored_tags`,
`syntax`.

## Configuration[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#configuration "Permalink to this heading")

### `ignored_tags`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#ignored-tags "Permalink to this heading")

List of tags that must not be treated as Doctrine Annotations.

Allowed types: `list<string>`

Default value: `['abstract', 'access', 'code', 'deprec', 'encode', 'exception', 'final', 'ingroup', 'inheritdoc', 'inheritDoc', 'magic', 'name', 'toc', 'tutorial', 'private', 'static', 'staticvar', 'staticVar', 'throw', 'api', 'author', 'category', 'copyright', 'deprecated', 'example', 'filesource', 'global', 'ignore', 'internal', 'license', 'link', 'method', 'package', 'param', 'property', 'property-read', 'property-write', 'return', 'see', 'since', 'source', 'subpackage', 'throws', 'todo', 'TODO', 'usedBy', 'uses', 'var', 'version', 'after', 'afterClass', 'backupGlobals', 'backupStaticAttributes', 'before', 'beforeClass', 'codeCoverageIgnore', 'codeCoverageIgnoreStart', 'codeCoverageIgnoreEnd', 'covers', 'coversDefaultClass', 'coversNothing', 'dataProvider', 'depends', 'expectedException', 'expectedExceptionCode', 'expectedExceptionMessage', 'expectedExceptionMessageRegExp', 'group', 'large', 'medium', 'preserveGlobalState', 'requires', 'runTestsInSeparateProcesses', 'runInSeparateProcess', 'small', 'test', 'testdox', 'ticket', 'uses', 'SuppressWarnings', 'noinspection', 'package_version', 'enduml', 'startuml', 'psalm', 'phpstan', 'template', 'fix', 'FIXME', 'fixme', 'override']`

### `syntax`[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#syntax "Permalink to this heading")

Whether to add or remove braces.

Allowed values: `'with_braces'` and `'without_braces'`

Default value: `'without_braces'`

## Examples[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * @Foo()
+ * @Foo
  */
 class Bar {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#example-2 "Permalink to this heading")

With configuration: `['syntax' => 'with_braces']`.

```
--- Original
+++ New
 <?php
 /**
- * @Foo
+ * @Foo()
  */
 class Bar {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@DoctrineAnnotation](https://cs.symfony.com/doc/ruleSets/DoctrineAnnotation.html)

## References[¶](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationBracesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/DoctrineAnnotation/DoctrineAnnotationBracesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\DoctrineAnnotation\DoctrineAnnotationBracesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/DoctrineAnnotation/DoctrineAnnotationBracesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
