<?php

require 'contact.php'; 

class ContactManager
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=contact_portfolio', 'root');
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            die;
        }
    }

    public function insert(string $email, string $telephone, string $contact_reason, string $verification)
    {
        $sql = "INSERT INTO contact (email,telephone,contact_reason,verification) VALUES (:email,:telephone,:contact_reason,:verification)";
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'email' => $email,
            'telephone' => $telephone,
            'contact_reason' => $contact_reason,
            'verification' => $verification,
        ]);

        return $this->pdo->lastInsertId();
    }
}
