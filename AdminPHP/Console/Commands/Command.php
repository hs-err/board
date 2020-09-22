<?php
namespace Console\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class Command extends \Symfony\Component\Console\Command\Command
{
    public static function getDefaultName()
    {
        return static::sign();
    }
    protected function execute(InputInterface $input, OutputInterface $output){
        return $this->onCommand($input,$output);
    }
    abstract protected function onCommand(InputInterface $input, OutputInterface $output);
    abstract protected static function sign():string;
}