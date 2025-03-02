<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
</head>
<body>
<style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color :white;
            color: black;
}

        header {
            background-color: #333;
            padding: 15px;
            color: white;
            text-align: center;
        }

        nav {
            background-color: #444;
            overflow: hidden;
        }

        nav a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .content-table{
   border-collapse: collapse;
    
    font-size: 1em;
    /* min-width: 400px; */
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);
    margin-left : 0px ;
    margin-top: 25px;
    width: 1300px;
    height: 300px;
}
.content-table thead tr{
    background-color: orange;
    color: white;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 12px 15px;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid orange;
}

.content-table thead .active-row{
    font-weight:  bold;
    color: orange;
}


.add{
    width: 200px;
    height: 40px;
   
    background: #ff7200;
    border:none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
    margin-left: 1100px;
}

.add a{
    text-decoration: none;
    color: black;
    font-weight: bolder;
    
}

.nn{
    width:100px;
    /* background: #ff7200; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}
</style>

<body >
    <header>
        <h1>Admin Page</h1>
    </header>

    <nav>
     <a href="admin.php">Users Details</a>
     <a href="donartb.php">Donars Details</a>
    <a href="donarsrequire.php">Blood Require Details</a>
    <a href="det.php">Blood tranfernig Details</a>
    <a href="blood.php">Blood Details</a>
    <a href="hos.php">Hospital Details</a>
     <button class="nn"><a href="adlog.html">LOGOUT</a></button>
                
</nav>       
<center>
<div>
            <h1 class="header">Users Details</h1>
            
            <div>
                <div>
                    <table class="content-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Blood Type</th>
                        <th>Password</th>
                                                
                    </tr>
                </thead>
                <tbody>
                <?php
                $host = "localhost";
                $username = "root";
                $password = "";
                $database = "blood_bank";
                $conn = new mysqli($host, $username, $password, $database);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $query="SELECT *from users";    
                $queryy=mysqli_query($conn,$query);
                $num=mysqli_num_rows($queryy);
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row">
                    <td><?php echo $res['id'];?></php></td>
                    <td><?php echo $res['name'];?></php></td>
                    <td><?php echo $res['username'];?></php></td>
                    <td><?php echo $res['blood_type'];?></php></td>
                    <td><?php echo $res['password'];?></php></td>
                    <td><?php  
                    
                    
                    
                    ?></php></td>
                    
                </tr>
               <?php } ?>
                </tbody>
                </table>
                
                </div>
            </div>
        </div></center>
</body>
</html>