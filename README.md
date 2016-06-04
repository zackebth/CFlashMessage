[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zackebth/CFlashMessage/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zackebth/CFlashMessage/?branch=master)  [![Code Coverage](https://scrutinizer-ci.com/g/zackebth/CFlashMessage/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/zackebth/CFlashMessage/?branch=master)  [![Build Status](https://scrutinizer-ci.com/g/zackebth/CFlashMessage/badges/build.png?b=master)](https://scrutinizer-ci.com/g/zackebth/CFlashMessage/build-status/master)

Class to show flash messages.
=========

  1.  Add this to your composer.json file. "require": { "zama15/cflashmessage": "dev-master" }

  2.  Then use composer/packagist to download the package.

  3.  Use this in your frontcontroller to get the the function to work. $di->setShared('flashMessages', function() use ($di){ $flashMessages = new \zama15\FlashMessage\CFlashMessage($di); return $flashMessages; });

  4.  In the router you need to add the css-stylesheet flash.css

  5.  Example code to show the messages. $app->router->add('flash', function() use ($app) {

    $title = "Flashmeddelanden"; $app->theme->setTitle($title); $app->theme->addStylesheet('css/flash.css');

    $app->flashMessages->addMessage('Success!', 'success'); $app->flashMessages->addMessage('Info', 'info'); $app->flashMessages->addMessage('Warning!', 'warning'); $app->flashMessages->addMessage('Error!', 'error');

    $app->views->add('me/page', [ 'content' => $app->flashMessages->getFlashMessages(), ]);

});
