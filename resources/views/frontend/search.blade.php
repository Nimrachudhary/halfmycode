
<div>
    <ul class="list-group">
        @forelse($stores as $item)
        <li class="list-group-item">
            <a href="/store/{{$item->slug}}" style="text-decoration: none">
                <img style='width:50px;height:50px; margin-right:10px;' src="{{ asset('images/'.$item->image) }}" />
                <span style="display: inline-block;font-size: 20px;
                font-weight: 700; position: relative;
    top: -15px;" class="">{{ $item->name }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</div>



