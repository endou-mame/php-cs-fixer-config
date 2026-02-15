---
title: "Rule attribute_block_no_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/attribute_notation/attribute_block_no_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `attribute_block_no_spaces`[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_block_no_spaces.html#rule-attribute-block-no-spaces "Permalink to this heading")

Remove spaces before and after the attributes block.

## Examples[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_block_no_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_block_no_spaces.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 class User
 {
-    #[
-        ApiProperty(identifier: true)
-    ]
+    #[ApiProperty(identifier: true)]
     private string $name;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_block_no_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)*
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/attribute_notation/attribute_block_no_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\AttributeNotation\AttributeBlockNoSpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/AttributeNotation/AttributeBlockNoSpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\AttributeNotation\AttributeBlockNoSpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/AttributeNotation/AttributeBlockNoSpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
