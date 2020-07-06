<html>
    <head>
        <title>Forgot Password Email</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Dear {{ $name}}!</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Your Account has been updated successfully. Your account information is below.</td>

            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Email: {{ $email}}</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>New Password: {{ $password}}</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Thanks & Regards,</td>
            </tr>
            <tr>
                <td>Blood Bonding</td>
            </tr>
        </table>
    </body>
</html>