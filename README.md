# docker-lamp

Docker example with Apache, MySql 8.0, PhpMyAdmin and Php

# SETUP

First, create the docker-compose file (e.g. similar to the one in /ref folder).

To run these containers:

```
docker-compose up -d
```

Open phpmyadmin at [http://localhost:8000](http://localhost:8000).

Open web browser to look at a simple php example at [http://localhost:8001](http://localhost:8001)

Run mysql client:

`docker-compose exec db mysql -u root -p` 

Run this command in mysql to create Person table:
```
CREATE TABLE `Person` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

# Demo
