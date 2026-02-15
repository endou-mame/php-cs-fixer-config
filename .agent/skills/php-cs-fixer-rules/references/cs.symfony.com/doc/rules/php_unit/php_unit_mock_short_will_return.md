---
title: "Rule php_unit_mock_short_will_return - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# Rule `php_unit_mock_short_will_return`[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return.html#rule-php-unit-mock-short-will-return "Permalink to this heading")

Usage of PHPUnit’s mock e.g. `->will($this->returnValue(..))` must be replaced
by its shorter equivalent such as `->willReturn(...)`.

## Warning[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return.html#warning "Permalink to this heading")

### This rule is RISKY[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return.html#this-rule-is-risky "Permalink to this heading")

Risky when PHPUnit classes are overridden or not accessible, or when project has
PHPUnit incompatibilities.

## Examples[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return.html#examples "Permalink to this heading")

### Example #1[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return.html#example-1 "Permalink to this heading")

```
--- Original
+++ New
 <?php
 final class MyTest extends \PHPUnit_Framework_TestCase
 {
     public function testSomeTest()
     {
         $someMock = $this->createMock(Some::class);
-        $someMock->method("some")->will($this->returnSelf());
-        $someMock->method("some")->will($this->returnValue("example"));
-        $someMock->method("some")->will($this->returnArgument(2));
-        $someMock->method("some")->will($this->returnCallback("str_rot13"));
-        $someMock->method("some")->will($this->returnValueMap(["a","b","c"]));
+        $someMock->method("some")->willReturnSelf();
+        $someMock->method("some")->willReturn("example");
+        $someMock->method("some")->willReturnArgument(2);
+        $someMock->method("some")->willReturnCallback("str_rot13");
+        $someMock->method("some")->willReturnMap(["a","b","c"]);
     }
 }
```

## Rule sets[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return.html#rule-sets "Permalink to this heading")

The rule is part of the following rule sets:

* [@PhpCsFixer:risky](https://cs.symfony.com/doc/ruleSets/PhpCsFixerRisky.html)
* [@Symfony:risky](https://cs.symfony.com/doc/ruleSets/SymfonyRisky.html)

## References[¶](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return.html#references "Permalink to this heading")

* Fixer class: [PhpCsFixer\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/src/Fixer/PhpUnit/PhpUnitMockShortWillReturnFixer.php)
* Test class: [PhpCsFixer\Tests\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixerTest](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/blob/v3.93.1/tests/Fixer/PhpUnit/PhpUnitMockShortWillReturnFixerTest.php)

The test class defines officially supported behaviour. Each test case is a part of our backward compatibility promise.
