---
title: "Rule compact_nullable_type_declaration - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/compact_nullable_type_declaration"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `compact_nullable_type_declaration`[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_type_declaration.html#rule-compact-nullable-type-declaration "Permalink to this heading")

Remove extra spaces in a nullable type declaration.

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_type_declaration.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_type_declaration.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function sample(? string $str): ? string
+function sample(?string $str): ?string
 {}
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_type_declaration.html#rule-sets "Permalink to this heading")

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

## References[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_type_declaration.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\CompactNullableTypeDeclarationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/CompactNullableTypeDeclarationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\CompactNullableTypeDeclarationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/CompactNullableTypeDeclarationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
