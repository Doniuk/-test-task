<?php

namespace App\Command;

use App\Service\Json;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class JsonCommand extends Command
{
    /**
     * @var Json
     */
    private $json;

    public function __construct(Json $json)
    {
        $this->json=$json;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app:json')
        ->setDescription('JSON')
        ->addArgument(
            'path',
            InputArgument::REQUIRED, 'Path of the json file.');
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $path = $input->getArgument('path');
        $output->writeln($this->json->jsonarray($path));
    }
}
