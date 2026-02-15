---
title: "Rule no_extra_blank_lines - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_extra_blank_lines`[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#rule-no-extra-blank-lines "Permalink to this heading")

Removes extra blank lines and/or blank lines following configuration.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `tokens`.

## Configuration[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#configuration "Permalink to this heading")

### `tokens`[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#tokens "Permalink to this heading")

List of tokens to fix.

Allowed values: a subset of `['attribute', 'break', 'case', 'comma', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'return', 'square_brace_block', 'switch', 'throw', 'use', 'use_trait']`

Default value: `['extra']`

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

 $foo = array("foo");

-
 $bar = "bar";
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-2 "Permalink to this heading")

With configuration: `['tokens' => ['break']]`.

```
--- Original
+++ New
 <?php

 switch ($foo) {
     case 41:
         echo "foo";
         break;
-
     case 42:
         break;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-3 "Permalink to this heading")

With configuration: `['tokens' => ['continue']]`.

```
--- Original
+++ New
 <?php

 for ($i = 0; $i < 9000; ++$i) {
     if (true) {
         continue;
-
     }
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-4 "Permalink to this heading")

With configuration: `['tokens' => ['curly_brace_block']]`.

```
--- Original
+++ New
 <?php

 for ($i = 0; $i < 9000; ++$i) {
-
     echo $i;
-
 }
```

### Example #5[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-5 "Permalink to this heading")

With configuration: `['tokens' => ['extra']]`.

```
--- Original
+++ New
 <?php

 $foo = array("foo");

-
 $bar = "bar";
```

### Example #6[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-6 "Permalink to this heading")

With configuration: `['tokens' => ['parenthesis_brace_block']]`.

```
--- Original
+++ New
 <?php

 $foo = array(
-
     "foo"
-
 );
```

### Example #7[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-7 "Permalink to this heading")

With configuration: `['tokens' => ['return']]`.

```
--- Original
+++ New
 <?php

 function foo($bar)
 {
     return $bar;
-
 }
```

### Example #8[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-8 "Permalink to this heading")

With configuration: `['tokens' => ['square_brace_block']]`.

```
--- Original
+++ New
 <?php

 $foo = [
-
     "foo"
-
 ];
```

### Example #9[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-9 "Permalink to this heading")

With configuration: `['tokens' => ['throw']]`.

```
--- Original
+++ New
 <?php

 function foo($bar)
 {
     throw new \Exception("Hello!");
-
 }
```

### Example #10[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-10 "Permalink to this heading")

With configuration: `['tokens' => ['use']]`.

```
--- Original
+++ New
 <?php

 namespace Foo;

 use Bar\Baz;
-
 use Baz\Bar;

 class Bar
 {
 }
```

### Example #11[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#example-11 "Permalink to this heading")

With configuration: `['tokens' => ['switch', 'case', 'default']]`.

```
--- Original
+++ New
 <?php
 switch($a) {
-
     case 1:
-
     default:
-
         echo 3;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['tokens' => ['use']]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['tokens' => ['use']]`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['tokens' => ['use']]`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['tokens' => ['use']]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['tokens' => ['use']]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['tokens' => ['use']]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['tokens' => ['use']]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['tokens' => ['use']]`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['tokens' => ['use']]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['tokens' => ['attribute', 'break', 'case', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'return', 'square_brace_block', 'switch', 'throw', 'use']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['tokens' => ['attribute', 'case', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'square_brace_block', 'switch', 'throw', 'use']]`

## References[¶](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/NoExtraBlankLinesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\NoExtraBlankLinesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/NoExtraBlankLinesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
