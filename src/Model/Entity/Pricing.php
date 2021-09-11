<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pricing Entity
 *
 * @property int $id
 * @property string $name
 * @property int $amount
 * @property int $discount
 * @property int $total_website
 * @property string|null $color
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\PricingFeature[] $pricing_features
 */
class Pricing extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'amount' => true,
        'discount' => true,
        'total_website' => true,
        'color' => true,
        'created' => true,
        'modified' => true,
        'pricing_features' => true,
    ];
}
