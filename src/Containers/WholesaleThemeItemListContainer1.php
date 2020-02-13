<?php

namespace WholesaleTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class WholesaleThemeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('WholesaleTheme::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}