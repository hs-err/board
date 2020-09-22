<?php

namespace Commands;

use Console\Commands\Command;
use File\File;
use Phar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use WebServer\SwooleCoServer;
use WebServer\SwooleServer;

class ServerSwooleCoCommand extends Command
{
    protected function configure()
    {
        $this->setProcessTitle('AdminPHP swoole server');
        $this->setDescription('Run AdminPHP with swoole.');
        $this->setHelp('You can run AdminPHP without apache/nginx...');
        $this->addOption('host', 's', InputOption::VALUE_REQUIRED, 'Host you want run in.', '0.0.0.0');
        $this->addOption('port', 'p', InputOption::VALUE_REQUIRED, 'Port you want run in.', '8008');
    }

    protected function onCommand(InputInterface $input, OutputInterface $output)
    {
        new SwooleCoServer($input->getOption('host'), $input->getOption('port'));
        return 0;
    }

    protected static function sign(): string
    {
        return 'server:swoole:co';
    }
}
