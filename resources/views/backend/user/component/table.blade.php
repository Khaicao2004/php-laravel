<table class="table table-hover table-bordered ">
    <thead>
    <tr>
        <th>
            <input type="checkbox" class="input-checkbox" id="checkAll" value="">
        </th>
        <th>#ID</th>
        <th style="width: 90px">Ảnh</th>
        <th>Họ Tên</th>
        <th>Email</th>
        <th>Số Điện Thoại</th>
        <th>Địa Chỉ</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao Tác</th>
    </tr>
    </thead>
    <tbody>
        @if(isset($users) && is_object($users))
        @foreach ($users as $user)
            
       
    <tr>
        <td>
            <input type="checkbox" class="input-checkbox checkBoxItem" id="checkAll" value="">
        </td>
        <td>{{ $user->id }}</td>
        <td>
            <span class="image img-cover"><img src="https://tse1.mm.bing.net/th?id=OIP.4xbApGqpQRahcTn42z_UEAHaHa&pid=Api&P=0&h=180" alt=""></span>
        </td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td> 
        <td>{{ $user->address }}</td>
        <td class="text-center">
            <input type="checkbox" class="js-switch" checked />
        </td>
        <td class="text-center">
            <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>
{{$users->links('pagination::bootstrap-4')}}