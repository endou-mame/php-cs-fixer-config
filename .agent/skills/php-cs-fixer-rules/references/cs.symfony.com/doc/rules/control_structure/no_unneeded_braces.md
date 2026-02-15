---
title: "Rule no_unneeded_braces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unneeded_braces`[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#rule-no-unneeded-braces "Permalink to this heading")

Removes unneeded braces that are superfluous and aren’t part of a control
structure’s body.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `namespaces`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#configuration "Permalink to this heading")

### `namespaces`[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#namespaces "Permalink to this heading")

Remove unneeded braces from bracketed namespaces.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#example-1 "Permalink to this heading")

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

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#example-2 "Permalink to this heading")

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

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['namespaces' => true]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['namespaces' => true]`

## References[¶](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\NoUnneededBracesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/NoUnneededBracesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\NoUnneededBracesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/NoUnneededBracesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
