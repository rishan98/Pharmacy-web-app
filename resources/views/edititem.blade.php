<html>
   <style>
       body {
        background-color: LightGray;
    }
    .t1 {
        
        margin-top: 50px;
        margin-left: 100px;
    }
    .btn1 {
        width: 10%;
        height: 5%;
        font-family: Helvetica, sans-serif;
        font-weight: bold;
        color: black;
        background-color: #faf0e6;
    }
    .header {
        font-family: Helvetica, sans-serif;
    }
    .input {
        width: 300px;
        height: 30px;
    }
   </style>
<body>
<div class="t1">
    <h1 class="header">Update Item</h1>
    <form action="/edit" method="POST">
    @csrf
    <input  type="hidden" name="id" value="{{$data['id']}}">
        <div>
          <b class="header">Item Name</b> <br>
          <input class="input"  type="text" name="itemname" value="{{$data['itemname']}}">
        </div>
        <div><br>

           <b class="header">Quantity</b> <br>
           <input class="input"  type="text" name="qty" value="{{$data['qty']}}">
        </div>
        <div><br>

            <b class="header">Price</b> <br>
            <input class="input"  type="text" name="price" value="{{$data['price']}}" >
        </div><br>
        
        <div>
            <input class="btn1" type="submit" value="Update">
        </div>
    </form>
</div>
</body>
</html>