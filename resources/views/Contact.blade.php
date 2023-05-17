@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
</head>
    <meta charset="utf-8">
    <title>Contact Page </title>

    <link href="{{ asset('css/contactstyles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Vidaloka&display=swap');
    *{
        margin: 0;
        padding: 0;
    }
    .navbar-brand{
    font-family: 'Playfair Display', serif;
    color: #ffffff ;

}

.navbar-nav .active{
    border-bottom: white solid 3px;
    color: white !important;
}
.nav-link{
    color: #ffffff;
}
    .container {
        width: 100%;
        margin: 50px auto;
        border-radius: 35px;
    }
 
    .contact-box{
        background: #957979;
        display:flex;
        border-radius: 35px;
        width: 100%;
    }
    .contact-left{
        flex-basis: 60%;
        padding: 40px 60px;
        border-radius: 35px;
    }
    .contact-right{
        flex-basis: 60%;
        padding: 40px;
        background: #302C2C;
        color: rgb(255, 255, 255);
        border-radius: 35px;
    }
    h1{
        margin-bottom: 50px;
        font-family: 'Vidaloka', serif;
        color: #DD7272;
    }

    .input-row{
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .input-row .input-group{
        flex-basis: 45%;
    }
    input{
        width: 100%;
        border: none;
        border-bottom: 1px solid #ccc;
        outline: none;
        padding-bottom: 5px;
    }
    textarea{
        width: 100%;
        border: 1px solid #ccc;
        outline: none;
        padding: 10px;
        box-sizing: border-box;
    }
    label{
        margin-bottom: 6px;
        display: block;
        color: #000000;
    }
    button{
        background: #4e4848;
        width: 100px;
        border: none;
        outline: none;
        color: #000000;
        height: 35px;
        border-radius: 30px;
        margin-top: 20px;
        box-shadow: 0px 5px 15px 0px rgba(28, 0,181, 0.3);
    }
    .contact-left h3{
        color: #1c00b5;
        font-weight: 600;
        margin-bottom: 30px;
    }
    .contact-right h3{
        font-weight: 600;
        margin-bottom: 30px;
    }
    tr td:first-child{
        padding-right: 20px;
    }
    tr td{
        padding-top: 20px;
    }
    .heading1{
        color: #000000;
    }
</style>

  <body>
<h1>Contact Us</h1>
    <div class="container">
       
        <div class="contact-box">
            <div class="contact-left">
                <h1 class="heading1">Send your request</h1>
                <form>
                    <div class="input-row">
                        <div class="input-group">
                            <h4 class="heading4">Name</h4>
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="input-group">
                            <h4 class="heading4">Phone</h4>
                            <input type="text" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <h4 class="heading4">Email</h4>
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <h4 class="heading4">Subject</h4>
                            <input type="text" placeholder="Subject">
                        </div>
                    </div>

                    <h4 class="heading4">Message</h4>
                    <textarea rows="5" placeholder="Your Message"></textarea>

                    <button type="submit">SEND</button>
                </form>
            </div>
            <div class="contact-right">
                <h1>Reach Us</h1>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>tailoringappsys@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>09123456789</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>#4400 Tailoring Street</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</body>
</html>
@endsection
