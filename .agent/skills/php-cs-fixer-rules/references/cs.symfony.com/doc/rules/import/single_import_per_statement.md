---
title: "Rule single_import_per_statement - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/import/single_import_per_statement"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_import_per_statement`[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#rule-single-import-per-statement "Permalink to this heading")

There MUST be one use keyword per declaration.

## Warning[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`group_to_single_imports`.

## Configuration[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#configuration "Permalink to this heading")

### `group_to_single_imports`[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#group-to-single-imports "Permalink to this heading")

Whether to change group imports into single imports.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-use Foo, Sample, Sample\Sample as Sample2;
+use Foo;
+use Sample;
+use Sample\Sample as Sample2;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#example-2 "Permalink to this heading")

With configuration: `['group_to_single_imports' => true]`.

```
--- Original
+++ New
 <?php
-use Space\Models\ {
-    TestModelA,
-    TestModelB,
-    TestModel,
-};
+use Space\Models\TestModelA;
+use Space\Models\TestModelB;
+use Space\Models\TestModel;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['group_to_single_imports' => false]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['group_to_single_imports' => false]`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['group_to_single_imports' => false]`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['group_to_single_imports' => false]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['group_to_single_imports' => false]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['group_to_single_imports' => false]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['group_to_single_imports' => false]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['group_to_single_imports' => false]`
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['group_to_single_imports' => false]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Import/SingleImportPerStatementFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Import\SingleImportPerStatementFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Import/SingleImportPerStatementFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
