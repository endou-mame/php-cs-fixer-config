---
title: "Rule no_unset_cast - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/cast_notation/no_unset_cast"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unset_cast`[¶](https://cs.symfony.com/doc/rules/cast_notation/no_unset_cast.html#rule-no-unset-cast "Permalink to this heading")

Variables must be set `null` instead of using `(unset)` casting.

## Examples[¶](https://cs.symfony.com/doc/rules/cast_notation/no_unset_cast.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/cast_notation/no_unset_cast.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = (unset) $b;
+$a =  null;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/cast_notation/no_unset_cast.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html)
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html)
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)*
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)*
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/cast_notation/no_unset_cast.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/CastNotation/NoUnsetCastFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\CastNotation\NoUnsetCastFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/CastNotation/NoUnsetCastFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
