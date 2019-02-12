@extends('common/layouts')

@section('content')
    <form action="" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div>
            <label for="">姓名</label>
            <input type="text" name="student[name]">
        </div>
        <div>
            <label for="">年龄</label>
            <input type="text" name="student[age]">
        </div>
        <div>
            <label><input name="student[sex]" type="radio" value="10" />未知</label>
            <label><input name="student[sex]" type="radio" value="20" />男</label>
            <label><input name="student[sex]" type="radio" value="30" />女</label>
        </div>
        <button>提交</button>
    </form>
@stop