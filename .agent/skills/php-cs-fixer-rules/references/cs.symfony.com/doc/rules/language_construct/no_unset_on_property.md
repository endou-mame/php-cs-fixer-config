---
title: "Rule no_unset_on_property - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_unset_on_property`[¶](https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property.html#rule-no-unset-on-property "Permalink to this heading")

Properties should be set to `null` instead of using `unset`.

## Warning[¶](https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property.html#this-rule-is-risky "Permalink to this heading")

Risky when relying on attributes to be removed using `unset` rather than be
set to `null`. Changing variables to `null` instead of unsetting means these
still show up when looping over class variables and reference properties remain
unbroken. Since PHP 7.4, this rule might introduce `null` assignments to
properties whose type declaration does not allow it.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-unset($this->a);
+$this->a = null;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\NoUnsetOnPropertyFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/NoUnsetOnPropertyFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\NoUnsetOnPropertyFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/NoUnsetOnPropertyFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
