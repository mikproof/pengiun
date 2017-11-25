@extends('layouts.app')

@section('content')

  <h3>Orders</h3>
  <ul>
    @foreach($orders as $order)
      <li>
        <h4>Order By {{$order->user->name}} <br> Total Price: ${{$order->total}}</h4>

        <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
          {{csrf_field()}}
            <label for="delivered">Delivered</label>
            <input type="checkbox" value="1" name="delivered"  {{$order->delivered==1?"checked":"" }}>
            <input type="submit" value="Submit">
        </form>



        <h5>Items</h5>
        <table class="table table-bordered">
          <tr>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
          </tr>
          @foreach($order->orderItems as $item)
          <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->pivot->total}}</td>
          </tr>
          @endforeach
        </table>
      </li>
  @endforeach

  </ul>


@endsection
