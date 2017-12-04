# design-pattern
Included commonly used design patterns on OOP

* Strategy Pattern
* Singleton Pattern
* State Pattern

## Strategy Pattern
In Strategy pattern, a class behavior or its algorithm can be changed at run time.

In Strategy pattern, we create a Strategy interface defining an action and concrete strategy classes implementing the Strategy interface.

## Singleton Pattern
In Singleton Pattern, the instantiation of a class is restricted to one object.

In a Singleton class, there is a private static variable holding the instance. And the contructor is private to use. Also, a public static function ```ClassName::getInstance()``` will be call whenever to get the instance. 

## State Pattern
In State Patern, it allow the object to alter its bebavior when its internel state changes. The object will appear to change its class.