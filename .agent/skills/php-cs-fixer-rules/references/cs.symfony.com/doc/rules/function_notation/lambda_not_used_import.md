---
title: "Rule lambda_not_used_import - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/lambda_not_used_import"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `lambda_not_used_import`[¶](https://cs.symfony.com/doc/rules/function_notation/lambda_not_used_import.html#rule-lambda-not-used-import "Permalink to this heading")

Lambda must not import variables it doesn’t use.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/lambda_not_used_import.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/lambda_not_used_import.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$foo = function() use ($bar) {};
+$foo = function() {};
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/function_notation/lambda_not_used_import.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/function_notation/lambda_not_used_import.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\LambdaNotUsedImportFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/LambdaNotUsedImportFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\LambdaNotUsedImportFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/LambdaNotUsedImportFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
