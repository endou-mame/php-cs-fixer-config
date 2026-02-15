---
title: "Rule type_declaration_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `type_declaration_spaces`[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#rule-type-declaration-spaces "Permalink to this heading")

Ensure single space between a variable and its type declaration in function
arguments and properties.

## Warning[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `elements`.

## Configuration[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#configuration "Permalink to this heading")

### `elements`[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#elements "Permalink to this heading")

Structural elements where the spacing after the type declaration should be
fixed.

Allowed values: a subset of `['constant', 'function', 'property']`

Default value: `['function', 'property']`

Default value (future-mode): `['function', 'property', 'constant']`

## Examples[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
 class Bar
 {
-    private string    $a;
-    private bool   $b;
+    private string $a;
+    private bool $b;

-    public function __invoke(array   $c) {}
+    public function __invoke(array $c) {}
 }
```

### Example #2[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#example-2 "Permalink to this heading")

With configuration: `['elements' => ['function']]`.

```
--- Original
+++ New
 <?php
 class Foo
 {
     public int   $bar;

-    public function baz(string     $a)
+    public function baz(string $a)
     {
-        return fn(bool    $c): string => (string) $c;
+        return fn(bool $c): string => (string) $c;
     }
 }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#example-3 "Permalink to this heading")

With configuration: `['elements' => ['property']]`.

```
--- Original
+++ New
 <?php
 class Foo
 {
-    public int   $bar;
+    public int $bar;

     public function baz(string     $a) {}
 }
```

### Example #4[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#example-4 "Permalink to this heading")

With configuration: `['elements' => ['constant']]`.

```
--- Original
+++ New
 <?php
 class Foo
 {
-    public  const string   BAR = "";
+    public  const string BAR = "";
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html) with config:

  `['elements' => ['function', 'property']]`
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html) with config:

  `['elements' => ['function', 'property']]`

## References[¶](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Whitespace\TypeDeclarationSpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Whitespace/TypeDeclarationSpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Whitespace\TypeDeclarationSpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Whitespace/TypeDeclarationSpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
