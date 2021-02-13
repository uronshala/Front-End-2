<?php
include '../components/header.php';
include_once '../code/databaseConfig.php';
include_once '../code/userMapper.php';
// include_once '../code/deleteUser.php';
$userMapper = new UserMapper();
$result = $userMapper->getAllUsers();


?>
<div class="dbbackground">
   <div class="h1">
    <h1 class="dbtitle">Dashboard</h1>
   </div>
   <div class="title">
   <h2 class="tbtitle">Userlist</h2>
   </div>
    <div class="table">
   
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>UserLastName</td>
                    <td>Role</td>
                    <td>Action</td>
                </tr>
            </thead>
            
                <?php
               $rows = $result;
                foreach ($rows as $row) {
                
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row["userid"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["userlastname"]; ?></td>
                    <td><?php echo $row["role"]; ?></td>
                
                </tr>
                <?php
                }
                ?>
                </tbody>
            
        </table>
        
    </div>
</div>
    





<?php
include '../components/footer.php';
?>