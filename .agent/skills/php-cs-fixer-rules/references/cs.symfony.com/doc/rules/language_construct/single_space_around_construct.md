---
title: "Rule single_space_around_construct - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `single_space_around_construct`[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#rule-single-space-around-construct "Permalink to this heading")

Ensures a single space after language constructs.

## Warning[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options:
`constructs_contain_a_single_space`,
`constructs_followed_by_a_single_space`,
`constructs_preceded_by_a_single_space`.

## Configuration[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#configuration "Permalink to this heading")

### `constructs_contain_a_single_space`[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#constructs-contain-a-single-space "Permalink to this heading")

List of constructs which must contain a single space.

Allowed values: a subset of `['yield_from']`

Default value: `['yield_from']`

### `constructs_followed_by_a_single_space`[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#constructs-followed-by-a-single-space "Permalink to this heading")

List of constructs which must be followed by a single space.

Allowed values: a subset of `['abstract', 'as', 'attribute', 'break', 'case', 'catch', 'class', 'clone', 'comment', 'const', 'const_import', 'continue', 'do', 'echo', 'else', 'elseif', 'enum', 'extends', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'open_tag_with_echo', 'php_doc', 'php_open', 'print', 'private', 'private_set', 'protected', 'protected_set', 'public', 'public_set', 'readonly', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'use_trait', 'var', 'while', 'yield', 'yield_from']`

Default value: `['abstract', 'as', 'attribute', 'break', 'case', 'catch', 'class', 'clone', 'comment', 'const', 'const_import', 'continue', 'do', 'echo', 'else', 'elseif', 'enum', 'extends', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'open_tag_with_echo', 'php_doc', 'php_open', 'print', 'private', 'private_set', 'protected', 'protected_set', 'public', 'public_set', 'readonly', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'use_trait', 'var', 'while', 'yield', 'yield_from']`

### `constructs_preceded_by_a_single_space`[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#constructs-preceded-by-a-single-space "Permalink to this heading")

List of constructs which must be preceded by a single space.

Allowed values: a subset of `['as', 'else', 'elseif', 'use_lambda']`

Default value: `['as', 'use_lambda']`

## Examples[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-throw  new  \Exception();
+throw new \Exception();
```

### Example #2[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#example-2 "Permalink to this heading")

With configuration: `['constructs_contain_a_single_space' => ['yield_from'], 'constructs_followed_by_a_single_space' => ['yield_from']]`.

```
--- Original
+++ New
 <?php

-function foo() { yield  from  baz(); }
+function foo() { yield from baz(); }
```

### Example #3[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#example-3 "Permalink to this heading")

With configuration: `['constructs_preceded_by_a_single_space' => ['use_lambda'], 'constructs_followed_by_a_single_space' => ['use_lambda']]`.

```
--- Original
+++ New
 <?php

-$foo = function& ()use($bar) {
+$foo = function& () use ($bar) {
 };
```

### Example #4[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#example-4 "Permalink to this heading")

With configuration: `['constructs_followed_by_a_single_space' => ['echo']]`.

```
--- Original
+++ New
 <?php

-echo  "Hello!";
+echo "Hello!";
```

### Example #5[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#example-5 "Permalink to this heading")

With configuration: `['constructs_followed_by_a_single_space' => ['yield_from']]`.

```
--- Original
+++ New
 <?php

-yield  from  baz();
+yield from baz();
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const', 'const_import', 'do', 'else', 'elseif', 'enum', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'private', 'protected', 'public', 'readonly', 'static', 'switch', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const', 'const_import', 'do', 'else', 'elseif', 'enum', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'private', 'protected', 'public', 'readonly', 'static', 'switch', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const_import', 'do', 'else', 'elseif', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'namespace', 'new', 'private', 'protected', 'public', 'static', 'switch', 'trait', 'try', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const_import', 'do', 'else', 'elseif', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'namespace', 'new', 'private', 'protected', 'public', 'static', 'switch', 'trait', 'try', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const', 'const_import', 'do', 'else', 'elseif', 'enum', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'private', 'protected', 'public', 'readonly', 'static', 'switch', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const', 'const_import', 'do', 'else', 'elseif', 'enum', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'private', 'protected', 'public', 'readonly', 'static', 'switch', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const', 'const_import', 'do', 'else', 'elseif', 'enum', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'private', 'protected', 'public', 'readonly', 'static', 'switch', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const', 'const_import', 'do', 'else', 'elseif', 'enum', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'private', 'protected', 'public', 'readonly', 'static', 'switch', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PSR2](https://cs.symfony.com/doc/ruleSets/PSR2.html) with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'do', 'else', 'elseif', 'final', 'for', 'foreach', 'function', 'if', 'interface', 'namespace', 'private', 'protected', 'public', 'static', 'switch', 'trait', 'try', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['constructs_followed_by_a_single_space' => ['abstract', 'as', 'case', 'catch', 'class', 'const_import', 'do', 'else', 'elseif', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'if', 'insteadof', 'interface', 'namespace', 'new', 'private', 'protected', 'public', 'static', 'switch', 'trait', 'try', 'use', 'use_lambda', 'while'], 'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda']]`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAroundConstructFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/LanguageConstruct/SingleSpaceAroundConstructFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\LanguageConstruct\SingleSpaceAroundConstructFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/LanguageConstruct/SingleSpaceAroundConstructFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
