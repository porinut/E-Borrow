
@extends('layouts.admin.app')

@section('title', 'Main page')

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="ibox">
                <div class="ibox-title">

                    <h3>รายงานรายการครุภัณฑ์</h3>
                </div>
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <form action=" {{ route('reports.goods.show') }}" method="GET" id="goodExport"  form="goodExport">

                                <br>
                                <label for="">ประจำปีงบประมาณ : </label>
                                <input type="number" id="year" name="year" form="goodExport" class="form-control" required>
                                <br>
                                <label for="">รูปแบบรายการ : </label>
                               <select name="select" id="select" form="goodExport" class="form-control" required>
                                   <option value="1">ทั้งหมด</option>
                                   <option value="2">มูลค่าต่ำกว่า 5,000 บาท</option>
                               </select>
                                <br>

                            </form>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                    <div style="display: flex; justify-content: flex-end">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="pull-right">
                            <button style="background-color: #4CAF50; color: white; margin-right:3px;" form="goodExport" type="submit" class="btn btn">
                            <i class="fa fa-search"></i> ShowExcel
                            </button>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>

                    </div>

                </div>
            </div>

            <div class="ibox">
                <div class="ibox-title">

                    <h3>รายงานรายการวัสดุคงเหลือ</h3>
                </div>
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                        <form action=" {{ route('reports.mats.show') }}" method="GET" id="matExport"  form="matExport">
                            <br>
                            <label for="">ประจำปีงบประมาณ : </label>
                            <input type="number" id="year" name="year" form="matExport" class="form-control" required>
                            <br>
                            {{-- <br>
                            <label for="">ตั้งแต่ : </label>
                            <input type="date" id="start" form="matExport" class="form-control" required>
                            <br>
                            <label for="">ถึง : </label>
                            <input type="date" id="end" form="matExport" class="form-control" required>
                            <br> --}}
                            <label for="">รูปแบบรายการ : </label>
                            <select name="select" id="select" form="matExport" class="form-control" required>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}"> {{ $type->name }}</option>
                                @endforeach
                            </select>
                            <br>
                        </form>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <br>

                    </div>
                    <div style="display: flex; justify-content: flex-end">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="pull-right">
                            <button style="background-color: #4CAF50; color: white; margin-right:3px;" form="matExport" type="submit" class="btn btn">
                            <i class="fa fa-search"></i> ShowExcel
                            </button>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
<script>


</script>
@stop
