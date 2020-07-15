@extends('layouts.app')

@section('content')
<style>

.grid-container{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}

</style>
</head>
<body>


<section>
    <div class="grid-container">
    @foreach($products as $product)
            <div>
                    <a href="{{route('shop.show',['product' => $product->slug])}}"><img src="{{asset('/img/products/'.$product->slug.'.jpeg')}}" alt="" width="193" height="130"></a>
                    <a href="{{route('shop.show',['product' => $product->slug])}}"><div class="product-name">{{$product->name}}</div></a>
                    <div class="product-name">₹{{$product->price}}.99</div>
                </div>
            @endforeach
    </div>
</section>
@endsection

@section('sidebar')

<h2>Categories:</h2>

@foreach($categories as $category)

  <h4><a href="{{route('cat.show', $category->id)}}" style="color:grey">{{$category->name}}</a></h4>

@endforeach

@endsection

@section('breadcrumb')

<ul class="breadcrumb" >
  <div class="container">
     <a href="/">home</a>
     <i class="fa fa-chevron-right breadcrumb-separator"></i>
     <span>shop</span>
     </div>
</ul>
@endsection