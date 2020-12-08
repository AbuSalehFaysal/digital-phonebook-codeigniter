<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Admin_Model
 * Model class for application's database handle
 *
 * @property CI_DB_query_builder $db
 *
 */
class M_User extends CI_Model {

    public function insertUserData(string $name, string $email, string $pass) {
        $userInfo = [
          'name' => $name,
          'email' => $email,
          'pass' => password_hash($pass, PASSWORD_BCRYPT, ['cost' => 12]),
          'status' => 1
        ];

        $result = $this->db->insert(user_info, $userInfo);
        return $result ? $this->db->insert_id() : false;
    }

}




