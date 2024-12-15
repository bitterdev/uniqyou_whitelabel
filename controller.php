<?php

namespace Concrete\Package\UniqyouWhitelabel;

use Concrete\Core\Package\Package;

class Controller extends Package
{
    protected string $pkgHandle = 'uniqyou_whitelabel';
    protected string $pkgVersion = '0.0.0';
    protected $appVersionRequired = '9.0.0';

    public function getPackageDescription(): string
    {
        return t('Concrete CMS white-labeling solution for uniqyou client projects.');
    }

    public function getPackageName(): string
    {
        return t('uniqyou whitelabel');
    }

}
