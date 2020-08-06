# Title: Learning about databases

- Repository: `fixing-db-bugs`
- Type of Challenge: `Learning challenge`
- Duration: `1 day`
- Deployment strategy : `NA`
- Team challenge : `solo`

## Learning objectives
- Introducing a database
- Ability to use a database manager
- Importing a database
- Ability to fix existing code with bugs related to a database.

## The Mission
We've touched the basis of `PHP` now it's time to learn about his partner in crime, let's look at `MySQL`/`MariaDB` and what it does / how it works.
After reading some theory, you will do a small exercise to discover your new super powers!.

## A small exercise: fix the bugs
Your coach has probably helped you to fix some bugs in your code base during the training, and we think it is only fair to now return the favor.
Your coach has written [a small script](resources/index.php) that manages users and their favorite sports.
However your coach drank a little bit too much of his favorite drink (this is an excellent moment to ask him/her what this beverage is), and the script is littered with bugs.
The coach has added some comments where these bugs are, but has given up on fixing them.
Can you fix all the bugs?

## What is the difference between MySQL and MariaDB?
![mariadb-vs-mysql.png](images/mariadb-vs-mysql.png)

You will find that many articles use the terms MySQL and MariaDB interchangeably, but there are different databases. They do have a shared history, and are the same for 95%. 
This means in practice that most projects can change from one db to another with probably only minor problems. 
MySQL used to be open-source, until it was acquired by Oracle, when some of the original developers of MySQL forked it due to concerns over its acquisition by Oracle Corporation.
This fork was named "MariaDB", and is the new open source alternative for MySQL.
Technically, MySQL is an open-source database, but in practice, it no longer feels like it. Under Oracle's umbrella, MySQL now has proprietary, closed-source modules, which was one of the main controversial changes that drove the community in two camps.

Technically there is not much difference between both versions, but in the last years MariaDB has being making more progress on performance, where it now outclasses MySQL for most use cases.
To make the basic application is this exercise you will not notice a difference, but you can always [learn more about the differences](https://www.eversql.com/mariadb-vs-mysql/) between the vendors.

![mysqljoke.png](images/mysqljoke.jpg)

### NEVER INSTALL BOTH MySQL and MariaDB
You should never install both MySQL and MariaDB on the same machine. 
This will lead to very difficult to fix conflicts that will take you a very long time to fix.

## Install a database manager
Database managers are used to manage local and remote databases. They discover databases based on the Web server and provide the ability to connect to any of the databases residing in the network. They provide a handful of administrative functionalities such as managing tables, views and stored procedures, as well as run ad hoc queries.

DB managers connect to the database and display information from catalogs that are part of a database. DB managers can have a set of command-line parameters, which allow them to initiate features and functions external to the graphical user interface.

There are various free and paid programs for all OS systems, here is a list of some good tools to use, but feel free to experiment which program you like the best:

- [DB beaver](https://computingforgeeks.com/install-and-configure-dbeaver-on-ubuntu-debian/) A good and free to use tool that provides a smooth UI to do all basic operations to a large number of databases.
- [mysql workbench](https://www.linode.com/docs/databases/mysql/install-and-configure-mysql-workbench-on-ubuntu/
) Despite the name can also manage MariaDB. Can do really complex handling with the editor, but the UI feels slow and unresponsive in this coach his opinion.
- [intellij datagrip](https://www.jetbrains.com/datagrip/) From the same makers as PhpStorm this is a paying version that provides a very slick interface to manage your databases. Uses the same type of interface as PhpStorm. During your stay in BeCode you have a free license to this program if you want to test it out!
- PHPstorm integration database tool: PHPStorm has a build in Database manager, that is limited in its capacities but some programmers like to have their databases inside their IDE. It provides some cool features like autocompletion of field and table names inside your SQL queries. 

### What about PhpMyAdmin?
Many tutorials will recommend installing PhpMyAdmin on your server, which is a db manager written in PHP. It is really easy to use, just deploy the files on your web server and it works!

But: ***You should never deploy PhpMyAdmin on a production machine***

The program is know to be vulnerable to a variety of attacks, and needs to be patched regularly. Unless you automated this process changes are really high that you will not update the program fast enough for some bot to find your PhpMyAdmin and get access to all your databases on that machine!

This means that the hacker now can steal all your (customer) data, and even erase your data after he is done. There are many attack bots running on the internet that are looking for vulnerable installations to break into. 

You could place it behind a firewall or VPN but you still have a dangerous backdoor open if some attacker ever gets access to your network.

### Connect to the database
Enter the following code into a php file:

`````php
function openConnection() : PDO {
 // Try to figure out what these should be for you
 $dbhost    = "DB_HOST";//probably localhost
 $dbuser    = "DB_USER";
 $dbpass    = "DB_USER_PASSWORD";
 $db        = "DB_NAME";

$driverOptions = [
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

 // Try to understand what happens here 
$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass, $driverOptions);
 
 // Why we do this here
 return $pdo;
}
`````

The best way to select data from your database is with prepared statements (this prevents SQL injection attacks), like in the code example below:

`````php
$pdo = openConnection();
$handle = $pdo->prepare('SELECT some_field FROM some_table where id = :id');
$handle->bindValue(':id', 5);
$handle->execute();
$rows = $handle->fetchAll();
echo htmlspecialchars($rows[0]['some_field']);
`````

You can find much more info how to work with PDO on [PHP the right way](https://phptherightway.com/#pdo_extension).

### A story about mysql_connect, mysqli_connect and PDO.
If you are searching the internet for PHP tutorials how to connect to a database you will quickly discover that there are many ways of doing it. Be carefull not to mix them up, you cannot combine the different ways together. So choose one and stick with it!

The 3 methods you will probably find are:
- Mysql_connect: This method is outdated and should never be used. You might encounter this with old legacy code. Specific driver for the MariaDB and MySQL databases.
- Mysqli_connect: The updated version of the above method, with some more advanced features (that you do not need yet). Specific driver for the MariaDB and MySQL databases.
- PDO: PDO is a modern database connector that uses the same interface to connect to [more than 12 databases](https://www.php.net/manual/en/pdo.drivers.php#pdo.drivers). It is easy and safe to use but misses some advanced methods from mysqli.

My opinion is that PDO should be used by default, especially beginners, due to its versatility, general predictability and useful fetch modes.

If you want a more [detailed analyses](https://websitebeaver.com/php-pdo-vs-mysqli) I encourage you to read some more about this.

### Importing the data
With this exercise you can find an [SQL file](resources/import.sql) you can import into a database.
To do this, first create a new database in your database manager or on the command line.
Then you can run a command to import your SQL file.

```mysql -u username -p database_name < resources/import.sql```

It will ask a password, this is not the password of your computer, but the password of your database user.

If done successfully, will create 2 different empty tables (sport & user).
