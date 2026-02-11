<?php

declare(strict_types=1);

namespace EndouMame\PhpCsFixerConfig;

final class Config extends \PhpCsFixer\Config
{
    /**
     * @see https://mlocati.github.io/php-cs-fixer-configurator/#version:3.54
     */
    public function __construct(bool $allowRisky = false)
    {
        parent::__construct();

        $rules = [
            // Standard presets (High to low priority)
            '@Symfony' => true,
            '@PhpCsFixer' => true,
            '@PHP84Migration' => true,
            '@PSR12' => true,
            // https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html
            'nullable_type_declaration_for_default_null_value' => true,
            // https://cs.symfony.com/doc/rules/class_notation/ordered_types.html
            'ordered_types' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],

            // https://cs.symfony.com/doc/rules/function_notation/single_line_throw.html
            'single_line_throw' => false,
            // https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html
            'phpdoc_types_order' => false,
            // https://cs.symfony.com/doc/rules/basic/single_line_empty_body.html
            'single_line_empty_body' => false,
            // https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html
            'fully_qualified_strict_types' => false,
            // https://cs.symfony.com/doc/rules/operator/concat_space.html
            'concat_space' => ['spacing' => 'one'],

            // https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html
            'general_phpdoc_annotation_remove' => true,
            // https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html
            'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],

            // https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html
            'phpdoc_line_span' => true,
            // https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html
            'cast_spaces' => ['space' => 'none'],

            // https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html
            'phpdoc_separation' => false,
            // https://cs.symfony.com/doc/rules/phpdoc/phpdoc_summary.html
            'phpdoc_summary' => false,
            // https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html
            'php_unit_internal_class' => false,
            // https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html
            'php_unit_method_casing' => false,
            // https://cs.symfony.com/doc/rules/php_unit/php_unit_test_class_requires_covers.html
            'php_unit_test_class_requires_covers' => false,
            // https://cs.symfony.com/doc/rules/import/global_namespace_import.html
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => true,
            ],
            // https://cs.symfony.com/doc/rules/operator/not_operator_with_successor_space.html
            'not_operator_with_successor_space' => false,
            // https://cs.symfony.com/doc/rules/control_structure/simplified_if_return.html
            'simplified_if_return' => false,
            // https://cs.symfony.com/doc/rules/return_notation/simplified_null_return.html
            'simplified_null_return' => true,
            // https://cs.symfony.com/doc/rules/control_structure/yoda_style.html
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
            // https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html
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
            // https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html
            'binary_operator_spaces' => [
                'default' => 'at_least_single_space',
                'operators' => [
                    '=>' => 'single_space',
                    '=' => 'single_space',
                ],
            ],
            // https://cs.symfony.com/doc/rules/import/ordered_imports.html
            'ordered_imports' => [
                'sort_algorithm' => 'alpha',
                'imports_order' => [
                    'class',
                    'function',
                    'const',
                ],
            ],
            // NOTE: 現状、true にすると未使用のuse文が削除されないバグがある。
            // @see https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/issues/6431
            // https://cs.symfony.com/doc/rules/import/group_import.html
            // 'group_import' => true,

            // https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html
            'no_extra_blank_lines' => [
                'tokens' => [
                    'attribute',
                    'break',
                    'case',
                    'comma',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                    'use_trait',
                ],
            ],
        ];

        $riskyRules = [
            // Standard presets (High to low priority)
            '@Symfony:risky' => true,
            '@PhpCsFixer:risky' => true,
            '@PHP80Migration:risky' => true,
            '@PHPUnit84Migration:risky' => true,
            // https://cs.symfony.com/doc/rules/class_usage/date_time_immutable.html
            'date_time_immutable' => true,
            // https://cs.symfony.com/doc/rules/alias/mb_str_functions.html
            'mb_str_functions' => true,
            // https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html
            'final_internal_class' => false,
            // https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html
            'native_constant_invocation' => false,
            // https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html
            'native_function_invocation' => false,
            // https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html
            // NOTE: Does not restrict ambiguous assertions like "assertEquals()" for comparing DateTimeInterface
            'php_unit_strict' => false,
            // https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html
            'php_unit_test_annotation' => false,
            // https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html
            'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],

            // https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html
            'regular_callable_call' => true,
            // https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html
            // NOTE: Does not enforce arrow functions (for readability)
            'use_arrow_functions' => false,
        ];

        if ($allowRisky) {
            $rules = [...$rules, ...$riskyRules];
        }

        $this
            ->setParallelConfig(\PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
            ->setRules([...$rules])
            ->setRiskyAllowed($allowRisky);
    }
}
