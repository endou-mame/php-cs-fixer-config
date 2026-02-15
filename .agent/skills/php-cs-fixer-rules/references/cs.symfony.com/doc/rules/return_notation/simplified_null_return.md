---
title: "Rule simplified_null_return - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/return_notation/simplified_null_return"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `simplified_null_return`[¶](https://cs.symfony.com/doc/rules/return_notation/simplified_null_return.html#rule-simplified-null-return "Permalink to this heading")

A return statement wishing to return `void` should not return `null`.

## Examples[¶](https://cs.symfony.com/doc/rules/return_notation/simplified_null_return.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/return_notation/simplified_null_return.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php return null;
+<?php return;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/return_notation/simplified_null_return.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function foo() { return null; }
+function foo() { return; }
 function bar(): int { return null; }
 function baz(): ?int { return null; }
-function xyz(): void { return null; }
+function xyz(): void { return; }
```

## References[¶](https://cs.symfony.com/doc/rules/return_notation/simplified_null_return.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ReturnNotation\SimplifiedNullReturnFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ReturnNotation/SimplifiedNullReturnFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ReturnNotation\SimplifiedNullReturnFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ReturnNotation/SimplifiedNullReturnFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
