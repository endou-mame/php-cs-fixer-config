---
title: "Rule single_blank_line_before_namespace - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_blank_line_before_namespace`[¶](https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace.html#rule-single-blank-line-before-namespace "Permalink to this heading")

There should be exactly one blank line before a namespace declaration.

## Warning[¶](https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `blank_lines_before_namespace` instead.

## Examples[¶](https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php  namespace A {}
+<?php
+
+namespace A {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php

-
 namespace A{}
```

## References[¶](https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/NamespaceNotation/SingleBlankLineBeforeNamespaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/NamespaceNotation/SingleBlankLineBeforeNamespaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
