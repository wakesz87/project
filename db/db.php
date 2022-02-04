<?php

class Database
{
    private $dsn = "mysql:host=localhost;dbname=project";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->pass);
            /* echo 'Sikerült a kapcsolat!';*/
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insert($fname, $email, $pass, $taxnumber, $deliveryaddress, $billingaddress)
    {
        $sql = "INSERT INTO customers(full_name,email,pass,tax_number,delivery_addr,billing_addr) VALUES
            (:fname,:email,:pass,:taxnumber,:deliveryaddr,:billingaddr)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'fname' => $fname, 'email' => $email, 'pass' => $pass, 'taxnumber' => $taxnumber,
            'deliveryaddr' => $deliveryaddress, 'billingaddr' => $billingaddress
        ]);
        return true;
    }

    public function read()
    {
        $data = array();
        $sql = "SELECT * FROM customers";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM customers WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $fname, $email, $pass, $taxnumber, $deliveryaddress, $billingaddress)
    {
        $sql = "UPDATE customers SET full_name = :fname,email = :email,pass= :pass,tax_number = :taxnumber,
        delivery_addr = :deliveryaddr,billing_addr = :billingaddr WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'fname' => $fname, 'email' => $email, 'pass' => $pass, 'taxnumber' => $taxnumber,
            'deliveryaddr' => $deliveryaddress, 'billingaddr' => $billingaddress, 'id' => $id
        ]);
        return true;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return true;
    }

    public function totalRowCount()
    {
        $sql = "SELECT * FROM customers";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $t_rows = $stmt->rowCount();
        return $t_rows;
    }
}

