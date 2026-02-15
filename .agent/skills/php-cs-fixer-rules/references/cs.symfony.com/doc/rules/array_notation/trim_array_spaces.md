---
title: "Rule trim_array_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/array_notation/trim_array_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `trim_array_spaces`[¶](https://cs.symfony.com/doc/rules/array_notation/trim_array_spaces.html#rule-trim-array-spaces "Permalink to this heading")

Arrays should be formatted like function/method arguments, without leading or
trailing single line space.

## Examples[¶](https://cs.symfony.com/doc/rules/array_notation/trim_array_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/array_notation/trim_array_spaces.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$sample = array( );
-$sample = array( 'a', 'b' );
+$sample = array();
+$sample = array('a', 'b');
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/array_notation/trim_array_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/array_notation/trim_array_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ArrayNotation/TrimArraySpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ArrayNotation\TrimArraySpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ArrayNotation/TrimArraySpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
