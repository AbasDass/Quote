<?php
class quotes extends database
{
    public int $id = 0;
    public string $content = '';
    public string $image = '';
    public int $id_m2r64_categories = 0;
    public int $id_m2r64_users = 0;


    public function __construct() {
        parent::connect();
    }

    public function insertQuote()
    {
        $query = 'INSERT INTO `' . $this->prefix . 'citations` (`content`, `image`, `id_m2r64_categories`, `id_m2r64_users`) 
        VALUES (:content,:image,:id_m2r64_categories,:id_m2r64_users);';
        $request = $this->db->prepare($query);
        $request->bindValue(':content', $this->content, PDO::PARAM_STR);
        $request->bindValue(':image', $this->image, PDO::PARAM_STR);
        $request->bindValue(':id_m2r64_categories', $this->id_m2r64_categories, PDO::PARAM_INT);
        $request->bindValue(':id_m2r64_users', $this->id_m2r64_users, PDO::PARAM_INT);
        $request->execute();
    }  

    public function selectQuote()
    {
        $query = 'SELECT m2r64_citations.id, content, image, m2r64_categories.name AS nC, m2r64_users.username
        FROM m2r64_citations
        INNER JOIN m2r64_categories
        ON m2r64_categories.id = m2r64_citations.id_m2r64_categories
        INNER JOIN m2r64_users
        ON m2r64_users.id = m2r64_citations.id_m2r64_users;';
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

    public function updateQuote()
    {
        $query = 'UPDATE m2r64_citations
        SET content= :content, image = :image 
        WHERE id = :id';
        $request = $this->db->prepare($query);
        $request->bindValue(':content', $this->content, PDO::PARAM_STR);
        $request->bindValue(':image', $this->image, PDO::PARAM_STR);
        return $request->execute();
    }
    // public function deleteQuote()
    // {
    //     $query = 'DELETE m2r64_citations 
    //     SET `username`= :username, `email`= :email, `birthdate`= :birthdate
    //     WHERE id = :id';
    //     $request = $this->db->prepare($query);
    //     $request->bindValue(':username', $this->username, PDO::PARAM_STR);
    //     $request->bindValue(':email', $this->email, PDO::PARAM_STR);
    //     $request->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
    //     $request->bindValue(':id', $this->id,PDO::PARAM_INT);
    //     return $request->execute();
    // }
}
