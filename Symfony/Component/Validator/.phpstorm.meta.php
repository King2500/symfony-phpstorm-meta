<?php

namespace PHPSTORM_META {

    registerArgumentsSet('symfony_validator_constraint_targets',
        \Symfony\Component\Validator\Constraint::CLASS_CONSTRAINT,
        \Symfony\Component\Validator\Constraint::PROPERTY_CONSTRAINT
    );
    expectedReturnValues(\Symfony\Component\Validator\Constraint::getTargets(), argumentsSet('symfony_validator_constraint_targets'));
    //expectedReturnValues(\Symfony\Component\Validator\Constraint::getTargets(), array(argumentsSet('symfony_validator_constraint_targets')));

    registerArgumentsSet('symfony_validator_constraint_formats',
        \Symfony\Component\Validator\ConstraintValidator::PRETTY_DATE |
        \Symfony\Component\Validator\ConstraintValidator::OBJECT_TO_STRING
    );
    expectedArguments(\Symfony\Component\Validator\ConstraintValidator::formatValue(), 1, argumentsSet('symfony_validator_constraint_formats'));
    expectedArguments(\Symfony\Component\Validator\ConstraintValidator::formatValues(), 1, argumentsSet('symfony_validator_constraint_formats'));

    registerArgumentsSet('symfony_validator_cascading_strategies',
        \Symfony\Component\Validator\Mapping\CascadingStrategy::NONE |
        \Symfony\Component\Validator\Mapping\CascadingStrategy::CASCADE
    );
    expectedReturnValues(\Symfony\Component\Validator\Mapping\MetadataInterface::getCascadingStrategy(), argumentsSet('symfony_validator_cascading_strategies'));
    expectedReturnValues(\Symfony\Component\Validator\Mapping\GenericMetadata::getCascadingStrategy(), argumentsSet('symfony_validator_cascading_strategies'));
    expectedReturnValues(\Symfony\Component\Validator\Mapping\ClassMetadata::getCascadingStrategy(), \Symfony\Component\Validator\Mapping\CascadingStrategy::NONE);

    registerArgumentsSet('symfony_validator_traversal_strategies',
        \Symfony\Component\Validator\Mapping\TraversalStrategy::IMPLICIT |
        \Symfony\Component\Validator\Mapping\TraversalStrategy::NONE |
        \Symfony\Component\Validator\Mapping\TraversalStrategy::TRAVERSE
    );
    expectedReturnValues(\Symfony\Component\Validator\Mapping\MetadataInterface::getTraversalStrategy(), argumentsSet('symfony_validator_traversal_strategies'));
    expectedReturnValues(\Symfony\Component\Validator\Mapping\GenericMetadata::getTraversalStrategy(), argumentsSet('symfony_validator_traversal_strategies'));
    expectedReturnValues(\Symfony\Component\Validator\Mapping\ClassMetadata::getTraversalStrategy(), argumentsSet('symfony_validator_traversal_strategies'));

