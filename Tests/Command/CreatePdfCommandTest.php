<?php namespace UCDavis\UCDPdftkBundle\Tests;

use UCDavis\UCDPdftkBundle\Command\CreatePdfCommand;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Exception\RuntimeException;

class CreatePdfCommandTest extends KernelTestCase
{
    /**
     * @var Application
     */
    private $application;

    private $command;

    private $commandTester;

    /**
     * @var Kernel
     */
    protected static $kernel;

    /**
     * Sets up the tests.
     */
    public function setUp()
    {
        self::$kernel = $this->createKernel();
        self::$kernel->boot();

        $this->application = new Application(self::$kernel);
        $this->application->add(new CreatePdfCommand());

        $this->command = $this->application->find('ucdpdftk:create-pdf');
        $this->commandTester = new CommandTester($this->command);
    }

    /**
     * Cleans up after testing.
     */
    public function tearDown()
    {
        unset($this->application);
        self::$kernel = null;
    }

    /**
     * Asserts command provides expected output.
     * TODO: write a better docblock.
     */
    public function testExecute()
    {
        $this->commandTester->execute([
            'command'      => $this->command->getName(),
            'entity'       => '',
            'pdf_template' => '',
            'pdf_fields'   => '',
        ]);

        $output = $this->commandTester->getDisplay();

        $this->assertContains('Expected Output', $output);
    }

    /**
     * When nothing is passed to the command, Symfony should throw a RuntimeException.
     *
     * @expectedException RuntimeException
     */
    public function testEmptyExecute()
    {
        $this->commandTester->execute([
            'command' => $this->command->getName(),
        ]);
    }
}
