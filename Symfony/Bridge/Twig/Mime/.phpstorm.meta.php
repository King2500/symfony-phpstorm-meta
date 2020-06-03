<?php

namespace PHPSTORM_META {

    registerArgumentsSet('symfony_notification_email_importance',
        \Symfony\Bridge\Twig\Mime\NotificationEmail::IMPORTANCE_URGENT,
        \Symfony\Bridge\Twig\Mime\NotificationEmail::IMPORTANCE_HIGH,
        \Symfony\Bridge\Twig\Mime\NotificationEmail::IMPORTANCE_MEDIUM,
        \Symfony\Bridge\Twig\Mime\NotificationEmail::IMPORTANCE_LOW
    );

    expectedArguments(\Symfony\Bridge\Twig\Mime\NotificationEmail::importance(), 0, argumentsSet('symfony_notification_email_importance'));
}