<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('click "add a new Wizkid"') }}
        </h2>
    </x-slot>
    <style>
.center{  position: absolute;
  left: 50%;
  transform: translate(-50%);
}
.dbtable th {
    width: 200px;
    text-align: center;
    }
.dbtable td img{
    margin-left:50px 
}
.padding-1{
    padding:5px;
}
.dbtable td {
    width: 200px;
    padding-bottom:20px;
    border-style:solid;
    border-width:1px;
    text-align: center;
    }
</style>
    <div class="center text-center">
        <h2 style="padding:20px;s"><a href="{{ route('wizkids.create') }}"> Add a new Wizkid</a></h2>
        <table class="dbtable">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>SocialLink</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>              
            {{ $value->link }}
            </td>
            <td><input disabled type="checkbox" id="active" name="active" {{$value->active===1?"checked":""}}></td>
            <td>
                <form action="{{ route('wizkids.destroy',$value->id) }}" method="POST">
                    <a class="btn padding-1 btn-primary" href="{{ route('wizkids.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn padding-1 btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>

    @if ($message = Session::get('success'))
    <div>
        <p>{{ $message }}</p>
    </div>
    @endif
</x-app-layout>