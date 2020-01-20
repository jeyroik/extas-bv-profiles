<?php
namespace extas\interfaces\bv\profiles;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;

/**
 * Interface IProfile
 *
 * @package extas\interfaces\bv\profiles
 * @author jeyroik@gmail.com
 */
interface IProfile extends IItem, IHasName, IHasDescription
{
    const SUBJECT = 'extas.bv.profile';

    const FIELD__WEIGHTS = 'weights';

    /**
     * @param array $default
     *
     * @return array [subCat0 => weight0, ...]
     */
    public function getWeights(array $default = []): array;

    /**
     * @param array $weights
     *
     * @return IProfile
     */
    public function setWeights(array $weights): IProfile;

    /**
     * @param string $subcategoryName
     * @param int $defaultWeight
     *
     * @return int
     */
    public function getSubcategoryWeight(string $subcategoryName, int $defaultWeight = 1): int;
}
