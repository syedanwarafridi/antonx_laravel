<!DOCTYPE html>
<html>
    <head>
        <title>Queries Page</title>
    </head>
    <body>
        <h4>Write a query to get only 1 record.</h4>
        @if($user)
            <p>- {{ $user->name }} is 
                @if($user->is_active == 1)
                    active
                @else
                    not active
                @endif
            </p>
        @else
            <p>No user found.</p>
        @endif

        <h4>Write a query to retrieve users who were registered today.</h4>
        @if(count($users) > 0)
            @foreach($users as $user1)
                <p>
                    {{ $user1->name }} 
                    is registered on
                    {{ $user1->created_at }}
                </p>
            @endforeach
        @else
            <p>No users registered today.</p>
        @endif
    </body>
</html>
