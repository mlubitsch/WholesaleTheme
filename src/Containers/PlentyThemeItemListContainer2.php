<?php

namespace WholesaleTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class WholesaleThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('WholesaleTheme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}