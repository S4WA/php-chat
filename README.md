## Environment
SQLite3, PHP

## Exapmle
[https://akiba.cloud](https://akiba.cloud)

## Create table

```
create table chat(id INTEGER PRIMARY KEY, name TEXT NOT NULL, message TEXT NOT NULL, date TIMESTAMP DEFAULT (datetime(CURRENT_TIMESTAMP, 'localtime'))); 
```
