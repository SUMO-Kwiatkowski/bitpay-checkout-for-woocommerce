<?php

/*
 * This file is part of the Fidry\Console package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare (strict_types=1);
namespace BitPayVendor\Fidry\Console\Application;

use BitPayVendor\Fidry\Console\Command\Command as FidryCommand;
use BitPayVendor\Fidry\Console\Command\LazyCommand as FidryLazyCommand;
use BitPayVendor\Fidry\Console\Command\SymfonyCommand;
use BitPayVendor\Fidry\Console\Input\IO;
use LogicException;
use BitPayVendor\Symfony\Component\Console\Application as BaseSymfonyApplication;
use BitPayVendor\Symfony\Component\Console\Command\Command as BaseSymfonyCommand;
use BitPayVendor\Symfony\Component\Console\Command\LazyCommand as SymfonyLazyCommand;
use BitPayVendor\Symfony\Component\Console\CommandLoader\CommandLoaderInterface;
use BitPayVendor\Symfony\Component\Console\Helper\HelperSet;
use BitPayVendor\Symfony\Component\Console\Input\InputDefinition;
use BitPayVendor\Symfony\Component\Console\Input\InputInterface;
use BitPayVendor\Symfony\Component\Console\Output\OutputInterface;
use BitPayVendor\Symfony\Contracts\Service\ResetInterface;
use function array_map;
use function array_values;
/**
 * Bridge to create a traditional Symfony application from the new Application
 * API.
 */
final class SymfonyApplication extends BaseSymfonyApplication
{
    private Application $application;
    public function __construct(Application $application)
    {
        $this->application = $application;
        parent::__construct($application->getName(), $application->getVersion());
        $this->setDefaultCommand($application->getDefaultCommand());
        $this->setAutoExit($application->isAutoExitEnabled());
        $this->setCatchExceptions($application->areExceptionsCaught());
    }
    public function reset() : void
    {
        if ($this->application instanceof ResetInterface) {
            $this->application->reset();
        }
    }
    public function setHelperSet(HelperSet $helperSet) : void
    {
        throw new LogicException('Not supported');
    }
    public function setDefinition(InputDefinition $definition) : void
    {
        throw new LogicException('Not supported');
    }
    public function getHelp() : string
    {
        return $this->application->getHelp();
    }
    public function getLongVersion() : string
    {
        return $this->application->getLongVersion();
    }
    public function setCommandLoader(CommandLoaderInterface $commandLoader) : void
    {
        throw new LogicException('Not supported');
    }
    public function setSignalsToDispatchEvent(int ...$signalsToDispatchEvent) : void
    {
        throw new LogicException('Not supported');
    }
    public function setName(string $name) : void
    {
        throw new LogicException('Not supported');
    }
    public function setVersion(string $version) : void
    {
        throw new LogicException('Not supported');
    }
    protected function configureIO(InputInterface $input, OutputInterface $output) : void
    {
        parent::configureIO($input, $output);
        if ($this->application instanceof ConfigurableIO) {
            $this->application->configureIO(new IO($input, $output));
        }
    }
    protected function getDefaultCommands() : array
    {
        return [...parent::getDefaultCommands(), ...$this->getSymfonyCommands()];
    }
    /**
     * @return list<BaseSymfonyCommand>
     */
    private function getSymfonyCommands() : array
    {
        return array_values(array_map(static fn(FidryCommand $command) => self::crateSymfonyCommand($command), $this->application->getCommands()));
    }
    private static function crateSymfonyCommand(FidryCommand $command) : BaseSymfonyCommand
    {
        if ($command instanceof FidryLazyCommand) {
            return new SymfonyLazyCommand($command::getName(), [], $command::getDescription(), \false, static fn() => new SymfonyCommand($command), \true);
        }
        return new SymfonyCommand($command);
    }
}