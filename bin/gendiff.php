#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$doc = <<<DOC
    Generate diff

    Usage:
      gendiff (-h|--help)
      gendiff (-v|--version)
      gendiff [--format <fmt>] <firstFile> <secondFile>


    Options:
      -h --help                     Show this screen
      -v --version                  Show version
      --format <fmt>                Report format [default: stylish]

DOC;

$args = Docopt::handle($doc);


