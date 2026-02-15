---
title: "Rule phpdoc_return_self_reference - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `phpdoc_return_self_reference`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#rule-phpdoc-return-self-reference "Permalink to this heading")

The type of `@return` annotations of methods returning a reference to itself
must the configured one.

## Warning[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `replacements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#configuration "Permalink to this heading")

### `replacements`[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#replacements "Permalink to this heading")

Mapping between replaced return types with new ones.

Allowed types: `array<string, string>`

Default value: `['this' => '$this', '@this' => '$this', '$self' => 'self', '@self' => 'self', '$static' => 'static', '@static' => 'static']`

## Examples[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class Sample
 {
     /**
-     * @return this
+     * @return $this
      */
     public function test1()
     {
         return $this;
     }

     /**
-     * @return $self
+     * @return self
      */
     public function test2()
     {
         return $this;
     }
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#example-2 "Permalink to this heading")

With configuration: `['replacements' => ['this' => 'self']]`.

```
--- Original
+++ New
 <?php
 class Sample
 {
     /**
-     * @return this
+     * @return self
      */
     public function test1()
     {
         return $this;
     }

     /**
      * @return $self
      */
     public function test2()
     {
         return $this;
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Phpdoc/PhpdocReturnSelfReferenceFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Phpdoc/PhpdocReturnSelfReferenceFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
