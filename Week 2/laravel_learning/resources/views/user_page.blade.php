<!-- resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 20px;
            font-size: 1.2rem;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .restore-button {
            color: blue;
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
        }
        .delete-button {
            color: red;
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
        }
        .restore-button {
            color: blue;
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <div>
<a href="{{ url('/') }}">Registration Form</a>
</div>
<div class="container">
        <h1>User Page</h1>
        
        <h2>Total Number of Users: {{ $totalUsers }}</h2>
        <h2>Total Active Users: {{ $totalActiveUsers }}</h2>
        <h2>Total Inactive Users: {{ $totalInActiveUsers }}</h2>

        <h2>Active Users:</h2>
        <ul>
            @foreach ($users as $user)
                <li>
                    {{ $user->name }}
                    <form action="{{ route('Userdelete', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <h2>Trashed Users:</h2>
        <ul>
            @foreach ($trashedUsers as $user)
                <li>
                    {{ $user->name }}
                    <form action="{{ route('Userrestore', $user->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <button type="submit" class="restore-button">Restore</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <!-- Other content related to users... -->
    </div>
</body>
</html>
