---
title: "Rule phpdoc_align - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_align`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#rule-phpdoc-align "Permalink to this heading")

All items of the given PHPDoc tags must be either left-aligned or (by default)
aligned vertically.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `align`, `spacing`,
`tags`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#configuration "Permalink to this heading")

### `align`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#align "Permalink to this heading")

How comments should be aligned.

Allowed values: `'left'` and `'vertical'`

Default value: `'vertical'`

### `spacing`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#spacing "Permalink to this heading")

Spacing between tag, hint, comment, signature, etc. You can set same spacing for
all tags using a positive integer or different spacings for different tags using
an associative array of positive integers `['tagA' => spacingForA, 'tagB' =>
spacingForB]`. If you want to define default spacing to more than 1 space use
`_default` key in config array, e.g.: `['tagA' => spacingForA, 'tagB' =>
spacingForB, '_default' => spacingForAllOthers]`.

Allowed types: `int` and `array<string, int>`

Default value: `1`

### `tags`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#tags "Permalink to this heading")

The tags that should be aligned. Allowed values are tags with name (`'param',
'property', 'property-read', 'property-write', 'phpstan-param',
'phpstan-property', 'phpstan-property-read', 'phpstan-property-write',
'phpstan-assert', 'phpstan-assert-if-true', 'phpstan-assert-if-false',
'psalm-param', 'psalm-param-out', 'psalm-property', 'psalm-property-read',
'psalm-property-write', 'psalm-assert', 'psalm-assert-if-true',
'psalm-assert-if-false'`), tags with method signature (`'method',
'phpstan-method', 'psalm-method'`) and any custom tag with description (e.g.
`@tag <desc>`).

Allowed types: `list<string>`

Default value: `['method', 'param', 'property', 'return', 'throws', 'type', 'var']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
- * @param  EngineInterface $templating
- * @param string      $format
- * @param  int  $code       an HTTP response status code
- * @param    bool         $debug
- * @param  mixed    &$reference     a parameter passed by reference
+ * @param EngineInterface $templating
+ * @param string          $format
+ * @param int             $code       an HTTP response status code
+ * @param bool            $debug
+ * @param mixed           &$reference a parameter passed by reference
  *
  * @return Foo description foo
  *
- * @throws Foo            description foo
+ * @throws Foo description foo
  *             description foo
  *
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#example-2 "Permalink to this heading")

With configuration: `['align' => 'vertical']`.

```
--- Original
+++ New
 <?php
 /**
- * @param  EngineInterface $templating
- * @param string      $format
- * @param  int  $code       an HTTP response status code
- * @param    bool         $debug
- * @param  mixed    &$reference     a parameter passed by reference
+ * @param EngineInterface $templating
+ * @param string          $format
+ * @param int             $code       an HTTP response status code
+ * @param bool            $debug
+ * @param mixed           &$reference a parameter passed by reference
  *
  * @return Foo description foo
  *
- * @throws Foo            description foo
+ * @throws Foo description foo
  *             description foo
  *
  */
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#example-3 "Permalink to this heading")

With configuration: `['align' => 'left']`.

```
--- Original
+++ New
 <?php
 /**
- * @param  EngineInterface $templating
- * @param string      $format
- * @param  int  $code       an HTTP response status code
- * @param    bool         $debug
- * @param  mixed    &$reference     a parameter passed by reference
+ * @param EngineInterface $templating
+ * @param string $format
+ * @param int $code an HTTP response status code
+ * @param bool $debug
+ * @param mixed &$reference a parameter passed by reference
  *
  * @return Foo description foo
  *
- * @throws Foo            description foo
+ * @throws Foo description foo
  *             description foo
  *
  */
```

### Example #4[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#example-4 "Permalink to this heading")

With configuration: `['align' => 'left', 'spacing' => 2]`.

```
--- Original
+++ New
 <?php
 /**
- * @param  EngineInterface $templating
- * @param string      $format
- * @param  int  $code       an HTTP response status code
- * @param    bool         $debug
- * @param  mixed    &$reference     a parameter passed by reference
+ * @param  EngineInterface  $templating
+ * @param  string  $format
+ * @param  int  $code  an HTTP response status code
+ * @param  bool  $debug
+ * @param  mixed  &$reference  a parameter passed by reference
  *
- * @return Foo description foo
+ * @return  Foo  description foo
  *
- * @throws Foo            description foo
- *             description foo
+ * @throws  Foo  description foo
+ *               description foo
  *
  */
```

### Example #5[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#example-5 "Permalink to this heading")

With configuration: `['align' => 'left', 'spacing' => ['param' => 2]]`.

```
--- Original
+++ New
 <?php
 /**
- * @param  EngineInterface $templating
- * @param string      $format
- * @param  int  $code       an HTTP response status code
- * @param    bool         $debug
- * @param  mixed    &$reference     a parameter passed by reference
+ * @param  EngineInterface  $templating
+ * @param  string  $format
+ * @param  int  $code  an HTTP response status code
+ * @param  bool  $debug
+ * @param  mixed  &$reference  a parameter passed by reference
  *
  * @return Foo description foo
  *
- * @throws Foo            description foo
+ * @throws Foo description foo
  *             description foo
  *
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocAlignFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocAlignFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocAlignFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
