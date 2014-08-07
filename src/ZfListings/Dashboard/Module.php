<?php
/**
 * ZfListings
 * Dashboard module
 *
 * @copyright Copyright (c) 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://yasselavila.com/license/new-bsd New BSD License
 * @link      https://github.com/zf-listings/dashboard-module
 */

namespace ZfListings\Dashboard;

use Tryd\Base\Module\AbstractModule;

class Module extends AbstractModule
{
    /**
     * {inheritDoc}
     */
    public function getModuleDependencies()
    {
        return [
            'Tryd\Dashboard',
            'ZfListings\Base',
        ];
    }
}
