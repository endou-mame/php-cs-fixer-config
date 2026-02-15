---
title: "Rule empty_loop_body - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/empty_loop_body"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `empty_loop_body`[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#rule-empty-loop-body "Permalink to this heading")

Empty loop-body must be in configured style.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `style`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#configuration "Permalink to this heading")

### `style`[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#style "Permalink to this heading")

Style of empty loop-bodies.

Allowed values: `'braces'` and `'semicolon'`

Default value: `'semicolon'`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php while(foo()){}
+<?php while(foo());
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#example-2 "Permalink to this heading")

With configuration: `['style' => 'braces']`.

```
--- Original
+++ New
-<?php while(foo());
+<?php while(foo()){}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['style' => 'braces']`

## References[¶](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\EmptyLoopBodyFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/EmptyLoopBodyFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\EmptyLoopBodyFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/EmptyLoopBodyFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
