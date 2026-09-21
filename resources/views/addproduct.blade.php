<a href="/showproducts">view all products</a>
@if(  session("success")  )

    <div>{{ session("success")  }}</div>

@endif
<form action="/saveproduct" method="post">
@csrf
title <input type="text" name="title"><br>
@error("title")
    <div>{{ $message }}</div>
@enderror

price<input type="number" name="price"><br>
@error("price")
        <div>{{ $message }}</div>
@enderror

stock<input type="number" name="stock"><br>
@error("stock")
    <div>{{ $message }}</div>
@enderror

category<input type="text" name="category"><br>
@error("category")
    <div>{{ $message }}</div>
@enderror

<input type="submit" value="add product">
</form>