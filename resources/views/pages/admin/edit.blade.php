<form action="{{url('/admin/'.$admin->id)}}" method="post">
@csrf
{{method_field('PATCH')}}
    @include('pages.admin.form',['mensaje'=>'Editar']);

</form>