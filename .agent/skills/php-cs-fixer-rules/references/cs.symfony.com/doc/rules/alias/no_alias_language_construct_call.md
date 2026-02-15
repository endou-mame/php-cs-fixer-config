---
title: "Rule no_alias_language_construct_call - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/no_alias_language_construct_call"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_alias_language_construct_call`[¶](https://cs.symfony.com/doc/rules/alias/no_alias_language_construct_call.html#rule-no-alias-language-construct-call "Permalink to this heading")

Master language constructs shall be used instead of aliases.

## Examples[¶](https://cs.symfony.com/doc/rules/alias/no_alias_language_construct_call.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/no_alias_language_construct_call.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-die;
+exit;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/no_alias_language_construct_call.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/alias/no_alias_language_construct_call.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\NoAliasLanguageConstructCallFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/NoAliasLanguageConstructCallFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\NoAliasLanguageConstructCallFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/NoAliasLanguageConstructCallFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
