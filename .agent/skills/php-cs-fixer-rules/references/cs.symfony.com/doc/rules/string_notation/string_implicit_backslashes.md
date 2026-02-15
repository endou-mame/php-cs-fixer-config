---
title: "Rule string_implicit_backslashes - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `string_implicit_backslashes`[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#rule-string-implicit-backslashes "Permalink to this heading")

Handles implicit backslashes in strings and heredocs. Depending on the chosen
strategy, it can escape implicit backslashes to ease the understanding of which
are special chars interpreted by PHP and which not (`escape`), or it can
remove these additional backslashes if you find them superfluous (`unescape`).
You can also leave them as-is using `ignore` strategy.

## Description[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#description "Permalink to this heading")

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

## Warning[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `double_quoted`,
`heredoc`, `single_quoted`.

## Configuration[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#configuration "Permalink to this heading")

### `double_quoted`[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#double-quoted "Permalink to this heading")

Whether to escape backslashes in double-quoted strings.

Allowed values: `'escape'`, `'ignore'` and `'unescape'`

Default value: `'escape'`

### `heredoc`[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#heredoc "Permalink to this heading")

Whether to escape backslashes in heredoc syntax.

Allowed values: `'escape'`, `'ignore'` and `'unescape'`

Default value: `'escape'`

### `single_quoted`[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#single-quoted "Permalink to this heading")

Whether to escape backslashes in single-quoted strings.

Allowed values: `'escape'`, `'ignore'` and `'unescape'`

Default value: `'unescape'`

## Examples[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#example-1 "Permalink to this heading")

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

### Example #2[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#example-2 "Permalink to this heading")

With configuration: `['single_quoted' => 'escape']`.

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

### Example #3[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#example-3 "Permalink to this heading")

With configuration: `['double_quoted' => 'unescape']`.

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

### Example #4[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#example-4 "Permalink to this heading")

With configuration: `['heredoc' => 'unescape']`.

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

## Rule sets[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#rule-sets "Permalink to this heading")

The rule is part of the following rule set:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)

## References[¶](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\StringNotation\StringImplicitBackslashesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/StringNotation/StringImplicitBackslashesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\StringNotation\StringImplicitBackslashesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/StringNotation/StringImplicitBackslashesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
