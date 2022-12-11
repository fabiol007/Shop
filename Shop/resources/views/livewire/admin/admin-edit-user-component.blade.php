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
                    <a href="/" rel="nofollow" style="color:white"s>Strona Głowna</a>
                    <span></span> Edytuj Użytkownika
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Edytuj Uzytkownika
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.users')}}" class="btn btn-success float-end">Panel</a>
                                    </div>
                                </div>
                            </div>
                            <div class = "card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="updateUser">

                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Nazwa</label>
                                        <input type="text" name="name" class="form-control" placeholder="Wprowadź nazwe użytkownika" wire:model="name"  />
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Wprowadź email użytkownika" wire:model="email" />
                                        @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="password" class="form-label">Hasło</label>
                                        <textarea class="form-control" name="password" placeholder="Wprowadź hasło użytkownika" wire:model="password"></textarea>
                                        @error('password')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="utype" class="form-label" >Typ Użytkownika</label>
                                    <select  class="form-control" name="utype" wire:model="utype">
                                        <option  value="USR">Użytkownik</option>
                                        <option value="ADM">Administrator</option>
                                        <option value="MDR">Moderator</option>
                                    </select>
                                        @error('utype')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary float-end">Zatwierdź</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
