---
title: "Rule global_namespace_import - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/import/global_namespace_import"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `global_namespace_import`[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#rule-global-namespace-import "Permalink to this heading")

Imports or fully qualifies global classes/functions/constants.

## Warning[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `import_classes`,
`import_constants`, `import_functions`.

## Configuration[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#configuration "Permalink to this heading")

### `import_classes`[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#import-classes "Permalink to this heading")

Whether to import, not import or ignore global classes.

Allowed types: `null` and `bool`

Default value: `true`

### `import_constants`[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#import-constants "Permalink to this heading")

Whether to import, not import or ignore global constants.

Allowed types: `null` and `bool`

Default value: `null`

### `import_functions`[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#import-functions "Permalink to this heading")

Whether to import, not import or ignore global functions.

Allowed types: `null` and `bool`

Default value: `null`

## Examples[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

 namespace Foo;
+use DateTimeImmutable;

-$d = new \DateTimeImmutable();
+$d = new DateTimeImmutable();
```

### Example #2[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#example-2 "Permalink to this heading")

With configuration: `['import_classes' => true, 'import_constants' => true, 'import_functions' => true]`.

```
--- Original
+++ New
 <?php

 namespace Foo;
+use DateTimeImmutable;
+use function count;
+use const M_PI;

-if (\count($x)) {
-    /** @var \DateTimeImmutable $d */
-    $d = new \DateTimeImmutable();
-    $p = \M_PI;
+if (count($x)) {
+    /** @var DateTimeImmutable $d */
+    $d = new DateTimeImmutable();
+    $p = M_PI;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#example-3 "Permalink to this heading")

With configuration: `['import_classes' => false, 'import_constants' => false, 'import_functions' => false]`.

```
--- Original
+++ New
 <?php

 namespace Foo;

 use DateTimeImmutable;
 use function count;
 use const M_PI;

-if (count($x)) {
-    /** @var DateTimeImmutable $d */
-    $d = new DateTimeImmutable();
-    $p = M_PI;
+if (\count($x)) {
+    /** @var \DateTimeImmutable $d */
+    $d = new \DateTimeImmutable();
+    $p = \M_PI;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['import_classes' => false, 'import_constants' => false, 'import_functions' => false]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['import_classes' => false, 'import_constants' => false, 'import_functions' => false]`

## References[¶](https://cs.symfony.com/doc/rules/import/global_namespace_import.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Import/GlobalNamespaceImportFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Import\GlobalNamespaceImportFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Import/GlobalNamespaceImportFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
