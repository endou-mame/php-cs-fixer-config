---
title: "Rule backtick_to_shell_exec - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/alias/backtick_to_shell_exec"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `backtick_to_shell_exec`[¶](https://cs.symfony.com/doc/rules/alias/backtick_to_shell_exec.html#rule-backtick-to-shell-exec "Permalink to this heading")

Converts backtick operators to `shell_exec` calls.

## Description[¶](https://cs.symfony.com/doc/rules/alias/backtick_to_shell_exec.html#description "Permalink to this heading")

Conversion is done only when it is non risky, so when special chars like
single-quotes, double-quotes and backticks are not used inside the command.

## Examples[¶](https://cs.symfony.com/doc/rules/alias/backtick_to_shell_exec.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/alias/backtick_to_shell_exec.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-$plain = `ls -lah`;
-$withVar = `ls -lah $var1 ${var2} {$var3} {$var4[0]} {$var5->call()}`;
+$plain = shell_exec("ls -lah");
+$withVar = shell_exec("ls -lah $var1 ${var2} {$var3} {$var4[0]} {$var5->call()}");
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/alias/backtick_to_shell_exec.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/alias/backtick_to_shell_exec.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Alias/BacktickToShellExecFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Alias\BacktickToShellExecFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Alias/BacktickToShellExecFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
