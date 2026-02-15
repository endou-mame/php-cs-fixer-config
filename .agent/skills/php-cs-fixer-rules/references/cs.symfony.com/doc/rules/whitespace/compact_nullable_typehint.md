---
title: "Rule compact_nullable_typehint - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/compact_nullable_typehint"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `compact_nullable_typehint`[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_typehint.html#rule-compact-nullable-typehint "Permalink to this heading")

Remove extra spaces in a nullable typehint.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_typehint.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_typehint.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `compact_nullable_type_declaration` instead.

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_typehint.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_typehint.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function sample(? string $str): ? string
+function sample(?string $str): ?string
 {}
```

## References[¶](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_typehint.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/CompactNullableTypehintFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\CompactNullableTypehintFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/CompactNullableTypehintFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
