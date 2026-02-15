---
title: "Rule simple_to_complex_string_variable - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `simple_to_complex_string_variable`[¶](https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable.html#rule-simple-to-complex-string-variable "Permalink to this heading")

Converts explicit variables in double-quoted strings and heredoc syntax from
simple to complex format (`${` to `{$`).

## Description[¶](https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable.html#description "Permalink to this heading")

Doesn’t touch implicit variables. Works together nicely with
`explicit_string_variable`.

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 $name = 'World';
-echo "Hello ${name}!";
+echo "Hello {$name}!";
```

### Example #2[¶](https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 $name = 'World';
 echo <<<TEST
-Hello ${name}!
+Hello {$name}!
 TEST;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x2Migration](https://cs.symfony.com/doc/ruleSets/PHP8x2Migration.html)
* [@PHP8x3Migration](https://cs.symfony.com/doc/ruleSets/PHP8x3Migration.html)
* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP82Migration](https://cs.symfony.com/doc/ruleSets/PHP82Migration.html) *(deprecated)*
* [@PHP83Migration](https://cs.symfony.com/doc/ruleSets/PHP83Migration.html) *(deprecated)*
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\SimpleToComplexStringVariableFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/SimpleToComplexStringVariableFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\SimpleToComplexStringVariableFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/SimpleToComplexStringVariableFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
