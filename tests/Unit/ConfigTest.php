<?php

declare(strict_types=1);

namespace EndouMame\PhpCsFixerConfig\Tests\Unit;

use PhpCsFixer\ConfigInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use EndouMame\PhpCsFixerConfig\Config;

#[TestDox('Unit test for Config class')]
#[CoversClass(Config::class)]
final class ConfigTest extends TestCase
{
    #[Test]
    #[TestDox('Test if Config instance is created successfully')]
    public function ConfigInstance(): void
    {
        $config = new Config();
        $this->assertInstanceOf(ConfigInterface::class, $config);
    }

    #[Test]
    #[TestDox('Test default rules')]
    public function DefaultRules(): void
    {
        $config = new Config();
        $rules = $config->getRules();

        $expectedRules = [
            '@Symfony' => true,
            '@PhpCsFixer' => true,
            '@PHP8x5Migration' => true,
            '@PSR12' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'ordered_types' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],
            'single_line_throw' => false,
            'phpdoc_types_order' => false,
            'single_line_empty_body' => false,
            'fully_qualified_strict_types' => false,
            'concat_space' => ['spacing' => 'one'],
            'general_phpdoc_annotation_remove' => true,
            'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
            'phpdoc_line_span' => true,
            'cast_spaces' => ['space' => 'none'],
            'phpdoc_separation' => false,
            'phpdoc_summary' => false,
            'php_unit_internal_class' => false,
            'php_unit_method_casing' => false,
            'php_unit_test_class_requires_covers' => false,
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => true,
            ],
            'not_operator_with_successor_space' => false,
            'simplified_if_return' => false,
            'simplified_null_return' => true,
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
            'blank_line_before_statement' => [
                'statements' => [
                    'break',
                    'case',
                    'continue',
                    'declare',
                    'default',
                    'exit',
                    'goto',
                    'include',
                    'include_once',
                    'phpdoc',
                    'require',
                    'require_once',
                    'return',
                    'switch',
                    'throw',
                    'try',
                ],
            ],
            'binary_operator_spaces' => [
                'default' => 'at_least_single_space',
                'operators' => [
                    '=>' => 'single_space',
                    '=' => 'single_space',
                ],
            ],
            'ordered_imports' => [
                'sort_algorithm' => 'alpha',
                'imports_order' => [
                    'class',
                    'function',
                    'const',
                ],
            ],
        ];

        foreach ($expectedRules as $rule => $value) {
            $this->assertArrayHasKey($rule, $rules);
            $this->assertSame($value, $rules[$rule]);
        }
    }

    #[Test]
    #[TestDox('Test risky rules when allowRisky is true')]
    public function AllowRiskyRules(): void
    {
        $config = new Config(true);
        $rules = $config->getRules();

        $expectedRiskyRules = [
            '@Symfony:risky' => true,
            '@PhpCsFixer:risky' => true,
            '@PHP8x5Migration:risky' => true,
            '@PHPUnit11x0Migration:risky' => true,
            'date_time_immutable' => true,
            'mb_str_functions' => true,
            'final_internal_class' => false,
            'native_constant_invocation' => false,
            'native_function_invocation' => false,
            'php_unit_strict' => false,
            'php_unit_test_annotation' => false,
            'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],
            'regular_callable_call' => true,
            'use_arrow_functions' => false,
        ];

        foreach ($expectedRiskyRules as $rule => $value) {
            $this->assertArrayHasKey($rule, $rules);
            $this->assertSame($value, $rules[$rule]);
        }
    }

    #[Test]
    #[TestDox('Test if riskyAllowed is set correctly')]
    public function RiskyAllowed(): void
    {
        $config = new Config(true);
        $this->assertTrue($config->getRiskyAllowed());

        $config = new Config(false);
        $this->assertFalse($config->getRiskyAllowed());
    }
}
