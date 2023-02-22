<?php

include_once("models/Car.php");

class CarDAO implements ICarDAO
{
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function findAll() {

    }

    public function create(Car $car) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO daotest.dbo.cars (brand, km, color) VALUES (:brand, :km, :color)");
            $brand = $car->getBrand();
            $km = $car->getKm();
            $color = $car->getColor();
            $stmt->bindParam(":brand", $brand);
            $stmt->bindParam(":km", $km);
            $stmt->bindParam(":color", $color);
            $stmt->execute();
        } catch (PDOException $err) {
            $error = $err->getMessage();
            echo "Erro: $error";
        }           
    }
}