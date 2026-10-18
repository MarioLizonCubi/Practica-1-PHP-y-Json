<?php

namespace models;

use interfaces\IToJson;

class User implements IToJson
{
    private string $name;
    private string $surname;
    private string $contrasena;
    private string $phone;
    private string $mail;
    private string $sex;

    public function __construct(
        string $name,
        string $surname,
        string $contrasena,
        string $phone,
        string $mail,
        string $sex
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->contrasena = $contrasena;
        $this->phone = $phone;
        $this->mail = $mail;
        $this->sex = $sex;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getContrasena(): string
    {
        return $this->contrasena;
    }

    public function setContrasena(string $contrasena): void
    {
        $this->contrasena = $contrasena;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    public function toJson(): string
    {
        $data = [
            'name' => $this->name,
            'surname' => $this->surname,
            'contrasena' => $this->contrasena,
            'phone' => $this->phone,
            'mail' => $this->mail,
            'sex' => $this->sex,
        ];

        return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}