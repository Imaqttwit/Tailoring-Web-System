@extends('layouts.app')
@section('content')




<style>
  .form-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .form-row {
    display: flex;
    justify-content: space-between;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: white;
  }

  input[type="text"] {
    display: block;
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  input[type="text"]:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px #007bff;
  }


  input[type="tel"],
  input[type="email"],
  input[type="text"],
  textarea {
    display: block;
    width: 96%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  input[type="tel"]:focus,
  input[type="email"]:focus,
  input[type="text"]:focus,
  textarea:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px #007bff;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ccc;
  }

  th {
    font-weight: bold;
    color: white;
  }

  button {
    display: block;
    margin: 0 auto;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
  }

  button:hover {
    background-color: #0062cc;
  }


  input#city,
  input#state,
  input#zip-code {
    width: 80%;
    margin-right: 4%;
  }
</style>

<body>
  @if(Session::has('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
  </div>
  @endif



  <form method="POST" action="{{ route('orderforms.store') }}">
    @csrf

    <div class="form-container">
      <h2>Place Your Order Here</h2>
      <div class="form-row">

        <div class="form-group">
          <label for="email"> Name</label>
          <input type="text" id="full-name" name="fullname" required>
        </div>

      </div>
      <div class="form-group">
        <label for="phone-number">Phone Number</label>
        <input type="tel" id="phone-number" name="phone-number" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="delivery-address">Delivery Address</label>
        <input type="text" id="delivery-address" name="delivery-address" required>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group">
          <label for="state">State/Province</label>
          <input type="text" id="state" name="state" required>
        </div>
        <div class="form-group">
          <label for="zip-code">Postal / Zip Code</label>
          <input type="text" id="zip-code" name="zip-code" required>
        </div>
      </div>
      <h3>Create Your Order List</h3>
      <table>
        <thead>
          <tr>
            <th>Deadline</th>
            <th>Product Name</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" id="deadline" name="deadline"></td>
            <td><input type="text" id="product-name" name="product-name"></td>
            <td><input type="number" id="quantity" name="quantity"></td>
          </tr>
        </tbody>
      </table>
      <div class="form-group">
        <label for="special-instructions">Order and Special Delivery Instructions</label>
        <textarea id="special-instructions" name="special-instructions"></textarea>
      </div>



      <button type="submit" id="submitButton" class="btn-dark-green text-decoration-none rounded-pill">
        {{ __('Place Order') }}
      </button>

    </div>
  </form>
</body>



@endsection