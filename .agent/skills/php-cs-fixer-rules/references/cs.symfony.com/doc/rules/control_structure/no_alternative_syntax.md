---
title: "Rule no_alternative_syntax - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_alternative_syntax`[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#rule-no-alternative-syntax "Permalink to this heading")

Replace control structure alternative syntax to use braces.

## Warning[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`fix_non_monolithic_code`.

## Configuration[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#configuration "Permalink to this heading")

### `fix_non_monolithic_code`[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#fix-non-monolithic-code "Permalink to this heading")

Whether to also fix code with inline HTML.

Allowed types: `bool`

Default value: `true`

Default value (future-mode): `false`

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-if(true):echo 't';else:echo 'f';endif;
+if(true) { echo 't';} else { echo 'f';}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#example-2 "Permalink to this heading")

With configuration: `['fix_non_monolithic_code' => true]`.

```
--- Original
+++ New
-<?php if ($condition): ?>
+<?php if ($condition) { ?>
 Lorem ipsum.
-<?php endif; ?>
+<?php } ?>
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/NoAlternativeSyntaxFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\NoAlternativeSyntaxFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/NoAlternativeSyntaxFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
