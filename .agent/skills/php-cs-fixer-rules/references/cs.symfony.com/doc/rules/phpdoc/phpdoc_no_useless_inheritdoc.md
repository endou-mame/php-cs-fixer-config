---
title: "Rule phpdoc_no_useless_inheritdoc - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_useless_inheritdoc"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_no_useless_inheritdoc`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_useless_inheritdoc.html#rule-phpdoc-no-useless-inheritdoc "Permalink to this heading")

Classy that does not inherit must not have `@inheritdoc` tags.

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_useless_inheritdoc.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_useless_inheritdoc.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
-/** {@inheritdoc} */
+/** */
 class Sample
 {
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_useless_inheritdoc.html#example-2 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class Sample
 {
     /**
-     * @inheritdoc
+     *
      */
     public function Test()
     {
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_useless_inheritdoc.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_useless_inheritdoc.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocNoUselessInheritdocFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocNoUselessInheritdocFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
