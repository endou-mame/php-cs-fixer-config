---
title: "Rule declare_parentheses - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/declare_parentheses"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `declare_parentheses`[¶](https://cs.symfony.com/doc/rules/language_construct/declare_parentheses.html#rule-declare-parentheses "Permalink to this heading")

There must not be spaces around `declare` statement parentheses.

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/declare_parentheses.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/declare_parentheses.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php declare ( strict_types=1 );
+<?php declare(strict_types=1);
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/declare_parentheses.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/declare_parentheses.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\DeclareParenthesesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/DeclareParenthesesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\DeclareParenthesesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/DeclareParenthesesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
