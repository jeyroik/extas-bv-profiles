<?php
namespace extas\components\bv\profiles;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\interfaces\bv\profiles\IProfile;

/**
 * Class Profile
 *
 * @package extas\components\bv\profiles
 * @author jeyroik@gmail.com
 */
class Profile extends Item implements IProfile
{
    use THasName;
    use THasDescription;

    /**
     * @param array $default
     *
     * @return array
     */
    public function getWeights(array $default = []): array
    {
        return $this->config[static::FIELD__WEIGHTS] ?? $default;
    }

    /**
     * @param array $weights
     *
     * @return IProfile
     */
    public function setWeights(array $weights): IProfile
    {
        $this->config[static::FIELD__WEIGHTS] = $weights;

        return $this;
    }

    /**
     * @param string $subcategoryName
     * @param int $defaultWeight
     *
     * @return int
     */
    public function getSubcategoryWeight(string $subcategoryName, int $defaultWeight = 1): int
    {
        $weights = $this->getWeights();

        return $weights[$subcategoryName] ?? $defaultWeight;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
