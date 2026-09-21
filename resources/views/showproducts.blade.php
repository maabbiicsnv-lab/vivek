<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .main
            {
                display: flex;
                gap:10px;
                flex-wrap: wrap;
                justify-content: space-around;
            }
            .box
            {
                padding: 20px;
                min-width: 300px;
                min-height: 200px;
                box-shadow: 0px 0px 10px grey;
                border-radius: 10px;
            }
    </style>
</head>
<body>
    <a href="/addproduct">add new products</a>

@if(  session("success")   )

    <div>{{  session("success")  }}</div>

@endif

<div class="main">
@foreach ( $productstable as $p )
<div class="box">
    <div>{{ $p->title }}</div>
    <div>{{ $p->price }}</div>
    <div>{{ $p->stock }}</div>

    <div>
        <form action="/deleteproduct/{{ $p->id }}" method="post">
            @csrf
            @method("delete")
            <input type="submit" value="remove">
        </form>
    </div>
    <div><a href="/editproduct/{{ $p->id }}">edit</a></div>
    <br>
</div>
@endforeach
</div>
</body>
</html>