    registerArgumentsSet('symfony_validator_constraint_violation_codes',
        \Symfony\Component\Validator\Constraints\Bic::INVALID_LENGTH_ERROR,
        \Symfony\Component\Validator\Constraints\Bic::INVALID_CHARACTERS_ERROR,
        \Symfony\Component\Validator\Constraints\Bic::INVALID_BANK_CODE_ERROR,
        \Symfony\Component\Validator\Constraints\Bic::INVALID_COUNTRY_CODE_ERROR,
        \Symfony\Component\Validator\Constraints\Bic::INVALID_CASE_ERROR,
        \Symfony\Component\Validator\Constraints\Blank::NOT_BLANK_ERROR,
        \Symfony\Component\Validator\Constraints\CardScheme::NOT_NUMERIC_ERROR,
        \Symfony\Component\Validator\Constraints\CardScheme::INVALID_FORMAT_ERROR,
        \Symfony\Component\Validator\Constraints\Choice::NO_SUCH_CHOICE_ERROR,
        \Symfony\Component\Validator\Constraints\Choice::TOO_FEW_ERROR,
        \Symfony\Component\Validator\Constraints\Choice::TOO_MANY_ERROR,
        \Symfony\Component\Validator\Constraints\Collection::MISSING_FIELD_ERROR,
        \Symfony\Component\Validator\Constraints\Collection::NO_SUCH_FIELD_ERROR,
        \Symfony\Component\Validator\Constraints\Count::TOO_FEW_ERROR,
        \Symfony\Component\Validator\Constraints\Count::TOO_MANY_ERROR,
        \Symfony\Component\Validator\Constraints\Country::NO_SUCH_COUNTRY_ERROR,
        \Symfony\Component\Validator\Constraints\Currency::NO_SUCH_CURRENCY_ERROR,
        \Symfony\Component\Validator\Constraints\Date::INVALID_FORMAT_ERROR,
        \Symfony\Component\Validator\Constraints\Date::INVALID_DATE_ERROR,
        \Symfony\Component\Validator\Constraints\DateTime::INVALID_FORMAT_ERROR,
        \Symfony\Component\Validator\Constraints\DateTime::INVALID_DATE_ERROR,
        \Symfony\Component\Validator\Constraints\DateTime::INVALID_TIME_ERROR,
        \Symfony\Component\Validator\Constraints\DivisibleBy::NOT_DIVISIBLE_BY,
        \Symfony\Component\Validator\Constraints\Email::INVALID_FORMAT_ERROR,
        \Symfony\Component\Validator\Constraints\Email::MX_CHECK_FAILED_ERROR,
        \Symfony\Component\Validator\Constraints\Email::HOST_CHECK_FAILED_ERROR,
        \Symfony\Component\Validator\Constraints\EqualTo::NOT_EQUAL_ERROR,
        \Symfony\Component\Validator\Constraints\Expression::EXPRESSION_FAILED_ERROR,
        \Symfony\Component\Validator\Constraints\File::NOT_FOUND_ERROR,
        \Symfony\Component\Validator\Constraints\File::NOT_READABLE_ERROR,
        \Symfony\Component\Validator\Constraints\File::EMPTY_ERROR,
        \Symfony\Component\Validator\Constraints\File::TOO_LARGE_ERROR,
        \Symfony\Component\Validator\Constraints\File::INVALID_MIME_TYPE_ERROR,
        \Symfony\Component\Validator\Constraints\GreaterThan::TOO_LOW_ERROR,
        \Symfony\Component\Validator\Constraints\GreaterThanOrEqual::TOO_LOW_ERROR,
        \Symfony\Component\Validator\Constraints\Iban::INVALID_COUNTRY_CODE_ERROR,
        \Symfony\Component\Validator\Constraints\Iban::INVALID_CHARACTERS_ERROR,
        \Symfony\Component\Validator\Constraints\Iban::CHECKSUM_FAILED_ERROR,
        \Symfony\Component\Validator\Constraints\Iban::INVALID_FORMAT_ERROR,
        \Symfony\Component\Validator\Constraints\Iban::NOT_SUPPORTED_COUNTRY_CODE_ERROR,
        \Symfony\Component\Validator\Constraints\IdenticalTo::NOT_IDENTICAL_ERROR,
        \Symfony\Component\Validator\Constraints\Image::SIZE_NOT_DETECTED_ERROR,
        \Symfony\Component\Validator\Constraints\Image::TOO_WIDE_ERROR,
        \Symfony\Component\Validator\Constraints\Image::TOO_NARROW_ERROR,
        \Symfony\Component\Validator\Constraints\Image::TOO_HIGH_ERROR,
        \Symfony\Component\Validator\Constraints\Image::TOO_LOW_ERROR,
        \Symfony\Component\Validator\Constraints\Image::TOO_FEW_PIXEL_ERROR,
        \Symfony\Component\Validator\Constraints\Image::TOO_MANY_PIXEL_ERROR,
        \Symfony\Component\Validator\Constraints\Image::RATIO_TOO_BIG_ERROR,
        \Symfony\Component\Validator\Constraints\Image::RATIO_TOO_SMALL_ERROR,
        \Symfony\Component\Validator\Constraints\Image::SQUARE_NOT_ALLOWED_ERROR,
        \Symfony\Component\Validator\Constraints\Image::LANDSCAPE_NOT_ALLOWED_ERROR,
        \Symfony\Component\Validator\Constraints\Image::PORTRAIT_NOT_ALLOWED_ERROR,
        \Symfony\Component\Validator\Constraints\Image::CORRUPTED_IMAGE_ERROR,
        \Symfony\Component\Validator\Constraints\Ip::INVALID_IP_ERROR,
        \Symfony\Component\Validator\Constraints\Isbn::TOO_SHORT_ERROR,
        \Symfony\Component\Validator\Constraints\Isbn::TOO_LONG_ERROR,
        \Symfony\Component\Validator\Constraints\Isbn::INVALID_CHARACTERS_ERROR,
        \Symfony\Component\Validator\Constraints\Isbn::CHECKSUM_FAILED_ERROR,
        \Symfony\Component\Validator\Constraints\Isbn::TYPE_NOT_RECOGNIZED_ERROR,
        \Symfony\Component\Validator\Constraints\IsFalse::NOT_FALSE_ERROR,
        \Symfony\Component\Validator\Constraints\IsNull::NOT_NULL_ERROR,
        \Symfony\Component\Validator\Constraints\Issn::TOO_SHORT_ERROR,
        \Symfony\Component\Validator\Constraints\Issn::TOO_LONG_ERROR,
        \Symfony\Component\Validator\Constraints\Issn::MISSING_HYPHEN_ERROR,
        \Symfony\Component\Validator\Constraints\Issn::INVALID_CHARACTERS_ERROR,
        \Symfony\Component\Validator\Constraints\Issn::INVALID_CASE_ERROR,
        \Symfony\Component\Validator\Constraints\Issn::CHECKSUM_FAILED_ERROR,
        \Symfony\Component\Validator\Constraints\IsTrue::NOT_TRUE_ERROR,
        \Symfony\Component\Validator\Constraints\Language::NO_SUCH_LANGUAGE_ERROR,
        \Symfony\Component\Validator\Constraints\Length::TOO_SHORT_ERROR,
        \Symfony\Component\Validator\Constraints\Length::TOO_LONG_ERROR,
        \Symfony\Component\Validator\Constraints\Length::INVALID_CHARACTERS_ERROR,
        \Symfony\Component\Validator\Constraints\LessThan::TOO_HIGH_ERROR,
        \Symfony\Component\Validator\Constraints\LessThanOrEqual::TOO_HIGH_ERROR,
        \Symfony\Component\Validator\Constraints\Locale::NO_SUCH_LOCALE_ERROR,
        \Symfony\Component\Validator\Constraints\Luhn::INVALID_CHARACTERS_ERROR,
        \Symfony\Component\Validator\Constraints\Luhn::CHECKSUM_FAILED_ERROR,
        \Symfony\Component\Validator\Constraints\NotBlank::IS_BLANK_ERROR,
        \Symfony\Component\Validator\Constraints\NotEqualTo::IS_EQUAL_ERROR,
        \Symfony\Component\Validator\Constraints\NotIdenticalTo::IS_IDENTICAL_ERROR,
        \Symfony\Component\Validator\Constraints\NotNull::IS_NULL_ERROR,
        \Symfony\Component\Validator\Constraints\Range::INVALID_CHARACTERS_ERROR,
        \Symfony\Component\Validator\Constraints\Range::TOO_HIGH_ERROR,
        \Symfony\Component\Validator\Constraints\Range::TOO_LOW_ERROR,
        \Symfony\Component\Validator\Constraints\Regex::REGEX_FAILED_ERROR,
        \Symfony\Component\Validator\Constraints\Time::INVALID_FORMAT_ERROR,
        \Symfony\Component\Validator\Constraints\Time::INVALID_TIME_ERROR,
        \Symfony\Component\Validator\Constraints\Type::INVALID_TYPE_ERROR,
        \Symfony\Component\Validator\Constraints\Url::INVALID_URL_ERROR,
        \Symfony\Component\Validator\Constraints\Uuid::TOO_SHORT_ERROR,
        \Symfony\Component\Validator\Constraints\Uuid::TOO_LONG_ERROR,
        \Symfony\Component\Validator\Constraints\Uuid::INVALID_CHARACTERS_ERROR,
        \Symfony\Component\Validator\Constraints\Uuid::INVALID_HYPHEN_PLACEMENT_ERROR,
        \Symfony\Component\Validator\Constraints\Uuid::INVALID_VERSION_ERROR,
        \Symfony\Component\Validator\Constraints\Uuid::INVALID_VARIANT_ERROR,
        \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity::NOT_UNIQUE_ERROR
    );
    expectedArguments(\Symfony\Component\Validator\ConstraintViolationList::findByCodes(), 0, argumentsSet('symfony_validator_constraint_violation_codes'));
    expectedArguments(\Symfony\Component\Validator\ConstraintViolation::__construct(), 7, argumentsSet('symfony_validator_constraint_violation_codes'));
    expectedArguments(\Symfony\Component\Validator\Violation\ConstraintViolationBuilder::setCode(), 0, argumentsSet('symfony_validator_constraint_violation_codes'));
    expectedReturnValues(\Symfony\Component\Validator\ConstraintViolationInterface::getCode(), argumentsSet('symfony_validator_constraint_violation_codes'));

