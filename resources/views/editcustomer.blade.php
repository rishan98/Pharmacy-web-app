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
    <h1 class="header">Update Customer</h1><br>
    <form action="/edit1" method="POST">
    @csrf
    <input  type="hidden" name="id" value="{{$data['id']}}">
        <div>
          <b class="header">Customer Name</b> <br>
          <input class="input"  type="text" name="cname" value="{{$data['cname']}}" >
        </div><br>
        <div>
           <b class="header">Telphone No.</b> <br>
           <input class="input"  type="text" name="telno" value="{{$data['telno']}}" >
        </div>
        <br>
        <div>
           <b class="header">Item</b> <br>
           <input class="input"  type="text" name="iid" value="{{$data['iid']}}" >
        </div>
        <br>
        <div>
            <input class="btn1" type="submit" value="Update">
        </div>
    </form>
</div>
</body>
</html>