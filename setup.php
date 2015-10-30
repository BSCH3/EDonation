<!--/*
     * @author Robin Nixon
     * @Date 10/03/2015
       @Source http://lpmj.net/4thedition/ 
     * 
     */!-->
<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

<?php // Example 26-3: setup.php
  require_once 'functions.php';

  createTable('members',
             'id INT AUTO_INCREMENT PRIMARY KEY,
              user VARCHAR(16),
              pass VARCHAR(16),
              quiz_score Integer(2),
              INDEX(user(6))');
  
  createTable('messages', 
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              user VARCHAR(16),
              pm CHAR(1),
              time INT UNSIGNED,
              message VARCHAR(4096),
              INDEX(charname(6)),
              INDEX(user(6))');

  createTable('friends',
              'user VARCHAR(16),
              friend VARCHAR(16),
              INDEX(user(6)),
              INDEX(friend(6))');

  createTable('profiles',
              'user VARCHAR(16),
              text VARCHAR(4096),
              INDEX(user(6))');
  
   createTable('charities',
              'id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                charity_name VARCHAR (50),
                Reg_No SMALLINT,
                charity_purpose VARCHAR (150),
                charity_location VARCHAR (150),
                CHY SMALLINT,
                CRO SMALLINT,
               INDEX(id(9))');
   
   alterTable();
?>
    <br>...done.
  </body>
</html>
