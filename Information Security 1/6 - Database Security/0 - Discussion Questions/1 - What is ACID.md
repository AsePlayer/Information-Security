# Topic 6 DQ 1
## Explain each letter of ACID and what it does.

**A.C.I.D. properties: Atomicity, Consistency, Isolation, and Durability**

* Atomicity - In a transaction, each statement (read, write, update, or delete) is treated as a single statement. Generally, the entire statement is executed, or none of it is executed. If your streaming data source fails, for example, this property prevents data loss and corruption.

* Consistency - Ensures that transactions only modify tables in predictable, predefined ways. Transaction consistency prevents corruption of data from adversely affecting table integrity.

* Isolation - The isolation of simultaneous transactions ensures that the concurrent transactions do not interfere or affect one another when multiple users read and write from the same table at the same time. Even though each request occurs simultaneously, it can appear as though it is occurring individually.

* Durability - Assures that successful transactions will save your data no matter what happens to the system.

Source:
https://www.databricks.com/glossary/acid-transactions

