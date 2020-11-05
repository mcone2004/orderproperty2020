<?php

namespace ThemeTaschenmesser\Containers;

use Plenty\Plugin\Templates\Twig;

class ThemeItemFilterVueTemplateContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('ThemeTaschenmesser::Components.ItemList.Filter.ItemFilter');
    }
}
