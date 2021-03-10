<?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo ($name . "<br>" . $email . "<br>" . $password);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP - Form Handling</title>

        <style>
            .form {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 60px;
                padding: 10px 0;
            }

            form {
                padding: 2rem;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input {
                padding: 5px 10px;
            }

            .form-group {
                margin-bottom: 10px;
                
            }

            .form_btn {
                background-color: black;
                color: white;
                border: none;
                cursor: pointer;
                padding: 10px 10px;
            }

            .form_btn:focus, input:focus {
                outline: none;
            }
        </style>
    </head>

    <body>
        <div class="form">
            <form action="index.php" method='POST'>
                <div class="form-group">
                    <label for="fullname">Name</label>
                    <input type="text" name='name' id='fullname' placeholder='your full name'>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name='email' id='email' placeholder='name@example.com'>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name='password' id='password' placeholder='password'>
                </div>

                <button type='submit' name='submit' value="submit" class='form_btn'>Create my account</button>
            </form>
        </div>
    </body>
</html>
