<?php

use yii\di\Reference;

return [
    \yii\web\Application::class => Reference::to('app'),
    'app' => [
        '__class' => \yii\web\Application::class,
        'aliases' => [
            '@webroot' => '@root/web',
        ],
    ],

    'assetManager' => [
        '__class'   => \yii\web\AssetManager::class,
        'aliases' => [
            '@bower' => '@vendor/bower-asset',
            '@npm' => '@vendor/npm-asset',
            '@vendor/bower' => '@vendor/bower-asset',
            '@vendor/npm' => '@vendor/npm-asset',
        ],
        'basePath'  => '@webroot/assets',
        'baseUrl'   => '@web/assets',
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
