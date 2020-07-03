@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    上島「新規登録はこちらー」
                    <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                        氏名：
                        <input type="text" name="your_name" id="">
                        <br>
                        件名：
                        <input type="text" name="title" id="">
                        <br>
                        メールアドレス：
                        <input type="email" name="email" id="">
                        <br>
                        ホームページ：
                        <input type="url" name="url" id="">
                        <br>
                        性別：
                        男性<input type="radio" name="gender" value="0" id="">
                        ｜女性<input type="radio" name="gender" value="1" id="">
                        <br>
                        年齢：
                        <select name="age" id="">
                            <option value="">選択してください</option>
                            <option value="1">～ 19歳</option>
                            <option value="2">20歳 ～ 29歳</option>
                            <option value="3">30歳 ～ 39歳</option>
                            <option value="4">40歳 ～ 49歳</option>
                            <option value="5">50歳 ～ 59歳</option>
                            <option value="6">60歳 ～</option>
                        </select>
                        <br>
                        お問い合わせ内容：
                        <textarea name="contact" id="" cols="30" rows="10"></textarea>
                        <br>
                        <input type="checkbox" value="1" name="coution" id="">注意事項に同意する
                        <br>
                        <input type="submit" value="登録する" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
