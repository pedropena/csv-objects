<?php

namespace CSVObjects\CSVObjectsBundle\Tests\StaticRepositories;

use CSVObjects\CSVObjectsBundle\Tests\Objects\School;

class StaticSchoolRepository
{
    /**
     * @var School[]
     */
    private static $schoolsByName;

    public static function addSchool(School $school)
    {
        self::$schoolsByName[$school->getName()] = $school;
    }

    /**
     * @param string $name
     *
     * @return School|null
     */
    public static function findSchoolByName($name)
    {
        return isset(self::$schoolsByName[$name])
            ? self::$schoolsByName[$name]
            : null;
    }

    /**
     * @return School[]
     */
    public static function getAllSchools()
    {
        return self::$schoolsByName;
    }
}
