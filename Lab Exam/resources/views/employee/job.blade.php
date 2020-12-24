<!DOCTYPE html>
<html>

<body>

    <div>
        <form method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
                <legend>Add New Job</legend>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="job_title"></td>
                    </tr>
                    

                    <tr>
                        <td>Company Name</td>
                        <td><input type="text" name="company"></td>
                    </tr>

                    <tr>
                        <td>Salary</td>
                        <td><input type="text" name="salary" value=""></td>
                    </tr>

                    <tr>
                        <td>Location</td>
                        <td><input type="text" name="job_location" value=""></td>
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