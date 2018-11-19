<?php

declare(strict_types=1);

namespace KKirsz\ExtJSExamplesBundle;

use Doctrine\DBAL\Migrations\Version;
use Doctrine\DBAL\Schema\Schema;
use Pimcore\Extension\Bundle\Installer\MigrationInstaller;
use Pimcore\Model\DataObject\ClassDefinition;

/**
 * Class Installer
 * @package KKirsz\ExtJSExamplesBundle
 */
class Installer extends MigrationInstaller
{
    const CLASS_NAME = 'product';

    /**
     * @param Schema $schema
     * @param Version $version
     */
    public function migrateInstall(Schema $schema, Version $version)
    {
        $class = ClassDefinition::getByName(self::CLASS_NAME);
        if (!$class instanceof ClassDefinition) {
            $class = ClassDefinition::create([
                'name'      => self::CLASS_NAME,
                'userOwner' => 0
            ]);
        }

        $json = file_get_contents(__DIR__ . '/Resources/install/class_product_export.json');
        ClassDefinition\Service::importClassDefinitionFromJson($class, $json, true, true);
    }

    /**
     * @param Schema $schema
     * @param Version $version
     */
    public function migrateUninstall(Schema $schema, Version $version)
    {
    }
}
