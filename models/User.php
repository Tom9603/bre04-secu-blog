<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class User
{
    private ?int $id = null;
    private string $username;
    private string $email;
    private string $password;
    private string $role;
    private \DateTimeImmutable $created_at;

    public function __construct(string $username, string $email, string $password, string $role, \DateTimeImmutable $created_at) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->created_at = $created_at;
    }
    
    public function getId(): ?int {
        return $this->id;
    }
    
    public function setId(?int $id) : void {
        $this->id = $id;
    }
    
    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $title): void {
        $this->username = $username;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function getRole(): string {
        return $this->role;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }
    
    public function getCreatedAt(): \DateTimeImmutable {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): void {
        $this->crated_at = $created_at;
    }
}