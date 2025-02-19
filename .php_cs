<?php
$config = \PhpCsFixer\Config::create()
->setFinder(
    PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('tests')
    ->in(__DIR__)
);
\PhpCsFixer\FixerFactory::create()
->registerBuiltInFixers()
->useRuleSet(new \PhpCsFixer\RuleSet($config->getRules()));
return $config;
