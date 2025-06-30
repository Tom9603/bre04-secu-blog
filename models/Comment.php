<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Comment
{
    private ?int $id = null;
    private string $content;
    private int $user_id;
    private int $post_id;

    public function __construct(string $content, int $user_id, int $post_id) {
        $this->content = $content;
        $this->user_id = $user_id;
        $this->post_id = $post_id;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getUserId(): int {
        return $this->user_id;
    }
    
    public function getPostId(): int {
        return $this->post_id;
    }
    
    public function setId(?int $id) : void {
        $this->id = $id;
    }
    
    public function setContent(string $content) : void {
        $this->content = $content;
    }
    
    public function setUserId(int $user_id) : void {
        $this->user_id = $user_id;
    }
    
    public function setPostId(int $post_id) : void {
        $this->post_id = $post_id;
    }
}