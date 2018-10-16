<?php

namespace app\core\admin;

use steroids\base\Module;

class CoreAdminModule extends Module
{
    public static function siteMap()
    {
        return [
            'admin' => [
                'label' => 'Панель управления',
                'redirectToChild' => true,
            ],
        ];
    }
}