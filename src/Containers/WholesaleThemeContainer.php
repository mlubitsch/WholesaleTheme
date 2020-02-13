<?php

namespace WholesaleTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class WholesaleThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('WholesaleTheme::Stylesheet');
    }
}