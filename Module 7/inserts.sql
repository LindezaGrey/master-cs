-- ------------------------------------------------------------------------------
--   DML code by Andreas Ziegler - 2208771
--   2024-04-15
-- ------------------------------------------------------------------------------


-- Insert into locations
INSERT INTO locations (id, name) VALUES (NULL, 'Berlin');
INSERT INTO locations (id, name) VALUES (NULL, 'Frankfurt');

-- Insert into warehouses
INSERT INTO warehouses (id, name) VALUES (NULL, 'Warehouse Castor');
INSERT INTO warehouses (id, name) VALUES (NULL, 'Warehouse Pollux');

-- Insert into products
-- INSERT INTO products (id, name, price, weight) VALUES (NULL, 'Sensor Typ XYZ');
-- INSERT INTO products (id, name) VALUES (NULL, 'Actuator Typ ABC');
-- OR from sample table
INSERT INTO products (id, name, price, weight)
SELECT null, PRODUCTNAME, PRICE, WEIGHT_KG FROM SAMPLE_PRODUCTS;


-- Insert into departments
INSERT INTO departments (id, name, location_id) VALUES (NULL, 'HR', 1);
INSERT INTO departments (id, name, location_id) VALUES (NULL, 'IT', 2);
INSERT INTO departments (id, name, location_id) VALUES (NULL, 'Sales', 2);

-- Insert into employees
-- INSERT INTO employees (id, department_id, supervisor_id, name, ssn, email, start_date) VALUES (NULL, 1, NULL, 'John Doe', '123-45-6789', 'john.doe@example.com', DATE '2024-01-01');
-- INSERT INTO employees (id, department_id, supervisor_id, name, ssn, email, start_date) VALUES (NULL, 2, 1, 'Jane Doe', '987-65-4321', 'jane.doe@example.com', DATE '2024-01-02');
-- OR from sample table
INSERT INTO employees (id, department_id, supervisor_id, name, ssn, email, start_date)
SELECT NULL, 1, NULL, FIRST_NAME || ' ' || LAST_NAME as name, 'XE-' || round(dbms_random.value(0,99999)), EMAIL, DATE '2024-01-01' FROM SAMPLE_PEOPLE;

-- UPDATE SALARY
UPDATE employees
SET SALARY = 50000;

-- Insert into customers
INSERT INTO customers (id, name, responsible_employee_id) VALUES (NULL, 'Tesla', 1);
INSERT INTO customers (id, name, responsible_employee_id) VALUES (NULL, 'XIAOMI', 2);

-- Insert into orders
INSERT INTO orders (id, customer_id) VALUES (NULL, 1);
INSERT INTO orders (id, customer_id) VALUES (NULL, 2);

-- Insert into order_line_items
INSERT INTO order_line_items (order_id, product_id, quantity) VALUES (1, 1, 3);
INSERT INTO order_line_items (order_id, product_id, quantity) VALUES (2, 2, 3);

-- Insert into department_managers
INSERT INTO department_managers (id, department_id, employee_id, start_date) VALUES (NULL, 1, 1, DATE '2024-01-01');

-- Insert into projects
INSERT INTO projects (id, responsible_department_id, name) VALUES (NULL, 1, 'Project Longshot');
INSERT INTO projects (id, responsible_department_id, name) VALUES (NULL, 2, 'Project Moonshot');

-- Insert into project_assignments
INSERT INTO project_assignments (project_id, employee_id) VALUES (1, 1);
INSERT INTO project_assignments (project_id, employee_id) VALUES (2, 2);

-- Insert into project_timetracking
INSERT INTO project_timetracking (id, project_id, employee_id, week_number, hours_worked) VALUES (NULL, 1, 1, 202401, 40);

-- Insert into dependants
INSERT INTO dependants (id, employee_id, first_name, date_of_birth, relationship) VALUES (NULL, 1, 'Daisy', DATE '2010-04-10', 'Daughter');

-- Insert into inventory
-- INSERT INTO inventory (warehouse_id, product_id, stock) VALUES (1, 1, 100);
-- INSERT INTO inventory (warehouse_id, product_id, stock) VALUES (2, 2, 150);
INSERT INTO inventory (warehouse_id, product_id, stock)
SELECT w.id ,p.id, round(dbms_random.value(1, 100)) FROM 
    (SELECT * FROM PRODUCTS FETCH FIRST 100 ROWS ONLY) p
CROSS JOIN WAREHOUSES w;