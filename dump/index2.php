<?php

abstract class Model
{
    public static function find($id){
        $tableName = strtolower(static::class);
        $sql = 'SELECT * FROM '.$tableName.' WHERE id = '.$id;
        return $sql;
    }

    public function delete($id){
        $tableName = strtolower(static::class);
        $sql = 'DELETE * FROM '.$tableName.' WHERE id = '.$id;
        return $sql;
    }

    public function save(){
        $tableName = strtolower(static::class);
        $data = get_object_vars($this);
        $property = array_keys($data);
        if($this->id != null) {
            $property_update = array_map(function ($item){
                return $item.' = :'.$item;
            }, $property);
            unset($property_update[0]);
            $sql = 'UPDATE ' . $tableName . ' SET ' . implode(', ', $property_update) . ' WHERE id = ' . $this->id;
            return $sql;
        }
        $property_create = array_map(function ($item){
            return ':'.$item;
        }, $property);
        $sql = 'INSERT INTO ' . $tableName . ' (' . implode(', ', $property) . ') VALUES (' . implode(', ', $property_create) . ')';
        return $sql;
    }
}

final class User extends Model
{
    public $id;
    public $name;
    public $email;

}

$user = User::find(1);
var_dump($user); // SELECT * FROM user WHERE id = :id

$user = new User();
$user->id = 1;
$user->name = 'John';
$result = $user->save();
var_dump($result); // UPDATE user SET name = :name, email = 'email' WHERE id = :id

$result = $user->delete(1);
var_dump($result); // DELETE FROM user WHERE id = :id

$user = new User;
$user->name = 'John';
$user->email = 'some@gmail.com';
$result = $user->save();
var_dump($result); // INSERT INTO user (id, name, email) VALUES (:id, :name, :email);

