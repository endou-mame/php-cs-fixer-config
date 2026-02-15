---
title: "Rule declare_equal_normalize - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `declare_equal_normalize`[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#rule-declare-equal-normalize "Permalink to this heading")

Equal sign in declare statement should be surrounded by spaces or not following
configuration.

## Warning[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `space`.

## Configuration[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#configuration "Permalink to this heading")

### `space`[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#space "Permalink to this heading")

Spacing to apply around the equal sign.

Allowed values: `'none'` and `'single'`

Default value: `'none'`

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-declare(ticks =  1);
+declare(ticks=1);
```

### Example #2[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#example-2 "Permalink to this heading")

With configuration: `['space' => 'single']`.

```
--- Original
+++ New
 <?php
-declare(ticks=1);
+declare(ticks = 1);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#rule-sets "Permalink to this heading")

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

## References[¶](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/DeclareEqualNormalizeFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\DeclareEqualNormalizeFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/DeclareEqualNormalizeFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
