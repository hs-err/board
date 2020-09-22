<?php


namespace Commands;


use Console\Commands\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{

    protected function onCommand(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('hi');
        return 0;
    }

    protected static function sign():string
    {
        return 'hello';
    }
}