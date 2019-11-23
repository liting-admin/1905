@extends('layouts.yuan')
@section('title', '运营大厦')
@section('content')
    <section class="rt_wrap content mCustomScrollbar">
        <div class="rt_content">
            <div class="page_title">
                <h2 class="fl">客户报价查询</h2>
            </div>
            <section>
                <ul class="ulColumn2">
                    <form action="{{url('index/offer')}}" method="get">
                        <li>
                            <h2><b>客户信息</b></h2>
                            <span class="item_name" style="width:120px;" >客户名称：</span>
                            <input type="text" class="textbox textbox_225" name="c_name" value="{{$query['c_name']??''}}">
                            <span class="item_name" style="width:120px;">客户编码：</span>
                            <input type="text" class="textbox textbox_225" name="c_code" value="{{$query['c_code']??''}}">
                            <span class="item_name" style="width:120px;">客户简称：</span>
                            <input type="text" class="textbox textbox_225" name="c_desc" value="{{$query['c_c_desc']??''}}">
                            地区:   <select class="select" name="c_diqu">
                                        @foreach($data as $v)
                                        <option value="">--请选择--</option>
                                        <option value="{{$v->c_id}}">{{$v->c_diqu}}</option>
                                        @endforeach
                                    </select>
                            <button style="color: red">查询</button>
                        </li>
                    </form>
                    <table border="1" align="center">
                        <tr>
                            <td>id</td>
                            <td>客户名称</td>
                            <td>客户编码</td>
                            <td>客户简称</td>
                            <td>地区</td>
                            <td>操作</td>
                        </tr>
                        @foreach($data as $v)
                        <tr>
                            <td>{{$v->c_id}}</td>
                            <td>{{$v->c_name}}</td>
                            <td>{{$v->c_code}}</td>
                            <td>{{$v->c_desc}}</td>
                            <td>{{$v->c_diqu}}</td>
                            <td><a href="">删除</a></td>
                        </tr>
                        @endforeach
                    </table>
                    {{$data->appends($query)->links()}}
                    <form action="{{url('index/product')}}"  method="get">
                        <h2><b>产品信息</b></h2>
                        <li>
                            <span class="item_name" style="width:120px;" >产品名称：</span>
                            <input type="text" class="textbox textbox_225" name="p_name">
                            <span class="item_name" style="width:120px;">产品型号：</span>
                            <input type="text" class="textbox textbox_225" name="p_model">
                            <span class="item_name" style="width:120px;">产品类别：</span>
                            <input type="text" class="textbox textbox_225" name="p_type"><br>
                            <span class="item_name" style="width:120px;">价格：</span>
                            {{--<input type="text" class="textbox textbox_225" name="p_price">-<input type="text" class="textbox textbox_225" name="max_price>--}}
                            <input type="text" name="p_price">-<input type="text" name="max_price">
                        </li>
                         <button style="color: red">查询</button>
                    </form>
                </ul>
            </section>
        </div>
    </section>
    </body>
    </html>
    <!--
    本代码由js代码网网友上传，js代码网收集并编辑整理;
    尊重他人劳动成果;
    转载请保留js代码链接 - www.jsdaima.com
    -->
@endsection