---
title: "Rule group_import - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/import/group_import"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `group_import`[¶](https://cs.symfony.com/doc/rules/import/group_import.html#rule-group-import "Permalink to this heading")

There MUST be group use for the same namespaces.

## Warning[¶](https://cs.symfony.com/doc/rules/import/group_import.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/import/group_import.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `group_types`.

## Configuration[¶](https://cs.symfony.com/doc/rules/import/group_import.html#configuration "Permalink to this heading")

### `group_types`[¶](https://cs.symfony.com/doc/rules/import/group_import.html#group-types "Permalink to this heading")

Defines the order of import types.

Allowed types: `list<string>`

Default value: `['classy', 'functions', 'constants']`

## Examples[¶](https://cs.symfony.com/doc/rules/import/group_import.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/import/group_import.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-use Foo\Bar;
-use Foo\Baz;
+use Foo\{Bar, Baz};
```

### Example #2[¶](https://cs.symfony.com/doc/rules/import/group_import.html#example-2 "Permalink to this heading")

With configuration: `['group_types' => ['classy']]`.

```
--- Original
+++ New
 <?php

-use A\Foo;
 use function B\foo;
-use A\Bar;
+use A\{Bar, Foo};
 use function B\bar;
```

## References[¶](https://cs.symfony.com/doc/rules/import/group_import.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Import\GroupImportFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Import/GroupImportFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Import\GroupImportFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Import/GroupImportFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
