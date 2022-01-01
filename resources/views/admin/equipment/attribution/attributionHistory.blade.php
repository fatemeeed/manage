@extends('admin.layouts.master')

@section('head-tag')

<title>سوابق تخصیص</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت تجهیزات</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">سوابق تخصیص</li>
      
    </ol>
  </nav>

<section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5> سوابق تخصیص</h5>
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
                            <th>نصاب </th>
                            <th>تکنسین </th>
                            <th>تحویل دهنده</th>
                            <th>آخرین وضعیت</th>
                            <th> تاریخ تخصیص</th>
                            <th> تاریخ پایان تخصیص</th>
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
