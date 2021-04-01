<html>
    <head>
        <title>Upload file</title>
    </head>
    <body>
    <form action="upload" method="post" enctype="multipart/form-data">
        <input type="file" name="user_image">
        @csrf
        <button type="submit"> Upload file</button>
    </form>
    <div>
            @foreach($data as $i)
                <li>{!!$i!!}</li>
            @endforeach
        </div> -->
        <!-- <div>{{$data['name']}}<div>
            @if($data['name'] ==  'test@gmail.com' )
            success name 
            @else 
            not success
            @endif -->
            <!-- @extends('layout');
            @section('title','User page')
            
            @section('header')
            @parent
            @endsection

            @section('content','User page Hello world')

            @section('footer')
            @parent
            @endsection -->

        <!-- <div>
            <ul>
                @foreach($errors->all() as $e)
                <li>{{$e}}</li>
                @endforeach
            </ul>
        </div> -->
        <!-- <form action="userdata" method="POST">
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
        </form>-->
    <!-- <script>
        var data = @json($data);
        console.log(data)
    </script> -->
    <body>
</html>
