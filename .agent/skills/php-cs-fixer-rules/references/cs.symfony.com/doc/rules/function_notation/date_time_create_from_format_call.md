---
title: "Rule date_time_create_from_format_call - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `date_time_create_from_format_call`[¶](https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call.html#rule-date-time-create-from-format-call "Permalink to this heading")

The first argument of `DateTime::createFromFormat` method must start with
`!`.

## Description[¶](https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call.html#description "Permalink to this heading")

Consider this code:
:   `DateTime::createFromFormat('Y-m-d', '2022-02-11')`.
    What value will be returned? ‘2022-02-11 00:00:00.0’?
    No, actual return value has ‘H:i:s’ section like ‘2022-02-11 16:55:37.0’.
    Change ‘Y-m-d’ to ‘!Y-m-d’, return value will be ‘2022-02-11 00:00:00.0’.
    So, adding `!` to format string will make return value more intuitive.

## Warning[¶](https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call.html#this-rule-is-risky "Permalink to this heading")

Risky when depending on the actual timings being used even when not explicit set
in format.

## Examples[¶](https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php \DateTime::createFromFormat('Y-m-d', '2022-02-11');
+<?php \DateTime::createFromFormat('!Y-m-d', '2022-02-11');
```

## References[¶](https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\FunctionNotation\DateTimeCreateFromFormatCallFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/FunctionNotation/DateTimeCreateFromFormatCallFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\FunctionNotation\DateTimeCreateFromFormatCallFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/FunctionNotation/DateTimeCreateFromFormatCallFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
