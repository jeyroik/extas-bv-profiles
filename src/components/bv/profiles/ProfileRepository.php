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
    protected string $itemClass = Profile::class;
    protected string $name = 'bv_profiles';
    protected string $pk = Profile::FIELD__NAME;
    protected string $scope = 'extas';
    protected string $idAs = '';
}
