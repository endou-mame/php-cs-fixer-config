---
title: "Rule nullable_type_declaration - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `nullable_type_declaration`[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#rule-nullable-type-declaration "Permalink to this heading")

Nullable single type declaration should be standardised using configured syntax.

## Warning[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `syntax`.

## Configuration[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#configuration "Permalink to this heading")

### `syntax`[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#syntax "Permalink to this heading")

Whether to use question mark (`?`) or explicit `null` union for nullable
type.

Allowed values: `'question_mark'` and `'union'`

Default value: `'question_mark'`

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-function bar(null|int $value, null|\Closure $callable): int|null {}
+function bar(?int $value, ?\Closure $callable): ?int {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#example-2 "Permalink to this heading")

With configuration: `['syntax' => 'union']`.

```
--- Original
+++ New
 <?php
-function baz(?int $value, ?\stdClass $obj, ?array $config): ?int {}
+function baz(null|int $value, null|\stdClass $obj, null|array $config): null|int {}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#example-3 "Permalink to this heading")

With configuration: `['syntax' => 'question_mark']`.

```
--- Original
+++ New
 <?php
 class ValueObject
 {
-    public null|string $name;
+    public ?string $name;
     public ?int $count;
-    public null|bool $internal;
-    public null|\Closure $callback;
+    public ?bool $internal;
+    public ?\Closure $callback;
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)*
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html)
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)*
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html)
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\NullableTypeDeclarationFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/NullableTypeDeclarationFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\NullableTypeDeclarationFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/NullableTypeDeclarationFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
