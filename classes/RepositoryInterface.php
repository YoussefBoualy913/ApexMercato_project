<?php
interface RepositoryInterface{
    
    public function getAll();
    public function findById(int $id);
    public function save(object $person);
    public function updete(object $person);
    public function delete(int $id);
}
?>