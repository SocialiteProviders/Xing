<?php
namespace SocialiteProviders\Xing;

use SocialiteProviders\Manager\SocialiteWasCalled;

class XingExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'xing',
            __NAMESPACE__.'\Provider',
            __NAMESPACE__.'\Server'
        );
    }
}
