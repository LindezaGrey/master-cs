-- ------------------------------------------------------------------------------
--   non trivial DDL code by Andreas Ziegler - 2208771
--   2024-03-31
-- ------------------------------------------------------------------------------

DROP VIEW CURRENT_INVENTORY;

CREATE VIEW CURRENT_INVENTORY AS
SELECT w.name as WAREHOUSE_NAME, w.id as WAHREHOUSE_ID, p.name as PRODUCT_NAME, p.id as PRODUCT_ID, i.stock as STOCK 
FROM INVENTORY i 
INNER JOIN PRODUCTS p on i.product_id = p.id
INNER JOIN WAREHOUSES w on i.warehouse_id = w.id;


CREATE OR REPLACE PROCEDURE "RAISE_SALARIES" (
    factor IN NUMBER
) AS
BEGIN
    UPDATE EMPLOYEES
    SET SALARY = SALARY * factor;
END "RAISE_SALARIES";
/

-- called like this:
--BEGIN
--  RAISE_SALARIES(1.1);
--END;
--/
