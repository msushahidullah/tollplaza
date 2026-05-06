@if (!empty($categories) && is_array($categories))
    @foreach ($categories as $categorie)
        <li class="nav-item">
            {{ $categorie['title'] ?? 'Category Name' }}
        </li>
    @endforeach
@else
    <li class="nav-item">
        No categories available.
    </li>
@endif
