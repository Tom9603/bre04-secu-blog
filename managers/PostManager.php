<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class PostManager extends AbstractManager
{
    private UserManager $userManager;

    public function __construct() {
        parent::__construct();
        $this->userManager = new UserManager();
    }

    public function findLatest(): array {
        $query = $this->db->prepare('SELECT * FROM posts ORDER BY created_at DESC LIMIT 4');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $posts = [];

        foreach ($result as $item) {
            $author = $this->userManager->findOne((int)$item["author_id"]);
            $post = new Post(
                $item["title"],
                $item["excerpt"],
                $item["content"],
                $author,
                new \DateTimeImmutable($item["created_at"])
            );
            $post->setId((int)$item["id"]);
            $posts[] = $post;
        }

        return $posts;
    }

    public function findOne(int $id): ?Post {
        $query = $this->db->prepare('SELECT * FROM posts WHERE id = :id');
        $query->execute(['id' => $id]);
        $item = $query->fetch(PDO::FETCH_ASSOC);

        if ($item) {
            $author = $this->userManager->findOne((int)$item["author_id"]);
            $post = new Post(
                $item["title"],
                $item["excerpt"],
                $item["content"],
                $author,
                new \DateTimeImmutable($item["created_at"])
            );
            $post->setId((int)$item["id"]);
            return $post;
        }

        return null;
    }

    public function findByCategory(int $categoryId): array {
        $query = $this->db->prepare('SELECT * FROM posts WHERE category_id = :category_id ORDER BY created_at DESC');
        $query->execute(['category_id' => $categoryId]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $posts = [];

        foreach ($result as $item) {
            $author = $this->userManager->findOne((int)$item["author_id"]);
            $post = new Post(
                $item["title"],
                $item["excerpt"],
                $item["content"],
                $author,
                new \DateTimeImmutable($item["created_at"])
            );
            $post->setId((int)$item["id"]);
            $posts[] = $post;
        }

        return $posts;
    }
}

?>