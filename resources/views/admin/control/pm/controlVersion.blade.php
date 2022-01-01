@extends('admin.layouts.master')

@section('head-tag')

<title>گزارش کنترل ورژن پایانه ها</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> کنترل فعالیت های اجرایی</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">گزارش کنترل ورژن پایانه ها</li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>گزارش کنترل ورژن پایانه ها</h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نمایندگی </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نمایندگی  را انتخاب کنید</option>
                                    <option value="">پارسیان </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> دوره</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">دوره  را انتخاب کنید</option>
                                    <option value="">آذر1400 </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> مدل دستگاه</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">مدل دستگاه  را انتخاب کنید</option>
                                    <option value="">pax </option>
                                    
                                </select>
                            </div>
                        </section>

            
                        <section class="col-12 col-md-6">
                            <button class="btn btn-primary btn-sm">نمایش</button>
                        </section>

                    </section>


                </form>


            </section>


            <section class="table-responsive">

                <table class="table table-striped table-hover  table-bordered">
                    <thead>
                        <tr>
                           
                            <th> نمایندگی</th>
                            <th>تاریخ بروزرسانی </th>
                            <th>کل </th>
                            <th>انجام شده</th>
                            <th> باقی مانده</th>
                            <th> درصد </th>
                            <th> باقی مانده پشتیبانی فاقد بروزرسانی</th>
                           

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <th>پارسیان</th>
                            <th>14001001</th>
                            <th>1000</th>
                            <th>500</th>
                            <th><a href="">42</a></th>
                            <th>50</th>
                            <th><a href="">500</a></th>
                           
                        </tr>
                    </tbody>
                </table>


            </section>

            <section class="main-body-container-header mt-3">

                <h5> گزارش  به تفکیک تکنسین</h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>

            <section class="table-responsive">

                <table class="table table-striped table-hover table-bordered">
                    <thead>

                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th colspan="2" class="text-center">باقی مانده</th>
                            
                            <th></th>
                        </tr>
                        <tr>
                           
                           
                            <th> نام تکنسین </th>
                            <th>کل </th>
                            <th> انجام شده</th>
                            <th> پشتیبانی شده </th>
                            <th> پشتیبانی نشده </th>
                            <th> درصد </th>
                            

                            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            
                            <th>علی رمضانی</th>
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
