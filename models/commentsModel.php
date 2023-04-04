<?php
class comments extends database
{
    public int $id = 0;
    public string $publicationDate ="1970-01-01";
    public string $content = '';
    public int $id_m2r64_users = 0;
    public int $id_m2r64_citations = 0;


    public function __construct() 
    {
        parent::connect();
    }


    public function insert()
    {
        $query = 'INSERT INTO `' . $this->prefix . 'comments`(`publicationDate`, `content`, `id_m2r64_users`, `id_m2r64_citations`)
        VALUES (NOW(), :content,:id_m2r64_users,:id_m2r64_citations);';
        $request = $this->db->prepare($query);
        $request->bindValue(':content', $this->content, PDO::PARAM_STR);
        $request->bindValue(':id_m2r64_users', $this->id_m2r64_users, PDO::PARAM_INT);
        $request->bindValue(':id_m2r64_citations', $this->id_m2r64_citations, PDO::PARAM_INT);
        return $request->execute();
    }
}