<div class="card" style="width: 18rem; max-height:50rem; margin-top:10px">
  <img src="{{ $product->cover }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
        <a href="{{ route('catalog.show', ['slug' => $product->slug ]) }}">
            {{ $product->title }}
        </a>
    </h5>
    <p>
        @foreach($product->categories as $category)
            <a href="">
                    @switch($category->id)
                    @case(1)
                        <span class="badge badge-purple mr-1 "> {{ $category->name }} </span>
                        @break
                    @case(2)
                        <span class="badge badge-blue mr-1 "> {{ $category->name }} </span>
                        @break
                    @case(3)
                        <span class="badge badge-red mr-1 "> {{ $category->name }} </span>
                        @break
                    @case(4)
                        <span class="badge badge-yellow mr-1 "> {{ $category->name }} </span>
                        @break
                    @case(5)
                        <span class="badge badge-lime mr-1 "> {{ $category->name }} </span>
                        @break
                    @endswitch
                
            </a>
        @endforeach
    </p>
    <p>
        {{ $product->price }}
    </p>
    <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 60, '...') }}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer">
    <span class="{{ $product->stock > 0 ? 'badge-success' : 'badge-danger' }}">
    {{ $product->stock > 0 ? 'На складе' : 'Отсутствует' }}"
    </span>
  </div>
</div>