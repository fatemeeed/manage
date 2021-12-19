@extends('admin.layouts.master')

@section('head-tag')

<title> عملکرد دوره ای نصب </title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> کنترل فعالیت های اجرایی</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> گزارش عملکرد دوره ای نصب</li>
      
    </ol>
  </nav>

<section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>  گزارش عملکرد دوره ای نصب</h5>
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
                                    <option value="">دوره را انتخاب کنید</option>
                                    <option value="">آذر1400 </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تکنسین</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام تکنسین  را انتخاب کنید</option>
                                    <option value="">آذر1400 </option>
                                    
                                </select>
                            </div>
                        </section>

                        
                        <section class="col-12 col-md-12">
                            <button class="btn btn-primary btn-sm">جستجو</button>
                        </section>

                    </section>


                </form>


            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="">دریافت فایل اکسل  </a>

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>



            <section class="table-responsive">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                           
                            <th>وضعیت قرارداد </th>
                            <th>نمایندگی</th>
                            <th>پروژه</th>
                            <th>سریال</th>
                            <th>پایانه</th>
                            <th>پذیرنده</th>
                            <th>نام فروشگاه</th>
                            <th>نصاب</th>
                            <th>بازاریاب</th>
                            <th> تاریخ تخصیص تجهیز</th>
                            <th>تاریخ خروج</th>
                            <th>تاریخ  نصب</th>
                            <th> تراکنش در آمدزا</th>
                           

                            
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
                            
                            
                        </tr>
                    </tbody>
                </table>

            </section>
   

        </section>

    </section>


</section>


    

@endsection
