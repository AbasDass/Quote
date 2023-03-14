<?php
class users extends database
{
    public int $id = 0;
    public string $username = '';
    public string $birthdate = '1970-01-01';
    public string $email = '';
    public string $password = '';

    public function __construct()
    {
        parent::connect();
    }

    public function addUser()
    {
        $query = 'INSERT INTO `' . $this->prefix . 'users`(`username`, `birthdate`, `email`, `password`) 
        VALUES (:username,:birthdate,:email,:password);';
        $request = $this->db->prepare($query);
        $request->bindValue(':username', $this->username, PDO::PARAM_STR);
        $request->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->bindValue(':password', $this->password, PDO::PARAM_STR);
        return $request->execute();
    }

    /**
     * Fonction qui permet de vérifier qu'un utilisateur existe dans la base de données selon une colonne
     * @param string $column Le nom de la colonne (mail, username, lastname, etc..)
     * @return int Le nombre de résultat trouvé
     */
    public function checkIfUserExists($column)
    {
        $query = 'SELECT count(' . $column . ') 
        FROM `' . $this->prefix . 'users` 
        WHERE ' . $column . ' = :' . $column;
        $request = $this->db->prepare($query);
        $request->bindValue(':' . $column, $this->$column, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }

    public function getPassword()
    {
        $query = 'SELECT password 
        FROM `m2r64_users` 
        WHERE username = :username';
        $request = $this->db->prepare($query);
        $request->bindValue(':username', $this->username, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }

    public function getIds()
    {
        $query = 'SELECT `id`
        FROM `m2r64_users` 
        WHERE username = :username';
        $request = $this->db->prepare($query);
        $request->bindValue(':username', $this->username, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_ASSOC);
    }
}
