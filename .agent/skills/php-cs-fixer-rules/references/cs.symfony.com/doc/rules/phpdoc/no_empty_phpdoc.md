---
title: "Rule no_empty_phpdoc - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/no_empty_phpdoc"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_empty_phpdoc`[¶](https://cs.symfony.com/doc/rules/phpdoc/no_empty_phpdoc.html#rule-no-empty-phpdoc "Permalink to this heading")

There should not be empty PHPDoc blocks.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/no_empty_phpdoc.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/no_empty_phpdoc.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php /**  */
+<?php
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/no_empty_phpdoc.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/no_empty_phpdoc.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/NoEmptyPhpdocFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\NoEmptyPhpdocFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/NoEmptyPhpdocFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
