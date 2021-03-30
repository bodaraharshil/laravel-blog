<html>
    <head>
        <title>Form tutorial </title>
    </head>
    <body>
        <form action="userdata" method="POST">
        @csrf    
        <input type="text" name="user" placeholder="Name"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>