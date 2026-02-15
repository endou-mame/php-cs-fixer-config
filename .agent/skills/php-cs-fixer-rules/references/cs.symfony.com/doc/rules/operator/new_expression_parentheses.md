---
title: "Rule new_expression_parentheses - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/new_expression_parentheses"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `new_expression_parentheses`[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#rule-new-expression-parentheses "Permalink to this heading")

All `new` expressions with a further call must (not) be wrapped in
parentheses.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following option: `use_parentheses`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#configuration "Permalink to this heading")

### `use_parentheses`[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#use-parentheses "Permalink to this heading")

Whether `new` expressions with a further call should be wrapped in parentheses
or not.

Allowed types: `bool`

Default value: `false`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-(new Foo())->bar();
+new Foo()->bar();
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#example-2 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-(new class {})->bar();
+new class {}->bar();
```

### Example #3[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#example-3 "Permalink to this heading")

With configuration: `['use_parentheses' => true]`.

```
--- Original
+++ New
 <?php

-new Foo()->bar();
+(new Foo())->bar();
```

### Example #4[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#example-4 "Permalink to this heading")

With configuration: `['use_parentheses' => true]`.

```
--- Original
+++ New
 <?php

-new class {}->bar();
+(new class {})->bar();
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PHP8x4Migration](https://cs.symfony.com/doc/ruleSets/PHP8x4Migration.html)
* [@PHP8x5Migration](https://cs.symfony.com/doc/ruleSets/PHP8x5Migration.html)
* [@PHP84Migration](https://cs.symfony.com/doc/ruleSets/PHP84Migration.html) *(deprecated)*
* [@PHP85Migration](https://cs.symfony.com/doc/ruleSets/PHP85Migration.html) *(deprecated)*

## References[¶](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\NewExpressionParenthesesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/NewExpressionParenthesesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\NewExpressionParenthesesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/NewExpressionParenthesesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
