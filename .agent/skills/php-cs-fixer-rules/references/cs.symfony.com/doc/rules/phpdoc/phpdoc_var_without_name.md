---
title: "Rule phpdoc_var_without_name - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_without_name"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_var_without_name`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_without_name.html#rule-phpdoc-var-without-name "Permalink to this heading")

`@var` and `@type` annotations of classy properties should not contain the
name.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_without_name.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_without_name.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class Foo
 {
     /**
-     * @var int $bar
+     * @var int
      */
     public $bar;

     /**
-     * @type $baz float
+     * @type float
      */
     public $baz;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_without_name.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_without_name.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocVarWithoutNameFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocVarWithoutNameFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocVarWithoutNameFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
