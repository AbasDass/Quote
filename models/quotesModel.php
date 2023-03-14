<?php

class quotes extends database
{
    public int $id = 0;
    public string $content = '';
    public int $id_m2r64_categories = 0;
    public int $id_m2r64_authors = 0;


    public function __construct()
    {
        parent::connect();
    }

    public function getQuote()
    {
        $query = 'SELECT m2r64_citations.id, content, m2r64_categories.name AS nC, m2r64_authors.name AS nA
        FROM m2r64_citations
        INNER JOIN m2r64_categories 
        ON m2r64_categories.id = m2r64_citations.id_m2r64_categories
        INNER JOIN m2r64_authors
        ON m2r64_authors.id = m2r64_citations.id_m2r64_authors';
        $requestPreparee = $this->db->query($query);
        return $requestPreparee->fetchAll(PDO::FETCH_OBJ);
    }
}