---
title: "Rule explicit_indirect_variable - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/explicit_indirect_variable"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `explicit_indirect_variable`[¶](https://cs.symfony.com/doc/rules/language_construct/explicit_indirect_variable.html#rule-explicit-indirect-variable "Permalink to this heading")

Add curly braces to indirect variables to make them clear to understand.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/explicit_indirect_variable.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/explicit_indirect_variable.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-echo $$foo;
-echo $$foo['bar'];
-echo $foo->$bar['baz'];
-echo $foo->$callback($baz);
+echo ${$foo};
+echo ${$foo}['bar'];
+echo $foo->{$bar}['baz'];
+echo $foo->{$callback}($baz);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/explicit_indirect_variable.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/explicit_indirect_variable.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/ExplicitIndirectVariableFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\ExplicitIndirectVariableFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/ExplicitIndirectVariableFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
