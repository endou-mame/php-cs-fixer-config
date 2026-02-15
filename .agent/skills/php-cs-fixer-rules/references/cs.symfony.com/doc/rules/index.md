---
title: "List of Available Rules - PHP Coding Standards Fixer"
source_url: "https://cs.symfony.com/doc/rules/index"
fetched_at: "2026-02-11T13:38:02.332827+00:00"
---



* [Install now](https://cs.symfony.com/download/php-cs-fixer-v3.phar)

# List of Available Rules[¶](https://cs.symfony.com/doc/rules/index.html#list-of-available-rules "Permalink to this heading")

## Alias[¶](https://cs.symfony.com/doc/rules/index.html#alias "Permalink to this heading")

* [array\_push](https://cs.symfony.com/doc/rules/alias/array_push.html) *(risky)*

  Converts simple usages of `array_push($x, $y);` to `$x[] = $y;`.
* [backtick\_to\_shell\_exec](https://cs.symfony.com/doc/rules/alias/backtick_to_shell_exec.html)

  Converts backtick operators to `shell_exec` calls.
* [ereg\_to\_preg](https://cs.symfony.com/doc/rules/alias/ereg_to_preg.html) *(risky)*

  Replace deprecated `ereg` regular expression functions with `preg`.
* [mb\_str\_functions](https://cs.symfony.com/doc/rules/alias/mb_str_functions.html) *(risky)*

  Replace non multibyte-safe functions with corresponding mb function.
* [modernize\_strpos](https://cs.symfony.com/doc/rules/alias/modernize_strpos.html) *(risky, configurable)*

  Replace `strpos()` and `stripos()` calls with `str_starts_with()` or `str_contains()` if possible.
* [no\_alias\_functions](https://cs.symfony.com/doc/rules/alias/no_alias_functions.html) *(risky, configurable)*

  Master functions shall be used instead of aliases.
* [no\_alias\_language\_construct\_call](https://cs.symfony.com/doc/rules/alias/no_alias_language_construct_call.html)

  Master language constructs shall be used instead of aliases.
* [no\_mixed\_echo\_print](https://cs.symfony.com/doc/rules/alias/no_mixed_echo_print.html) *(configurable)*

  Either language construct `print` or `echo` should be used.
* [pow\_to\_exponentiation](https://cs.symfony.com/doc/rules/alias/pow_to_exponentiation.html) *(risky)*

  Converts `pow` to the `**` operator.
* [random\_api\_migration](https://cs.symfony.com/doc/rules/alias/random_api_migration.html) *(risky, configurable)*

  Replaces `rand`, `srand`, `getrandmax` functions calls with their `mt_*` analogs or `random_int`.
* [set\_type\_to\_cast](https://cs.symfony.com/doc/rules/alias/set_type_to_cast.html) *(risky)*

  Cast shall be used, not `settype`.

## Array Notation[¶](https://cs.symfony.com/doc/rules/index.html#array-notation "Permalink to this heading")

* [array\_syntax](https://cs.symfony.com/doc/rules/array_notation/array_syntax.html) *(configurable)*

  PHP arrays should be declared using the configured syntax.
* [no\_multiline\_whitespace\_around\_double\_arrow](https://cs.symfony.com/doc/rules/array_notation/no_multiline_whitespace_around_double_arrow.html)

  Operator `=>` should not be surrounded by multi-line whitespaces.
* [no\_trailing\_comma\_in\_singleline\_array](https://cs.symfony.com/doc/rules/array_notation/no_trailing_comma_in_singleline_array.html) *(deprecated)*

  PHP single-line arrays should not have trailing comma.
* [no\_whitespace\_before\_comma\_in\_array](https://cs.symfony.com/doc/rules/array_notation/no_whitespace_before_comma_in_array.html) *(configurable)*

  In array declaration, there MUST NOT be a whitespace before each comma.
* [normalize\_index\_brace](https://cs.symfony.com/doc/rules/array_notation/normalize_index_brace.html)

  Array index should always be written by using square braces.
* [return\_to\_yield\_from](https://cs.symfony.com/doc/rules/array_notation/return_to_yield_from.html)

  If the function explicitly returns an array, and has the return type `iterable`, then `yield from` must be used instead of `return`.
* [trim\_array\_spaces](https://cs.symfony.com/doc/rules/array_notation/trim_array_spaces.html)

  Arrays should be formatted like function/method arguments, without leading or trailing single line space.
* [whitespace\_after\_comma\_in\_array](https://cs.symfony.com/doc/rules/array_notation/whitespace_after_comma_in_array.html) *(configurable)*

  In array declaration, there MUST be a whitespace after each comma.
* [yield\_from\_array\_to\_yields](https://cs.symfony.com/doc/rules/array_notation/yield_from_array_to_yields.html) *(risky)*

  Yield from array must be unpacked to series of yields.

## Attribute Notation[¶](https://cs.symfony.com/doc/rules/index.html#attribute-notation "Permalink to this heading")

* [attribute\_block\_no\_spaces](https://cs.symfony.com/doc/rules/attribute_notation/attribute_block_no_spaces.html)

  Remove spaces before and after the attributes block.
* [attribute\_empty\_parentheses](https://cs.symfony.com/doc/rules/attribute_notation/attribute_empty_parentheses.html) *(configurable)*

  PHP attributes declared without arguments must (not) be followed by empty parentheses.
* [general\_attribute\_remove](https://cs.symfony.com/doc/rules/attribute_notation/general_attribute_remove.html) *(configurable)*

  Removes configured attributes by their respective FQN.
* [ordered\_attributes](https://cs.symfony.com/doc/rules/attribute_notation/ordered_attributes.html) *(configurable)*

  Sorts attributes using the configured sort algorithm.

## Basic[¶](https://cs.symfony.com/doc/rules/index.html#basic "Permalink to this heading")

* [braces](https://cs.symfony.com/doc/rules/basic/braces.html) *(deprecated, configurable)*

  The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
* [braces\_position](https://cs.symfony.com/doc/rules/basic/braces_position.html) *(configurable)*

  Braces must be placed as configured.
* [curly\_braces\_position](https://cs.symfony.com/doc/rules/basic/curly_braces_position.html) *(deprecated, configurable)*

  Curly braces must be placed as configured.
* [encoding](https://cs.symfony.com/doc/rules/basic/encoding.html)

  PHP code MUST use only UTF-8 without BOM (remove BOM).
* [no\_multiple\_statements\_per\_line](https://cs.symfony.com/doc/rules/basic/no_multiple_statements_per_line.html)

  There must not be more than one statement per line.
* [no\_trailing\_comma\_in\_singleline](https://cs.symfony.com/doc/rules/basic/no_trailing_comma_in_singleline.html) *(configurable)*

  If a list of values separated by a comma is contained on a single line, then the last item MUST NOT have a trailing comma.
* [non\_printable\_character](https://cs.symfony.com/doc/rules/basic/non_printable_character.html) *(risky, configurable)*

  Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols.
* [numeric\_literal\_separator](https://cs.symfony.com/doc/rules/basic/numeric_literal_separator.html) *(configurable)*

  Adds separators to numeric literals of any kind.
* [octal\_notation](https://cs.symfony.com/doc/rules/basic/octal_notation.html)

  Literal octal must be in `0o` notation.
* [psr\_autoloading](https://cs.symfony.com/doc/rules/basic/psr_autoloading.html) *(risky, configurable)*

  Classes must be in a path that matches their namespace, be at least one namespace deep and the class name should match the file name.
* [single\_line\_empty\_body](https://cs.symfony.com/doc/rules/basic/single_line_empty_body.html)

  Empty body of class, interface, trait, enum or function must be abbreviated as `{}` and placed on the same line as the previous symbol, separated by a single space.

## Casing[¶](https://cs.symfony.com/doc/rules/index.html#casing "Permalink to this heading")

* [class\_reference\_name\_casing](https://cs.symfony.com/doc/rules/casing/class_reference_name_casing.html)

  When referencing an internal class it must be written using the correct casing.
* [constant\_case](https://cs.symfony.com/doc/rules/casing/constant_case.html) *(configurable)*

  The PHP constants `true`, `false`, and `null` MUST be written using the correct casing.
* [integer\_literal\_case](https://cs.symfony.com/doc/rules/casing/integer_literal_case.html)

  Integer literals must be in correct case.
* [lowercase\_keywords](https://cs.symfony.com/doc/rules/casing/lowercase_keywords.html)

  PHP keywords MUST be in lower case.
* [lowercase\_static\_reference](https://cs.symfony.com/doc/rules/casing/lowercase_static_reference.html)

  Class static references `self`, `static` and `parent` MUST be in lower case.
* [magic\_constant\_casing](https://cs.symfony.com/doc/rules/casing/magic_constant_casing.html)

  Magic constants should be referred to using the correct casing.
* [magic\_method\_casing](https://cs.symfony.com/doc/rules/casing/magic_method_casing.html)

  Magic method definitions and calls must be using the correct casing.
* [native\_function\_casing](https://cs.symfony.com/doc/rules/casing/native_function_casing.html)

  Function defined by PHP should be called using the correct casing.
* [native\_function\_type\_declaration\_casing](https://cs.symfony.com/doc/rules/casing/native_function_type_declaration_casing.html) *(deprecated)*

  Native type declarations for functions should use the correct case.
* [native\_type\_declaration\_casing](https://cs.symfony.com/doc/rules/casing/native_type_declaration_casing.html)

  Native type declarations should be used in the correct case.

## Cast Notation[¶](https://cs.symfony.com/doc/rules/index.html#cast-notation "Permalink to this heading")

* [cast\_spaces](https://cs.symfony.com/doc/rules/cast_notation/cast_spaces.html) *(configurable)*

  A single space or none should be between cast and variable.
* [lowercase\_cast](https://cs.symfony.com/doc/rules/cast_notation/lowercase_cast.html)

  Cast should be written in lower case.
* [modernize\_types\_casting](https://cs.symfony.com/doc/rules/cast_notation/modernize_types_casting.html) *(risky)*

  Replaces `intval`, `floatval`, `doubleval`, `strval` and `boolval` function calls with according type casting operator.
* [no\_short\_bool\_cast](https://cs.symfony.com/doc/rules/cast_notation/no_short_bool_cast.html)

  Short cast `bool` using double exclamation mark should not be used.
* [no\_unset\_cast](https://cs.symfony.com/doc/rules/cast_notation/no_unset_cast.html)

  Variables must be set `null` instead of using `(unset)` casting.
* [short\_scalar\_cast](https://cs.symfony.com/doc/rules/cast_notation/short_scalar_cast.html)

  Cast `(boolean)` and `(integer)` should be written as `(bool)` and `(int)`, `(double)` and `(real)` as `(float)`, `(binary)` as `(string)`.

## Class Notation[¶](https://cs.symfony.com/doc/rules/index.html#class-notation "Permalink to this heading")

* [class\_attributes\_separation](https://cs.symfony.com/doc/rules/class_notation/class_attributes_separation.html) *(configurable)*

  Class, trait and interface elements must be separated with one or none blank line.
* [class\_definition](https://cs.symfony.com/doc/rules/class_notation/class_definition.html) *(configurable)*

  Whitespace around the keywords of a class, trait, enum or interfaces definition should be one space.
* [final\_class](https://cs.symfony.com/doc/rules/class_notation/final_class.html) *(risky)*

  All classes must be final, except abstract ones and Doctrine entities.
* [final\_internal\_class](https://cs.symfony.com/doc/rules/class_notation/final_internal_class.html) *(risky, configurable)*

  Internal classes should be `final`.
* [final\_public\_method\_for\_abstract\_class](https://cs.symfony.com/doc/rules/class_notation/final_public_method_for_abstract_class.html) *(risky)*

  All `public` methods of `abstract` classes should be `final`.
* [modern\_serialization\_methods](https://cs.symfony.com/doc/rules/class_notation/modern_serialization_methods.html) *(risky)*

  Use new serialization methods `__serialize` and `__unserialize` instead of deprecated ones `__sleep` and `__wakeup`.
* [modifier\_keywords](https://cs.symfony.com/doc/rules/class_notation/modifier_keywords.html) *(configurable)*

  Classes, constants, properties, and methods MUST have visibility declared, and keyword modifiers MUST be in the following order: inheritance modifier (`abstract` or `final`), visibility modifier (`public`, `protected`, or `private`), set-visibility modifier (`public(set)`, `protected(set)`, or `private(set)`), scope modifier (`static`), mutation modifier (`readonly`), type declaration, name.
* [no\_blank\_lines\_after\_class\_opening](https://cs.symfony.com/doc/rules/class_notation/no_blank_lines_after_class_opening.html)

  There should be no empty lines after class opening brace.
* [no\_null\_property\_initialization](https://cs.symfony.com/doc/rules/class_notation/no_null_property_initialization.html)

  Properties MUST not be explicitly initialised with `null` except when they have a type declaration (PHP 7.4).
* [no\_php4\_constructor](https://cs.symfony.com/doc/rules/class_notation/no_php4_constructor.html) *(risky)*

  Convert PHP4-style constructors to `__construct`.
* [no\_redundant\_readonly\_property](https://cs.symfony.com/doc/rules/class_notation/no_redundant_readonly_property.html)

  Removes redundant readonly from properties in readonly classes.
* [no\_unneeded\_final\_method](https://cs.symfony.com/doc/rules/class_notation/no_unneeded_final_method.html) *(risky, configurable)*

  Removes `final` from methods where possible.
* [ordered\_class\_elements](https://cs.symfony.com/doc/rules/class_notation/ordered_class_elements.html) *(configurable)*

  Orders the elements of classes/interfaces/traits/enums.
* [ordered\_interfaces](https://cs.symfony.com/doc/rules/class_notation/ordered_interfaces.html) *(configurable)*

  Orders the interfaces in an `implements` or `interface extends` clause.
* [ordered\_traits](https://cs.symfony.com/doc/rules/class_notation/ordered_traits.html) *(risky, configurable)*

  Trait `use` statements must be sorted alphabetically.
* [ordered\_types](https://cs.symfony.com/doc/rules/class_notation/ordered_types.html) *(configurable)*

  Sort union types and intersection types using configured order.
* [phpdoc\_readonly\_class\_comment\_to\_keyword](https://cs.symfony.com/doc/rules/class_notation/phpdoc_readonly_class_comment_to_keyword.html) *(risky)*

  Converts readonly comment on classes to the readonly keyword.
* [protected\_to\_private](https://cs.symfony.com/doc/rules/class_notation/protected_to_private.html)

  Converts `protected` variables and methods to `private` where possible.
* [self\_accessor](https://cs.symfony.com/doc/rules/class_notation/self_accessor.html) *(risky)*

  Inside class or interface element `self` should be preferred to the class name itself.
* [self\_static\_accessor](https://cs.symfony.com/doc/rules/class_notation/self_static_accessor.html)

  Inside an enum or `final`/anonymous class, `self` should be preferred over `static`.
* [single\_class\_element\_per\_statement](https://cs.symfony.com/doc/rules/class_notation/single_class_element_per_statement.html) *(configurable)*

  There MUST NOT be more than one property or constant declared per statement.
* [single\_trait\_insert\_per\_statement](https://cs.symfony.com/doc/rules/class_notation/single_trait_insert_per_statement.html)

  Each trait `use` must be done as single statement.
* [static\_private\_method](https://cs.symfony.com/doc/rules/class_notation/static_private_method.html) *(risky)*

  Converts private methods to `static` where possible.
* [stringable\_for\_to\_string](https://cs.symfony.com/doc/rules/class_notation/stringable_for_to_string.html)

  A class that implements the `__toString()` method must explicitly implement the `Stringable` interface.
* [visibility\_required](https://cs.symfony.com/doc/rules/class_notation/visibility_required.html) *(deprecated, configurable)*

  Classes, constants, properties, and methods MUST have visibility declared, and keyword modifiers MUST be in the following order: inheritance modifier (`abstract` or `final`), visibility modifier (`public`, `protected`, or `private`), set-visibility modifier (`public(set)`, `protected(set)`, or `private(set)`), scope modifier (`static`), mutation modifier (`readonly`), type declaration, name.

## Class Usage[¶](https://cs.symfony.com/doc/rules/index.html#class-usage "Permalink to this heading")

* [date\_time\_immutable](https://cs.symfony.com/doc/rules/class_usage/date_time_immutable.html) *(risky)*

  Class `DateTimeImmutable` should be used instead of `DateTime`.

## Comment[¶](https://cs.symfony.com/doc/rules/index.html#comment "Permalink to this heading")

* [comment\_to\_phpdoc](https://cs.symfony.com/doc/rules/comment/comment_to_phpdoc.html) *(risky, configurable)*

  Comments with annotation should be docblock when used on structural elements.
* [header\_comment](https://cs.symfony.com/doc/rules/comment/header_comment.html) *(configurable)*

  Add, replace or remove header comment.
* [multiline\_comment\_opening\_closing](https://cs.symfony.com/doc/rules/comment/multiline_comment_opening_closing.html)

  DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash.
* [no\_empty\_comment](https://cs.symfony.com/doc/rules/comment/no_empty_comment.html)

  There should not be any empty comments.
* [no\_trailing\_whitespace\_in\_comment](https://cs.symfony.com/doc/rules/comment/no_trailing_whitespace_in_comment.html)

  There must be no trailing whitespace at the end of lines in comments and PHPDocs.
* [single\_line\_comment\_spacing](https://cs.symfony.com/doc/rules/comment/single_line_comment_spacing.html)

  Single-line comments must have proper spacing.
* [single\_line\_comment\_style](https://cs.symfony.com/doc/rules/comment/single_line_comment_style.html) *(configurable)*

  Single-line comments and multi-line comments with only one line of actual content should use the `//` syntax.

## Constant Notation[¶](https://cs.symfony.com/doc/rules/index.html#constant-notation "Permalink to this heading")

* [native\_constant\_invocation](https://cs.symfony.com/doc/rules/constant_notation/native_constant_invocation.html) *(risky, configurable)*

  Add leading `\` before constant invocation of internal constant to speed up resolving. Constant name match is case-sensitive, except for `null`, `false` and `true`.

## Control Structure[¶](https://cs.symfony.com/doc/rules/index.html#control-structure "Permalink to this heading")

* [control\_structure\_braces](https://cs.symfony.com/doc/rules/control_structure/control_structure_braces.html)

  The body of each control structure MUST be enclosed within braces.
* [control\_structure\_continuation\_position](https://cs.symfony.com/doc/rules/control_structure/control_structure_continuation_position.html) *(configurable)*

  Control structure continuation keyword must be on the configured line.
* [elseif](https://cs.symfony.com/doc/rules/control_structure/elseif.html)

  The keyword `elseif` should be used instead of `else if` so that all control keywords look like single words.
* [empty\_loop\_body](https://cs.symfony.com/doc/rules/control_structure/empty_loop_body.html) *(configurable)*

  Empty loop-body must be in configured style.
* [empty\_loop\_condition](https://cs.symfony.com/doc/rules/control_structure/empty_loop_condition.html) *(configurable)*

  Empty loop-condition must be in configured style.
* [include](https://cs.symfony.com/doc/rules/control_structure/include.html)

  Include/Require and file path should be divided with a single space. File path should not be placed within parentheses.
* [no\_alternative\_syntax](https://cs.symfony.com/doc/rules/control_structure/no_alternative_syntax.html) *(configurable)*

  Replace control structure alternative syntax to use braces.
* [no\_break\_comment](https://cs.symfony.com/doc/rules/control_structure/no_break_comment.html) *(configurable)*

  There must be a comment when fall-through is intentional in a non-empty case body.
* [no\_superfluous\_elseif](https://cs.symfony.com/doc/rules/control_structure/no_superfluous_elseif.html)

  Replaces superfluous `elseif` with `if`.
* [no\_trailing\_comma\_in\_list\_call](https://cs.symfony.com/doc/rules/control_structure/no_trailing_comma_in_list_call.html) *(deprecated)*

  Remove trailing commas in list function calls.
* [no\_unneeded\_braces](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_braces.html) *(configurable)*

  Removes unneeded braces that are superfluous and aren’t part of a control structure’s body.
* [no\_unneeded\_control\_parentheses](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_control_parentheses.html) *(configurable)*

  Removes unneeded parentheses around control statements.
* [no\_unneeded\_curly\_braces](https://cs.symfony.com/doc/rules/control_structure/no_unneeded_curly_braces.html) *(deprecated, configurable)*

  Removes unneeded curly braces that are superfluous and aren’t part of a control structure’s body.
* [no\_useless\_else](https://cs.symfony.com/doc/rules/control_structure/no_useless_else.html)

  There should not be useless `else` cases.
* [simplified\_if\_return](https://cs.symfony.com/doc/rules/control_structure/simplified_if_return.html)

  Simplify `if` control structures that return the boolean result of their condition.
* [switch\_case\_semicolon\_to\_colon](https://cs.symfony.com/doc/rules/control_structure/switch_case_semicolon_to_colon.html)

  A case should be followed by a colon and not a semicolon.
* [switch\_case\_space](https://cs.symfony.com/doc/rules/control_structure/switch_case_space.html)

  Removes extra spaces between colon and case value.
* [switch\_continue\_to\_break](https://cs.symfony.com/doc/rules/control_structure/switch_continue_to_break.html)

  Switch case must not be ended with `continue` but with `break`.
* [trailing\_comma\_in\_multiline](https://cs.symfony.com/doc/rules/control_structure/trailing_comma_in_multiline.html) *(configurable)*

  Arguments lists, array destructuring lists, arrays that are multi-line, `match`-lines and parameters lists must have a trailing comma.
* [yoda\_style](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html) *(configurable)*

  Write conditions in Yoda style (`true`), non-Yoda style (`['equal' => false, 'identical' => false, 'less_and_greater' => false]`) or ignore those conditions (`null`) based on configuration.

## Doctrine Annotation[¶](https://cs.symfony.com/doc/rules/index.html#doctrine-annotation "Permalink to this heading")

* [doctrine\_annotation\_array\_assignment](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_array_assignment.html) *(configurable)*

  Doctrine annotations must use configured operator for assignment in arrays.
* [doctrine\_annotation\_braces](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_braces.html) *(configurable)*

  Doctrine annotations without arguments must use the configured syntax.
* [doctrine\_annotation\_indentation](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_indentation.html) *(configurable)*

  Doctrine annotations must be indented with four spaces.
* [doctrine\_annotation\_spaces](https://cs.symfony.com/doc/rules/doctrine_annotation/doctrine_annotation_spaces.html) *(configurable)*

  Fixes spaces in Doctrine annotations.

## Function Notation[¶](https://cs.symfony.com/doc/rules/index.html#function-notation "Permalink to this heading")

* [combine\_nested\_dirname](https://cs.symfony.com/doc/rules/function_notation/combine_nested_dirname.html) *(risky)*

  Replace multiple nested calls of `dirname` by only one call with second `$level` parameter.
* [date\_time\_create\_from\_format\_call](https://cs.symfony.com/doc/rules/function_notation/date_time_create_from_format_call.html) *(risky)*

  The first argument of `DateTime::createFromFormat` method must start with `!`.
* [fopen\_flag\_order](https://cs.symfony.com/doc/rules/function_notation/fopen_flag_order.html) *(risky)*

  Order the flags in `fopen` calls, `b` and `t` must be last.
* [fopen\_flags](https://cs.symfony.com/doc/rules/function_notation/fopen_flags.html) *(risky, configurable)*

  The flags in `fopen` calls must omit `t`, and `b` must be omitted or included consistently.
* [function\_declaration](https://cs.symfony.com/doc/rules/function_notation/function_declaration.html) *(configurable)*

  Spaces should be properly placed in a function declaration.
* [function\_typehint\_space](https://cs.symfony.com/doc/rules/function_notation/function_typehint_space.html) *(deprecated)*

  Ensure single space between function’s argument and its typehint.
* [implode\_call](https://cs.symfony.com/doc/rules/function_notation/implode_call.html) *(risky)*

  Function `implode` must be called with 2 arguments in the documented order.
* [lambda\_not\_used\_import](https://cs.symfony.com/doc/rules/function_notation/lambda_not_used_import.html)

  Lambda must not import variables it doesn’t use.
* [method\_argument\_space](https://cs.symfony.com/doc/rules/function_notation/method_argument_space.html) *(configurable)*

  In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma. Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
* [multiline\_promoted\_properties](https://cs.symfony.com/doc/rules/function_notation/multiline_promoted_properties.html) *(experimental, configurable)*

  Promoted properties must be on separate lines.
* [native\_function\_invocation](https://cs.symfony.com/doc/rules/function_notation/native_function_invocation.html) *(risky, configurable)*

  Add leading `\` before function invocation to speed up resolving.
* [no\_spaces\_after\_function\_name](https://cs.symfony.com/doc/rules/function_notation/no_spaces_after_function_name.html)

  When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
* [no\_trailing\_comma\_in\_singleline\_function\_call](https://cs.symfony.com/doc/rules/function_notation/no_trailing_comma_in_singleline_function_call.html) *(deprecated)*

  When making a method or function call on a single line there MUST NOT be a trailing comma after the last argument.
* [no\_unreachable\_default\_argument\_value](https://cs.symfony.com/doc/rules/function_notation/no_unreachable_default_argument_value.html) *(risky)*

  In function arguments there must not be arguments with default values before non-default ones.
* [no\_useless\_printf](https://cs.symfony.com/doc/rules/function_notation/no_useless_printf.html) *(risky)*

  There must be no `printf` calls with only the first argument.
* [no\_useless\_sprintf](https://cs.symfony.com/doc/rules/function_notation/no_useless_sprintf.html) *(risky)*

  There must be no `sprintf` calls with only the first argument.
* [nullable\_type\_declaration\_for\_default\_null\_value](https://cs.symfony.com/doc/rules/function_notation/nullable_type_declaration_for_default_null_value.html) *(configurable)*

  Adds or removes `?` before single type declarations or `|null` at the end of union types when parameters have a default `null` value.
* [phpdoc\_to\_param\_type](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_param_type.html) *(experimental, risky, configurable)*

  Takes `@param` annotations of non-mixed types and adjusts accordingly the function signature.
* [phpdoc\_to\_property\_type](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_property_type.html) *(experimental, risky, configurable)*

  Takes `@var` annotation of non-mixed types and adjusts accordingly the property signature..
* [phpdoc\_to\_return\_type](https://cs.symfony.com/doc/rules/function_notation/phpdoc_to_return_type.html) *(experimental, risky, configurable)*

  Takes `@return` annotation of non-mixed types and adjusts accordingly the function signature.
* [regular\_callable\_call](https://cs.symfony.com/doc/rules/function_notation/regular_callable_call.html) *(risky)*

  Callables must be called without using `call_user_func*` when possible.
* [return\_type\_declaration](https://cs.symfony.com/doc/rules/function_notation/return_type_declaration.html) *(configurable)*

  Adjust spacing around colon in return type declarations and backed enum types.
* [single\_line\_throw](https://cs.symfony.com/doc/rules/function_notation/single_line_throw.html)

  Throwing exception must be done in single line.
* [static\_lambda](https://cs.symfony.com/doc/rules/function_notation/static_lambda.html) *(risky)*

  Lambdas not (indirectly) referencing `$this` must be declared `static`.
* [use\_arrow\_functions](https://cs.symfony.com/doc/rules/function_notation/use_arrow_functions.html) *(risky)*

  Anonymous functions with return as the only statement must use arrow functions.
* [void\_return](https://cs.symfony.com/doc/rules/function_notation/void_return.html) *(risky)*

  Add `void` return type to functions with missing or empty return statements, but priority is given to `@return` annotations.

## Import[¶](https://cs.symfony.com/doc/rules/index.html#import "Permalink to this heading")

* [fully\_qualified\_strict\_types](https://cs.symfony.com/doc/rules/import/fully_qualified_strict_types.html) *(configurable)*

  Removes the leading part of fully qualified symbol references if a given symbol is imported or belongs to the current namespace.
* [global\_namespace\_import](https://cs.symfony.com/doc/rules/import/global_namespace_import.html) *(configurable)*

  Imports or fully qualifies global classes/functions/constants.
* [group\_import](https://cs.symfony.com/doc/rules/import/group_import.html) *(configurable)*

  There MUST be group use for the same namespaces.
* [no\_leading\_import\_slash](https://cs.symfony.com/doc/rules/import/no_leading_import_slash.html)

  Remove leading slashes in `use` clauses.
* [no\_unneeded\_import\_alias](https://cs.symfony.com/doc/rules/import/no_unneeded_import_alias.html)

  Imports should not be aliased as the same name.
* [no\_unused\_imports](https://cs.symfony.com/doc/rules/import/no_unused_imports.html)

  Unused `use` statements must be removed.
* [ordered\_imports](https://cs.symfony.com/doc/rules/import/ordered_imports.html) *(configurable)*

  Ordering `use` statements.
* [single\_import\_per\_statement](https://cs.symfony.com/doc/rules/import/single_import_per_statement.html) *(configurable)*

  There MUST be one use keyword per declaration.
* [single\_line\_after\_imports](https://cs.symfony.com/doc/rules/import/single_line_after_imports.html)

  Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.

## Language Construct[¶](https://cs.symfony.com/doc/rules/index.html#language-construct "Permalink to this heading")

* [class\_keyword](https://cs.symfony.com/doc/rules/language_construct/class_keyword.html) *(experimental, risky)*

  Converts FQCN strings to `*::class` keywords.
* [class\_keyword\_remove](https://cs.symfony.com/doc/rules/language_construct/class_keyword_remove.html) *(deprecated)*

  Converts `::class` keywords to FQCN strings.
* [combine\_consecutive\_issets](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_issets.html)

  Using `isset($var) &&` multiple times should be done in one call.
* [combine\_consecutive\_unsets](https://cs.symfony.com/doc/rules/language_construct/combine_consecutive_unsets.html)

  Calling `unset` on multiple items should be done in one call.
* [declare\_equal\_normalize](https://cs.symfony.com/doc/rules/language_construct/declare_equal_normalize.html) *(configurable)*

  Equal sign in declare statement should be surrounded by spaces or not following configuration.
* [declare\_parentheses](https://cs.symfony.com/doc/rules/language_construct/declare_parentheses.html)

  There must not be spaces around `declare` statement parentheses.
* [dir\_constant](https://cs.symfony.com/doc/rules/language_construct/dir_constant.html) *(risky)*

  Replaces `dirname(__FILE__)` expression with equivalent `__DIR__` constant.
* [error\_suppression](https://cs.symfony.com/doc/rules/language_construct/error_suppression.html) *(risky, configurable)*

  Error control operator should be added to deprecation notices and/or removed from other cases.
* [explicit\_indirect\_variable](https://cs.symfony.com/doc/rules/language_construct/explicit_indirect_variable.html)

  Add curly braces to indirect variables to make them clear to understand.
* [function\_to\_constant](https://cs.symfony.com/doc/rules/language_construct/function_to_constant.html) *(risky, configurable)*

  Replace core functions calls returning constants with the constants.
* [get\_class\_to\_class\_keyword](https://cs.symfony.com/doc/rules/language_construct/get_class_to_class_keyword.html) *(risky)*

  Replace `get_class` calls on object variables with class keyword syntax.
* [is\_null](https://cs.symfony.com/doc/rules/language_construct/is_null.html) *(risky)*

  Replaces `is_null($var)` expression with `null === $var`.
* [no\_unset\_on\_property](https://cs.symfony.com/doc/rules/language_construct/no_unset_on_property.html) *(risky)*

  Properties should be set to `null` instead of using `unset`.
* [nullable\_type\_declaration](https://cs.symfony.com/doc/rules/language_construct/nullable_type_declaration.html) *(configurable)*

  Nullable single type declaration should be standardised using configured syntax.
* [single\_space\_after\_construct](https://cs.symfony.com/doc/rules/language_construct/single_space_after_construct.html) *(deprecated, configurable)*

  Ensures a single space after language constructs.
* [single\_space\_around\_construct](https://cs.symfony.com/doc/rules/language_construct/single_space_around_construct.html) *(configurable)*

  Ensures a single space after language constructs.

## List Notation[¶](https://cs.symfony.com/doc/rules/index.html#list-notation "Permalink to this heading")

* [list\_syntax](https://cs.symfony.com/doc/rules/list_notation/list_syntax.html) *(configurable)*

  List (`array` destructuring) assignment should be declared using the configured syntax.

## Namespace Notation[¶](https://cs.symfony.com/doc/rules/index.html#namespace-notation "Permalink to this heading")

* [blank\_line\_after\_namespace](https://cs.symfony.com/doc/rules/namespace_notation/blank_line_after_namespace.html)

  There MUST be one blank line after the namespace declaration.
* [blank\_lines\_before\_namespace](https://cs.symfony.com/doc/rules/namespace_notation/blank_lines_before_namespace.html) *(configurable)*

  Controls blank lines before a namespace declaration.
* [clean\_namespace](https://cs.symfony.com/doc/rules/namespace_notation/clean_namespace.html)

  Namespace must not contain spacing, comments or PHPDoc.
* [no\_blank\_lines\_before\_namespace](https://cs.symfony.com/doc/rules/namespace_notation/no_blank_lines_before_namespace.html) *(deprecated)*

  There should be no blank lines before a namespace declaration.
* [no\_leading\_namespace\_whitespace](https://cs.symfony.com/doc/rules/namespace_notation/no_leading_namespace_whitespace.html)

  The namespace declaration line shouldn’t contain leading whitespace.
* [single\_blank\_line\_before\_namespace](https://cs.symfony.com/doc/rules/namespace_notation/single_blank_line_before_namespace.html) *(deprecated)*

  There should be exactly one blank line before a namespace declaration.

## Naming[¶](https://cs.symfony.com/doc/rules/index.html#naming "Permalink to this heading")

* [no\_homoglyph\_names](https://cs.symfony.com/doc/rules/naming/no_homoglyph_names.html) *(risky)*

  Replace accidental usage of homoglyphs (non ascii characters) in names.

## Operator[¶](https://cs.symfony.com/doc/rules/index.html#operator "Permalink to this heading")

* [assign\_null\_coalescing\_to\_coalesce\_equal](https://cs.symfony.com/doc/rules/operator/assign_null_coalescing_to_coalesce_equal.html)

  Use the null coalescing assignment operator `??=` where possible.
* [binary\_operator\_spaces](https://cs.symfony.com/doc/rules/operator/binary_operator_spaces.html) *(configurable)*

  Binary operators should be surrounded by space as configured.
* [concat\_space](https://cs.symfony.com/doc/rules/operator/concat_space.html) *(configurable)*

  Concatenation should be spaced according to configuration.
* [increment\_style](https://cs.symfony.com/doc/rules/operator/increment_style.html) *(configurable)*

  Pre- or post-increment and decrement operators should be used if possible.
* [logical\_operators](https://cs.symfony.com/doc/rules/operator/logical_operators.html) *(risky)*

  Use `&&` and `||` logical operators instead of `and` and `or`.
* [long\_to\_shorthand\_operator](https://cs.symfony.com/doc/rules/operator/long_to_shorthand_operator.html) *(risky)*

  Shorthand notation for operators should be used if possible.
* [new\_expression\_parentheses](https://cs.symfony.com/doc/rules/operator/new_expression_parentheses.html) *(configurable)*

  All `new` expressions with a further call must (not) be wrapped in parentheses.
* [new\_with\_braces](https://cs.symfony.com/doc/rules/operator/new_with_braces.html) *(deprecated, configurable)*

  All instances created with `new` keyword must (not) be followed by braces.
* [new\_with\_parentheses](https://cs.symfony.com/doc/rules/operator/new_with_parentheses.html) *(configurable)*

  All instances created with `new` keyword must (not) be followed by parentheses.
* [no\_space\_around\_double\_colon](https://cs.symfony.com/doc/rules/operator/no_space_around_double_colon.html)

  There must be no space around double colons (also called Scope Resolution Operator or Paamayim Nekudotayim).
* [no\_useless\_concat\_operator](https://cs.symfony.com/doc/rules/operator/no_useless_concat_operator.html) *(configurable)*

  There should not be useless concat operations.
* [no\_useless\_nullsafe\_operator](https://cs.symfony.com/doc/rules/operator/no_useless_nullsafe_operator.html)

  There should not be useless Null-safe operator `?->` used.
* [not\_operator\_with\_space](https://cs.symfony.com/doc/rules/operator/not_operator_with_space.html)

  Logical NOT operators (`!`) should have leading and trailing whitespaces.
* [not\_operator\_with\_successor\_space](https://cs.symfony.com/doc/rules/operator/not_operator_with_successor_space.html)

  Logical NOT operators (`!`) should have one trailing whitespace.
* [object\_operator\_without\_whitespace](https://cs.symfony.com/doc/rules/operator/object_operator_without_whitespace.html)

  There should not be space before or after object operators `->` and `?->`.
* [operator\_linebreak](https://cs.symfony.com/doc/rules/operator/operator_linebreak.html) *(configurable)*

  Operators - when multiline - must always be at the beginning or at the end of the line.
* [standardize\_increment](https://cs.symfony.com/doc/rules/operator/standardize_increment.html)

  Increment and decrement operators should be used if possible.
* [standardize\_not\_equals](https://cs.symfony.com/doc/rules/operator/standardize_not_equals.html)

  Replace all `<>` with `!=`.
* [ternary\_operator\_spaces](https://cs.symfony.com/doc/rules/operator/ternary_operator_spaces.html)

  Standardize spaces around ternary operator.
* [ternary\_to\_elvis\_operator](https://cs.symfony.com/doc/rules/operator/ternary_to_elvis_operator.html) *(risky)*

  Use the Elvis operator `?:` where possible.
* [ternary\_to\_null\_coalescing](https://cs.symfony.com/doc/rules/operator/ternary_to_null_coalescing.html)

  Use `null` coalescing operator `??` where possible.
* [unary\_operator\_spaces](https://cs.symfony.com/doc/rules/operator/unary_operator_spaces.html) *(configurable)*

  Unary operators should be placed adjacent to their operands.

## PHP Tag[¶](https://cs.symfony.com/doc/rules/index.html#php-tag "Permalink to this heading")

* [blank\_line\_after\_opening\_tag](https://cs.symfony.com/doc/rules/php_tag/blank_line_after_opening_tag.html)

  Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
* [echo\_tag\_syntax](https://cs.symfony.com/doc/rules/php_tag/echo_tag_syntax.html) *(configurable)*

  Replaces short-echo `<?=` with long format `<?php echo`/`<?php print` syntax, or vice-versa.
* [full\_opening\_tag](https://cs.symfony.com/doc/rules/php_tag/full_opening_tag.html)

  PHP code must use the long `<?php` tags or short-echo `<?=` tags and not other tag variations.
* [linebreak\_after\_opening\_tag](https://cs.symfony.com/doc/rules/php_tag/linebreak_after_opening_tag.html)

  Ensure there is no code on the same line as the PHP open tag.
* [no\_closing\_tag](https://cs.symfony.com/doc/rules/php_tag/no_closing_tag.html)

  The closing `?>` tag MUST be omitted from files containing only PHP.

## PHPUnit[¶](https://cs.symfony.com/doc/rules/index.html#phpunit "Permalink to this heading")

* [php\_unit\_assert\_new\_names](https://cs.symfony.com/doc/rules/php_unit/php_unit_assert_new_names.html) *(risky)*

  Rename deprecated PHPUnit assertions like `assertFileNotExists` to new methods like `assertFileDoesNotExist`.
* [php\_unit\_attributes](https://cs.symfony.com/doc/rules/php_unit/php_unit_attributes.html) *(configurable)*

  PHPUnit attributes must be used over their respective PHPDoc-based annotations.
* [php\_unit\_construct](https://cs.symfony.com/doc/rules/php_unit/php_unit_construct.html) *(risky, configurable)*

  PHPUnit assertion method calls like `->assertSame(true, $foo)` should be written with dedicated method like `->assertTrue($foo)`.
* [php\_unit\_data\_provider\_method\_order](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_method_order.html) *(configurable)*

  Data provider method must be placed after/before the last/first test where used.
* [php\_unit\_data\_provider\_name](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_name.html) *(risky, configurable)*

  Data provider names must match the name of the test.
* [php\_unit\_data\_provider\_return\_type](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_return_type.html) *(risky)*

  The return type of PHPUnit data provider must be `iterable`.
* [php\_unit\_data\_provider\_static](https://cs.symfony.com/doc/rules/php_unit/php_unit_data_provider_static.html) *(risky, configurable)*

  Data providers must be static.
* [php\_unit\_dedicate\_assert](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert.html) *(risky, configurable)*

  PHPUnit assertions like `assertInternalType`, `assertFileExists`, should be used over `assertTrue`.
* [php\_unit\_dedicate\_assert\_internal\_type](https://cs.symfony.com/doc/rules/php_unit/php_unit_dedicate_assert_internal_type.html) *(risky, configurable)*

  PHPUnit assertions like `assertIsArray` should be used over `assertInternalType`.
* [php\_unit\_expectation](https://cs.symfony.com/doc/rules/php_unit/php_unit_expectation.html) *(risky, configurable)*

  Usages of `->setExpectedException*` methods MUST be replaced by `->expectException*` methods.
* [php\_unit\_fqcn\_annotation](https://cs.symfony.com/doc/rules/php_unit/php_unit_fqcn_annotation.html)

  PHPUnit annotations should be a FQCNs including a root namespace.
* [php\_unit\_internal\_class](https://cs.symfony.com/doc/rules/php_unit/php_unit_internal_class.html) *(configurable)*

  All PHPUnit test classes should be marked as internal.
* [php\_unit\_method\_casing](https://cs.symfony.com/doc/rules/php_unit/php_unit_method_casing.html) *(configurable)*

  Enforce camel (or snake) case for PHPUnit test methods, following configuration.
* [php\_unit\_mock](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock.html) *(risky, configurable)*

  Usages of `->getMock` and `->getMockWithoutInvokingTheOriginalConstructor` methods MUST be replaced by `->createMock` or `->createPartialMock` methods.
* [php\_unit\_mock\_short\_will\_return](https://cs.symfony.com/doc/rules/php_unit/php_unit_mock_short_will_return.html) *(risky)*

  Usage of PHPUnit’s mock e.g. `->will($this->returnValue(..))` must be replaced by its shorter equivalent such as `->willReturn(...)`.
* [php\_unit\_namespaced](https://cs.symfony.com/doc/rules/php_unit/php_unit_namespaced.html) *(risky, configurable)*

  PHPUnit classes MUST be used in namespaced version, e.g. `\PHPUnit\Framework\TestCase` instead of `\PHPUnit_Framework_TestCase`.
* [php\_unit\_no\_expectation\_annotation](https://cs.symfony.com/doc/rules/php_unit/php_unit_no_expectation_annotation.html) *(risky, configurable)*

  Usages of `@expectedException*` annotations MUST be replaced by `->setExpectedException*` methods.
* [php\_unit\_set\_up\_tear\_down\_visibility](https://cs.symfony.com/doc/rules/php_unit/php_unit_set_up_tear_down_visibility.html) *(risky)*

  Changes the visibility of the `setUp()` and `tearDown()` functions of PHPUnit to `protected`, to match the PHPUnit TestCase.
* [php\_unit\_size\_class](https://cs.symfony.com/doc/rules/php_unit/php_unit_size_class.html) *(configurable)*

  All PHPUnit test cases should have `@small`, `@medium` or `@large` annotation to enable run time limits.
* [php\_unit\_strict](https://cs.symfony.com/doc/rules/php_unit/php_unit_strict.html) *(risky, configurable)*

  PHPUnit methods like `assertSame` should be used instead of `assertEquals`.
* [php\_unit\_test\_annotation](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_annotation.html) *(risky, configurable)*

  Adds or removes @test annotations from tests, following configuration.
* [php\_unit\_test\_case\_static\_method\_calls](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_case_static_method_calls.html) *(risky, configurable)*

  Calls to `PHPUnit\Framework\TestCase` static methods (like assertions) must all be of the same type, either `$this->`, `self::` or `static::`.
* [php\_unit\_test\_class\_requires\_covers](https://cs.symfony.com/doc/rules/php_unit/php_unit_test_class_requires_covers.html)

  Adds a default `@coversNothing` annotation to PHPUnit test classes that have no `@covers*` annotation.

## PHPDoc[¶](https://cs.symfony.com/doc/rules/index.html#phpdoc "Permalink to this heading")

* [align\_multiline\_comment](https://cs.symfony.com/doc/rules/phpdoc/align_multiline_comment.html) *(configurable)*

  Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
* [general\_phpdoc\_annotation\_remove](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_annotation_remove.html) *(configurable)*

  Removes configured annotations from PHPDoc.
* [general\_phpdoc\_tag\_rename](https://cs.symfony.com/doc/rules/phpdoc/general_phpdoc_tag_rename.html) *(configurable)*

  Renames PHPDoc tags.
* [no\_blank\_lines\_after\_phpdoc](https://cs.symfony.com/doc/rules/phpdoc/no_blank_lines_after_phpdoc.html)

  There should not be blank lines between docblock and the documented element.
* [no\_empty\_phpdoc](https://cs.symfony.com/doc/rules/phpdoc/no_empty_phpdoc.html)

  There should not be empty PHPDoc blocks.
* [no\_superfluous\_phpdoc\_tags](https://cs.symfony.com/doc/rules/phpdoc/no_superfluous_phpdoc_tags.html) *(configurable)*

  Removes `@param`, `@return` and `@var` tags that don’t provide any useful information.
* [phpdoc\_add\_missing\_param\_annotation](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_add_missing_param_annotation.html) *(configurable)*

  PHPDoc should contain `@param` for all params.
* [phpdoc\_align](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_align.html) *(configurable)*

  All items of the given PHPDoc tags must be either left-aligned or (by default) aligned vertically.
* [phpdoc\_annotation\_without\_dot](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_annotation_without_dot.html)

  PHPDoc annotation descriptions should not be a sentence.
* [phpdoc\_array\_type](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_array_type.html) *(risky)*

  PHPDoc `array<T>` type must be used instead of `T[]`.
* [phpdoc\_indent](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_indent.html)

  Docblocks should have the same indentation as the documented subject.
* [phpdoc\_inline\_tag\_normalizer](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_inline_tag_normalizer.html) *(configurable)*

  Fixes PHPDoc inline tags.
* [phpdoc\_line\_span](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_line_span.html) *(configurable)*

  Changes doc blocks from single to multi line, or reversed. Works for class constants, properties and methods only.
* [phpdoc\_list\_type](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_list_type.html) *(risky)*

  PHPDoc `list` type must be used instead of `array` without a key.
* [phpdoc\_no\_access](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_access.html)

  `@access` annotations must be removed from PHPDoc.
* [phpdoc\_no\_alias\_tag](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_alias_tag.html) *(configurable)*

  No alias PHPDoc tags should be used.
* [phpdoc\_no\_empty\_return](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_empty_return.html)

  `@return void` and `@return null` annotations must be removed from PHPDoc.
* [phpdoc\_no\_package](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_package.html)

  `@package` and `@subpackage` annotations must be removed from PHPDoc.
* [phpdoc\_no\_useless\_inheritdoc](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_no_useless_inheritdoc.html)

  Classy that does not inherit must not have `@inheritdoc` tags.
* [phpdoc\_order\_by\_value](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order_by_value.html) *(configurable)*

  Order PHPDoc tags by value.
* [phpdoc\_order](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_order.html) *(configurable)*

  Annotations in PHPDoc should be ordered in defined sequence.
* [phpdoc\_param\_order](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_param_order.html)

  Orders all `@param` annotations in DocBlocks according to method signature.
* [phpdoc\_return\_self\_reference](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_return_self_reference.html) *(configurable)*

  The type of `@return` annotations of methods returning a reference to itself must the configured one.
* [phpdoc\_scalar](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_scalar.html) *(configurable)*

  Scalar types should always be written in the same form. `int` not `integer`, `bool` not `boolean`, `float` not `real` or `double`.
* [phpdoc\_separation](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_separation.html) *(configurable)*

  Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other. Annotations of a different type are separated by a single blank line.
* [phpdoc\_single\_line\_var\_spacing](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_single_line_var_spacing.html)

  Single line `@var` PHPDoc should have proper spacing.
* [phpdoc\_summary](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_summary.html)

  PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
* [phpdoc\_tag\_casing](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_casing.html) *(configurable)*

  Fixes casing of PHPDoc tags.
* [phpdoc\_tag\_no\_named\_arguments](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_no_named_arguments.html) *(configurable)*

  There must be `@no-named-arguments` tag in PHPDoc of a class/enum/interface/trait.
* [phpdoc\_tag\_type](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_tag_type.html) *(configurable)*

  Forces PHPDoc tags to be either regular annotations or inline.
* [phpdoc\_to\_comment](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_to_comment.html) *(configurable)*

  Docblocks should only be used on structural elements.
* [phpdoc\_trim\_consecutive\_blank\_line\_separation](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim_consecutive_blank_line_separation.html)

  Removes extra blank lines after summary and after description in PHPDoc.
* [phpdoc\_trim](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_trim.html)

  PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
* [phpdoc\_types](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types.html) *(configurable)*

  The correct case must be used for standard PHP types in PHPDoc.
* [phpdoc\_types\_no\_duplicates](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_no_duplicates.html)

  Removes duplicate PHPDoc types.
* [phpdoc\_types\_order](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_types_order.html) *(configurable)*

  Sorts PHPDoc types.
* [phpdoc\_var\_annotation\_correct\_order](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_annotation_correct_order.html)

  `@var` and `@type` annotations must have type and name in the correct order.
* [phpdoc\_var\_without\_name](https://cs.symfony.com/doc/rules/phpdoc/phpdoc_var_without_name.html)

  `@var` and `@type` annotations of classy properties should not contain the name.

## Return Notation[¶](https://cs.symfony.com/doc/rules/index.html#return-notation "Permalink to this heading")

* [no\_useless\_return](https://cs.symfony.com/doc/rules/return_notation/no_useless_return.html)

  There should not be an empty `return` statement at the end of a function.
* [return\_assignment](https://cs.symfony.com/doc/rules/return_notation/return_assignment.html)

  Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method.
* [simplified\_null\_return](https://cs.symfony.com/doc/rules/return_notation/simplified_null_return.html)

  A return statement wishing to return `void` should not return `null`.

## Semicolon[¶](https://cs.symfony.com/doc/rules/index.html#semicolon "Permalink to this heading")

* [multiline\_whitespace\_before\_semicolons](https://cs.symfony.com/doc/rules/semicolon/multiline_whitespace_before_semicolons.html) *(configurable)*

  Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls.
* [no\_empty\_statement](https://cs.symfony.com/doc/rules/semicolon/no_empty_statement.html)

  Remove useless (semicolon) statements.
* [no\_singleline\_whitespace\_before\_semicolons](https://cs.symfony.com/doc/rules/semicolon/no_singleline_whitespace_before_semicolons.html)

  Single-line whitespace before closing semicolon are prohibited.
* [semicolon\_after\_instruction](https://cs.symfony.com/doc/rules/semicolon/semicolon_after_instruction.html)

  Instructions must be terminated with a semicolon.
* [space\_after\_semicolon](https://cs.symfony.com/doc/rules/semicolon/space_after_semicolon.html) *(configurable)*

  Fix whitespace after a semicolon.

## Strict[¶](https://cs.symfony.com/doc/rules/index.html#strict "Permalink to this heading")

* [declare\_strict\_types](https://cs.symfony.com/doc/rules/strict/declare_strict_types.html) *(risky, configurable)*

  Force strict types declaration in all files.
* [strict\_comparison](https://cs.symfony.com/doc/rules/strict/strict_comparison.html) *(risky)*

  Comparisons should be strict.
* [strict\_param](https://cs.symfony.com/doc/rules/strict/strict_param.html) *(risky)*

  Functions should be used with `$strict` param set to `true`.

## String Notation[¶](https://cs.symfony.com/doc/rules/index.html#string-notation "Permalink to this heading")

* [escape\_implicit\_backslashes](https://cs.symfony.com/doc/rules/string_notation/escape_implicit_backslashes.html) *(deprecated, configurable)*

  Escape implicit backslashes in strings and heredocs to ease the understanding of which are special chars interpreted by PHP and which not.
* [explicit\_string\_variable](https://cs.symfony.com/doc/rules/string_notation/explicit_string_variable.html)

  Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
* [heredoc\_closing\_marker](https://cs.symfony.com/doc/rules/string_notation/heredoc_closing_marker.html) *(configurable)*

  Unify `heredoc` or `nowdoc` closing marker.
* [heredoc\_to\_nowdoc](https://cs.symfony.com/doc/rules/string_notation/heredoc_to_nowdoc.html)

  Convert `heredoc` to `nowdoc` where possible.
* [multiline\_string\_to\_heredoc](https://cs.symfony.com/doc/rules/string_notation/multiline_string_to_heredoc.html)

  Convert multiline string to `heredoc` or `nowdoc`.
* [no\_binary\_string](https://cs.symfony.com/doc/rules/string_notation/no_binary_string.html)

  There should not be a binary flag before strings.
* [no\_trailing\_whitespace\_in\_string](https://cs.symfony.com/doc/rules/string_notation/no_trailing_whitespace_in_string.html) *(risky)*

  There must be no trailing whitespace at the end of lines in strings.
* [simple\_to\_complex\_string\_variable](https://cs.symfony.com/doc/rules/string_notation/simple_to_complex_string_variable.html)

  Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (`${` to `{$`).
* [single\_quote](https://cs.symfony.com/doc/rules/string_notation/single_quote.html) *(configurable)*

  Convert double quotes to single quotes for simple strings.
* [string\_implicit\_backslashes](https://cs.symfony.com/doc/rules/string_notation/string_implicit_backslashes.html) *(configurable)*

  Handles implicit backslashes in strings and heredocs. Depending on the chosen strategy, it can escape implicit backslashes to ease the understanding of which are special chars interpreted by PHP and which not (`escape`), or it can remove these additional backslashes if you find them superfluous (`unescape`). You can also leave them as-is using `ignore` strategy.
* [string\_length\_to\_empty](https://cs.symfony.com/doc/rules/string_notation/string_length_to_empty.html) *(risky)*

  String tests for empty must be done against `''`, not with `strlen`.
* [string\_line\_ending](https://cs.symfony.com/doc/rules/string_notation/string_line_ending.html) *(risky)*

  All multi-line strings must use correct line ending.

## Whitespace[¶](https://cs.symfony.com/doc/rules/index.html#whitespace "Permalink to this heading")

* [array\_indentation](https://cs.symfony.com/doc/rules/whitespace/array_indentation.html)

  Each element of an array must be indented exactly once.
* [blank\_line\_before\_statement](https://cs.symfony.com/doc/rules/whitespace/blank_line_before_statement.html) *(configurable)*

  An empty line feed must precede any configured statement.
* [blank\_line\_between\_import\_groups](https://cs.symfony.com/doc/rules/whitespace/blank_line_between_import_groups.html)

  Putting blank lines between `use` statement groups.
* [compact\_nullable\_type\_declaration](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_type_declaration.html)

  Remove extra spaces in a nullable type declaration.
* [compact\_nullable\_typehint](https://cs.symfony.com/doc/rules/whitespace/compact_nullable_typehint.html) *(deprecated)*

  Remove extra spaces in a nullable typehint.
* [heredoc\_indentation](https://cs.symfony.com/doc/rules/whitespace/heredoc_indentation.html) *(configurable)*

  Heredoc/nowdoc content must be properly indented.
* [indentation\_type](https://cs.symfony.com/doc/rules/whitespace/indentation_type.html)

  Code MUST use configured indentation type.
* [line\_ending](https://cs.symfony.com/doc/rules/whitespace/line_ending.html)

  All PHP files must use same line ending.
* [method\_chaining\_indentation](https://cs.symfony.com/doc/rules/whitespace/method_chaining_indentation.html)

  Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
* [no\_extra\_blank\_lines](https://cs.symfony.com/doc/rules/whitespace/no_extra_blank_lines.html) *(configurable)*

  Removes extra blank lines and/or blank lines following configuration.
* [no\_spaces\_around\_offset](https://cs.symfony.com/doc/rules/whitespace/no_spaces_around_offset.html) *(configurable)*

  There MUST NOT be spaces around offset braces.
* [no\_spaces\_inside\_parenthesis](https://cs.symfony.com/doc/rules/whitespace/no_spaces_inside_parenthesis.html) *(deprecated)*

  There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
* [no\_trailing\_whitespace](https://cs.symfony.com/doc/rules/whitespace/no_trailing_whitespace.html)

  There must be no trailing whitespace at the end of non-blank lines.
* [no\_whitespace\_in\_blank\_line](https://cs.symfony.com/doc/rules/whitespace/no_whitespace_in_blank_line.html)

  Remove trailing whitespace at the end of blank lines.
* [single\_blank\_line\_at\_eof](https://cs.symfony.com/doc/rules/whitespace/single_blank_line_at_eof.html)

  A PHP file without end tag must always end with a single empty line feed.
* [spaces\_inside\_parentheses](https://cs.symfony.com/doc/rules/whitespace/spaces_inside_parentheses.html) *(configurable)*

  Parentheses must be declared using the configured whitespace.
* [statement\_indentation](https://cs.symfony.com/doc/rules/whitespace/statement_indentation.html) *(configurable)*

  Each statement must be indented.
* [type\_declaration\_spaces](https://cs.symfony.com/doc/rules/whitespace/type_declaration_spaces.html) *(configurable)*

  Ensure single space between a variable and its type declaration in function arguments and properties.
* [types\_spaces](https://cs.symfony.com/doc/rules/whitespace/types_spaces.html) *(configurable)*

  A single space or none should be around union type and intersection type operators.
