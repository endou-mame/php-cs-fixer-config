---
title: "Rule no_unused_imports - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/import/no_unused_imports"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unused_imports`[¶](https://cs.symfony.com/doc/rules/import/no_unused_imports.html#rule-no-unused-imports "Permalink to this heading")

Unused `use` statements must be removed.

## Examples[¶](https://cs.symfony.com/doc/rules/import/no_unused_imports.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/import/no_unused_imports.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 use \DateTime;
-use \Exception;

 new DateTime();
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/import/no_unused_imports.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/import/no_unused_imports.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Import\NoUnusedImportsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Import/NoUnusedImportsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Import\NoUnusedImportsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Import/NoUnusedImportsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
