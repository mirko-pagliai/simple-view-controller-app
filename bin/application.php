#!/usr/bin/env php
<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;

(new SingleCommandApplication())
    ->setName('My Super Command') // Optional
    ->setVersion('1.0.0') // Optional
    ->setCode(function (InputInterface $input, OutputInterface $output): int {
        $output->writeln('Hello World!');

        return Command::SUCCESS;
    })
    ->run();
