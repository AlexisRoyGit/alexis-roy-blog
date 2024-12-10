<?php

class Clients 
{
    private string $id_client;
    private string $mail;
    private string $password;
    private string $name; 
    private string $avatar; 

    public function getIdClient(): string 
    {
        return $this->id_client;
    } 
    
    public function getMailClient(): string 
    {
        return $this->mail;
    }

    public function getPasswordClient(): string 
    {
        return $this->password;
    }

    public function getNameClient(): string 
    {
        return $this->name;
    }

    public function getAvatarClient(): string 
    {
        return $this->avatar;
    }
}