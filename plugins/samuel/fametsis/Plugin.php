<?php namespace Samuel\Fametsis;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * fametsis Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Fametsis',
            'description' => 'Herramientas que potencian la web de Fametsis',
            'author'      => 'samuel',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Samuel\Fametsis\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'samuel.fametsis.all' => [
                'tab' => 'fametsis',
                'label' => 'Some permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'fametsis' => [
                'label'       => 'Fametsis',
                'url'         => Backend::url('samuel/fametsis/treatments'),
                'icon'        => 'icon-users',
                'permissions' => ['samuel.fametsis.all'],
                'order'       => 500,
                'sideMenu' => [
                    'treatments' => [
                        'label' => 'samuel.fametsis::lang.treatments.plugin_name',
                        'url' => Backend::url('samuel/fametsis/treatments'),
                        'icon' => 'icon-book',
                        'permissions' => ['samuel.fametsis.all']
                    ],
                ]
            ],
        ];
    }
}
