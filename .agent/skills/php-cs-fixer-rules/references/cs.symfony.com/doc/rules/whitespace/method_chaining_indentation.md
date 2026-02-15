---
title: "Rule method_chaining_indentation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/method_chaining_indentation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `method_chaining_indentation`[¶](https://cs.symfony.com/doc/rules/whitespace/method_chaining_indentation.html#rule-method-chaining-indentation "Permalink to this heading")

Method chaining MUST be properly indented. Method chaining with different levels
of indentation is not supported.

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/method_chaining_indentation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/method_chaining_indentation.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 $user->setEmail('voff.web@gmail.com')
-         ->setPassword('233434');
+    ->setPassword('233434');
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/method_chaining_indentation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/whitespace/method_chaining_indentation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/MethodChainingIndentationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\MethodChainingIndentationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/MethodChainingIndentationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
