<!DOCTYPE html>
<html>

<body>

    <div>
        <form method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
                <legend>Register Employee</legend>
                <table>
                   
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>

                    <tr>
                        <td>Company Name</td>
                        <td><input type="text" name="company"></td>
                    </tr>
                    <tr>
                        <td>Contact No</td>
                        <td><input type="text" name="contact" value=""></td>
                    </tr>


                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>

    </div>


</body>

</html>