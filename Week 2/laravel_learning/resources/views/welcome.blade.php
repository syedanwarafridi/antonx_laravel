<!DOCTYPE html>
<html>
    <head>
        <title>User Registration Page</title>
        <style>
             body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="radio"] {
            margin-right: 10px;
        }
        
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
    </head>
    <body>
        <a href="{{ url('/users') }}">Users Information</a>
        <h2>User Registration Form</h2>
        <form action="{{ url('/submit-form') }}" method="post">
            @csrf

            <label for="name">Full Name</label><br>
            <input type="text" name="name" id="name" required><br><br>

            <label for="email">Email Address</label><br>
            <input type="text" name="email" id="email" required><br><br>

            <label for="cinc">CNIC</label><br>
            <input type="text" name="cniv" id="cinc"><br><br>

            <label for="">Phone:</label><br>
            <input type="text" name="phone" id="phone"><br><br>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" required>
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other" value="other" required>
            <label for="other">Other</label><br><br>

            <label for="country">Country:</label><br>
            <input type="text" name="country" id="country"><br><br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age"><br><br>
            
            <label>Is Active:</label><br>
            <input type="radio" id="active" name="is_active" value="1" required>
            <label for="active">Active</label>
            <input type="radio" id="inactive" name="is_active" value="0" required>
            <label for="inactive">Inactive</label><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>