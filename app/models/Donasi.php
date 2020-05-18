<?php
 
namespace App\Models;
 
use App\Core\Model;
 
use PDO;
use PDOException;
 
class Donasi extends Model
{
 
    public static function findAll()
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->query('SELECT * FROM bantuan');
 
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
            return $results;
            
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }

    public static function findrekapitulasiById($id)
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->prepare('SELECT * FROM bantuan where IdBantuan = :IdBantuan');
            $stmt->bindParam(":IdBantuan", $id);
 
            $stmt->execute();
 
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
 
            return $results;
 
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }

    public function insert($data)
    {
        try {
            $db = static::getDb();
 
            $sql = "INSERT INTO bantuan VALUES('', :KategoriBantuan, :NamaDonatur, :BentukBantuan, :JumlahBonasi, :Date)";
 
            $stmt = $db->prepare($sql);
            
            $stmt->bindParam(":KategoriBantuan", $data['title']);
            $stmt->bindParam(":NamaDonatur", $data['description']);
            $stmt->bindParam(":BentukBantuan", $data['place']);
            $stmt->bindParam(":JumlahBonasi", $data['spot']);
            $stmt->bindParam(":Date", $data['time']);
 
            $stmt->execute();
 
            return $stmt->rowCount();
 
        } catch (PDOException $e) {
            echo "Terjadi kegagalan saat menyimpan data";
        }
    }

    public static function delete($id)
    {
 
        try {
 
            $db = static::getDb();
 
            $sql = "DELETE FROM bantuan WHERE IdBantuan = :IdBantuan";
 
            $stmt = $db->prepare($sql);
            
            $stmt->bindParam(":IdBantuan", $id);
 
            $stmt->execute();
 
            return $stmt->rowCount();
 
        } catch (PDOException $e) {
            echo "Terjadi kegagalan saat menghapus data";
        }
    }

    public function search($keyword)
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->prepare('SELECT * FROM bantuan where NamaDonatur LIKE :title');
            $stmt->bindValue(":title", "%$keyword%");
 
            $stmt->execute();
 
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
            return $results;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }

    public function searchByJenis($keyword)
    {
        try {
            $db = static::getDb();
            
            $stmt = $db->prepare('SELECT * FROM bantuan where KategoriBantuan LIKE :title');
            $stmt->bindValue(":title", "%$keyword%");
 
            $stmt->execute();
 
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
            return $results;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            echo "Terjadi kegagalan koneksi ke database.";
        }
    }



}