    registerArgumentsSet('symfony_validator_nosuspiciouscharacters_checks',
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::CHECK_INVISIBLE,
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::CHECK_MIXED_NUMBERS,
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::CHECK_HIDDEN_OVERLAY,
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::__construct(), 5, argumentsSet('symfony_validator_nosuspiciouscharacters_checks'));

    registerArgumentsSet('symfony_validator_nosuspiciouscharacters_restriction_levels',
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::RESTRICTION_LEVEL_MINIMAL,
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::RESTRICTION_LEVEL_MODERATE,
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::RESTRICTION_LEVEL_HIGH,
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::RESTRICTION_LEVEL_SINGLE_SCRIPT,
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::RESTRICTION_LEVEL_ASCII,
        \Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::RESTRICTION_LEVEL_NONE,
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\NoSuspiciousCharacters::__construct(), 6, argumentsSet('symfony_validator_nosuspiciouscharacters_restriction_levels'));

    registerArgumentsSet('symfony_validator_passwordstrength_strengths',
        \Symfony\Component\Validator\Constraints\PasswordStrength::STRENGTH_WEAK,
        \Symfony\Component\Validator\Constraints\PasswordStrength::STRENGTH_MEDIUM,
        \Symfony\Component\Validator\Constraints\PasswordStrength::STRENGTH_STRONG,
        \Symfony\Component\Validator\Constraints\PasswordStrength::STRENGTH_VERY_STRONG,
        \Symfony\Component\Validator\Constraints\PasswordStrength::STRENGTH_VERY_WEAK,
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\PasswordStrength::__construct(), 1, argumentsSet('symfony_validator_passwordstrength_strengths'));

