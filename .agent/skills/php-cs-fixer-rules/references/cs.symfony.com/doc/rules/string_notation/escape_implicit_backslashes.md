---
title: "Rule escape_implicit_backslashes - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `escape_implicit_backslashes`[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#rule-escape-implicit-backslashes "Permalink to this heading")

Escape implicit backslashes in strings and heredocs to ease the understanding of
which are special chars interpreted by PHP and which not.

## Description[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#description "Permalink to this heading")

In PHP double-quoted strings and heredocs some chars like `n`, `$` or `u`
have special meanings if preceded by a backslash (and some are special only if
followed by other special chars), while a backslash preceding other chars are
interpreted like a plain backslash. The precise list of those special chars is
hard to remember and to identify quickly: this fixer escapes backslashes that do
not start a special interpretation with the char after them.
It is possible to fix also single-quoted strings: in this case there is no
special chars apart from single-quote and backslash itself, so the fixer simply
ensure that all backslashes are escaped. Both single and double backslashes are
allowed in single-quoted strings, so the purpose in this context is mainly to
have a uniformed way to have them written all over the codebase.

## Warnings[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#warnings "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `string_implicit_backslashes` instead.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `double_quoted`,
`heredoc_syntax`, `single_quoted`.

## Configuration[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#configuration "Permalink to this heading")

### `double_quoted`[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#double-quoted "Permalink to this heading")

Whether to fix double-quoted strings.

Allowed types: `bool`

Default value: `true`

### `heredoc_syntax`[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#heredoc-syntax "Permalink to this heading")

Whether to fix heredoc syntax.

Allowed types: `bool`

Default value: `true`

### `single_quoted`[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#single-quoted "Permalink to this heading")

Whether to fix single-quoted strings.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

 $singleQuoted = 'String with \" and My\Prefix\\';

-$doubleQuoted = "Interpret my \n but not my \a";
+$doubleQuoted = "Interpret my \n but not my \\a";

 $hereDoc = <<<HEREDOC
-Interpret my \100 but not my \999
+Interpret my \100 but not my \\999
 HEREDOC;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#example-2 "Permalink to this heading")

With configuration: `['single_quoted' => true]`.

```
--- Original
+++ New
 <?php

-$singleQuoted = 'String with \" and My\Prefix\\';
+$singleQuoted = 'String with \\" and My\\Prefix\\';

-$doubleQuoted = "Interpret my \n but not my \a";
+$doubleQuoted = "Interpret my \n but not my \\a";

 $hereDoc = <<<HEREDOC
-Interpret my \100 but not my \999
+Interpret my \100 but not my \\999
 HEREDOC;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#example-3 "Permalink to this heading")

With configuration: `['double_quoted' => false]`.

```
--- Original
+++ New
 <?php

 $singleQuoted = 'String with \" and My\Prefix\\';

 $doubleQuoted = "Interpret my \n but not my \a";

 $hereDoc = <<<HEREDOC
-Interpret my \100 but not my \999
+Interpret my \100 but not my \\999
 HEREDOC;
```

### Example #4[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#example-4 "Permalink to this heading")

With configuration: `['heredoc_syntax' => false]`.

```
--- Original
+++ New
 <?php

 $singleQuoted = 'String with \" and My\Prefix\\';

-$doubleQuoted = "Interpret my \n but not my \a";
+$doubleQuoted = "Interpret my \n but not my \\a";

 $hereDoc = <<<HEREDOC
 Interpret my \100 but not my \999
 HEREDOC;
```

## References[¶](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\EscapeImplicitBackslashesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/EscapeImplicitBackslashesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\EscapeImplicitBackslashesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/EscapeImplicitBackslashesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
