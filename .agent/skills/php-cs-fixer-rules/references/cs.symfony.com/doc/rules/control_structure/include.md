---
title: "Rule include - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/include"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `include`[¶](https://cs.symfony.com/doc/rules/control_structure/include.html#rule-include "Permalink to this heading")

Include/Require and file path should be divided with a single space. File path
should not be placed within parentheses.

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/include.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/include.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-require ("sample1.php");
-require_once  "sample2.php";
-include       "sample3.php";
-include_once("sample4.php");
+require "sample1.php";
+require_once "sample2.php";
+include "sample3.php";
+include_once "sample4.php";
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/include.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/include.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\IncludeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/IncludeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\IncludeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/IncludeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
