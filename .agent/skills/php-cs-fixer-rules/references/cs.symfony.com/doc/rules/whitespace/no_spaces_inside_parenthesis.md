---
title: "Rule no_spaces_inside_parenthesis - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_spaces_inside_parenthesis`[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis.html#rule-no-spaces-inside-parenthesis "Permalink to this heading")

There MUST NOT be a space after the opening parenthesis. There MUST NOT be a
space before the closing parenthesis.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis.html#warning "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `spaces_inside_parentheses` instead.

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-if ( $a ) {
-    foo( );
+if ($a) {
+    foo();
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-function foo( $bar, $baz )
+function foo($bar, $baz)
 {
 }
```

## References[¶](https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/NoSpacesInsideParenthesisFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\NoSpacesInsideParenthesisFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/NoSpacesInsideParenthesisFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
