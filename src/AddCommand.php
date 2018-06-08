<?php

namespace Acme;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AddCommand
{
    public function configure()
    {
        $this->setName('add')
             ->setDescription('Add a new task');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
