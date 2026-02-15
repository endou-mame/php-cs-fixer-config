---
title: "Rule no_unneeded_import_alias - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/import/no_unneeded_import_alias"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unneeded_import_alias`[¶](https://cs.symfony.com/doc/rules/import/no_unneeded_import_alias.html#rule-no-unneeded-import-alias "Permalink to this heading")

Imports should not be aliased as the same name.

## Examples[¶](https://cs.symfony.com/doc/rules/import/no_unneeded_import_alias.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/import/no_unneeded_import_alias.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-use A\B\Foo as Foo;
+use A\B\Foo  ;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/import/no_unneeded_import_alias.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/import/no_unneeded_import_alias.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Import\NoUnneededImportAliasFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Import/NoUnneededImportAliasFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Import\NoUnneededImportAliasFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Import/NoUnneededImportAliasFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
