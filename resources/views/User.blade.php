<html>
    <head>
        <title>Form tutorial </title>
    </head>
    <body>
        <!-- <div>
            <ul>
                @foreach($errors->all() as $e)
                <li>{{$e}}</li>
                @endforeach
            </ul>
        </div> -->
        <form action="userdata" method="POST">
        @csrf       
            <input type="text" name="user" placeholder="Name"><br><br>
            @error('user')
            <div>
                {{$message}}
            </div>
            @enderror
            <input type="number" name="phone" placeholder="Phone"><br><br>
            @error('phone')
            <div>
                {{$message}}
            </div>
            @enderror
            <input type="password" name="password" placeholder="Password"><br><br>
            @error('password')
            <div>
                {{$message}}
            </div>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </body>
</html>