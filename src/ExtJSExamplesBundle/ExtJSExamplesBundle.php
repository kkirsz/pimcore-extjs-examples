<?php

namespace KKirsz\ExtJSExamplesBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

/**
 * Class ExtJSExamplesBundle
 * @package KKirsz\ExtJSExamplesBundle
 */
class ExtJSExamplesBundle extends AbstractPimcoreBundle
{
    /**
     * @return Installer
     */
    public function getInstaller()
    {
        return $this->container->get(Installer::class);
    }

    /**
     * @return array
     */
    public function getJsPaths()
    {
        return [
            '/bundles/extjsexamples/js/pimcore/startup.js'
        ];
    }
}
