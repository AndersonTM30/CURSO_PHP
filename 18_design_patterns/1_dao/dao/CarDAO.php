<?php

include_once("models/Car.php");

class CarDAO implements ICarDAO
{
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function findAll() {
        try {
            $cars = [];
            $stmt = $this->conn->query("SELECT * FROM daotest.dbo.cars");

            $data = $stmt->fetchAll();

            foreach($data as $item) {
                $car = new Car();
                $car->setId($item['id']);
                $car->setBrand($item['brand']);
                $car->setKm($item['km']);
                $car->setColor($item['color']);

                $cars[] = $car;
            }
            return $cars;

        } catch (PDOException $err) {
            $error = $err->getMessage();
            echo "Erro: $error";
        } 
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