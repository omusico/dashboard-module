<?php
/**
 * ZfListings
 * User dashboard module
 *
 * @copyright Copyright (c) 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://yasselavila.com/license/new-bsd New BSD License
 * @link      https://github.com/zf-listings/user-dashboard-module
 */

namespace ZfListings\UserDashboard;

use Tryd\Base\Module\AbstractModule;

class Module extends AbstractModule
{
    /**
     * {inheritDoc}
     */
    public function getModuleDependencies()
    {
        return [
            'ZfListings\Base',
        ];
    }
}
