---
title: "Rule no_trailing_comma_in_singleline - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_trailing_comma_in_singleline`[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#rule-no-trailing-comma-in-singleline "Permalink to this heading")

If a list of values separated by a comma is contained on a single line, then the
last item MUST NOT have a trailing comma.

## Warning[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `elements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#configuration "Permalink to this heading")

### `elements`[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#elements "Permalink to this heading")

Which elements to fix.

Allowed values: a subset of `['arguments', 'array', 'array_destructuring', 'group_import']`

Default value: `['arguments', 'array', 'array_destructuring', 'group_import']`

## Examples[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-foo($a,);
-$foo = array(1,);
-[$foo, $bar,] = $array;
-use a\{ClassA, ClassB,};
+foo($a);
+$foo = array(1);
+[$foo, $bar] = $array;
+use a\{ClassA, ClassB};
```

### Example #2[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#example-2 "Permalink to this heading")

With configuration: `['elements' => ['array_destructuring']]`.

```
--- Original
+++ New
 <?php
 foo($a,);
-[$foo, $bar,] = $array;
+[$foo, $bar] = $array;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Basic\NoTrailingCommaInSinglelineFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Basic/NoTrailingCommaInSinglelineFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Basic\NoTrailingCommaInSinglelineFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Basic/NoTrailingCommaInSinglelineFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
