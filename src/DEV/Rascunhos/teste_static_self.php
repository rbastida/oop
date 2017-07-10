<?php

class A {

    public static function who() {
        echo __CLASS__ . '<br>';
    }

    public static function test() {
        self::who(); // Isso vai sair como "A", o nome da classe mãe 
    }

    public static function test2() {
        static::who(); // Já esse aqui vai sair "B", o nome da classe filha    
    }

}

class B extends A {

    public static function who() {
        echo __CLASS__;
    }

}

B::test();  // Isso vai sair como "A", o nome da classe mãe 

B::test2(); // Já esse aqui vai sair "B", o nome da classe filha  
?>