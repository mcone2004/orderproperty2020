<?php

namespace ThemeTaschenmesser\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemeOrderPropertyListItemVueTemplateContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ThemeTaschenmesser::Components.Item.OrderPropertyListItem');
    }
}
