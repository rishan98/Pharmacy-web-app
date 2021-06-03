<html>
 <style>
    body {
        background-color: LightGray;
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
        border: 1px solid #ddd;
    }
    .table tr:nth-child(even){
        background-color: #f2f2f2;
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

                <h2 class="header">All Customers</h2><br>
                    <table class="table">
                       <tr style="font-weight: bold;">
                          <td>Id</td>
                          <td>Name</td>
                          <td>Telephone No.</td>
                          <td>Item ID</td>
                          
                       </tr>
                       @foreach ($customers as $customer)
                       <tr>
                          <td>{{$customer['id']}}</td>
                          <td>{{$customer['cname']}}</td>
                          <td>{{$customer['telno']}}</td>
                          <td>{{$customer['iid']}}</td>
                        
                          
                       </tr>
                       @endforeach
                    </table>
                    <br><br><br>
                    
            </div>

            
                    
 </body>
 </html>     