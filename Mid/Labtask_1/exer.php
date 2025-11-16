<!DOCTYPE html>
<html>
    <head>
        <title>Reg Page</title>
        <style>
            .body{
                font-family: Arial, sans-serif;
                background: #ffffffff;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                color: #fff;
            }
            h1, h2 {
                text-align: center;
                margin: 5px 0;
                color: #333;
            }
            form {
                background-color: #f9f9f9;
                border-radius: 8px;
                padding: 20px;
                margin-top: 20px;
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
                width: 450px;
            }
            table {
                width: 100%;
            }
            td {
                padding: 8px;
                color: #333;
                font-weight: bold;

            }
            input[type="text"],
            input[type="email"],
            input[type="password"],
            select {
                font-weight: bold;
                width: 100%;
                padding: 8px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type="submit"] {
                background-color: #172c5bff;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }
            input[type="submit"]:hover {
                color: #172c5bff;
                background-color: #b4b4b4ff;
            }
        </style>
    </head>
    <body class="body">
        <center><h1>Clinic Patient Registration</h1></center>
        <form>
            <table>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>    
                    <td>
                        Phone Number:
                    </td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td><input type="email"></td>
                </tr>
                <tr>
                    <td>Insurance Provider:</td>
                    <td>
                        <select>
                            <option>Select Provider</option>
                            <option>Provider A</option>
                            <option>Provider B</option>
                            <option>Provider C</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Insurance Policy Number:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th colspan="2"><h1>Additional Information</h1></th>
                </tr>
                <tr>
                    <td>
                        username:
                    </td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>
                        password:
                    </td>
                    <td><input type="password"></td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td><input type="password"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Register">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>