---
title: "Rule ordered_interfaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `ordered_interfaces`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#rule-ordered-interfaces "Permalink to this heading")

Orders the interfaces in an `implements` or `interface extends` clause.

## Warning[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `case_sensitive`,
`direction`, `order`.

## Configuration[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#configuration "Permalink to this heading")

### `case_sensitive`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#case-sensitive "Permalink to this heading")

Whether the sorting should be case sensitive.

Allowed types: `bool`

Default value: `false`

### `direction`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#direction "Permalink to this heading")

Which direction the interfaces should be ordered.

Allowed values: `'ascend'` and `'descend'`

Default value: `'ascend'`

### `order`[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#order "Permalink to this heading")

How the interfaces should be ordered.

Allowed values: `'alpha'` and `'length'`

Default value: `'alpha'`

## Examples[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php

-final class ExampleA implements Gamma, Alpha, Beta {}
+final class ExampleA implements Alpha, Beta, Gamma {}

-interface ExampleB extends Gamma, Alpha, Beta {}
+interface ExampleB extends Alpha, Beta, Gamma {}
```

### Example #2[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#example-2 "Permalink to this heading")

With configuration: `['direction' => 'descend']`.

```
--- Original
+++ New
 <?php

-final class ExampleA implements Gamma, Alpha, Beta {}
+final class ExampleA implements Gamma, Beta, Alpha {}

-interface ExampleB extends Gamma, Alpha, Beta {}
+interface ExampleB extends Gamma, Beta, Alpha {}
```

### Example #3[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#example-3 "Permalink to this heading")

With configuration: `['order' => 'length']`.

```
--- Original
+++ New
 <?php

-final class ExampleA implements MuchLonger, Short, Longer {}
+final class ExampleA implements Short, Longer, MuchLonger {}

-interface ExampleB extends MuchLonger, Short, Longer {}
+interface ExampleB extends Short, Longer, MuchLonger {}
```

### Example #4[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#example-4 "Permalink to this heading")

With configuration: `['order' => 'length', 'direction' => 'descend']`.

```
--- Original
+++ New
 <?php

-final class ExampleA implements MuchLonger, Short, Longer {}
+final class ExampleA implements MuchLonger, Longer, Short {}

-interface ExampleB extends MuchLonger, Short, Longer {}
+interface ExampleB extends MuchLonger, Longer, Short {}
```

### Example #5[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#example-5 "Permalink to this heading")

With configuration: `['order' => 'alpha']`.

```
--- Original
+++ New
 <?php

-final class ExampleA implements IgnorecaseB, IgNoReCaSeA, IgnoreCaseC {}
+final class ExampleA implements IgNoReCaSeA, IgnorecaseB, IgnoreCaseC {}

-interface ExampleB extends IgnorecaseB, IgNoReCaSeA, IgnoreCaseC {}
+interface ExampleB extends IgNoReCaSeA, IgnorecaseB, IgnoreCaseC {}
```

### Example #6[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#example-6 "Permalink to this heading")

With configuration: `['order' => 'alpha', 'case_sensitive' => true]`.

```
--- Original
+++ New
 <?php

-final class ExampleA implements Casesensitivea, CaseSensitiveA, CasesensitiveA {}
+final class ExampleA implements CaseSensitiveA, CasesensitiveA, Casesensitivea {}

-interface ExampleB extends Casesensitivea, CaseSensitiveA, CasesensitiveA {}
+interface ExampleB extends CaseSensitiveA, CasesensitiveA, Casesensitivea {}
```

## References[¶](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\ClassNotation\OrderedInterfacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/ClassNotation/OrderedInterfacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\ClassNotation\OrderedInterfacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/ClassNotation/OrderedInterfacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
