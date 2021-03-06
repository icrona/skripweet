<!DOCTYPE html>
<html>
<head>
	<title>Order Details Download</title>
</head>
<body>
	<style type="text/css">
	table td, table th{
		border:1px solid black;
	}
	</style>

			<h1>Order Details</h1>
			<a href="{{ url('/orders'.$order->id) }}"><small>{{ url('/orders'.$order->id) }}</small> </a>
			<p><small>Date Received : {{$order->created_at}}</small></p>
			<p><small>Status : {{$order->status}}</small></p>
			<p><small>Printed at : {{$order->time}}</small></p>
@if($order->order_from =="Web")
<table>
	<tr>
		<td>
			<img src="{{ public_path('images/') . $order->cake_image }}" style="width:200px;height:200px;">
			<p>{{$order->cake_name}}<p>
			<p>Rp. {{$order->cake_price}}<p>
		</td>
		<td>

			<p>Name       : {{$order->name}}<p>
			<p>Phone       : {{$order->phone}}<p>
			<p>Email       : {{$order->email}}<p>
			<p>Address       : {{$order->address}}<p>
			<p>Delivery Date       : {{$order->date}}<p>
			<p>Notes      : {{$order->notes}}<p>
		</td>
	</tr>
</table>
@else
<table>
	<tr>
		<td>
			<tr>
				<td>
					<img src="{{ public_path('images/') . $order->cake_image }}" style="width:175px;height:175px;">
				</td>
				<td>
					<img src="{{ public_path('images/') . $order->cake_image1 }}" style="width:175px;height:175px;">
				</td>
						
			</tr>
			<tr>
							<td>
					<img src="{{ public_path('images/') . $order->cake_image2}}" style="width:175px;height:175px;">
				</td>
				<td>
					<img src="{{ public_path('images/') . $order->cake_image3 }}" style="width:175px;height:175px;">
				</td>
						
			</tr>
</table>
<table>
	<tr>
		<td>
			<p>Cake Name       : {{$order->cake_name}}<p>
			<p>Price       : {{$order->cake_price}}<p>
			<p>Size Tier 1: {{$order->cake_size}} cm</p>
			@if($order->cake_size1 != 0)
			<p>Size Tier 2: {{$order->cake_size1}} cm</p>
			@endif
			@if($order->cake_size2 != 0)
			<p>Size Tier 3: {{$order->cake_size2}} cm</p>
			@endif
			<p>Flavour Tier 1: {{$order->cake_flavour}}</p>
			@if($order->cake_flavour1 != "")
			<p>Flavour Tier 2: {{$order->cake_flavour1}}</p>
			@endif
			@if($order->cake_flavour2 != "")
			<p>Flavour Tier 3: {{$order->cake_flavour2}}</p>
			@endif
			<p>Frosting : {{$order->cake_frosting}}</p>
		</td>
		<td>
			<p>Name       : {{$order->name}}<p>
			<p>Phone       : {{$order->phone}}<p>
			<p>Email       : {{$order->email}}<p>
			<p>Address       : {{$order->address}}<p>
			<p>Delivery Date       : {{$order->date}}<p>
			<p>Notes      : {{$order->notes}}<p>
		</td>
	</tr>
</table>
@endif
</body>
</html>