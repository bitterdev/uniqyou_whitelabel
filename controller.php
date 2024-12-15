<?php

namespace Concrete\Package\UniqyouWhitelabel;

use Concrete\Core\Config\Repository\Repository;
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

    public function on_start()
    {
        /** @var Repository $config */
        /** @noinspection PhpUnhandledExceptionInspection */
        $config = $this->app->make(Repository::class);

        $config->set("concrete.white_label.logo", $this->getRelativePath() . "/images/logo.svg");
        $config->set("concrete.white_label.name", "uniqyou CMS");
    }

}
