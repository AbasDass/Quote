<?php
class quotesCategories extends database
{
    public int $id = 0;
    public string $name = '';


    public function __construct()
    {
        parent::connect();
    }

    public function selectCategories()
    {
        $query = 'SELECT * FROM `m2r64_categories`';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }

    public function checkIfCategoriesExist()
    {
        $query = 'SELECT COUNT(id) FROM m2r64_categories WHERE id = :id';
        $request = $this->db->prepare($query);
        $request->bindValue(':id', $this->id,PDO::PARAM_INT);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }
}