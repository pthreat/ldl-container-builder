<?php declare(strict_types=1);

namespace LDL\DependencyInjection\Container\Builder;

use LDL\DependencyInjection\CompilerPass\Finder\CompilerPassFinderInterface;
use LDL\DependencyInjection\CompilerPass\Reader\CompilerPassReaderInterface;
use LDL\DependencyInjection\Service\Compiler\Exception\CompileErrorException;
use LDL\DependencyInjection\Service\Compiler\ServiceCompilerInterface;
use LDL\DependencyInjection\Service\Finder\Exception\NoFilesFoundException as NoServicesFoundException;
use LDL\DependencyInjection\Container\Writer\Exception\FileAlreadyExistsException;
use LDL\DependencyInjection\Service\Finder\ServiceFileFinderInterface;
use LDL\DependencyInjection\Service\Reader\ServiceFileReaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

interface LDLContainerBuilderInterface
{
    /**
     * @throws CompileErrorException
     * @throws NoServicesFoundException
     * @throws FileAlreadyExistsException
     */
    public function build(): ContainerBuilder;

    /**
     * @return ServiceFileFinderInterface
     */
    public function getServiceFinder() : ServiceFileFinderInterface;

    /**
     * @return ServiceFileReaderInterface
     */
    public function getServiceReader(): ServiceFileReaderInterface;

    /**
     * @return ServiceCompilerInterface
     */
    public function getServiceCompiler(): ServiceCompilerInterface;

    /**
     * @return CompilerPassFinderInterface
     */
    public function getCompilerPassFinder() : CompilerPassFinderInterface;

    /**
     * @return CompilerPassReaderInterface
     */
    public function getCompilerPassReader() : CompilerPassReaderInterface;
}