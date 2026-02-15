---
title: "Rule single_quote - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/single_quote"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_quote`[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#rule-single-quote "Permalink to this heading")

Convert double quotes to single quotes for simple strings.

## Warning[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`strings_containing_single_quote_chars`.

## Configuration[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#configuration "Permalink to this heading")

### `strings_containing_single_quote_chars`[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#strings-containing-single-quote-chars "Permalink to this heading")

Whether to fix double-quoted strings that contains single-quotes.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-$a = "sample";
+$a = 'sample';
 $b = "sample with 'single-quotes'";
```

### Example #2[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#example-2 "Permalink to this heading")

With configuration: `['strings_containing_single_quote_chars' => true]`.

```
--- Original
+++ New
 <?php

-$a = "sample";
-$b = "sample with 'single-quotes'";
+$a = 'sample';
+$b = 'sample with \'single-quotes\'';
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/single_quote.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/SingleQuoteFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\SingleQuoteFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/SingleQuoteFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
