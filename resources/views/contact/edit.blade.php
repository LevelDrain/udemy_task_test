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

                    上島「編集しますかぁ？実は僕も編集したいと思ってたんですー」
                    <hr>
                    <form action="{{route('contact.update',['id'=>$contact->id])}}" method="post">
                        @csrf
                        氏名：
                        <input type="text" name="your_name" id="" value="{{ $contact->your_name }}">
                        <br>
                        件名：
                        <input type="text" name="title" id="" value="{{ $contact->title }}">
                        <br>
                        メールアドレス：
                        <input type="email" name="email" id="" value="{{ $contact->email }}">
                        <br>
                        ホームページ：
                        <input type="url" name="url" id="" value="{{ $contact->url }}">
                        <br>
                        性別：
                        男性<input type="radio" name="gender" value="0" id="" @if($contact->gender===0) checked @endif>
                        ｜女性<input type="radio" name="gender" value="1" id="" @if($contact->gender===1) checked @endif>
                        <br>
                        年齢：
                        <select name="age" id="">
                            <option value="">選択してください</option>
                            <option value="1" @if($contact->age===1) selected @endif>～ 19歳</option>
                            <option value="2" @if($contact->age===2) selected @endif>20歳 ～ 29歳</option>
                            <option value="3" @if($contact->age===3) selected @endif>30歳 ～ 39歳</option>
                            <option value="4" @if($contact->age===4) selected @endif>40歳 ～ 49歳</option>
                            <option value="5" @if($contact->age===5) selected @endif>50歳 ～ 59歳</option>
                            <option value="6" @if($contact->age===6) selected @endif>60歳 ～</option>
                        </select>
                        <br>
                        お問い合わせ内容：
                        <textarea name="contact" id="" cols="30" rows="10">{{ $contact->contact }}</textarea>
                        <br>
                        <input type="submit" value="更新する" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
