<?php

use yii\di\Reference;

return [
    \yii\web\Application::class => Reference::to('application'),
    'application' => [
        '__class' => \yii\web\Application::class,
        'id' => 'web',
        'name' => 'web',
    ],

    'assetManager' => [
        '__class' => \yii\web\AssetManager::class,
    ],
    'urlManager' => [
        '__class' => \yii\web\UrlManager::class,
    ],
    'urlNormalizer' => [
        '__class' => \yii\web\UrlNormalizer::class,
    ],
    'view' => [
        '__class' => \yii\web\View::class,
    ],
    'request' => [
        '__class' => \yii\web\Request::class,
    ],
    'response' => [
        '__class' => \yii\web\Response::class,
        'formatters' => [
            \yii\web\Response::FORMAT_HTML => [
                '__class' => \yii\web\formatters\HtmlResponseFormatter::class,
            ],
            \yii\web\Response::FORMAT_XML => [
                '__class' => \yii\web\formatters\XmlResponseFormatter::class,
            ],
            \yii\web\Response::FORMAT_JSON => [
                '__class' => \yii\web\formatters\JsonResponseFormatter::class,
            ],
            \yii\web\Response::FORMAT_JSONP => [
                '__class' => \yii\web\formatters\JsonResponseFormatter::class,
                'useJsonp' => true,
            ],
        ],
    ],
    'session' => [
        '__class' => \yii\web\Session::class,
    ],
    'user' => [
        '__class' => \yii\web\User::class,
    ],
    'errorHandler' => [
        '__class' => \yii\web\ErrorHandler::class,
    ],

    'assetManager' => [
        '__class' => \yii\web\AssetManager::class,
    ],

    /// TODO: move to swiftmailer
    'mailer' => [
        '__class' => \yii\swiftmailer\Mailer::class,
    ],

    \yii\web\UrlNormalizer::class => Reference::to('urlNormalizer'),
];
