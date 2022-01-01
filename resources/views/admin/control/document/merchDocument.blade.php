@extends('admin.layouts.master')

@section('head-tag')

<title>گزارش آپلود مدارک پذیرندگان</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> کنترل فعالیت های اجرایی</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">گزارش آپلود مدارک پذیرندگان</li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>گزارش آپلود مدارک پذیرندگان</h5>
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
                            <button class="btn btn-primary btn-sm">نمایش</button>
                        </section>

                    </section>


                </form>


            </section>

            <section class="main-body-container-header">
{{-- 
                <h5>گزارش پشتیبانی</h5>
                <p></p> --}}

            </section>

            <section class="table-responsive">

                <table class="table table-striped table-hover  table-bordered">
                    <thead>
                        <tr>
                           
                            <th> نمایندگی</th>
                            <th>تاریخ بروزرسانی </th>
                            <th>کل </th>
                            <th>تکمیل شده</th>
                            <th>نقص مدارک از ابتدای ماه </th>
                            <th> باقی مانده</th>
                            <th> درصد </th>
                            <th> باقی مانده VIP </th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> عملیات</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <th>پارسیان</th>
                            <th><a href="">14001001</a></th>
                            <th><a href="">1000</a></th>
                            <th><a href="">500</a></th>
                            <th><a href="">42</a></th>
                            <th><a href="">500</a></th>
                            <th><a href="">50</a></th>
                            <th><a href="">50</a></th>
                           
                            <td class="width-16-rem text-left">
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-file-excel"></i> اکسل</a>
                                <a href="{{ route('admin.control.document.projectDetail') }}" class="btn btn-primary btn-sm"><i class="fas fa-chart-bar"></i> به تفکیک پروژه</a>
                                
                            </td>
                            
                        </tr>
                    </tbody>
                </table>


            </section>

            <section class="main-body-container-header mt-3">

                <h5> گزارش آپلود به تفکیک تکنسین</h5>
                <p></p>

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
                           
                            <th> نام تکنسین </th>
                            <th>کل </th>
                            <th> انجام شده</th>
                            <th> نقص مدارک ابتدای ماه </th>
                            <th> باقی مانده </th>
                            <th>باقی  مانده VIP </th>
                            <th> درصد </th> 
                            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            
                            <th>علی رمضانی</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><a href=""></a></th>
                            <th><a href=""></a></th>
                            <th></th>
                            
                            
                        </tr>
                    </tbody>

                </table>

            </section>

        </section>

    </section>

</section>


    

@endsection
