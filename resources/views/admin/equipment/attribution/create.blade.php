@extends('admin.layouts.master')

@section('head-tag')

<title> تخصیص تجهیز </title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت تجهیزات</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> تخصیص تجهیز</li>
      
    </ol>
  </nav>

<section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5> تخصیص تجهیز</h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">سریال تجهیز </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> کد پذیرنده </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> کد پایانه </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> تاریخ تخصیص </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تکنسین</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> تکنسین را انتخاب کنید</option>
                                    <option value="">علی رمضانی </option>
                                    
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

                        
                        <section class="col-12 col-md-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>

                    </section>


                </form>


            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                {{-- <a  class="btn btn-info btn-sm" href="">دریافت فایل اکسل  </a> --}}

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>



            <section class="table-responsive">

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                           
                            <th>نمایندگی </th>
                            <th>سریال تجهیز</th>
                            <th>کد پایانه</th>
                            <th>کد پذیرنده</th>
                            <th>پروژه </th>
                            <th>نام فروشگاه</th>
                            <th>تحویل دهنده</th>
                            <th>آخرین وضعیت</th>
                            <th>تاریخ آخرین وضعیت</th>
                            <th> وضعیت پایانه</th>
                            <th>وضعیت داشبورد</th>
                           
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
                            
                        </tr>
                    </tbody>
                </table>

            </section>

            <section class="main-body-container-header mt-5">

                <h5> تخصیص گروهی</h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                        <section class="col-12">
                            <p>ترتیب ستونهای فایل اکسل جهت انتقال به بانک اطلاعاتی باید بصورت زیر باشد. هرگونه خطا در ترتیب ستونها، موجب انتقال اشتباه اطلاعات خواهد شد.</p>
                         </br>
                         <p>سریال پایانه- کد پذیرنده- کد پایانه-نام فروشگاه- شناسه تکنسین- شناسه پروژه-تاریخ تخصیص</p>


                        </section>
 
                        <section class="col-12 col-md-6">
                            <divclass="form-group">
                                
                                <input class="form-control form-control-sm" type="file" >
                                
                            </div>
                        </section>

                        <section class="col-12 col-md-12 mt-3">
                            <button class="btn btn-primary btn-sm">آپلود</button>
                        </section>

                    </section>


                </form>


            </section>

           

        </section>

    </section>

</section>


    

@endsection
