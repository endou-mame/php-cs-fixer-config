---
title: "Rule no_superfluous_phpdoc_tags - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `no_superfluous_phpdoc_tags`[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#rule-no-superfluous-phpdoc-tags "Permalink to this heading")

Removes `@param`, `@return` and `@var` tags that don’t provide any useful
information.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`allow_hidden_params`, `allow_mixed`, `allow_unused_params`,
`remove_inheritdoc`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#configuration "Permalink to this heading")

### `allow_hidden_params`[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#allow-hidden-params "Permalink to this heading")

Whether `param` annotation for hidden params in method signature are allowed.

Allowed types: `bool`

Default value: `false`

Default value (future-mode): `true`

### `allow_mixed`[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#allow-mixed "Permalink to this heading")

Whether type `mixed` without description is allowed (`true`) or considered
superfluous (`false`).

Allowed types: `bool`

Default value: `false`

### `allow_unused_params`[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#allow-unused-params "Permalink to this heading")

Whether `param` annotation without actual signature is allowed (`true`) or
considered superfluous (`false`).

Allowed types: `bool`

Default value: `false`

### `remove_inheritdoc`[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#remove-inheritdoc "Permalink to this heading")

Remove `@inheritDoc` tags.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class Foo {
     /**
-     * @param Bar $bar
-     * @param mixed $baz
      *
-     * @return Baz
      */
     public function doFoo(Bar $bar, $baz): Baz {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#example-2 "Permalink to this heading")

With configuration: `['allow_mixed' => true]`.

```
--- Original
+++ New
 <?php
 class Foo {
     /**
-     * @param Bar $bar
      * @param mixed $baz
      */
     public function doFoo(Bar $bar, $baz) {}
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#example-3 "Permalink to this heading")

With configuration: `['remove_inheritdoc' => true]`.

```
--- Original
+++ New
 <?php
 class Foo {
     /**
-     * @inheritDoc
+     *
      */
     public function doFoo(Bar $bar, $baz) {}
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#example-4 "Permalink to this heading")

With configuration: `['allow_hidden_params' => true]`.

```
--- Original
+++ New
 <?php
 class Foo {
     /**
-     * @param Bar $bar
-     * @param mixed $baz
      * @param string|int|null $qux
-     * @param mixed $foo
      */
     public function doFoo(Bar $bar, $baz /*, $qux = null */) {}
 }
```

### Example #5[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#example-5 "Permalink to this heading")

With configuration: `['allow_unused_params' => true]`.

```
--- Original
+++ New
 <?php
 class Foo {
     /**
-     * @param Bar $bar
-     * @param mixed $baz
      * @param string|int|null $qux
      * @param mixed $foo
      */
     public function doFoo(Bar $bar, $baz /*, $qux = null */) {}
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['allow_hidden_params' => true, 'allow_mixed' => true, 'remove_inheritdoc' => true]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['allow_hidden_params' => true, 'remove_inheritdoc' => true]`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/NoSuperfluousPhpdocTagsFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/NoSuperfluousPhpdocTagsFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
