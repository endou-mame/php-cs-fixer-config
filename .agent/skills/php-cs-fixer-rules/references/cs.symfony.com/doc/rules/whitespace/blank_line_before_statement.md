---
title: "Rule blank_line_before_statement - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `blank_line_before_statement`[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#rule-blank-line-before-statement "Permalink to this heading")

An empty line feed must precede any configured statement.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `statements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#configuration "Permalink to this heading")

### `statements`[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#statements "Permalink to this heading")

List of statements which must be preceded by an empty line.

Allowed values: a subset of `['break', 'case', 'continue', 'declare', 'default', 'do', 'exit', 'for', 'foreach', 'goto', 'if', 'include', 'include_once', 'phpdoc', 'require', 'require_once', 'return', 'switch', 'throw', 'try', 'while', 'yield', 'yield_from']`

Default value: `['break', 'continue', 'declare', 'return', 'throw', 'try']`

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 function A() {
     echo 1;
+
     return 1;
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-2 "Permalink to this heading")

With configuration: `['statements' => ['break']]`.

```
--- Original
+++ New
 <?php
 switch ($foo) {
     case 42:
         $bar->process();
+
         break;
     case 44:
         break;
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-3 "Permalink to this heading")

With configuration: `['statements' => ['continue']]`.

```
--- Original
+++ New
 <?php
 foreach ($foo as $bar) {
     if ($bar->isTired()) {
         $bar->sleep();
+
         continue;
     }
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-4 "Permalink to this heading")

With configuration: `['statements' => ['do']]`.

```
--- Original
+++ New
 <?php
 $i = 0;
+
 do {
     echo $i;
 } while ($i > 0);
```

### Example #5[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-5 "Permalink to this heading")

With configuration: `['statements' => ['exit']]`.

```
--- Original
+++ New
 <?php
 if ($foo === false) {
     exit(0);
 } else {
     $bar = 9000;
+
     exit(1);
 }
```

### Example #6[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-6 "Permalink to this heading")

With configuration: `['statements' => ['goto']]`.

```
--- Original
+++ New
 <?php
 a:

 if ($foo === false) {
     goto a;
 } else {
     $bar = 9000;
+
     goto b;
 }
```

### Example #7[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-7 "Permalink to this heading")

With configuration: `['statements' => ['if']]`.

```
--- Original
+++ New
 <?php
 $a = 9000;
+
 if (true) {
     $foo = $bar;
 }
```

### Example #8[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-8 "Permalink to this heading")

With configuration: `['statements' => ['return']]`.

```
--- Original
+++ New
 <?php

 if (true) {
     $foo = $bar;
+
     return;
 }
```

### Example #9[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-9 "Permalink to this heading")

With configuration: `['statements' => ['switch']]`.

```
--- Original
+++ New
 <?php
 $a = 9000;
+
 switch ($a) {
     case 42:
         break;
 }
```

### Example #10[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-10 "Permalink to this heading")

With configuration: `['statements' => ['throw']]`.

```
--- Original
+++ New
 <?php
 if (null === $a) {
     $foo->bar();
+
     throw new \UnexpectedValueException("A cannot be null.");
 }
```

### Example #11[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-11 "Permalink to this heading")

With configuration: `['statements' => ['try']]`.

```
--- Original
+++ New
 <?php
 $a = 9000;
+
 try {
     $foo->bar();
 } catch (\Exception $exception) {
     $a = -1;
 }
```

### Example #12[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#example-12 "Permalink to this heading")

With configuration: `['statements' => ['yield']]`.

```
--- Original
+++ New
 <?php
 function getValues() {
     yield 1;
+
     yield 2;
+
     // comment
     yield 3;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['statements' => ['break', 'case', 'continue', 'declare', 'default', 'exit', 'goto', 'include', 'include_once', 'phpdoc', 'require', 'require_once', 'return', 'switch', 'throw', 'try', 'yield', 'yield_from']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['statements' => ['return']]`

## References[¶](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/BlankLineBeforeStatementFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\BlankLineBeforeStatementFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/BlankLineBeforeStatementFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
