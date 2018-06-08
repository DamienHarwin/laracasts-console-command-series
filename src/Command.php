<?php

namespace Acme;
use \Symfony\Component\Console\Command\Command as SymfonyCommand
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyCommand
{

    /**
     * @var DatabaseAdapter
     */
    protected $database;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;
        parent::__construct();
    }

    public function configure()
    {
        $this->setName('')
             ->setDescription('');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
