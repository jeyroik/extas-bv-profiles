<?php
namespace extas\components\plugins;

use extas\components\bv\profiles\Profile;
use extas\interfaces\bv\profiles\IProfileRepository;

/**
 * Class PluginInstallBVProfiles
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallBVProfiles extends PluginInstallDefault
{
    protected string $selfItemClass = Profile::class;
    protected string $selfName = 'business value profile';
    protected string $selfSection = 'bv_profiles';
    protected string $selfUID = Profile::FIELD__NAME;
    protected string $selfRepositoryClass = IProfileRepository::class;
}
