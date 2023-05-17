@extends('layouts.app')

@section('content')


<style>
    @import url('https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Gentium+Book+Plus&family=Kanit:wght@200&family=Ysabeau:wght@100;200&display=swap');

    .one {
        position: absolute;
        width: 1000px;
        height: 800px;
        margin-left: 250px;
        top: 200px;
        background: #383637;
        position: center;
        border-radius: 20px;
        font-family: 'Abhaya Libre', serif;
        opacity: 100%;
    }

    p {
        color: white;
        font-family: 'Abhaya Libre', serif;
        font-size: 30px;
        margin-top: 80px;
        margin-left: 40px;
    }

    th,
    tr,
    td {
        color: white;
        font-family: 'Abhaya Libre', serif;
        font-size: 15px;
        margin-top: 80px;
        margin-left: 40px;
    }

    table,
    tbody,
    thead {
        color: rgb(49, 47, 47);
    }
</style>

<body>

    <p class="fs-2">Check/Update Your Current Orders: </p>
    <table class="one table caption-top">
        <thead>
            <tr>
                <th scope="col">Order Number</th>
                <th scope="col">Tailoring Shop</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Date</th>
                <th scope="col">Order</th>
                <th scope="col">Progress</th>
                <th scope="col">Payment</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                
               
                <td>Order no.1</td>
                <td>Tailoring Shop 1</td>
                <td>09159763222</td>
                <td>Deadline [Dec. 15, 2023]</td>
                <td>2 Sets of Uniform</td>
                <td>Progress [80%] <br> (ADNU)</td>
                <td>No <br> Edit</td>
            </tr>

            <tr>
         
                
                <td>Order no.2</td>
                <td>Tailoring Shop 2</td>
                <td>09159763221</td>
                <td>Deadline [Dec. 15, 2023]</td>
                <td>2 Sets of Uniform</td>
                <td>Progress [80%] <br> (ADNU)</td>
                <td>No <br> Edit</td>
            </tr>
            <tr>
                
              
                <td>Order no.3</td>
                <td>Tailoring Shop 3</td>
                <td>09159763223</td>
                <td>Deadline [Dec. 15, 2023]</td>
                <td>2 Sets of Uniform</td>
                <td>Progress [80%] <br> (ADNU)</td>
                <td>No <br> Edit</td>
            </tr>
        </tbody>
    </table>

    @endsection