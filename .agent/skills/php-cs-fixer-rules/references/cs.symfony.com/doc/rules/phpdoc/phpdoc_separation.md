---
title: "Rule phpdoc_separation - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_separation`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#rule-phpdoc-separation "Permalink to this heading")

Annotations in PHPDoc should be grouped together so that annotations of the same
type immediately follow each other. Annotations of a different type are
separated by a single blank line.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `groups`,
`skip_unlisted_annotations`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#configuration "Permalink to this heading")

### `groups`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#groups "Permalink to this heading")

Sets of annotation types to be grouped together. Use `*` to match any tag
character.

Allowed types: `list<list<string>>`

Default value: `[['author', 'copyright', 'license'], ['category', 'package', 'subpackage'], ['property', 'property-read', 'property-write'], ['deprecated', 'link', 'see', 'since']]`

### `skip_unlisted_annotations`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#skip-unlisted-annotations "Permalink to this heading")

Whether to skip annotations that are not listed in any group.

Allowed types: `bool`

Default value: `false`

Default value (future-mode): `true`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 /**
  * Hello there!
  *
  * @author John Doe
+ *
  * @custom Test!
  *
  * @throws Exception|RuntimeException foo
+ *
  * @param string $foo
+ * @param bool   $bar Bar
  *
- * @param bool   $bar Bar
  * @return int  Return the number of changes.
  */
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#example-2 "Permalink to this heading")

With configuration: `['groups' => [['deprecated', 'link', 'see', 'since'], ['author', 'copyright', 'license'], ['category', 'package', 'subpackage'], ['property', 'property-read', 'property-write'], ['param', 'return']]]`.

```
--- Original
+++ New
 <?php
 /**
  * Hello there!
  *
  * @author John Doe
+ *
  * @custom Test!
  *
  * @throws Exception|RuntimeException foo
+ *
  * @param string $foo
- *
  * @param bool   $bar Bar
  * @return int  Return the number of changes.
  */
```

### Example #3[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#example-3 "Permalink to this heading")

With configuration: `['groups' => [['author', 'throws', 'custom'], ['return', 'param']]]`.

```
--- Original
+++ New
 <?php
 /**
  * Hello there!
  *
  * @author John Doe
  * @custom Test!
+ * @throws Exception|RuntimeException foo
  *
- * @throws Exception|RuntimeException foo
  * @param string $foo
- *
  * @param bool   $bar Bar
  * @return int  Return the number of changes.
  */
```

### Example #4[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#example-4 "Permalink to this heading")

With configuration: `['groups' => [['ORM\\*'], ['Assert\\*']]]`.

```
--- Original
+++ New
 <?php
 /**
  * @ORM\Id
+ * @ORM\GeneratedValue
  *
- * @ORM\GeneratedValue
  * @Assert\NotNull
- *
  * @Assert\Type("string")
  */
```

### Example #5[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#example-5 "Permalink to this heading")

With configuration: `['skip_unlisted_annotations' => true]`.

```
--- Original
+++ New
 <?php
 /**
  * Hello there!
  *
  * @author John Doe
+ *
  * @custom Test!
  *
  * @throws Exception|RuntimeException foo
  * @param string $foo
- *
  * @param bool   $bar Bar
  * @return int  Return the number of changes.
  */
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['groups' => [['Annotation', 'NamedArgumentConstructor', 'Target'], ['author', 'copyright', 'license'], ['category', 'package', 'subpackage'], ['property', 'property-read', 'property-write'], ['deprecated', 'link', 'see', 'since']], 'skip_unlisted_annotations' => false]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['groups' => [['Annotation', 'NamedArgumentConstructor', 'Target'], ['author', 'copyright', 'license'], ['category', 'package', 'subpackage'], ['property', 'property-read', 'property-write'], ['deprecated', 'link', 'see', 'since']], 'skip_unlisted_annotations' => false]`

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocSeparationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocSeparationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocSeparationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
