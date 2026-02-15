---
title: "Rule date_time_immutable - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_usage/date_time_immutable"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `date_time_immutable`[¶](https://cs.symfony.com/doc/rules/class_usage/date_time_immutable.html#rule-date-time-immutable "Permalink to this heading")

Class `DateTimeImmutable` should be used instead of `DateTime`.

## Warning[¶](https://cs.symfony.com/doc/rules/class_usage/date_time_immutable.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/class_usage/date_time_immutable.html#this-rule-is-risky "Permalink to this heading")

Risky when the code relies on modifying `DateTime` objects or if any of the
`date_create*` functions are overridden.

## Examples[¶](https://cs.symfony.com/doc/rules/class_usage/date_time_immutable.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_usage/date_time_immutable.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-new DateTime();
+new DateTimeImmutable();
```

## References[¶](https://cs.symfony.com/doc/rules/class_usage/date_time_immutable.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassUsage\DateTimeImmutableFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassUsage/DateTimeImmutableFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassUsage\DateTimeImmutableFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassUsage/DateTimeImmutableFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
