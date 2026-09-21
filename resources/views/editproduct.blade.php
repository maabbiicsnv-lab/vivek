<a href="/showproducts">view all products</a>
@if(  session("success")  )

    <div>{{ session("success")  }}</div>

@endif
<form action="/updateproduct/{{ $prd->id }}" method="post">
@csrf
@method("put")
title <input type="text" name="title" value="{{ $prd->title }}"><br>
@error("title")
    <div>{{ $message }}</div>
@enderror

price<input type="number" name="price" value="{{ $prd->price }}"><br>
@error("price")
        <div>{{ $message }}</div>
@enderror

stock<input type="number" name="stock" value="{{ $prd->stock }}"><br>
@error("stock")
    <div>{{ $message }}</div>
@enderror

category<input type="text" name="category" value="{{ $prd->category }}"><br>
@error("category")
    <div>{{ $message }}</div>
@enderror

<input type="submit" value="update product">
</form>