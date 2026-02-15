---
title: "Rule single_space_after_construct - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_space_after_construct`[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#rule-single-space-after-construct "Permalink to this heading")

Ensures a single space after language constructs.

## Warnings[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#warnings "Permalink to this heading")

### This rule is DEPRECATED and will be removed in the next major version 4.0[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#this-rule-is-deprecated-and-will-be-removed-in-the-next-major-version-4-0 "Permalink to this heading")

You should use `single_space_around_construct` instead.

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `constructs`.

## Configuration[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#configuration "Permalink to this heading")

### `constructs`[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#constructs "Permalink to this heading")

List of constructs which must be followed by a single space.

Allowed values: a subset of `['abstract', 'as', 'attribute', 'break', 'case', 'catch', 'class', 'clone', 'comment', 'const', 'const_import', 'continue', 'do', 'echo', 'else', 'elseif', 'enum', 'extends', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'open_tag_with_echo', 'php_doc', 'php_open', 'print', 'private', 'protected', 'public', 'readonly', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'use_trait', 'var', 'while', 'yield', 'yield_from']`

Default value: `['abstract', 'as', 'attribute', 'break', 'case', 'catch', 'class', 'clone', 'comment', 'const', 'const_import', 'continue', 'do', 'echo', 'else', 'elseif', 'enum', 'extends', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'open_tag_with_echo', 'php_doc', 'php_open', 'print', 'private', 'protected', 'public', 'readonly', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'use', 'use_lambda', 'use_trait', 'var', 'while', 'yield', 'yield_from']`

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-throw  new  \Exception();
+throw new \Exception();
```

### Example #2[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#example-2 "Permalink to this heading")

With configuration: `['constructs' => ['echo']]`.

```
--- Original
+++ New
 <?php

-echo  "Hello!";
+echo "Hello!";
```

### Example #3[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#example-3 "Permalink to this heading")

With configuration: `['constructs' => ['yield_from']]`.

```
--- Original
+++ New
 <?php

-yield  from  baz();
+yield from baz();
```

## References[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAfterConstructFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/SingleSpaceAfterConstructFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\SingleSpaceAfterConstructFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/SingleSpaceAfterConstructFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
