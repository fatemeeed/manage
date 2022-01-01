@extends('admin.layouts.master')

@section('head-tag')

<title>ایجاد  کاربر ادمین </title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="#"> خانه </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> کاربران </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> کاربران ادمین </a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد کاربر ادمین </li>
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>ایجاد کاربر ادمین </h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="{{ route('admin.user.admin-user.index') }}">بازگشت   </a>


            </section>

            <section>

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام  </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام خانوادگی </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">ایمیل  </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">شماره موبایل</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> کلمه عبور </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تکرار کلمه عبور  </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> تصویر کاربر </label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> وضعیت کاربر</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">وضعیت را انتخاب کنید</option>
                                    <option value="">فعال </option>
                                    <option value="">غیر فعال </option>
                                    
                                </select>
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
