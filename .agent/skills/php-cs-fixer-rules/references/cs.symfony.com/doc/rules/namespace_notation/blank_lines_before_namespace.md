---
title: "Rule blank_lines_before_namespace - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `blank_lines_before_namespace`[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#rule-blank-lines-before-namespace "Permalink to this heading")

Controls blank lines before a namespace declaration.

## Warning[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `max_line_breaks`,
`min_line_breaks`.

## Configuration[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#configuration "Permalink to this heading")

### `max_line_breaks`[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#max-line-breaks "Permalink to this heading")

Maximum line breaks that should exist before namespace declaration.

Allowed types: `int`

Default value: `2`

### `min_line_breaks`[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#min-line-breaks "Permalink to this heading")

Minimum line breaks that should exist before namespace declaration.

Allowed types: `int`

Default value: `2`

## Examples[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php  namespace A {}
+<?php
+
+namespace A {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#example-2 "Permalink to this heading")

With configuration: `['min_line_breaks' => 1]`.

```
--- Original
+++ New
-<?php  namespace A {}
+<?php
+namespace A {}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#example-3 "Permalink to this heading")

With configuration: `['max_line_breaks' => 2]`.

```
--- Original
+++ New
 <?php

 declare(strict_types=1);

-
-
 namespace A{}
```

### Example #4[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#example-4 "Permalink to this heading")

With configuration: `['min_line_breaks' => 2]`.

```
--- Original
+++ New
 <?php

 /** Some comment */
+
 namespace A{}
```

### Example #5[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#example-5 "Permalink to this heading")

With configuration: `['min_line_breaks' => 0, 'max_line_breaks' => 0]`.

```
--- Original
+++ New
-<?php
-
-namespace A{}
+<?php namespace A{}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)*
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\NamespaceNotation\BlankLinesBeforeNamespaceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/NamespaceNotation/BlankLinesBeforeNamespaceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\NamespaceNotation\BlankLinesBeforeNamespaceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/NamespaceNotation/BlankLinesBeforeNamespaceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
