---
title: "Rule blank_line_after_namespace - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/namespace_notation/blank_line_after_namespace"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `blank_line_after_namespace`[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_line_after_namespace.html#rule-blank-line-after-namespace "Permalink to this heading")

There MUST be one blank line after the namespace declaration.

## Examples[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_line_after_namespace.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_line_after_namespace.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 namespace Sample\Sample;

-
 $a;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_line_after_namespace.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 namespace Sample\Sample;
+
 Class Test{}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_line_after_namespace.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_line_after_namespace.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/NamespaceNotation/BlankLineAfterNamespaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/NamespaceNotation/BlankLineAfterNamespaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
