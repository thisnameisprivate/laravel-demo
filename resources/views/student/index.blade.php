@extends('common/layouts')
<style>
    ul, li{list-style:none;}
    html, body{margin:0px; padding:0px;}
    .content{ width:100%; display:flex;}
    .left-botton{height:300px; flex:3; text-align:center;}
    .right-detail{height:300px; flex:7;}
    .rigth-detail p{font-size: 0.5rem; font-weight:700;}
    .right-detail table{font-wegiht:700; width: 100%;}
    .right-detail table td{border:1px solid #ccc;}
    .message1{border:1px solid green; border-radius:5px; width:50%; line-height: 30px}
    .message2{border:1px solid red; border-radius:5px; width:50%; line-height: 30px}
    .page-botton ul li{float: left; margin:5px;}
</style>
@section('content')
    <div class="content">
        <div class="left-botton">
            <ul>
                <li><a href="{{ url('student/index') }}">学生列表</a></li>
                <li><a href="{{ url('student/detail') }}">新增学生</a></li>
            </ul>
        </div>
        <div class="right-detail">
            @include('common/message')
            <p>学生列表</p>
            <table>
                <tr>
                    <td>ID</td>
                    <td>姓名</td>
                    <td>年龄</td>
                    <td>性别</td>
                    <td>添加时间</td>
                    <td>操作</td>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->sex }}</td>
                    <td>{{ date('Y-m-d', $student->created_at) }}</td>
                    <td>
                        <a href="">详情</a>
                        <a href="">修改</a>
                        <a href="">删除</a>
                    </td>
                </tr>
                    @endforeach
            </table>
            <div class="page-botton">
                {{  $students->render()  }}
            </div>
        </div>
    </div>
@stop