<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel for Our Blog</title>
        
        <link rel="stylesheet" type="text/css" href="http://localhost:81/phpblog/assets/css/style.css" />
    </head>
    
    <body>
    
    <!-- Menu Starts From Here -->
        <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="users.php">Users</a>
                </li>
                <li>
                    <a href="categories.php">Categories</a>
                </li>
                <li>
                    <a href="blogs.php">Blogs</a>
                </li>
            </ul>
        </nav>
    <!-- Menu Ends From Here -->
        
    <!-- Main Content Starts Here -->
    <section class="main">
        <h1>Add User Page</h1>
        
        <!-- inserting User Details -->
        <form method="post" action="add_user_action.php">
            <table>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="full_name" /></td>
                </tr>
                
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" /></td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" /></td>
                </tr>
                
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" /></td>
                </tr>
                
                <tr>
                    <td>Is Active?</td>
                    <td>
                        <input type="radio" name="is_active" value="1" /> Yes
                        <input type="radio" name="is_active" value="0" /> No
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add User" />
                    </td>
                </tr>
            </table>
        </form>
        <!-- inserting User Details Ends -->
    </section>
    <!-- Main Content Starts Here -->
        
    <!-- Footer Starts Here -->
    <footer>
        &copy; 2018, PHP BLOG.
    </footer>
    <!-- Footer Starts Here -->
    
    </body>
</html>