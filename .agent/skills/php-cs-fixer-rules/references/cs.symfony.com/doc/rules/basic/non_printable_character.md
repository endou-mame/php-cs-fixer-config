---
title: "Rule non_printable_character - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/basic/non_printable_character"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `non_printable_character`[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#rule-non-printable-character "Permalink to this heading")

Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible
unicode symbols.

## Warnings[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#warnings "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#this-rule-is-risky "Permalink to this heading")

Risky when strings contain intended invisible characters.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option:
`use_escape_sequences_in_strings`.

## Configuration[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#configuration "Permalink to this heading")

### `use_escape_sequences_in_strings`[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#use-escape-sequences-in-strings "Permalink to this heading")

Whether characters should be replaced with escape sequences in strings.

Allowed types: `bool`

Default value: `true`

## Examples[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
-<?php echo "​Hello World !";
+<?php echo "\u{200b}Hello\u{2007}World\u{a0}!";
```

### Example #2[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#example-2 "Permalink to this heading")

With configuration: `['use_escape_sequences_in_strings' => false]`.

```
--- Original
+++ New
-<?php echo "​Hello World !";
+<?php echo "Hello World !";
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP7x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x0MigrationRisky.html)
* [@PHP7x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x1MigrationRisky.html)
* [@PHP7x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP7x4MigrationRisky.html)
* [@PHP8x0Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x0MigrationRisky.html)
* [@PHP8x1Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x1MigrationRisky.html)
* [@PHP8x2Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x2MigrationRisky.html)
* [@PHP8x3Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x3MigrationRisky.html)
* [@PHP8x4Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x4MigrationRisky.html)
* [@PHP8x5Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP8x5MigrationRisky.html)
* [@PHP70Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP70MigrationRisky.html) *(deprecated)*
* [@PHP71Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP71MigrationRisky.html) *(deprecated)*
* [@PHP74Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP74MigrationRisky.html) *(deprecated)*
* [@PHP80Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP80MigrationRisky.html) *(deprecated)*
* [@PHP82Migration:risky](https://cs.symfony.com/doc/ruleSets/PHP82MigrationRisky.html) *(deprecated)*
* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/basic/non_printable_character.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Basic/NonPrintableCharacterFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Basic\NonPrintableCharacterFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Basic/NonPrintableCharacterFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
