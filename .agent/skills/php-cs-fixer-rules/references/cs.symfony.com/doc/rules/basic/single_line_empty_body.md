---
title: "Rule single_line_empty_body - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/basic/single_line_empty_body"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_line_empty_body`[¶](https://cs.symfony.com/doc/rules/basic/single_line_empty_body.html#rule-single-line-empty-body "Permalink to this heading")

Empty body of class, interface, trait, enum or function must be abbreviated as
`{}` and placed on the same line as the previous symbol, separated by a single
space.

## Examples[¶](https://cs.symfony.com/doc/rules/basic/single_line_empty_body.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/basic/single_line_empty_body.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php function foo(
     int $x
-)
-{
-}
+) {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/basic/single_line_empty_body.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/basic/single_line_empty_body.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Basic/SingleLineEmptyBodyFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Basic\SingleLineEmptyBodyFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Basic/SingleLineEmptyBodyFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
