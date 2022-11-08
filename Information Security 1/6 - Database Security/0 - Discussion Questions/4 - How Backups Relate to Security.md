# Topic 6 DQ 4
## Explain several ways that database backups relate to database security.

There are three levels to secure backups, namely the *data level*, the *user level*, and the *system level*, just as with databases. Keeping more than one copy of a backup ensures that a clean copy is available for recovery if the backup is damaged or altered by unauthorised access. 

To avoid situations such as hardware failures that can result in total data loss, database backups should be stored both on-site (on the same server as the database) and off-site.


**Data-level Database Backup Security**
In a database backup, the data is (usually) in its at-rest state. To prevent data tampering, at-rest encryption should be used. Encryption transforms the data into another form that can only be decoded by those with authorised access. Despite the fact that the backup may fall into the wrong hands, sensitive data is still protected based on the encryption in place when it was completed. 

**User-level Database Backup Security**
The point of encryption is to ensure that your data is not easily accessible by anyone. If you store backups in the same place that your database is, encryption becomes pointless.

**System-level database backup security**
A database backup file can also be accessed via hardware, network, and communication channels, just like a database can. In order to avoid this, backup servers or backup hosting should be protected (through a firewall, for example) from system-level threats. This minimizes the threat to backup servers or backup hosting.


Source:
https://backup.ninja/news/Database-Backups-101-Database-Backup-Security-Considerations

