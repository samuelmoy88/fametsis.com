<?php namespace Samuel\Fametsis\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Treatments Back-end Controller
 */
class Treatments extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Samuel.Fametsis', 'fametsis', 'treatments');
    }
}
