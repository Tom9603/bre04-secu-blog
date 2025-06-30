<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class Comment
{
    private ?int $id = null;
    private string $content;
    private int $user;
    private int $post;

    public function __construct(string $content, int $user, int $post) {
        $this->content = $content;
        $this->user = $user;
        $this->post = $post;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getUser(): int {
        return $this->user;
    }
    
    public function getPost(): int {
        return $this->post;
    }
    
    public function setId(?int $id): void {
        $this->id = $id;
    }
    
    public function setContent(string $content): void {
        $this->content = $content;
    }
    
    public function setUser(int $user): void {
        $this->user = $user;
    }
    
    public function setPost(int $post): void {
        $this->post = $post;
    }
}