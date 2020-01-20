<?php
namespace extas\components\bv\profiles;

use extas\components\repositories\Repository;
use extas\interfaces\bv\profiles\IProfileRepository;

/**
 * Class ProfileRepository
 *
 * @package extas\components\bv\profiles
 * @author jeyroik@gmail.com
 */
class ProfileRepository extends Repository implements IProfileRepository
{
    protected $itemClass = Profile::class;
    protected $name = 'bv_profiles';
    protected $pk = Profile::FIELD__NAME;
    protected $scope = 'extas';
    protected $idAs = '';
}
