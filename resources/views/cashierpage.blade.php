<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pharmacy | Cashier') }}
        </h2>
    </x-slot>

    <style>
       .header {
        font-weight: bold;
        font-size: 25px;
       }
       .btn {
        width: 25%;
        height: 15%;
        font-family: Helvetica, sans-serif;
        font-weight: bold;
        color: white;
        background-color: blue;
        font-size: 20px;
        border: bold;
       }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                       <h2 class="header">Profile status</h2><br>
                       <b>ID : {{Auth::user()->id}}</b><br>
                       <b>Name : {{Auth::user()->name}}</b><br>
                       <b>Email : {{Auth::user()->email}}</b>

                    <div><br><br>

                       <form action="/deleteitem">
                         <input class="btn" type="submit" value="Update and Delete Items">
                       </form>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>