    registerArgumentsSet('symfony_validator_macaddress_types',
        \Symfony\Component\Validator\Constraints\MacAddress::ALL,
        \Symfony\Component\Validator\Constraints\MacAddress::ALL_NO_BROADCAST,
        \Symfony\Component\Validator\Constraints\MacAddress::LOCAL_ALL,
        \Symfony\Component\Validator\Constraints\MacAddress::LOCAL_NO_BROADCAST,
        \Symfony\Component\Validator\Constraints\MacAddress::LOCAL_UNICAST,
        \Symfony\Component\Validator\Constraints\MacAddress::LOCAL_MULTICAST,
        \Symfony\Component\Validator\Constraints\MacAddress::LOCAL_MULTICAST_NO_BROADCAST,
        \Symfony\Component\Validator\Constraints\MacAddress::UNIVERSAL_ALL,
        \Symfony\Component\Validator\Constraints\MacAddress::UNIVERSAL_UNICAST,
        \Symfony\Component\Validator\Constraints\MacAddress::UNIVERSAL_MULTICAST,
        \Symfony\Component\Validator\Constraints\MacAddress::UNICAST_ALL,
        \Symfony\Component\Validator\Constraints\MacAddress::MULTICAST_ALL,
        \Symfony\Component\Validator\Constraints\MacAddress::MULTICAST_NO_BROADCAST,
        \Symfony\Component\Validator\Constraints\MacAddress::BROADCAST,
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\MacAddress::__construct(), 1, argumentsSet('symfony_validator_macaddress_types'));

