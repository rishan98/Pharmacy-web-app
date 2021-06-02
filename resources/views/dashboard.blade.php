<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pharmacy | Owner') }}
        </h2>
    </x-slot>

    <style>
      .btn {
        width: 25%;
        height: 15%;
        font-family: Helvetica, sans-serif;
        font-weight: bold;
        color: black;
        background-color: #faf0e6;
        font-size: 20px;
       }
       .header {
        font-weight: bold;
        font-size: 25px;
       }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="header">Add Items</h1><br>

                    <form action="add" method="POST">
                       @csrf
                      <div>
                        Item Name <br>
                        <input  type="text" name="itemname" required>
                      </div>
                      <div>
                        Quantity <br>
                        <input  type="text" name="qty" required>
                      </div>
                      <div>
                        Price <br>
                        <input  type="text" name="price" required>
                      </div><br>
                      <div>
                        <input class="btn" type="submit" value="Add">
                      </div>

                    </form>

                </div><br><br><br>
                <div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="header">Add Customers</h1><br>

                    <form action="addc" method="POST">
                       @csrf
                      <div>
                        Customer Name <br>
                        <input  type="text" name="cname" required>
                      </div>
                      <div>
                        Telephone No. <br>
                        <input  type="text" name="telno" required>
                      </div>
                     
                     <div>
                        Item ID <br>
                        <input  type="text" name="iid" required>
                      </div>
                     <br>
                      <div>
                        <input class="btn" type="submit" value="Add">
                      </div>

                    </form>
                    
                </div>
                
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
