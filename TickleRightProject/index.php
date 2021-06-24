<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body align="center">
    <form action="indexmainfunc.php" method="POST">
        <div>
            <div class="container"><br>
                <h2>Contact Details</h2>
            </div>

            <div>
                <table align="center">
                    <tr>
                        <th>
                            Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>                            
                            <td><input type="text" id="fname" name="fname"><br><br>
                        </td>
                    </tr>

                    <tr>
                        <th>Contact No. : &nbsp;</th>
                        <td><input type="tel" id="phone" name="phone"><br><br>
                        </td>
                    </tr>

                    <tr>
                        <th>E-mail Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td><input type="email" id="email" name="email"><br><br>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <td> <textarea name="add" rows="3" cols="30"></textarea>
                        </td>
                    </tr>

                </table>
            </div>

            <div>
                <br><br>
                <button type="reset" name="reset" align="center">Reset</button>
                <button type="Submit" name="Submit" align="center">Submit</button>
            </div>

        </div>
    </form>
</body>
</html>
