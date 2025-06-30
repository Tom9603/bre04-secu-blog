<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class UserManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }

    public function findByEmail(string $email): ?User {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $query->execute(['email' => $email]);
        $item = $query->fetch(PDO::FETCH_ASSOC);

        if ($item) {
            $user = new User($item['username'], $item['email'], $item['password']);
            $user->setId((int)$item['id']);
            return $user;
        }

        return null;
    }
    
    public function create(User $user): void {
        $query = $this->db->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        $query->execute([
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ]);

        $user->setId((int)$this->db->lastInsertId());
    }
}