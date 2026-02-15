---
title: "Rule no_binary_string - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/no_binary_string"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_binary_string`[¶](https://cs.symfony.com/doc/rules/string_notation/no_binary_string.html#rule-no-binary-string "Permalink to this heading")

There should not be a binary flag before strings.

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/no_binary_string.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/no_binary_string.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = b'foo';
+<?php $a = 'foo';
```

### Example #2[¶](https://cs.symfony.com/doc/rules/string_notation/no_binary_string.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
-<?php $a = b<<<EOT
+<?php $a = <<<EOT
 foo
 EOT;
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/no_binary_string.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/no_binary_string.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\NoBinaryStringFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/NoBinaryStringFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\NoBinaryStringFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/NoBinaryStringFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
