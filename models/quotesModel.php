<?php
class quotes extends database
{
    public int $id = 0;
    public string $content = '';
    public string $image = '';
    public int $id_m2r64_categories = 0;
    public int $id_m2r64_authors = 0;


    public function __construct() {
        parent::connect();
    }

    public function insertQuote()
    {
        $query = 'INSERT INTO `' . $this->prefix . 'citations`(`content`, `image`, `id_m2r64_categories`, `id_m2r64_authors`) 
        VALUES (:content,:image,:id_m2r64_categories,:id_m2r64_authors);';
        $request = $this->db->prepare($query);
        $request->bindValue(':username', $this->content, PDO::PARAM_STR);
        $request->bindValue(':birthdate', $this->image, PDO::PARAM_STR);
        $request->bindValue(':email', $this->id_m2r64_categories, PDO::PARAM_STR);
        $request->bindValue(':password', $this->id_m2r64_authors, PDO::PARAM_STR);
        return $request->execute();
    }

    public function selectQuote()
    {
        $query = 'SELECT m2r64_citations.id, content, m2r64_categories.name AS nC, m2r64_authors.name AS nA, m2r64_images.link AS nI 
        FROM m2r64_citations
        INNER JOIN m2r64_categories 
        ON m2r64_categories.id = m2r64_citations.id_m2r64_categories
        INNER JOIN m2r64_authors 
        ON m2r64_authors.id = m2r64_citations.id_m2r64_authors
        INNER JOIN m2r64_images 
        ON m2r64_images.id = m2r64_citations.id_m2r64_images;';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }


    public function checkIfQuoteExists($column)
    {
        $query = 'SELECT count(' . $column . ') 
        FROM `' . $this->prefix . 'citations` 
        WHERE ' . $column . ' = :' . $column;
        $request = $this->db->prepare($query);
        $request->bindValue(':' . $column, $this->$column, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }
}
