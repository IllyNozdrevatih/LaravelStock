<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
    <table class="table">
        <tr>
            <td>id</td>
            <td>brand</td>
            <td>model</td>
            <td>characteristics</td>
        </tr>
    @foreach( $products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->brand->name }}</td>
            <td>{{ $product->type->name }}</td>
            <td>
                @foreach( $product->value_characteristics as $characteristics)
                    {{ $characteristics->value }}
                @endforeach
            </td>
        </tr>
    @endforeach
    </table>
</div>
