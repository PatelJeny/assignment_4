Q1. what is object oriented programming?
-> Object-Oriented Programming (OOP) in PHP is a programming paradigm that uses objects and classes to organize     code. The key principles of OOP are encapsulation, abstraction, inheritance, and polymorphism.

Q2. what are properties of object oriented system?
-> Once an object is created, you can access its properties and methods using the arrow notation (->). A class can have properties, which are variables that store data, and methods, which are functions that perform actions on the object.

Q3. What Is Difference Between Class And Interface? 
-> class:- Objects can be created,
           It can inherit another class,
           Variables are static, final, neither,
           Does not Supports multiple inheritance,
           Variables and methods can not declared as public

-> Interface:- Objects can not be created,
               It can not inherit another class,
               variable is static,
               supports multiple inheritance,
               Variables and methods can only be declared as public

Q4. What Is Overloading? 
-> Function overloading in PHP is used to dynamically create properties and methods. These dynamic entities are processed by magic methods which can be used in a class for various action types.

Q6. What are the differences between abstract classes and interfaces? 
-> abstract classes:-  Abstract class can have abstract and non-abstract methods,
                       Abstract class doesn't support multiple inheritance,
                       Abstract class can have final, non-final, static and non-static variables,
                       The abstract keyword is used to declare abstract class.

-> interfaces:- Interface can have only abstract methods,
                Interface supports multiple inheritance,
                Interface has only static and final variables,
                Interface can't provide the implementation of abstract class.

Q7. Define Constructor and Destructor?
-> Constructor:- A constructor is a special method that is automatically called when an object of a class is instantiated. It is typically used to initialize properties of the class or perform any setup required for the object.

function __construct()
       {
       // initialize the object and its properties by assigning 
       //values
       }

-> Destructor:- A destructor is a special method that is automatically called when an object is destroyed. It is typically used to perform cleanup operations, such as closing files or releasing resources.

function __destruct() 
       {
       // destroying the object or clean up resources here 
       }

Q8. How to Load Classes in PHP?
-> PHP load classes are used for declaring its object etc. in object oriented applications. PHP parser loads it automatically, if it is registered with spl_autoload_register() function. PHP parser gets the least chance to load class/interface before emitting an error.

Q9. What Happen, If Constructor Is Defined As Private Or Protected? in php
-> A private constructor is a constructor method that is declared as private, which means it can only be called from within the class itself. This is often used in the context of the Factory design pattern, where a class is responsible for creating instances of itself or other classes.

-> If you create a public __construct() function, PHP will automatically call this function when you create an object from a class.

