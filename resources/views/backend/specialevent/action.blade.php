
<a href="{{ route('admin.event.edit',$id) }}">
    <i id="edit" style="color:#008CBA;" class="fa-solid fa-pen"></i>
</a>

<form  action="{{ route('admin.event.destroy', $id) }}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button id="del"><i style="color:red; margin: 10px;" class="fa-solid fa-trash"> </button></i>
</form>
