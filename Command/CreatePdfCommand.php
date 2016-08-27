<?php namespace UCDavis\UCDPdftkBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CreatePdfCommand extends ContainerAwareCommand
{
    /**
     * Configures this command.
     *
     * Requires the following arguments:
     *      entity          (the fully qualified Entity name)
     *      pdf_template    (the path to the PDF template to start from)
     *      pdf_fields      (an array of the names of the fields you're sending data to)
     *
     * Optionally takes the following arguments:
     */
    protected function configure()
    {
        $this
            ->setName('ucdpdftk:create-pdf')
            ->setDescription('Creates a new PDF')
            ->setHelp('Allows you to generate a new blank PDF or a PDF from a template')
            ->addArgument('pdf_name', InputArgument::REQUIRED, 'The name of the mapped element from the config.yml ("pdfs") configuration file.')
            ->addArgument('id', InputArgument::OPTIONAL, 'The entity the PDF is being generated on behalf of or from (e.g., User data used for generating the PDF, so pass User ID).');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //
    }
}
