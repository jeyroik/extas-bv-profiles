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
    protected $selfItemClass = Profile::class;
    protected $selfName = 'business value profile';
    protected $selfSection = 'bv_profiles';
    protected $selfUID = Profile::FIELD__NAME;
    protected $selfRepositoryClass = IProfileRepository::class;
}
