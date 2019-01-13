<?php

use yii\db\Migration;

/**
 * Class m190112_200827_populate_user
 * Заливка пользователей в таблицу user
 */
class m190112_200827_populate_user extends Migration
{


    public function up()
    {
        $this->execute("
            INSERT INTO `user` (`username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES 
            ('Vasja', '123456', '123456', 'v123456', 'v-mail@mail.e', '10', '1329899400', '1329899400'), 
            ('Petja', '123456', '123456', 'p123456', 'p-mail@mail.e', '10', '1329899400', '1329899400'),
            ('Fedja', '123456', '123456', 'f123456', 'f-mail@mail.e', '10', '1329899400', '1329899400'),
            ('Olja', '123456', '123456', 'o123456', 'o-mail@mail.e', '10', '1329899400', '1329899400'),
            ('Polja', '123456', '123456', 'e123456', 'e-mail@mail.e', '10', '1329899400', '1329899400');
        ");
    }

    public function down()
    {
        $this->execute('DELETE FROM user');

        return false;
    }

}
