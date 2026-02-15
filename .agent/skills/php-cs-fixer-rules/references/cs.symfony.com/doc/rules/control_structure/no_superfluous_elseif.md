---
title: "Rule no_superfluous_elseif - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/control_structure/no_superfluous_elseif"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_superfluous_elseif`[¶](https://cs.symfony.com/doc/rules/control_structure/no_superfluous_elseif.html#rule-no-superfluous-elseif "Permalink to this heading")

Replaces superfluous `elseif` with `if`.

## Examples[¶](https://cs.symfony.com/doc/rules/control_structure/no_superfluous_elseif.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/control_structure/no_superfluous_elseif.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 if ($a) {
     return 1;
-} elseif ($b) {
+}
+if ($b) {
     return 2;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/control_structure/no_superfluous_elseif.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/control_structure/no_superfluous_elseif.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ControlStructure\NoSuperfluousElseifFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ControlStructure/NoSuperfluousElseifFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ControlStructure\NoSuperfluousElseifFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ControlStructure/NoSuperfluousElseifFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
