<?php

class HelloWorld {

    private function __init() { // defalt class members
    }

    public static function __staticinit() { // static class members
    }

    public static function main() { // [String[] args]
        print("Hello World");
    }

}

HelloWorld::__staticinit();

HelloWorld::main();
