---
title: "Rule ordered_imports - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/import/ordered_imports"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ordered_imports`[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#rule-ordered-imports "Permalink to this heading")

Ordering `use` statements.

## Warning[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `case_sensitive`,
`imports_order`, `sort_algorithm`.

## Configuration[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#configuration "Permalink to this heading")

### `case_sensitive`[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#case-sensitive "Permalink to this heading")

Whether the sorting should be case sensitive.

Allowed types: `bool`

Default value: `false`

### `imports_order`[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#imports-order "Permalink to this heading")

Defines the order of import types.

Allowed types: `list<string>` and `null`

Default value: `null`

Default value (future-mode): `['class', 'function', 'const']`

### `sort_algorithm`[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#sort-algorithm "Permalink to this heading")

Whether the statements should be sorted alphabetically or by length
(*deprecated*), or not sorted.

Allowed values: `'alpha'`, `'length'` and `'none'`

Default value: `'alpha'`

## Examples[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
+use AAA;
+use const AAB;
 use function AAC;
-use const AAB;
-use AAA;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#example-2 "Permalink to this heading")

With configuration: `['case_sensitive' => true]`.

```
--- Original
+++ New
 <?php
+use const AA;
 use function Aaa;
-use const AA;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#example-3 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'length']`.

```
--- Original
+++ New
 <?php
+use Bar;
+use Acme;
+use Bar1;
 use Acme\Bar;
-use Bar1;
-use Acme;
-use Bar;
```

### Example #4[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#example-4 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'length', 'imports_order' => ['const', 'class', 'function']]`.

```
--- Original
+++ New
 <?php
+use const BBB;
 use const AAAA;
-use const BBB;

+use AAC;
 use Bar;
-use AAC;
 use Acme;

+use function DDD;
 use function CCC\AA;
-use function DDD;
```

### Example #5[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#example-5 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'alpha', 'imports_order' => ['const', 'class', 'function']]`.

```
--- Original
+++ New
 <?php
+use const AAAA;
 use const BBB;
-use const AAAA;

+use AAC;
 use Acme;
-use AAC;
 use Bar;

+use function CCC\AA;
 use function DDD;
-use function CCC\AA;
```

### Example #6[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#example-6 "Permalink to this heading")

With configuration: `['sort_algorithm' => 'none', 'imports_order' => ['const', 'class', 'function']]`.

```
--- Original
+++ New
 <?php
 use const BBB;
 use const AAAA;

-use function DDD;
-use function CCC\AA;
-
 use Acme;
 use AAC;
+
 use Bar;
+use function DDD;
+use function CCC\AA;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'none']`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'alpha']`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'alpha']`

## References[¶](https://cs.symfony.com/doc/rules/import/ordered_imports.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Import\OrderedImportsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Import/OrderedImportsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Import\OrderedImportsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Import/OrderedImportsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