    registerArgumentsSet('symfony_validator_ip_versions',
        \Symfony\Component\Validator\Constraints\Ip::V4,
        \Symfony\Component\Validator\Constraints\Ip::V6,
        \Symfony\Component\Validator\Constraints\Ip::ALL,

        \Symfony\Component\Validator\Constraints\Ip::V4_NO_PUBLIC,
        \Symfony\Component\Validator\Constraints\Ip::V6_NO_PUBLIC,
        \Symfony\Component\Validator\Constraints\Ip::ALL_NO_PUBLIC,

        \Symfony\Component\Validator\Constraints\Ip::V4_NO_PRIVATE,
        \Symfony\Component\Validator\Constraints\Ip::V6_NO_PRIVATE,
        \Symfony\Component\Validator\Constraints\Ip::ALL_NO_PRIVATE,

        \Symfony\Component\Validator\Constraints\Ip::V4_NO_RESERVED,
        \Symfony\Component\Validator\Constraints\Ip::V6_NO_RESERVED,
        \Symfony\Component\Validator\Constraints\Ip::ALL_NO_RESERVED,

        \Symfony\Component\Validator\Constraints\Ip::V4_ONLY_PUBLIC,
        \Symfony\Component\Validator\Constraints\Ip::V6_ONLY_PUBLIC,
        \Symfony\Component\Validator\Constraints\Ip::ALL_ONLY_PUBLIC,

        \Symfony\Component\Validator\Constraints\Ip::V4_ONLY_PRIVATE,
        \Symfony\Component\Validator\Constraints\Ip::V6_ONLY_PRIVATE,
        \Symfony\Component\Validator\Constraints\Ip::ALL_ONLY_PRIVATE,

        \Symfony\Component\Validator\Constraints\Ip::V4_ONLY_RESERVED,
        \Symfony\Component\Validator\Constraints\Ip::V6_ONLY_RESERVED,
        \Symfony\Component\Validator\Constraints\Ip::ALL_ONLY_RESERVED,
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\Ip::__construct(), 1, argumentsSet('symfony_validator_ip_versions'));
    expectedArguments(\Symfony\Component\Validator\Constraints\Cidr::__construct(), 1, argumentsSet('symfony_validator_ip_versions'));

    registerArgumentsSet('symfony_validator_type_types',
        'bool',
        'boolean',
        'int',
        'integer',
        'long',
        'float',
        'double',
        'real',
        'number',
        'finite-float',
        'finite-number',
        'numeric',
        'string',
        'scalar',
        'array',
        'list',
        'associative_array',
        'iterable',
        'countable',
        'callable',
        'object',
        'resource',
        'null',
        'alnum',
        'alpha',
        'cntrl',
        'digit',
        'graph',
        'lower',
        'print',
        'punct',
        'space',
        'upper',
        'xdigit'
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\Type::__construct(), 0, argumentsSet('symfony_validator_type_types'));

