<div>
    <table class="table-fixed">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Favorite</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td class="border px-4 -py-2">{{ $product->name }}</td>
                <td class="border px-4 -py-2">{{ $product->price }}</td>
                @auth
                    <td class="border px-4 -py-2">
                        @if ($product->isFavoriteByUser(Auth::user()))
                            <button type="button" wire:click="toggleFavoriteProductByUser({{ $product }}, {{ Auth::user() }})">1</button>
                        @else
                            <button type="button" wire:click="toggleFavoriteProductByUser({{ $product }}, {{ Auth::user() }})">0</button>
                        @endif
                    </td>
                    @else
                    <td class="border px-4 -py-2"><a href="{{ route('login') }}">0</a></td>
                @endauth
            </tr>
            @endforeach
        </tbody>
    </table>
</div>