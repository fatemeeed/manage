@extends('admin.layouts.master')

@section('head-tag')

<title>بازاریابی</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">داشبورد </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#">کنترل فعالیت های اجرایی</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">بازاریابی</li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>بازاریابی</h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نمایندگی</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> نمایندگی را انتخاب کنید</option>
                                    <option value="">پارسیان </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">دوره</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">دوره  را انتخاب کنید</option>
                                    <option value="">آذر1400 </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">پروژه</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">پروژه را انتخاب کنید</option>
                                    <option value="">کشاورزی </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">بازاریاب</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام بازاریاب را انتخاب کنید</option>
                                    <option value="">علی رمضانی </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">کد پذیرنده</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>
                        
                        <section class="col-12 col-md-12">
                            <button class="btn btn-primary btn-sm">جستجو</button>
                        </section>

                    </section>


                </form>


            </section>

            <section class="d-flex justify-content-between align-items-center mt-5 mb-3 border-bottom pb-2">

               

                <div class="max-width-16-rem">

                    <a  class="btn btn-info btn-sm" href="">فایل اکسل</a>
                    <a  class="btn btn-success btn-sm" href="{{ route('admin.control.marketing.create') }}"><i class="fa fa-plus-square"></i> افزودن بازاریابی جدید</a>


                </div>

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>

    
            <section class="table-responsive table-body table-sm">

                <table class="table table-striped table-hover table-bordered ">
                    <thead>
                        <tr>
                           
                            <th>وضعیت پذیرنده</th>
                            <th>پروژه</th>
                            <th>کد پذیرنده</th>
                            <th>نام فروشگاه</th>
                            <th>تعهد تراکنش</th>
                            <th> بازاریاب</th>
                            <th>نصاب</th>
                            <th>مدل دستگاه</th>
                            <th>تاریخ ثبت</th>
                            <th>تاریخ نصب</th>
                            <th>تعداد تراکنش ماه مبنا</th>
                            <th>تراکنش ماه جاری</th>
                            <th>تاریخ آخرین تراکنش</th>
                            <th>نوع بازاریابی</th>
                            <th>مشمول پرداخت هزینه بازاریابی </th>
                            <th>هزینه بازاریابی</th>
                            <th>توضیحات</th>
                            <th>کاربر ثبت کننده</th>
                            <th class="max-width-13-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>

                            
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
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            
                            <td class="width-13-rem text-left d-flex ">

                                <a href="{{ route('admin.control.marketing.edit') }}" class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i> ویرایش  </a>
                                <a href="" class="btn btn-success btn-sm" ><i class="fa fa-check"></i> تایید شده</a>
                                
                            </td> 
                            
                        </tr>
                    </tbody>
                </table>

            </section>
        </section>

    </section>

    


</section>


    

@endsection
