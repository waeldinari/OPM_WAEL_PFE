<?php

namespace OPM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OPMUserBundle extends Bundle
{
   public function getParent()
    {
        return 'FOSUserBundle';
    }
}
