<html>
    <head>
        <title>Library Management system</title>
    </head>
    <body>
        <h3>Library management System</h3>
        <form action="pincode.php" method="GET">
            <button>Add</button>
        </form>
        <div>
            <table border=1>
                <tr>
                    <th>Id</th>
                    <th>Book Name</th>
                    <th>author</th>
                    <th>Publish Date</th>
                    <th>Book Image</th>
                </tr>
                <?php
                
                require_once __DIR__ . '/dbconnection.php';
               
                
                $connection = new DbConnection();                                   
                $conn=$connection->db_connect();
                


                $query = $conn->prepare("SELECT * FROM books");//create table first

                $query->execute();
                $row = $query->fetchAll();
                
                
                foreach($row as $rowdata)
                {?>
                    <tr>
                    <td> <?php echo $rowdata['id']; ?></td>
                    <td> <?php echo $rowdata['book_name']; ?></td>
                    <td> <?php echo $rowdata['author_name']; ?></td>
                    <td> <?php echo $rowdata['published_date']; ?></td>  
                    <td> <img width=100 src="./images/<?php echo $rowdata['book_image'];?>"> </td>
                    <td><a href="delete.php?id=<?php echo $rowdata['id']; ?>"><button>delete</button></a></td>
                    </tr>   
                <?php }?>
            </table>
        </div>
    </body>
</html>