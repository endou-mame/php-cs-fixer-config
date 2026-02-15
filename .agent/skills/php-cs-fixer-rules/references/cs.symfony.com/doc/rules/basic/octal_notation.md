---
title: "Rule octal_notation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/basic/octal_notation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `octal_notation`[¶](https://cs.symfony.com/doc/rules/basic/octal_notation.html#rule-octal-notation "Permalink to this heading")

Literal octal must be in `0o` notation.

## Examples[¶](https://cs.symfony.com/doc/rules/basic/octal_notation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/basic/octal_notation.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $foo = 0123;
+<?php $foo = 0o123;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/basic/octal_notation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html)
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)*
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/basic/octal_notation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Basic\OctalNotationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Basic/OctalNotationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Basic\OctalNotationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Basic/OctalNotationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
