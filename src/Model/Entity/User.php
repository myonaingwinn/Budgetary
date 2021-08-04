<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $role
 * @property \Cake\I18n\FrozenTime|null $last_login
 * @property string|null $other
 * @property string|null $token
 * @property \Cake\I18n\FrozenTime $created
 * @property string $del_flg
 * @property string|null $profile_pic
 */
class User extends Entity
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
        'uid' => true,
        'name' => true,
        'email' => true,
        'password' => true,
        'role' => true,
        'last_login' => true,
        'other' => true,
        'token' => true,
        'created' => true,
        'del_flg' => true,
        'profile_pic' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token',
    ];
}
