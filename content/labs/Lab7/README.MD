
Each Class simply overwrites the operate and getEquation methods from the class Operation.
When a button is pressed it calls and echos the getEquation method of the corresponding operation class which outputs the operands and the corresponding symobolic operation and calls the method operate to actually computes the result.


Wouldn't have to change too much, just change $_POST['var'] to $_GET['var'], and change the form method. Can't think of much of a benefit or a negative, users could bookmark a calculation and could cache a result but a user wont often compute the same expression enough for that to matter.


Can't think of another way for PHP except by echoing javascript to set onclicks, but thats really javascript not PHP.