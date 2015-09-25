<?php

namespace Mmi\MmitvBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MmiMmitvBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
