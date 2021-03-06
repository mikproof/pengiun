@extends('layouts.app')

@section('content')

   <center><h3>Cart Item</h3></center>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>qty</th>
        <th>Add Item |Remove Items</th>
      </tr>
    </thead>

    <tbody>
      @foreach($cartItems as $cartItem )
      <tr>
        <td> {{$cartItem->name}}</td>
        <td>${{$cartItem->price}}</td>
        <td width="auto">
           {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
            <input name="qty" type="text" value="{{$cartItem->qty}}">

        </td>

        <td>
          <input type= 'submit' style="float: left" class="btn btn-sm btn-default"  value="Add">
          {!! Form::close() !!}

          <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
               {{csrf_field()}}
               {{method_field('DELETE')}}
              <input class="btn btn-sm" type="submit" value="Delete">
             </form>
        </td>
      </tr>
      @endforeach
      <tr>
        <td>
          Tax:${{Cart::tax()}}
           <br>
          Sub Total: {{Cart::subtotal()}}
          <br>
          Grand Total: {{Cart::total()}}
        </td>
        <td>Items: {{Cart::count()}}</td>
        <td></td>
      </tr>

    </tbody>

  </table>

   <a href="{{route('checkout.shipping')}}" class="btn btn-default">Checkout</a>
</div>


@endsection
