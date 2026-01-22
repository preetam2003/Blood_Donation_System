<?php

namespace src\Models;

use Database;
use PDO;

class Donor
{
    private $db;

    public function __construct()
    {
        global $config;
        $this->db = new Database($config);
    }

    public function save($data)
    {
        $sql = "INSERT INTO donor_details (donor_name, donor_number, donor_mail, donor_age, donor_gender, donor_blood, donor_address) 
                VALUES (:name, :number, :email, :age, :gender, :blood_group, :address)";

        $this->db->query($sql, [
            ':name' => $data['fullname'],
            ':number' => $data['mobileno'],
            ':email' => $data['emailid'],
            ':age' => $data['age'],
            ':gender' => $data['gender'],
            ':blood_group' => $data['blood'],
            ':address' => $data['address']
        ]);

        return $this->db->lastInsertId();
    }

    public function getAllBloodGroups()
    {
        $sql = "SELECT * FROM blood";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($blood_group)
    {
        // Query donor_details for matching blood group
        $sql = "SELECT * FROM donor_details WHERE donor_blood = :blood_group";
        return $this->db->query($sql, [':blood_group' => $blood_group])->fetchAll(PDO::FETCH_ASSOC);
    }
}
