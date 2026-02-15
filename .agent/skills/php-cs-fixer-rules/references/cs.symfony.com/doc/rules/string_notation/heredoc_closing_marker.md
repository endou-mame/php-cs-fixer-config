---
title: "Rule heredoc_closing_marker - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `heredoc_closing_marker`[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#rule-heredoc-closing-marker "Permalink to this heading")

Unify `heredoc` or `nowdoc` closing marker.

## Warning[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `closing_marker`,
`explicit_heredoc_style`, `reserved_closing_markers`.

## Configuration[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#configuration "Permalink to this heading")

### `closing_marker`[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#closing-marker "Permalink to this heading")

Preferred closing marker.

Allowed types: `string`

Default value: `'EOD'`

### `explicit_heredoc_style`[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#explicit-heredoc-style "Permalink to this heading")

Whether the closing marker should be wrapped in double quotes.

Allowed types: `bool`

Default value: `false`

### `reserved_closing_markers`[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#reserved-closing-markers "Permalink to this heading")

Reserved closing markers to be kept unchanged.

Allowed types: `list<string>`

Default value: `['CSS', 'DIFF', 'HTML', 'JS', 'JSON', 'MD', 'PHP', 'PYTHON', 'RST', 'TS', 'SQL', 'XML', 'YAML']`

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php $a = <<<"TEST"
+<?php $a = <<<EOD
 Foo
-TEST;
+EOD;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#example-2 "Permalink to this heading")

With configuration: `['closing_marker' => 'EOF']`.

```
--- Original
+++ New
-<?php $a = <<<'TEST'
+<?php $a = <<<'EOF'
 Foo
-TEST;
+EOF;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#example-3 "Permalink to this heading")

With configuration: `['explicit_heredoc_style' => true]`.

```
--- Original
+++ New
-<?php $a = <<<EOD
+<?php $a = <<<"EOD"
 Foo
 EOD;
```

## References[¶](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\HeredocClosingMarkerFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/HeredocClosingMarkerFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\HeredocClosingMarkerFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/HeredocClosingMarkerFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
