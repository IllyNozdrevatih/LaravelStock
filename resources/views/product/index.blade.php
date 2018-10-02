<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
    <table class="table">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>characteristics</td>
        </tr>
    @foreach( $products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td><a href="{{ route('products.show',$product) }}">{{ $product->getName() }}</td></a>
            <td>{{ $product->getCharacteristic() }}</td>
        </tr>
    @endforeach
    </table>
</div>
