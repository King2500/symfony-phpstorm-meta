<?php

namespace PHPSTORM_META {

	override(\Symfony\Component\Serializer\Normalizer\DenormalizerInterface::denormalize(), type(1));
	override(\Symfony\Component\Serializer\SerializerInterface::deserialize(), type(1));

	registerArgumentsSet('symfony_csv_delimiters',
		',',
		';',
		//"\t",  // introduces bug in single quotes => '\t'
		'|',
		null
	);

	expectedArguments(\Symfony\Component\Serializer\Context\Encoder\CsvEncoderContextBuilder::withDelimiter(), 0, argumentsSet('symfony_csv_delimiters'));
	//expectedArguments(\Symfony\Component\Serializer\Context\Encoder\CsvEncoderContextBuilder::withEnclosure(), 0, '"', "'");
	expectedArguments(\Symfony\Component\Serializer\Context\Encoder\CsvEncoderContextBuilder::withEscapeChar(), 0, '\\');


	registerArgumentsSet('symfony_json_encode_options',
		JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_FORCE_OBJECT | JSON_PRESERVE_ZERO_FRACTION | JSON_UNESCAPED_UNICODE | JSON_PARTIAL_OUTPUT_ON_ERROR | JSON_UNESCAPED_LINE_TERMINATORS | JSON_THROW_ON_ERROR
	);
	registerArgumentsSet('symfony_json_decode_options',
		JSON_BIGINT_AS_STRING | JSON_OBJECT_AS_ARRAY | JSON_THROW_ON_ERROR
	);

	expectedArguments(\Symfony\Component\Serializer\Context\Encoder\JsonEncoderContextBuilder::withEncodeOptions(), 0, argumentsSet('symfony_json_encode_options'));
	expectedArguments(\Symfony\Component\Serializer\Context\Encoder\JsonEncoderContextBuilder::withDecodeOptions(), 0, argumentsSet('symfony_json_decode_options'));

	registerArgumentsSet('symfony_xml_encodings',
		'UTF-8',
		'UTF-16',
		'ISO-8859-1',
		'ISO-8859-15',
		'US-ASCII'
	);

	registerArgumentsSet('symfony_xml_options',
		LIBXML_BIGLINES |
		LIBXML_COMPACT |
		LIBXML_DTDATTR |
		LIBXML_DTDLOAD |
		LIBXML_DTDVALID |
		LIBXML_HTML_NOIMPLIED |
		LIBXML_HTML_NODEFDTD |
		LIBXML_NOBLANKS |
		LIBXML_NOCDATA |
		LIBXML_NOEMPTYTAG |
		LIBXML_NOENT |
		LIBXML_NOERROR |
		LIBXML_NONET |
		LIBXML_NOWARNING |
		LIBXML_NOXMLDECL |
		LIBXML_NSCLEAN |
		LIBXML_PARSEHUGE |
		LIBXML_PEDANTIC |
		LIBXML_XINCLUDE |
		LIBXML_SCHEMA_CREATE
	);

	expectedArguments(\Symfony\Component\Serializer\Context\Encoder\XmlEncoderContextBuilder::withEncoding(), 0, argumentsSet('symfony_xml_encodings'));
	expectedArguments(\Symfony\Component\Serializer\Context\Encoder\XmlEncoderContextBuilder::withLoadOptions(), 0, argumentsSet('symfony_xml_options'));
	expectedArguments(\Symfony\Component\Serializer\Context\Encoder\XmlEncoderContextBuilder::withVersion(), 0, '1.0', '1.1', null);

	registerArgumentsSet('symfony_yaml_encoder_flags',
		\Symfony\Component\Yaml\Yaml::DUMP_OBJECT |
		\Symfony\Component\Yaml\Yaml::DUMP_EXCEPTION_ON_INVALID_TYPE |
		\Symfony\Component\Yaml\Yaml::DUMP_OBJECT_AS_MAP |
		\Symfony\Component\Yaml\Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK |
		\Symfony\Component\Yaml\Yaml::DUMP_EMPTY_ARRAY_AS_SEQUENCE |
		\Symfony\Component\Yaml\Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE |
		\Symfony\Component\Yaml\Yaml::PARSE_OBJECT |
		\Symfony\Component\Yaml\Yaml::PARSE_OBJECT_FOR_MAP |
		\Symfony\Component\Yaml\Yaml::PARSE_DATETIME |
		\Symfony\Component\Yaml\Yaml::PARSE_CONSTANT |
		\Symfony\Component\Yaml\Yaml::PARSE_CUSTOM_TAGS
	);

	expectedArguments(\Symfony\Component\Serializer\Context\Encoder\YamlEncoderContextBuilder::withFlags(), 0, argumentsSet('symfony_yaml_encoder_flags'));
}
