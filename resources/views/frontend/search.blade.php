{{-- <ul>
    @forelse($stores as $item)
    <li class="list-group-item p-1 border-0 append-name">
        <a href="/stores/{{$item->slug}}">
            <div class="media">
                <div class="row">
                    <div class="col-md-12" id="onhover">
                        <img style='float:left;width:50px;height:50px; margin-right:10px;' src="{{ asset('images/'.$item->image) }}" />
                        <h2 class="">{{ $item->name }}</h2>
                    </div>
                </div>
            </div>
        </a>
    </li>
    @empty
    <li class="list-group-item p-1 border-0 append-name">No records were founded.</li>
    @endforelse
</ul> --}}
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



