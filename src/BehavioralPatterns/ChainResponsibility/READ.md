* Chain of Responsability
  - use this pattern to remove a lot ifs, when you know the sequence of a chain that have to be executed.

* In this example the task had calculate discount in this order: 
    -> DiscountByValue : If this doesn't attends go to next. Else return the value and finish the chain.
      -> DiscountByNumberOfPeople: If this doesn't attends go to next. Else return the value and finish the chain.
         -> No Discount -> Return 0;


 This design pattern help us to avoid use a lot ifs in this case per example new kinds of discounts can be created.  