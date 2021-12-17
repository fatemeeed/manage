@extends('admin.layouts.master')

@section('head-tag')

    <title> حواله به دفتر مرکزی  </title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت تجهیزات</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">  حواله به دفتر مرکزی </li>

        </ol>
    </nav>

    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">

                    <h5> حواله به دفتر مرکزی </h5>
                    <p></p>

                </section>

                <section>

                    <form action="" method="">
    
                        <section class="row">
    
                     
    
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> تاریخ </label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>
    
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">دریافت فایل (فرمت -> سریال )  </label>
                                    <input class="form-control form-control-sm" type="file">
                                </div>
                            </section>
    
                            
    
                            
                            <section class="col-12 col-md-6">
                                <button class="btn btn-primary btn-sm">ثبت</button>
                            </section>
    
                        </section>
    
    
                    </form>
    
    
                </section>

                

                


            </section>

        </section>




    </section>




@endsection
