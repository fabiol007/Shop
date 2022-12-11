<div>
    <style>
        nav svg{
            height: 20px;;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow" style="color:white;">Strona Główna</a>
                    <span></span> Panel Użytkowników
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Panel Użytkowników
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.user.add')}}" class="btn btn-success float-end">Dodaj Nowego Użytkownika</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Lp</th>
                                            <th>Nazwa</th>
                                            <th>Email</th>
                                            <th>Typ</th>
                                            <th>Data</th>
                                            <th>Akcje</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($users->currentPage()-1)*$users->perPage();
                                        @endphp
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{++$i}}</td>          
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->utype}}</td>
                                                <td>{{$user->created_at}}</td>
                                                <td>
                                                    <a href="{{route('admin.user.edit',['user_id'=>$user->id])}}" class="text-info">Edytuj</a>
                                                    <a href="#" onclick="deleteConfirmation({{$user->id}})" class="text-danger">Usuń</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$users->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Czy napewno chcesz usunąć użytkownika</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Anuluj</button>
                        <button type="button" class="btn btn-danger" onclick="deleteUser()">Usuń</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {   
            @this.set('user_id',id);
            $('#deleteConfirmation').show();
            
        }

        function deleteUser()
        {
            @this.call('deleteUser');
            $('#deleteConfirmation').hide();
        }
    </script>
@endpush
@stack('scripts');