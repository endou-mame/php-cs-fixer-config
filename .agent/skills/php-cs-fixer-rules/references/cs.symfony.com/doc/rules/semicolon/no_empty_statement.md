---
title: "Rule no_empty_statement - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/semicolon/no_empty_statement"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_empty_statement`[¶](https://cs.symfony.com/doc/rules/semicolon/no_empty_statement.html#rule-no-empty-statement "Permalink to this heading")

Remove useless (semicolon) statements.

## Examples[¶](https://cs.symfony.com/doc/rules/semicolon/no_empty_statement.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/semicolon/no_empty_statement.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = 1;;
+<?php $a = 1;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/semicolon/no_empty_statement.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
-<?php echo 1;2;
+<?php echo 1;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/semicolon/no_empty_statement.html#example-3 "Permalink to this heading")

```
--- Original
+++ New
 <?php while(foo()){
-    continue 1;
+    continue ;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/semicolon/no_empty_statement.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/semicolon/no_empty_statement.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Semicolon/NoEmptyStatementFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Semicolon\NoEmptyStatementFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Semicolon/NoEmptyStatementFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
