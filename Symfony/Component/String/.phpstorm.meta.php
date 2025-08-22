<?php

namespace PHPSTORM_META {
    expectedArguments(\Symfony\Component\String\AbstractString::match(), 1, \PREG_OFFSET_CAPTURE | \PREG_UNMATCHED_AS_NULL | \PREG_PATTERN_ORDER | \PREG_SET_ORDER);
    expectedArguments(\Symfony\Component\String\AbstractString::split(), 2, \PREG_SPLIT_NO_EMPTY | \PREG_SPLIT_DELIM_CAPTURE | \PREG_SPLIT_OFFSET_CAPTURE);

    expectedArguments(\Symfony\Component\String\AbstractString::truncate(), 1, '…', '...');

    // Symfony 7.2+: String::truncate() gained new truncation modes via enum TruncateMode
    // Suggest the available modes when completing the $cut argument
    registerArgumentsSet('symfony_string_truncate_modes',
        \Symfony\Component\String\TruncateMode::Char,
        \Symfony\Component\String\TruncateMode::WordBefore,
        \Symfony\Component\String\TruncateMode::WordAfter
    );
    expectedArguments(\Symfony\Component\String\AbstractString::truncate(), 2, argumentsSet('symfony_string_truncate_modes'));

    registerArgumentsSet('symfony_string_normalize_forms',
        // these should be prefered, but dont work yet:
        \Symfony\Component\String\UnicodeString::NFC,
        \Symfony\Component\String\UnicodeString::NFD,
        \Symfony\Component\String\UnicodeString::NFKC,
        \Symfony\Component\String\UnicodeString::NFKD,

        \Normalizer::NFC,
        \Normalizer::NFD,
        \Normalizer::NFKC,
        \Normalizer::NFKD,
    );
    expectedArguments(\Symfony\Component\String\AbstractUnicodeString::normalize(), 0, argumentsSet('symfony_string_normalize_forms'));
}