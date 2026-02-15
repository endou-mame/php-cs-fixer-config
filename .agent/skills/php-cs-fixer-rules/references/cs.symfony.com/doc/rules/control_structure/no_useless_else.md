---
title: "Rule no_useless_else - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/no_useless_else"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_useless_else`[¶](https://cs.symfony.com/doc/rules/control_structure/no_useless_else.html#rule-no-useless-else "Permalink to this heading")

There should not be useless `else` cases.

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/no_useless_else.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/no_useless_else.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 if ($a) {
     return 1;
-} else {
+}
     return 2;
-}
+
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/no_useless_else.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/no_useless_else.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/NoUselessElseFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\NoUselessElseFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/NoUselessElseFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
