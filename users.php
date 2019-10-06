<?php

function getUsers() 
{
    // $users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);
    // echo '<pre>';
    // var_dump($users);
    // echo '</pre>';
    // exit;
    return json_decode(file_get_contents(__DIR__ . '/users.json'), true);
}

function getUserById($id)
{

}

function createUser($data)
{

}

function updateUser($data)
{

}

function deleteUser($id)
{
    
}