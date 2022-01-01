@extends('admin.layouts.master')

@section('head-tag')

<title> افزودن EM جدید </title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
        <li class="breadcrumb-item font-size-12"><a href="#">کنترل فعالیت های اجرایی </a></li>
        <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.control.em.index') }}"> گزارش EM </a></li>
        <li class="breadcrumb-item font-size-12 active" aria-current="page"> افزودن EM جدید </li>
        
      </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>افزودن EM جدید </h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="{{ route('admin.control.em.index') }}">بازگشت   </a>


            </section>

            <section>

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">پایانه  </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> تکنسین </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام تکنسین  را انتخاب کنید</option>
                                    <option value="">علی رمضانی </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تاریخ اعلام به تکنسین  </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">اعلام شده از</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> انتخاب کنید</option>
                                    <option value="">پذیرنده </option>
                                    <option value="">کارتابل </option>
                                    <option value="">بانک </option>
                                    
                                </select>
                            </div>
                        </section>
                        

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">شرح درخواست</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">شرح درخواست  را انتخاب کنید</option>
                                    <option value="">درخواست رول </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">اظهارات پذیرنده</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div>
                        </section>

                        
                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>

                    </section>


                </form>


            </section>

            <section class="table-responsive  mt-3">

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>شماره سریال  </th>
                            <th>کد پذیرنده </th>
                            <th> کد پایانه</th>
                            <th> مدل </th>
                            <th>نام فروشگاه</th>
                            <th>تکنسین</th>
                            <th>نصاب</th>
                            <th>تاریخ تخصیص</th>
                            <th>وضعیت پایانه</th>
                            <th>تیکت باز</th>
                            <th>ثبت کننده</th>
                        
                            
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


        




        </section>

    </section>

    


</section>


    

@endsection
