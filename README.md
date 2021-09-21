## Environment
SQLite3, PHP

## Create table

```
create table chat(id INTEGER PRIMARY KEY, name TEXT NOT NULL, message TEXT NOT NULL, date TIMESTAMP DEFAULT (datetime(CURRENT_TIMESTAMP, 'localtime'))); 
```
