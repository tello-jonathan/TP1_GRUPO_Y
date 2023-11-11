empleados

    <form action="{{ url('/admin') }}" method="post">
        @csrf
        @include('pages.admin.form',['mensaje'=>'Crear']);
    </form>