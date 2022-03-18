@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-center align-items-center gap-5" style="height: 100vh;">
        <div class="d-flex flex-column" style="width: 400px;">
            <div class="bg-white rounded-3 shadow py-3">
                <div class="row m-0 border-bottom border-primary border-3">
                    <div class="col-5">
                        <a href="/" class="text-primary fs-2 ms-2 text-decoration-none"><i class="bi bi-explicit"></i>nter</a>
                    </div>
                    <div class="col">
                        <div id="header" class="pt-4 mb-2 text-primary text-end"><i class="bi bi-person"></i> Вход или Регистрация</div>
                    </div>
                </div>
                <form class="d-flex flex-column px-4 mt-3">
                    @csrf
                    <a href="#" style="display: none" class="my-1 text-decoration-none" onclick="back()" id="bar"></a>
                    <div id="tel_show" class="form-floating mb-3">
                        <input type="tel" data-tel-input class="form-control" id="tel" placeholder="tel">
                        <label id="tell_mess" for="tel" class="text-muted"><i class="bi bi-telephone"></i> Телефон</label>
                    </div>

                    <div id="psw_show" style="display: none" class="form-floating mb-3">
                        <input type="password" class="form-control" id="password_one" placeholder="password">
                        <div id="show_one" onclick="show(this.id,'password_one')" class="btn btn-eye">
                            <i class="bi bi-eye-slash text-primary fs-5"></i>
                        </div>
                        <label id="lable" for="password_one" class="text-muted">Введите пароль</label>
                    </div>

                    <div id="psw_show_confirm" style="display: none" class="form-floating mb-3">
                        <input type="password" class="form-control" id="password_two" placeholder="password">
                        <div id="show_two" onclick="show(this.id,'password_two')" class="btn btn-eye">
                            <i class="bi bi-eye-slash text-primary fs-5"></i>
                        </div>
                        <label for="password_one" class="text-muted">Повторите пароль</label>
                    </div>

                    <button id="btn_go" type="button" onclick="check()" class="btn-lg btn-primary"><i class="bi bi-box-arrow-in-right"></i> Продолжить</button>
                    <button style="display: none" id="btn_login" type="button" onclick="login()" class="btn-lg btn-primary"><i class="bi bi-box-arrow-in-right"></i> Войти</button>
                    <button style="display: none" id="btn_reg" type="button" onclick="reg()" class="btn-lg btn-primary"><i class="bi bi-person-plus"></i> Зарегистрироваться</button>
                </form>
            </div>
        </div> 
    </div>
</div>
</form>
@endsection