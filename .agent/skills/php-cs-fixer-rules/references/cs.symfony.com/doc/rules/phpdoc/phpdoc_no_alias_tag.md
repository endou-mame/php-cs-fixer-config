---
title: "Rule phpdoc_no_alias_tag - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_no_alias_tag`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#rule-phpdoc-no-alias-tag "Permalink to this heading")

No alias PHPDoc tags should be used.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `replacements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#configuration "Permalink to this heading")

### `replacements`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#replacements "Permalink to this heading")

Mapping between replaced annotations with new ones.

Allowed types: `array<string, string>`

Default value: `['property-read' => 'property', 'property-write' => 'property', 'type' => 'var', 'link' => 'see']`

Default value (future-mode): `['const' => 'var', 'property-read' => 'property', 'property-write' => 'property', 'type' => 'var', 'link' => 'see']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
  * @property string $foo
- * @property-read string $bar
+ * @property string $bar
  *
- * @link baz
+ * @see baz
  */
 final class Example
 {
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#example-2 "Permalink to this heading")

With configuration: `['replacements' => ['link' => 'website']]`.

```
--- Original
+++ New
 <?php
 /**
  * @property string $foo
  * @property-read string $bar
  *
- * @link baz
+ * @website baz
  */
 final class Example
 {
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['replacements' => ['const' => 'var', 'link' => 'see', 'property-read' => 'property', 'property-write' => 'property', 'type' => 'var']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['replacements' => ['const' => 'var', 'link' => 'see', 'property-read' => 'property', 'property-write' => 'property', 'type' => 'var']]`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocNoAliasTagFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocNoAliasTagFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocNoAliasTagFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
