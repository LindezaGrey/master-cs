## Company Database (Using Oracle & Oracle Apex)

The company is organized into 5 departments right now.  More departments may be added in the future.  
Each department has a manager.  We keep track of the "start date" and "end date" of managers ie 
the dates at which an employee began (or stopped) managing the department.
A department may have several locations, and each department controls a number of projects. 
Every project has a single location. 

We store each employee's name, national insurance number, address, salary, date of birth,
email address, phone number (this can be: landline or mobile), start date, and leaving date.  
An employee is assigned to one department, but may work on several projects, 
which are not necessarily controlled by the same department. 
It can be the case that an employee becomes a manager or change departments.

We want to keep track of the dependents of each employee for insurance purposes. 
We keep each dependent's first name, date of birth, and relationship to the employee.

We keep track of the current number of hours per week that an employee works on each project. 
We also keep track of the direct supervisor of each employee.  Supervisors 
are not necessarily department managers. 

Several employees work in the sales department.  This department must maintain a list
of customers, each of which may order some products.  Each order may contain several products,
but some orders only have one product.  The products are stored in several
warehouses.  We need to keep track of inventories ie the quantities of products stored
in the individual warehouses.

Assumptions (for simplifying the scenario):
You may assume that 
1 Each employee has only one supervisor.
2 Each location belongs to one (and only one) department.
3 Each salesperson may answer queries of several customers, but each customer always contacts one and the same salesperson. 
