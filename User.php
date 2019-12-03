<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Setting up...</h1>
        <?php
        require_once './functions.php';
        
        //setup table User        
        createTable("User", "uId INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(50),
                    password VARCHAR(50),
                    status CHAR(1),
                    INDEX(username(10))");
        echo "<br>";
        //setup table Catalogue
        createTable("Class", "cId INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                CName VARCHAR(50),
                CDescription VARCHAR(200),
                lastModifiedBy INT UNSIGNED,
                FOREIGN KEY (lastModifiedBy) REFERENCES User(uId),
                INDEX (cName(7))");
        echo "<br>";
        createTable("Course", "iId VARCHAR(10) PRIMARY KEY,"
                . "cName VARCHAR(50),"
                . "cDescription VARCHAR(300),"
                . "cStatus VARCHAR(20),"             
                . "sImage VARCHAR(300),"
                . "FOREIGN KEY (classId) REFERENCES StudentID(SId),"
                . "INDEX(iName(10)),"
                . "INDEX(classId)");
        echo "<br>";
        //Setting up one default user
        $username = "ThanhKT";
        $password = "admin";
        $status = '1';
        if (addUser($username, $password, $status)) {
            echo "Added user $username, please change the password";
        } else {
            echo "User already exists";
        }
        $username = "QuyenDT";
        $password = "admin";
        $status = '1';
        if (addUser($username, $password, $status)) {
            echo "Added user $username, please change the password";
        } else {
            echo "User already exists";
        }
        ?>
        <h1>...done!</h1>       
    </body>
</html>