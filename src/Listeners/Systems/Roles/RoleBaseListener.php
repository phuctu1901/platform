<?php

namespace Orchid\Platform\Listeners\Systems\Roles;

use Orchid\Platform\Http\Forms\Systems\Roles\BaseRolesForm;

class RoleBaseListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @return string
     *
     * @internal param RolesEvent $event
     */
    public function handle() : string
    {
        return BaseRolesForm::class;
    }
}
