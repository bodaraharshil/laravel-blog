<html>
    <head>
        <title>Company form</title>
    </head>
    <body>
        <!-- <form action="/formsubmit" method="POST">
             <input type="text" placeholder="Company name" name="company"><br><br>
             <input type="number" name="user_id" value="1"><br><br>
             @csrf
             <button type="submit">Submit</button>
        </form> -->

        <form action="/formupdate" method="POST">
             <input type="text" placeholder="Company name" name="company"><br><br>
             <input type="number" name="user_id" value="1"><br><br>
             @csrf
             <button type="submit">Update</button>
        </form>


    </body>
</html>