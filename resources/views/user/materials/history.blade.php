
@extends('layouts.home.app')

@section('title', 'Main page')

@section('content')
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {background-color:#f5f5f5;}
    </style>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="ibox">
                <div class="ibox-title">
                    <div class="pull-right">

                    </div>
                    <h3>ประวัติการเบิก - คืน วัสดุ</h3>
                </div>

                <div class="ibox-content">
                    <table class="table table-bordered" id="history_list_table" style="width:100%" >
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>วันที่ทำรายการ</th>
                                <th>รายการ</th>
                                <th>จำนวน</th>
                                <th>หน่วย</th>
                                <th>ประเภท</th>
                                {{-- <th>action</th> --}}
                                <th>สถานะ</th>
                                <th>หมายเหตุ</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script> --}}

<script>

$("#history_list_table").ready(function () {

    var history_list_table = $('#history_list_table').DataTable({
    "searching": true,
    "responsive": true,
    "pageLength": 10,
    "order": [
        [0, "desc"]
    ],
    "ajax": {
        "url": "/materials/show-histories",
        "method": "POST",
        "data": {
            "_token": "{{ csrf_token()}}",
        },
    },
    'columnDefs': [
        {
            "targets": [0, 1, 2, 3, 4, 5, 6, 7],
            "className": "text-center",
        },
    ],
    "columns": [
        {
            "data": "id",
        },
        {
        "render": function (data, type, full) {
            var text = moment(full.updated_at).format('DD/MM/YYYY');
                return  text;
            }
        },
        {
            "data": "name",
        },
        {
            "data": "amount",
        },
        {
            "data": "unit",
        },
        {
            "data": "type",
        },
        {
            "render": function (data, type, full) {
            var text = '';
                if(full.status == 0){
                    text = '<span class="badge badge-secondary">รอดำเนินการ</span>';
                }else if (full.status == 1){
                    text = '<span class="badge badge-warning">ยังไม่คืน</span>';
                }else if (full.status == 2){
                    text = '<span class="badge badge-danger">ไม่อนุมัติ</span>';
                }else if (full.status == 3){
                    text = '<span class="badge badge-primary">คืนแล้ว</span>';
                }
                if(full.material.type.id == 2 && full.status == 1){
                    text = '<span class="badge badge-secondary">ไม่ต้องคืน</span>';
                }
                return  text;
            }
        },
        {
        "render": function (data, type, full) {
            var text = '';

                if(full.status == 3){
                    text = `<span class="badge badge-primary">${moment(full.return_date).format('D/M/YYYY')}</span>`;
                }else if (full.status == 2){
                    text = `<span class="badge badge-danger">${moment(full.approve_date).format('D/M/YYYY')}</span>`;
                }
                if(full.status == 1){
                    text = `<span class="badge badge-warning">${moment(full.approve_date).format('D/M/YYYY')}</span>`;
                }
                if(full.material.type.id == 2 && full.status == 1){
                    text = `<span class="badge badge-secondary">${moment(full.approve_date).format('D/M/YYYY')}</span>`;
                }
                return  text;
            }
        },

    ],
    });
});
</script>
@stop

