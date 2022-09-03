<?php include("../layouts/header.php"); ?>
<?php include("../layouts/nav_login.php");?>

<div class="reg-content">
    <div class="title">
        <i class="fas fa-user-plus"></i> Register Here 
    </div>
    <div class="body">
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
            <table border="0">
                <tr>
                    <td>
                        Username : 
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" id="username" class="reg-input"><span id="regusererr"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="email" id="email" class="reg-input"><span id="regemailerr"></span>
                    </td>                
                <tr>
                    <td>
                        Password :
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" id="password" class="reg-input"><span id="regpasserr"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password :
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" id="password" class="reg-input"><span id="regpasserr"></span>
                    </td>
                </tr>
            </table>
    
        </form>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
