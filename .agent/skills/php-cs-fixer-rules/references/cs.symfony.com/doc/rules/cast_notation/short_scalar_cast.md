---
title: "Rule short_scalar_cast - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/cast_notation/short_scalar_cast"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `short_scalar_cast`[¶](https://cs.symfony.com/doc/rules/cast_notation/short_scalar_cast.html#rule-short-scalar-cast "Permalink to this heading")

Cast `(boolean)` and `(integer)` should be written as `(bool)` and
`(int)`, `(double)` and `(real)` as `(float)`, `(binary)` as
`(string)`.

## Examples[¶](https://cs.symfony.com/doc/rules/cast_notation/short_scalar_cast.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/cast_notation/short_scalar_cast.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = (boolean) $b;
-$a = (integer) $b;
-$a = (double) $b;
+$a = (bool) $b;
+$a = (int) $b;
+$a = (float) $b;

-$a = (binary) $b;
+$a = (string) $b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/cast_notation/short_scalar_cast.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PHP7x4Migration](https://cs.symfony.com/doc/ruleSets/PHP7x4Migration.html)
* [@PHP8x0Migration](https://cs.symfony.com/doc/ruleSets/PHP8x0Migration.html)
* [@PHP8x1Migration](https://cs.symfony.com/doc/ruleSets/PHP8x1Migration.html)
* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP74Migration](https://cs.symfony.com/doc/ruleSets/PHP74Migration.html) *(deprecated)*
* [@PHP80Migration](https://cs.symfony.com/doc/ruleSets/PHP80Migration.html) *(deprecated)*
* [@PHP81Migration](https://cs.symfony.com/doc/ruleSets/PHP81Migration.html) *(deprecated)*
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/cast_notation/short_scalar_cast.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/CastNotation/ShortScalarCastFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\CastNotation\ShortScalarCastFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/CastNotation/ShortScalarCastFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
