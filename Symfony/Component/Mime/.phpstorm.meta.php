<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_mime_email_priorities',
		\Symfony\Component\Mime\Email::PRIORITY_HIGHEST,
		\Symfony\Component\Mime\Email::PRIORITY_HIGH,
		\Symfony\Component\Mime\Email::PRIORITY_NORMAL,
		\Symfony\Component\Mime\Email::PRIORITY_LOW,
		\Symfony\Component\Mime\Email::PRIORITY_LOWEST
	);
	expectedArguments(\Symfony\Component\Mime\Email::priority(), 0, argumentsSet('symfony_mime_email_priorities'));
	expectedReturnValues(\Symfony\Component\Mime\Email::getPriority(), argumentsSet('symfony_mime_email_priorities'));

	registerArgumentsSet('symfony_mime_media_types',
		'text',
		'message',
		'image',
		'video',
		'application'
	);
	expectedReturnValues(\Symfony\Component\Mime\Part\AbstractPart::getMediaType(), argumentsSet('symfony_mime_media_types'));

	registerArgumentsSet('symfony_mime_media_text_subtypes',
		'plain',
		'html'
	);
	expectedArguments(\Symfony\Component\Mime\Part\TextPart::__construct(), 2, argumentsSet('symfony_mime_media_text_subtypes'));
	expectedReturnValues(\Symfony\Component\Mime\Part\TextPart::getMediaSubtype(), argumentsSet('symfony_mime_media_text_subtypes'));

	registerArgumentsSet('symfony_mime_header_types',
		'MailboxList',
		'Mailbox',
		'Id',
		'Path',
		'Date',
		'Text',
		'Parameterized'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::setHeaderBody(), 0, argumentsSet('symfony_mime_header_types'));

	registerArgumentsSet('symfony_mime_header_names',
		'From',
		'To',
		'Cc',
		'Bcc',
		'Reply-To',
		'Subject',
		'Date',
		'Return-Path',
		'Message-ID',
		'In-Reply-To',
		'References',
		'Sender',
		'X-Priority',
		'Content-Type',
		'Content-ID',
		'Content-Transfer-Enconding',
		'Content-Disposition',
		'MIME-Version'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::has(), 0, argumentsSet('symfony_mime_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::get(), 0, argumentsSet('symfony_mime_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::getAll(), 0, argumentsSet('symfony_mime_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::remove(), 0, argumentsSet('symfony_mime_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::getHeaderBody(), 0, argumentsSet('symfony_mime_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::setHeaderBody(), 1, argumentsSet('symfony_mime_header_names'));
	expectedReturnValues(\Symfony\Component\Mime\Header\HeaderInterface::getName(), argumentsSet('symfony_mime_header_names'));

	registerArgumentsSet('symfony_mime_mailboxlist_header_names',
		'From',
		'To',
		'Cc',
		'Bcc',
		'Reply-To'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::addMailboxListHeader(), 0, argumentsSet('symfony_mime_mailboxlist_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\MailboxListHeader::__construct(), 0, argumentsSet('symfony_mime_mailboxlist_header_names'));

	registerArgumentsSet('symfony_mime_mailbox_header_names',
		'From',
		'Sender'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::addMailboxHeader(), 0, argumentsSet('symfony_mime_mailbox_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\MailboxHeader::__construct(), 0, argumentsSet('symfony_mime_mailbox_header_names'));

	registerArgumentsSet('symfony_mime_id_header_names',
		'Message-ID',
		'Content-ID',
		'In-Reply-To',
		'References'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::addIdHeader(), 0, argumentsSet('symfony_mime_id_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\IdentificationHeader::__construct(), 0, argumentsSet('symfony_mime_id_header_names'));

	registerArgumentsSet('symfony_mime_path_header_names',
		'Return-Path'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::addPathHeader(), 0, argumentsSet('symfony_mime_path_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\PathHeader::__construct(), 0, argumentsSet('symfony_mime_path_header_names'));

	registerArgumentsSet('symfony_mime_date_header_names',
		'Date'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::addDateHeader(), 0, argumentsSet('symfony_mime_date_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\DateHeader::__construct(), 0, argumentsSet('symfony_mime_date_header_names'));

	registerArgumentsSet('symfony_mime_text_header_names',
		'Subject',
		'Content-Transfer-Encoding',
		'MIME-Version'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::addTextHeader(), 0, argumentsSet('symfony_mime_text_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\UnstructuredHeader::__construct(), 0, argumentsSet('symfony_mime_text_header_names'));

	registerArgumentsSet('symfony_mime_parametrized_header_names',
		'Content-Type',
		'Content-Disposition'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::addParameterizedHeader(), 0, argumentsSet('symfony_mime_parametrized_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::getHeaderParameter(), 0, argumentsSet('symfony_mime_parametrized_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::setHeaderParameter(), 0, argumentsSet('symfony_mime_parametrized_header_names'));
	expectedArguments(\Symfony\Component\Mime\Header\ParameterizedHeader::__construct(), 0, argumentsSet('symfony_mime_parametrized_header_names'));

	registerArgumentsSet('symfony_mime_header_parameter_names',
		'name',
		'filename',
		'charset',
		'boundary'
	);
	expectedArguments(\Symfony\Component\Mime\Header\Headers::getHeaderParameter(), 1, argumentsSet('symfony_mime_header_parameter_names'));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::setHeaderParameter(), 1, argumentsSet('symfony_mime_header_parameter_names'));
	expectedArguments(\Symfony\Component\Mime\Header\ParameterizedHeader::setParameter(), 0, argumentsSet('symfony_mime_header_parameter_names'));
	expectedArguments(\Symfony\Component\Mime\Header\ParameterizedHeader::getParameter(), 0, argumentsSet('symfony_mime_header_parameter_names'));

	registerArgumentsSet('symfony_mime_header_parameter_keys', array(
		'name' => '',
		'filename' => '',
		'charset' => '',
		'boundary' => ''
	));
	expectedArguments(\Symfony\Component\Mime\Header\Headers::addParameterizedHeader(), 2, argumentsSet('symfony_mime_header_parameter_keys'));
	expectedArguments(\Symfony\Component\Mime\Header\ParameterizedHeader::__construct(), 2, argumentsSet('symfony_mime_header_parameter_keys'));
	expectedArguments(\Symfony\Component\Mime\Header\ParameterizedHeader::setParameters(), 0, argumentsSet('symfony_mime_header_parameter_keys'));
	expectedReturnValues(\Symfony\Component\Mime\Header\ParameterizedHeader::getParameters(), argumentsSet('symfony_mime_header_parameter_keys'));

	expectedArguments(\Symfony\Component\Mime\Header\Headers::isUniqueHeader(), 0, 'date', 'from', 'sender', 'reply-to', 'to', 'cc', 'bcc', 'message-id', 'in-reply-to', 'references', 'subject');

	registerArgumentsSet('symfony_mime_charsets',
		'utf-8',
		'iso-8859-1'
	);
	expectedArguments(\Symfony\Component\Mime\Email::text(), 1, argumentsSet('symfony_mime_charsets'));
	expectedArguments(\Symfony\Component\Mime\Email::html(), 1, argumentsSet('symfony_mime_charsets'));
	expectedReturnValues(\Symfony\Component\Mime\Email::getTextCharset(), argumentsSet('symfony_mime_charsets'));
	expectedReturnValues(\Symfony\Component\Mime\Email::getHtmlCharset(), argumentsSet('symfony_mime_charsets'));
	expectedArguments(\Symfony\Component\Mime\Part\TextPart::__construct(), 1, argumentsSet('symfony_mime_charsets'));

	registerArgumentsSet('symfony_mime_text_encodings',
		'quoted-printable',
		'base64',
		'8bit'
	);
	expectedArguments(\Symfony\Component\Mime\Part\TextPart::__construct(), 3, argumentsSet('symfony_mime_text_encodings'));
	expectedArguments(\Symfony\Component\Mime\Part\DataPart::__construct(), 3, argumentsSet('symfony_mime_text_encodings'));

	expectedArguments(\Symfony\Component\Mime\Part\TextPart::setDisposition(), 0, 'inline', 'attachment', 'form-data');

	registerArgumentsSet('symfony_mime_mimetypes',
		'text/plain',
		'text/html',
		'text/css',
		'text/xml',
		'text/csv',
		'image/jpeg',
		'image/png',
		'image/gif',
		'audio/mpeg',
		'audio/ogg',
		'application/pdf',
		'application/zip',
		'application/javascript',
		'application/json',
		'application/x-www-form-urlencoded',
		'application/xml',
		'application/sql',
		'application/graphql',
		'application/ld+json',
		'application/msword',
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
		'application/vnd.ms-excel',
		'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
		'application/vnd.ms-powerpoint',
		'application/vnd.openxmlformats-officedocument.presentationml.presentation',
		'application/vnd.oasis.opendocument.text',
		'application/octet-stream',
		'multipart/form-data'
	);
	expectedArguments(\Symfony\Component\Mime\MimeTypes::getExtensions(), 0, argumentsSet('symfony_mime_mimetypes'));
	//expectedReturnValues(\Symfony\Component\Mime\MimeTypes::getMimeTypes(), array(argumentsSet('symfony_mime_mimetypes')));
	expectedReturnValues(\Symfony\Component\Mime\MimeTypes::guessMimeType(), argumentsSet('symfony_mime_mimetypes'));
	expectedArguments(\Symfony\Component\Mime\Part\DataPart::__construct(), 2, argumentsSet('symfony_mime_mimetypes'));
	expectedArguments(\Symfony\Component\Mime\Part\DataPart::fromPath(), 2, argumentsSet('symfony_mime_mimetypes'));
	expectedArguments(\Symfony\Component\Mime\Email::attach(), 2, argumentsSet('symfony_mime_mimetypes'));
	expectedArguments(\Symfony\Component\Mime\Email::attachFromPath(), 2, argumentsSet('symfony_mime_mimetypes'));
	expectedArguments(\Symfony\Component\Mime\Email::embed(), 2, argumentsSet('symfony_mime_mimetypes'));
	expectedArguments(\Symfony\Component\Mime\Email::embedFromPath(), 2, argumentsSet('symfony_mime_mimetypes'));
}