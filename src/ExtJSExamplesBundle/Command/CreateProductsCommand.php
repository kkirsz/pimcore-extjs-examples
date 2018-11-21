<?php

declare(strict_types=1);

namespace KKirsz\ExtJSExamplesBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CreateProductsCommand
 * @package KKirsz\ExtJSExamplesBundle\Command
 */
class CreateProductsCommand extends Command
{
    /**
     *
     */
    protected function configure()
    {
        $this->setName('kkirsz:extjs-examples:create-products');
        $this->setDescription('Creates sample products');

        $this->addOption(
            'number',
            'n',
            InputArgument::OPTIONAL,
            'Number of products',
            100
        );
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $n = max(0, (int) $input->getOption('number'));

        if ($n > 0) {
            $output->writeln(sprintf('<info>Creating %d products</info>', $n));

            $progress = new ProgressBar($output, $n);
            $progress->start();

            for ($i = 0; $i < $n; $i++) {
                $progress->advance();
            }

            $progress->finish();

            $output->writeln('');
            $output->writeln('<info>DONE</info>');
        }
    }
}
