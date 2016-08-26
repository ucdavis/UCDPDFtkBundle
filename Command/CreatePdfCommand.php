<?php namespace UCDavis\UCDPdftkBundle\Command;

/*
 *
//use Symfony\Component\Console\Command\Command;    // todo: figure out which one we need
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\HttpKernel\KernelInterface;

class CreatePdfCommand extends ContainerAwareCommand
 */
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CreatePdfCommand extends Command
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
            ->addArgument('entity', InputArgument::REQUIRED, 'The fully qualified entity (ex: Acme\ApplicationBundle\Widget)')
            ->addArgument('pdf_template', InputArgument::REQUIRED, 'The location of the PDF template')
            ->addArgument('pdf_fields', InputArgument::IS_ARRAY | InputArgument::REQUIRED, 'The fields you want to input data into, separated by a space');

        /*
            ->setName('ucdpdftk:create-pdf')
            ->setDescription('Creates a new PDF')
            ->setDefinition([
                new InputOption('entity', InputOption::VALUE_REQUIRED, 'The fully qualified entity (ex: Acme\ApplicationBundle\Widget)'),
                new InputOption('entity_properties', InputOption::VALUE_REQUIRED, 'The entity properties for mapping to the PDF fields.'),
                new InputOption('pdf_template', InputOption::VALUE_REQUIRED, 'The location of the PDF template'),
                new InputOption('pdf_fields', InputOption::VALUE_REQURIED, 'The fields you want to input data into, separated by a space.'),
            ])
            ->setHelp('Allows you to generate a new blank PDF or a PDF from a template');
        */
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //
    }
}
