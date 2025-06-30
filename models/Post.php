<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class Post
{
    private ?int $id = null;
    private string $title;
    private string $excerpt;
    private string $content;
    private User $author;
    private \DateTimeImmutable $created_at;

    public function __construct(string $title, string $excerpt, string $content, User $author, \DateTimeImmutable $created_at) {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->content = $content;
        $this->author = $author;
        $this->created_at = $created_at;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function getExcerpt(): string {
        return $this->excerpt;
    }

    public function setExcerpt(string $excerpt): void {
        $this->excerpt = $excerpt;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }

    public function getAuthor(): User {
        return $this->author;
    }

    public function setAuthor(User $author): void {
        $this->author = $author;
    }

    public function getCreatedAt(): \DateTimeImmutable {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): void {
        $this->created_at = $created_at;
    }
}
