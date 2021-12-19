@extends('admin.layouts.master')

@section('head-tag')

<title> ثبت بازاریابی</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
        <li class="breadcrumb-item font-size-12"><a href="#"> کنترل فعالیت های اجرایی</a></li>
        <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.content.device.index') }}"> بازاریابی </a></li>
        <li class="breadcrumb-item font-size-12 active" aria-current="page">ثبت بازاریابی  </li>
        
      </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>ثبت بازاریابی</h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="{{ route('admin.control.marketing.index') }}">بازگشت   </a>


            </section>

            <section>

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> کد ملی</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام پذیرنده </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام فروشگاه </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">بانک</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">بانک  را انتخاب کنید</option>
                                    <option value="">کشاورزی </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تاریخ ثبت</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> نام بازاریاب</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">بازاریاب  را انتخاب کنید</option>
                                    <option value=""> pax</option>
                                    
                                </select>
                            </div>
                        </section>
                        

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> تعهد تراکنش</label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> نام نصاب</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نصاب  را انتخاب کنید</option>
                                    <option value=""> pax</option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نوع بازاریابی</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نوع بازاریابی  را انتخاب کنید</option>
                                    <option value="">جدید</option>
                                    <option value="">کدملی تکراری</option>
                                    <option value="">CRM</option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">محصول  </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">  انتخاب کنید</option>
                                    <option value=""> pos</option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">مشمول پرداخت هزینه </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">  انتخاب کنید</option>
                                    <option value=""> بله</option>
                                    <option value=""> خیر</option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">توضیحات </label>
                                <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                            </div>
                        </section>

                        
                        <section class="col-12 col-md-6">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>

                    </section>

                </form>

            </section>
            <section class="d-flex justify-content-between align-items-center mt-5 mb-3 border-bottom pb-2">

               

                <div class="max-width-16-rem">

                   


                </div>

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>

    
            <section class="table-responsive table-body table-sm">

                <table class="table table-striped table-hover table-bordered ">
                    <thead>
                        <tr>
                           
                            <th>کد ملی</th>
                            <th>کد پذیرنده</th>
                            <th>نام فروشگاه</th>
                            <th>نام بانک </th>
                            <th>نام شعبه </th>
                            <th>شماره حساب </th>
                            <th> تاریخ ثبت</th>
                            <th>وضعیت پذیرنده</th>
                            <th>آدرس </th>
                            
                            
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
                            
                        </tr>
                    </tbody>
                </table>

            </section>

        </section>

    </section>

</section>


    

@endsection
