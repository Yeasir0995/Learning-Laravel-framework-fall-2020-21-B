<!DOCTYPE html>
<html>

<body>

    <div>
        <form action="" method="POST">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="username" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
            <a href="/registration">Create your account!!</a>

    </div>


</body>

</html><?php /**PATH D:\APWT\Final_Lab_Task-master\Final_Lab_Task-master\resources\views/login/login.blade.php ENDPATH**/ ?>