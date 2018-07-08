<?php

return [
    \yii\web\Application::class => \yii\di\Reference::to('application'),
    'application' => [
        '__class' => \yii\web\Application::class,
        'id' => 'web',
        'name' => 'web',
    ],

    \yii\web\Request::class => \yii\di\Reference::to('request'),

    'assetManager' => [
        '__class' => \yii\web\AssetManager::class,
    ],
    'urlManager' => [
        '__class' => \yii\web\UrlManager::class,
    ],
    'view' => [
        '__class' => \yii\web\View::class,
    ],
    'request' => [
        '__class' => \yii\web\Request::class,
    ],
    'response' => [
        '__class' => \yii\web\Response::class,
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

    /// TODO: move to swiftmailer
    'mailer' => [
        '__class' => \yii\swiftmailer\Mailer::class,
    ],
];
