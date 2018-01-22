<?php

/**
 * Класс для описания кота
 * @author v.demyanova
 *
 */
class Cat
{

    const BREED = 'Persian';

    private static $canFly = FALSE;

    private $name;
    private $age;
    private $hairColors;
    private $isAlive;

    /**
     * Инициализация объекта
     * @param $name string     Кличка
     * @param $age string     Возраст
     * @param $hairColors array    Цвет шерсти
     */
    public function __construct($name, $age, $hairColors)
    {
        $this->name = $name;
        $this->age = $age;
        foreach ($hairColors as $value) {
            $this->hairColors[] = $value;
        }
        $this->isAlive = TRUE;
    }

    /**
     * @return bool
     */
    public static function isCanFly(): bool
    {
        return self::$canFly;
    }

    /**
     * @param bool $canFly
     */
    public static function setCanFly(bool $canFly): void
    {
        self::$canFly = $canFly;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getHairColors()
    {
        return $this->hairColors;
    }

    /**
     * @param mixed $hairColors
     */
    public function setHairColors($hairColors): void
    {
        $this->hairColors = $hairColors;
    }

    /**
     * @return bool
     */
    public function isAlive(): bool
    {
        return $this->isAlive;
    }

    /**
     * @param bool $isAlive
     */
    public function setIsAlive(bool $isAlive): void
    {
        $this->isAlive = $isAlive;
    }

    /**
     * Выброс исключения Exception
     */
    public function error()
    {
        throw new Exception("That's my error");

    }

    /**
     * Освобождении всех ссылок на определенный объект, установка значения поля isAlive
     */
    function __destruct()
    {
        $this->isAlive = FALSE;
    }
}