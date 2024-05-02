<?php
include "partials/header.php";


$current_admin_id = $_SESSION['user-id'];
if(!isset($_SESSION['user_is_admin'])){
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
}
$query="SELECT * FROM posts";
$users=mysqli_query($connection,$query);
?>


    <section class="dashboard">
    <?php
        if(isset($_SESSION['add-user-success'])): 
        ?> 
            <div class="alert__message success container">
            <p>
                <?= $_SESSION['add-user-success'];
                unset($_SESSION['add-user-success']);
                ?>
            </p>
            
            </div>
            <?php
        elseif(isset($_SESSION['edit-user'])): 
        ?> 
            <div class="alert__message error container">
            <p>
                <?= $_SESSION['edit-user'];
                unset($_SESSION['edit-user']);
                ?>
            </p>
            
            </div>
        <?php
        elseif(isset($_SESSION['edit-user-success'])): 
        ?> 
            <div class="alert__message success container">
            <p>
                <?= $_SESSION['edit-user-success'];
                unset($_SESSION['edit-user-success']);
                ?>
            </p>
            
            </div>
        <?php
            elseif(isset($_SESSION['delete-user'])): 
        ?> 
            <div class="alert__message error container">
            <p>
                <?= $_SESSION['delete-user'];
                unset($_SESSION['delete-user']);
                ?>
            </p>
            
            </div>
        <?php
            elseif(isset($_SESSION['delete-user-success'])): 
        ?> 
            <div class="alert__message success container">
            <p>
                <?= $_SESSION['delete-user-success'];
                unset($_SESSION['delete-user-success']);
                ?>
            </p>
            
            </div>
        <?php endif ?>
        <div class="container dashboard__container">
    
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
    
            <aside>
                <ul>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-post.php">
                            <i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>                
                        
                    <li>
                        <a href="<?= ROOT_URL ?>admin/index.php">
                        <i class="uil uil-postcard"></i>                            
                        <h5>Manage Posts</h5>
                        </a>
                    </li>
                    <?php  if(isset($_SESSION['user_is_admin'])) : ?>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-user.php">
                            <i class="uil uil-user-plus"></i> 
                            <h5>Add User</h5>
                        </a>
                    </li>  
    
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-users.php" class="active">
                            <i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>                    
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-category.php">
                            <i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>                    
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-categories.php" >
                            <i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-user-post.php" >
                            <i class="uil uil-list-ul"></i>
                            <h5>Manage User Posts</h5>
                        </a>
                    </li>
                    <?php endif ?>

                </ul>
            </aside>
            <main>
                <h2>Manage Users Post</h2>
                <?php if(mysqli_num_rows($users)>0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Post</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($user=mysqli_fetch_assoc($users)): ?>
                        <tr>
                            <?php $userID= $user['author_id'];
                            // echo $userID;
                            $userquery="SELECT * FROM users WHERE id='$userID'";
                            $row=mysqli_query($connection,$userquery);
                            if($result=mysqli_fetch_assoc($row)){
                                 echo '<td>' .$result["username"]. '</td>';

                            }
                             ?>

                            <td><?php echo $user["title"]; ?></td>
                            <td>
                                <form action="delete-user-post.php" method="post">
                                <input type="hidden" name="authorID" value="<?php echo $user['author_id']; ?>">
                                <input type="hidden" name="userID" value="<?php echo $user['id']; ?>">

                                    <button type="submit" class="btn sm danger">DELETE</button>
                                </form>
                            </td>

                        </tr>
                        <?php endwhile ?>
    
                    </tbody>
                </table>
                <?php else : ?>
                    <div class="alert__message error">No users found</div>
                    <?php endif?>
            </main>
        </div>
    </section>
 
<?php
include "../partials/footer.php";
?>
    