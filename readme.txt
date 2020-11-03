Q1.what is class ?

A class is the way of categorizing properties and methods which are closely related to eachother.

//A class is a blueprint that defines the variables and the methods common to all objects of a certain kind.

Q2.How to declare a class ?

we can define a class with syntax:

class ClassName
{
   //properties and methods will come here
}

Q3.What is object ?

An object is an instance of the class. Objects have the access of class i.e properties and methods.

Q4. What is Encapsulation ?

Encapsulation is a technique used in oop to protect the internal data from external sources. In Encapsulation data is not accessed directly,
they are accessed via functions or methods. Attributes/properties are kept private but methods/behaviours are kept public for manipulating the 
attributs/properties.

Q5. What are access modifiers and their types?

Access modifiers are used to control the access of methods and properties, from where they can be accessed.

in php they are of three types:
i) public
ii) protected
iii) private

public - properties & methods can be accessed from anywhere with the help of object.
protected - properties & methods can be accessed within the class and child classes.
private - properties & methods can't be accessed anywhere except the class itself where these are declared.

Q6. new keyword when create object steps ?

When we use new keyword for creating an object from class these steps occur - 
i) memory allocation for new object with properties check
ii) it checks for constructor methods
iii) assign unique id 
iv) and pass it into z-val container for future references.

Q7. What is constructor function, and its uses ?

constructor function is one of the magic methods of php offers. it's main uses are :-
It is used to assign values of properties automatically.
It is used for dependency injection.
It can also be used for preventing creating instance from class using private access modifiers.

Q8. what are interfaces ?

Interfaces allow you to specify what methods a class should implement. Interfaces make it easy to use a variety of
different classes in the same way. 

Q9. What is polymorphism ?

When one or more classes use the same interface, it is referred to as "polymorphism".

Q10. what are abstracts ?

An abstract class is a class that contains at least one abstract method, which is a method without any actual code in it,
just the name and the parameters, and that has been marked as "abstract".

Q11. What are traits ?

Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some 
limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes 
living in different class hierarchies.

Q11. Difference b/w interface and abstract ?

i) interface class can not have access modifiers they are assumed public by default while abstract can contain access modifiers
ii) interface class contains only incomplete methods with param only while abstract class can contain both
iii) memberss of interace cannot be static while in abstract class complete member of abstract class can be static
iV) interface doesn't have constructor while abstract does/can have

Q12. What is type hinting ?

In later than PHP 5 versions one can type hint the parameters data types for the methods and also declare the output data types on 
earlier basis. This will increase the security as no other than defined data types can be passed through the methods.

Q13. What is inheritance ?

inheritance is used to increase code re-usablity and remove code complexity. It is attained by extending a parent class into the 
child class.

Q14. What is Object Reference / What do you understand by object Reference ?

When we assign value of simple variable to other variable in php it copies the data to the new assignee. And they don't have any 
dependency on eachother. 
On the other hand when we assign an object to new variable. To assignee the value is passed by reference. Means if we change any of 
these object variable or new assignee, both of them will get affected.
This affect can be called as object reference.

Q15. what do we say this "->" ?

This is called member access Operator.