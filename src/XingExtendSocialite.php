<?php
namespace SocialiteProviders\Xing;

use SocialiteProviders\Manager\SocialiteWasCalled;

class XingExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'xing', __NAMESPACE__.'\Provider', __NAMESPACE__.'\Server'
        );
    }
}
