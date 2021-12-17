@extends('admin.layouts.master')

@section('head-tag')

<title>جستجوی اطلاعات پذیرندگان</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">داشبورد </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> امور پذیرندگان </a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> جستجوی اطلاعات پذیرنده </li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>جستجوی اطلاعات پذیرنده</h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">ازتاریخ ثبت </label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تا تاریخ ثبت</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">کد پذیرنده</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>
                        

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام و نام خانوادگی پذیرنده</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">کد ملی</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام فروشگاه</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">شهر</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام شهر را انتخاب کنید</option>
                                    <option value="">سمنان </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">شماره حساب</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        
                        
                        <section class="col-12 col-md-6">
                            <button class="btn btn-primary btn-sm">جستجو</button>
                        </section>

                    </section>


                </form>


            </section>

    
            <section class="table-responsive">

                <table class="table table-striped table-hover mt-3">
                    <thead>
                        <tr>
                           
                            <th>کد پذیرنده</th>
                            <th>نام فروشگاه</th>
                            <th>پروژه</th>
                            <th>نام بانک</th>
                            <th>نام و نام خانوادگی مدیر</th>
                            <th>کد ملی</th>
                            <th>شهر</th>
                            <th>تلفن ثابت</th>
                            <th>تلفن همراه</th>
                            <th>آدرس</th>
                            <th>شماره حساب</th>
                            <th>شعبه</th>
                            <th>کدپستی</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                           
                            <td class="width-8-rem text-left">

                                <a href="{{ route('admin.merchant.merch_info.edit') }}" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i> ویرایش  </a>
                                
                            </td>
                            
                        </tr>
                    </tbody>
                </table>

            </section>
        </section>

    </section>

    


</section>


    

@endsection
