<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestSuite
{
    private string $name;

    private TestDirectoryCollection $directories;

    private TestFileCollection $files;

    private FileCollection $exclude;

    private FileCollection $bootstraps;

    public function __construct(string $name, TestDirectoryCollection $directories, TestFileCollection $files, FileCollection $exclude, FileCollection $bootstraps)
    {
        $this->name        = $name;
        $this->directories = $directories;
        $this->files       = $files;
        $this->exclude     = $exclude;
        $this->bootstraps  = $bootstraps;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function directories(): TestDirectoryCollection
    {
        return $this->directories;
    }

    public function files(): TestFileCollection
    {
        return $this->files;
    }

    public function exclude(): FileCollection
    {
        return $this->exclude;
    }

    public function bootstraps(): FileCollection
    {
        return $this->bootstraps;
    }
}
