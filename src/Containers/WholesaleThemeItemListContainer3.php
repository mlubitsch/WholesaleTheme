<?php

namespace WholesaleTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class WholesaleThemeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('WholesaleTheme::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}