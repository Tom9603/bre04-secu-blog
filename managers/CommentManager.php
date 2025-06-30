<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class CommentManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }
    
    public function findByPost(int $postId): array {
        $query = $this->db->prepare('SELECT * FROM comments WHERE post = :post ORDER BY id DESC');
        $query->execute(['post' => $postId]);

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $comments = [];

        foreach ($result as $item) {
            $comment = new Comment($item["content"], (int)$item["user"], (int)$item["post"]);
            $comment->setId((int)$item["id"]);
            $comments[] = $comment;
        }

        return $comments;
    }

    public function create(Comment $comment): void {
        $query = $this->db->prepare('INSERT INTO comments (content, user, post) VALUES (:content, :user, :post)');
        $query->execute([
            'content' => $comment->getContent(),
            'user' => $comment->getUser(),
            'post' => $comment->getPost()
        ]);

        $comment->setId((int)$this->db->lastInsertId());
    }
}
?>