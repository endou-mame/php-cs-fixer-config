---
title: "Rule explicit_string_variable - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/explicit_string_variable"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `explicit_string_variable`[¶](https://cs.symfony.com/doc/rules/string_notation/explicit_string_variable.html#rule-explicit-string-variable "Permalink to this heading")

Converts implicit variables into explicit ones in double-quoted strings or
heredoc syntax.

## Description[¶](https://cs.symfony.com/doc/rules/string_notation/explicit_string_variable.html#description "Permalink to this heading")

The reasoning behind this rule is the following:
- When there are two valid ways of doing the same thing, using both is
confusing, there should be a coding standard to follow.
- PHP manual marks `"$var"` syntax as implicit and `"{$var}"` syntax as
explicit: explicit code should always be preferred.
- Explicit syntax allows word concatenation inside strings, e.g.
`"{$var}IsAVar"`, implicit doesn’t.
- Explicit syntax is easier to detect for IDE/editors and therefore has
colors/highlight with higher contrast, which is easier to read.
Backtick operator is skipped because it is harder to handle; you can use
`backtick_to_shell_exec` fixer to normalize backticks to strings.

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/explicit_string_variable.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/explicit_string_variable.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$a = "My name is $name !";
-$b = "I live in $state->country !";
-$c = "I have $farm[0] chickens !";
+$a = "My name is {$name} !";
+$b = "I live in {$state->country} !";
+$c = "I have {$farm[0]} chickens !";
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/explicit_string_variable.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/explicit_string_variable.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/ExplicitStringVariableFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\ExplicitStringVariableFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/ExplicitStringVariableFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
