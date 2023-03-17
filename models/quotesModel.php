<?php
class quotes extends database
{
    public int $id = 0;
    public string $content = '';
    public string $image = '';
    public int $id_m2r64_categories = 0;
    public int $id_m2r64_authors = 0;


    public function __construct()
    {
        parent::connect();
    }

    public function selectQuote()
    {
        $query = 'SELECT m2r64_citations.id, content, m2r64_categories.name AS nC, m2r64_authors.name AS nA
                FROM m2r64_citations
                INNER JOIN m2r64_categories 
                ON m2r64_categories.id = m2r64_citations.id_m2r64_categories
                INNER JOIN m2r64_authors
                ON m2r64_authors.id = m2r64_citations.id_m2r64_authors
                INNER JOIN m2r64_images
                ON m2r64_images.id = m2r64_citations.id_m2r64_images';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
}
