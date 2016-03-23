<?php

namespace ShopwarePlugin;

use Composer\Package\PackageInterface;
use Composer\Repository\RepositoryInterface;

class ShopwareRepository implements RepositoryInterface
{
    const SEARCH_FULLTEXT = 0;
    const SEARCH_NAME = 1;

    /**
     * ShopwareRepository constructor.
     */
    public function __construct()
    {
    }

    /**
     * Checks if specified package registered (installed).
     *
     * @param PackageInterface $package package instance
     *
     * @return bool
     */
    public function hasPackage(PackageInterface $package)
    {

    }

    /**
     * Searches for the first match of a package by name and version.
     *
     * @param string $name package name
     * @param string|\Composer\Semver\Constraint\ConstraintInterface $constraint package version or version constraint to match against
     *
     * @return PackageInterface|null
     */
    public function findPackage($name, $constraint)
    {

    }

    /**
     * Searches for all packages matching a name and optionally a version.
     *
     * @param string $name package name
     * @param string|\Composer\Semver\Constraint\ConstraintInterface $constraint package version or version constraint to match against
     *
     * @return PackageInterface[]
     */
    public function findPackages($name, $constraint = null)
    {

    }

    /**
     * Returns list of registered packages.
     *
     * @return PackageInterface[]
     */
    public function getPackages()
    {

    }

    /**
     * Searches the repository for packages containing the query
     *
     * @param  string $query search query
     * @param  int $mode a set of SEARCH_* constants to search on, implementations should do a best effort only
     * @return array[] an array of array('name' => '...', 'description' => '...')
     */
    public function search($query, $mode = 0)
    {
        var_dump("search");
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {

    }
}