 <html>
 <style>
    body {
        background-color: #f5f5f5;
    }
    .t1 {
        
        margin-top: 50px;
        margin-left: 100px;
    }
    .table {
        background-color: white;
        text-align: center;
        width: 80%;
        height: 50%;
        border-collapse: collapse;
        font-family: Helvetica, sans-serif;
    }
    .table td {
        border: 1px solid black;
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
    a {
        color: white;
        text-decoration: none;
    }

 </style>
 <body>
            <div class="t1">

                <h2 class="header">Update and Delete Items</h2><br>
                    <table class="table">
                       <tr style="font-weight: bold;">
                          <td>Id</td>
                          <td>Item</td>
                          <td>Quantity</td>
                          <td>Price</td>
                          <td> </td>
                          <td> </td>
                       </tr>
                       @foreach ($items as $item)
                       <tr>
                          <td>{{$item['id']}}</td>
                          <td>{{$item['itemname']}}</td>
                          <td>{{$item['qty']}}</td>
                          <td>{{$item['price']}}</td>
                          <td style="background-color: red;"><a href={{"delete/" .$item['id']}}>Delete</a></td>
                          <td style="background-color: green;"><a href={{"edit/" .$item['id']}}>Edit</a></td>
                       </tr>
                       @endforeach
                    </table>
                    <br><br><br>
                    <div>
                       <form action="/dashboard">
                         <input class="btn1" type="submit" value="Go to dashboard">
                       </form>
                    </div>
            </div>

            
                    
 </body>
 </html>       
                        