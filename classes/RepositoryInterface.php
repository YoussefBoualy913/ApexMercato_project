<?php
interface RepositoryInterface{
    
    public function getAll();
    public function findId();
    public function save();
    public function updete();
    public function delete();
}
?>