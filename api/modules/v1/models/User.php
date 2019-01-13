<?php

namespace api\modules\v1\models;

use common\models\User AS ParentUser;

/**
 * User model
 * Для доп настроек при обращении к API на всякий случай унаследовались от основного
 *
 * @author 
 */
class User extends ParentUser
{

    /**
     * Define rules for validation
     */
    public function rules() {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'status'], 'required']
        ];
    }
}
