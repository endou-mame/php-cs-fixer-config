---
title: "Rule binary_operator_spaces - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/operator/binary_operator_spaces"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `binary_operator_spaces`[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#rule-binary-operator-spaces "Permalink to this heading")

Binary operators should be surrounded by space as configured.

## Warning[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#warning "Permalink to this heading")

### This rule is CONFIGURABLE[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#this-rule-is-configurable "Permalink to this heading")

You can configure this rule using the following options: `default`,
`operators`.

## Configuration[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#configuration "Permalink to this heading")

### `default`[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#default "Permalink to this heading")

Default fix strategy.

Allowed values: `'align'`, `'align_by_scope'`, `'align_single_space'`, `'align_single_space_by_scope'`, `'align_single_space_minimal'`, `'align_single_space_minimal_by_scope'`, `'at_least_single_space'`, `'no_space'`, `'single_space'` and `null`

Default value: `'single_space'`

### `operators`[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#operators "Permalink to this heading")

Dictionary of `binary operator` => `fix strategy` values that differ from
the default strategy. Supported are: `=`, `*`, `/`, `%`, `<`, `>`,
`|`, `^`, `+`, `-`, `&`, `&=`, `&&`, `||`, `.=`, `/=`,
`=>`, `==`, `>=`, `===`, `!=`, `<>`, `!==`, `<=`, `and`,
`or`, `xor`, `-=`, `%=`, `*=`, `|=`, `+=`, `<<`, `<<=`,
`>>`, `>>=`, `^=`, `**`, `**=`, `<=>`, `??` and `??=`.

Allowed types: `array<string, ?string>`

Default value: `[]`

## Examples[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-1 "Permalink to this heading")

*Default* configuration.

```
--- Original
+++ New
 <?php
-$a= 1  + $b^ $d !==  $e or   $f;
+$a = 1 + $b ^ $d !== $e or $f;
```

### Example #2[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-2 "Permalink to this heading")

With configuration: `['operators' => ['=' => 'align', 'xor' => null]]`.

```
--- Original
+++ New
 <?php
 $aa=  1;
-$b=2;
+$b =2;

 $c = $d    xor    $e;
-$f    -=  1;
+$f -= 1;
```

### Example #3[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-3 "Permalink to this heading")

With configuration: `['operators' => ['+=' => 'align_single_space']]`.

```
--- Original
+++ New
 <?php
-$a = $b +=$c;
-$d = $ee+=$f;
+$a = $b  += $c;
+$d = $ee += $f;

-$g = $b     +=$c;
-$h = $ee+=$f;
+$g = $b     += $c;
+$h = $ee    += $f;
```

### Example #4[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-4 "Permalink to this heading")

With configuration: `['operators' => ['===' => 'align_single_space_minimal']]`.

```
--- Original
+++ New
 <?php
-$a = $b===$c;
-$d = $f   ===  $g;
-$h = $i===  $j;
+$a = $b === $c;
+$d = $f === $g;
+$h = $i === $j;
```

### Example #5[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-5 "Permalink to this heading")

With configuration: `['operators' => ['|' => 'no_space']]`.

```
--- Original
+++ New
 <?php
-$foo = \json_encode($bar, JSON_PRESERVE_ZERO_FRACTION | JSON_PRETTY_PRINT);
+$foo = \json_encode($bar, JSON_PRESERVE_ZERO_FRACTION|JSON_PRETTY_PRINT);
```

### Example #6[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-6 "Permalink to this heading")

With configuration: `['operators' => ['=>' => 'single_space']]`.

```
--- Original
+++ New
 <?php
 $array = [
-    "foo"            =>   1,
-    "baaaaaaaaaaar"  =>  11,
+    "foo" => 1,
+    "baaaaaaaaaaar" => 11,
 ];
```

### Example #7[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-7 "Permalink to this heading")

With configuration: `['operators' => ['=>' => 'align']]`.

```
--- Original
+++ New
 <?php
 $array = [
-    "foo" => 12,
+    "foo"            => 12,
     "baaaaaaaaaaar"  => 13,

     "baz" => 1,
 ];
```

### Example #8[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-8 "Permalink to this heading")

With configuration: `['operators' => ['=>' => 'align_by_scope']]`.

```
--- Original
+++ New
 <?php
 $array = [
-    "foo" => 12,
+    "foo"            => 12,
     "baaaaaaaaaaar"  => 13,

-    "baz" => 1,
+    "baz"            => 1,
 ];
```

### Example #9[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-9 "Permalink to this heading")

With configuration: `['operators' => ['=>' => 'align_single_space']]`.

```
--- Original
+++ New
 <?php
 $array = [
-    "foo" => 12,
+    "foo"            => 12,
     "baaaaaaaaaaar"  => 13,

     "baz" => 1,
 ];
```

### Example #10[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-10 "Permalink to this heading")

With configuration: `['operators' => ['=>' => 'align_single_space_by_scope']]`.

```
--- Original
+++ New
 <?php
 $array = [
-    "foo" => 12,
+    "foo"            => 12,
     "baaaaaaaaaaar"  => 13,

-    "baz" => 1,
+    "baz"            => 1,
 ];
```

### Example #11[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-11 "Permalink to this heading")

With configuration: `['operators' => ['=>' => 'align_single_space_minimal']]`.

```
--- Original
+++ New
 <?php
 $array = [
-    "foo" => 12,
-    "baaaaaaaaaaar"  => 13,
+    "foo"           => 12,
+    "baaaaaaaaaaar" => 13,

     "baz" => 1,
 ];
```

### Example #12[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#example-12 "Permalink to this heading")

With configuration: `['operators' => ['=>' => 'align_single_space_minimal_by_scope']]`.

```
--- Original
+++ New
 <?php
 $array = [
-    "foo" => 12,
-    "baaaaaaaaaaar"  => 13,
+    "foo"           => 12,
+    "baaaaaaaaaaar" => 13,

-    "baz" => 1,
+    "baz"           => 1,
 ];
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PER](https://cs.symfony.com/doc/ruleSets/PER.html) *(deprecated)* with config:

  `['default' => 'at_least_single_space']`
* [@PER-CS](https://cs.symfony.com/doc/ruleSets/PER-CS.html) with config:

  `['default' => 'at_least_single_space']`
* [@PER-CS1.0](https://cs.symfony.com/doc/ruleSets/PER-CS1.0.html) *(deprecated)* with config:

  `['default' => 'at_least_single_space']`
* [@PER-CS1x0](https://cs.symfony.com/doc/ruleSets/PER-CS1x0.html) with config:

  `['default' => 'at_least_single_space']`
* [@PER-CS2.0](https://cs.symfony.com/doc/ruleSets/PER-CS2.0.html) *(deprecated)* with config:

  `['default' => 'at_least_single_space']`
* [@PER-CS2x0](https://cs.symfony.com/doc/ruleSets/PER-CS2x0.html) with config:

  `['default' => 'at_least_single_space']`
* [@PER-CS3.0](https://cs.symfony.com/doc/ruleSets/PER-CS3.0.html) *(deprecated)* with config:

  `['default' => 'at_least_single_space']`
* [@PER-CS3x0](https://cs.symfony.com/doc/ruleSets/PER-CS3x0.html) with config:

  `['default' => 'at_least_single_space']`
* [@PSR12](https://cs.symfony.com/doc/ruleSets/PSR12.html) with config:

  `['default' => 'at_least_single_space']`
* [@PhpCsFixer](https://cs.symfony.com/doc/ruleSets/PhpCsFixer.html)
* [@Symfony](https://cs.symfony.com/doc/ruleSets/Symfony.html)

## References[¶](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/Operator/BinaryOperatorSpacesFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\Operator\BinaryOperatorSpacesFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/Operator/BinaryOperatorSpacesFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