    // Symfony 7.2: Ulid constraint "format" option
    registerArgumentsSet('symfony_validator_ulid_formats',
        \Symfony\Component\Validator\Constraints\Ulid::FORMAT_BASE_32,
        \Symfony\Component\Validator\Constraints\Ulid::FORMAT_BASE_58,
        \Symfony\Component\Validator\Constraints\Ulid::FORMAT_RFC_4122,
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\Ulid::__construct(), 4, argumentsSet('symfony_validator_ulid_formats'));

    // Symfony 7.3: File constraint "filenameCountUnit" option
    registerArgumentsSet('symfony_validator_file_filename_count_units',
        \Symfony\Component\Validator\Constraints\File::FILENAME_COUNT_BYTES,
        \Symfony\Component\Validator\Constraints\File::FILENAME_COUNT_CODEPOINTS,
        \Symfony\Component\Validator\Constraints\File::FILENAME_COUNT_GRAPHEMES,
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\File::__construct(), 24, argumentsSet('symfony_validator_file_filename_count_units'));

    registerArgumentsSet('symfony_mb_encodings',
        'UCS-4',
        'UCS-4BE',
        'UCS-4LE',
        'UCS-2',
        'UCS-2BE',
        'UCS-2LE',
        'UTF-32',
        'UTF-32BE',
        'UTF-32LE',
        'UTF-16',
        'UTF-16BE',
        'UTF-16LE',
        'UTF-7',
        'UTF7-IMAP',
        'UTF-8',
        'ASCII',
        'EUC-JP',
        'SJIS',
        'eucJP-win',
        'SJIS-win',
        'ISO-2022-JP',
        'ISO-2022-JP-MS',
        'CP932',
        'CP51932',
        'MacJapanese',
        'SJIS-mac',
        'SJIS-Mobile#DOCOMO',
        'SJIS-Mobile#KDDI',
        'SJIS-Mobile#SOFTBANK',
        'SJIS-DOCOMO',
        'SJIS-KDDI',
        'SJIS-SOFTBANK',
        'UTF-8-Mobile#DOCOMO',
        'UTF-8-Mobile#KDDI-A',
        'UTF-8-Mobile#KDDI-B',
        'UTF-8-Mobile#SOFTBANK',
        'UTF-8-DOCOMO',
        'UTF-8-KDDI',
        'UTF-8-SOFTBANK',
        'ISO-2022-JP-MOBILE#KDDI',
        'ISO-2022-JP-KDDI',
        'JIS',
        'JIS-ms',
        'CP50220',
        'CP50220raw',
        'CP50221',
        'CP50222',
        'ISO-8859-1',
        'ISO-8859-2',
        'ISO-8859-3',
        'ISO-8859-4',
        'ISO-8859-5',
        'ISO-8859-6',
        'ISO-8859-7',
        'ISO-8859-8',
        'ISO-8859-9',
        'ISO-8859-10',
        'ISO-8859-13',
        'ISO-8859-14',
        'ISO-8859-15',
        'ISO-8859-16',
        'byte2be',
        'byte2le',
        'byte4be',
        'byte4le',
        'BASE64',
        'HTML',
        'HTML-ENTITIES',
        '7bit',
        '8bit',
        'EUC-CN',
        'CP936',
        'GB18030',
        'HZ',
        'EUC-TW',
        'CP950',
        'BIG-5',
        'EUC-KR',
        'UHC',
        'CP949',
        'ISO-2022-KR',
        'Windows-1251',
        'Windows-1252',
        'CP1251',
        'CP1252',
        'CP866',
        'IBM866',
        'KOI8-R',
        'KOI8-U',
        'ArmSCII-8',
        'ArmSCII8',
    );
    expectedArguments(\Symfony\Component\Validator\Constraints\File::__construct(), 23, argumentsSet('symfony_mb_encodings'));
}