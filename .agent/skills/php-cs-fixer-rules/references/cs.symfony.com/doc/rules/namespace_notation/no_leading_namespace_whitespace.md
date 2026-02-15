---
title: "Rule no_leading_namespace_whitespace - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/namespace_notation/no_leading_namespace_whitespace"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_leading_namespace_whitespace`[¶](https://cs.symfony.com/doc/rules/namespace_notation/no_leading_namespace_whitespace.html#rule-no-leading-namespace-whitespace "Permalink to this heading")

The namespace declaration line shouldn’t contain leading whitespace.

## Examples[¶](https://cs.symfony.com/doc/rules/namespace_notation/no_leading_namespace_whitespace.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/namespace_notation/no_leading_namespace_whitespace.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
- namespace Test8a;
-    namespace Test8b;
+namespace Test8a;
+namespace Test8b;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/namespace_notation/no_leading_namespace_whitespace.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/namespace_notation/no_leading_namespace_whitespace.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/NamespaceNotation/NoLeadingNamespaceWhitespaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/NamespaceNotation/NoLeadingNamespaceWhitespaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
