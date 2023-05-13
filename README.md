In this Kurasa Test:
-You can Add,Delete, Update and Read Supermarkets (CRUD)
-Add Manager to assocaiated supermarket.Used associated and relationship model.
A supermarket can have more than one Manager.
-A manager should be able to import to import Employees (Guide given .Ensure the extension is .csv and fields needed explained on import form)
-A Supermarket Manager should be able to import supplier.
-Stats for supermarket is shown on landing page. 
Includes total suppliers,total supermarkets,total employee,total managers metrics.
-Test unit is created and used PHP Unit test for supermarket CRUD.
Check tests/Feature directory
-Also i haved used built-in queue system for laravel by defining a jo using command 
-Then added queue work process, this will process any jobs that have been added to the queue.(Importing supplier and employee)
