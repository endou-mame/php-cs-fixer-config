---
title: "Rule no_unneeded_curly_braces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unneeded_curly_braces`[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#rule-no-unneeded-curly-braces "Permalink to this heading")

Removes unneeded curly braces that are superfluous and aren’t part of a control
structure’s body.

## Warnings[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#warnings "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `no_unneeded_braces` instead.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `namespaces`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#configuration "Permalink to this heading")

### `namespaces`[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#namespaces "Permalink to this heading")

Remove unneeded curly braces from bracketed namespaces.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php {
+<?php
     echo 1;
-}

+
 switch ($b) {
-    case 1: {
+    case 1:
         break;
-    }
+
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#example-2 "Permalink to this heading")

With configuration: `['namespaces' => true]`.

```
--- Original
+++ New
 <?php
-namespace Foo {
+namespace Foo;
     function Bar(){}
-}
+
```

## References[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/NoUnneededCurlyBracesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\NoUnneededCurlyBracesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/NoUnneededCurlyBracesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
