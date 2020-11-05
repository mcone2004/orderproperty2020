<?php

namespace ThemeTaschenmesser\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemeSingleItemVueTemplateContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ThemeTaschenmesser::Components.Item.SingleItem');
    }
}
