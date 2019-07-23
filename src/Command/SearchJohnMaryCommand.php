<?php

namespace App\Command;

use App\Service\Search;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SearchJohnMaryCommand extends Command
{
    /**
     * @var Search
     */
    private $search;

    public function __construct(Search $search)
    {
        $this->search=$search;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app:search')
        ->setDescription('It will check if “John” and “Mary” names are found the same number of times inside the provided text')
        ->addArgument(
            'names',
            InputArgument::IS_ARRAY
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $names = $input->getArgument('names');
        $output->writeln($this->search->search_john_mary($names));
    }
}