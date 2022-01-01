@extends('admin.layouts.master')

@section('head-tag')

<title>گزارش به تفکیک پروژه</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> کنترل فعالیت های اجرایی</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> گزارش پشتیبانی</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">گزارش به تفکیک پروژه </li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>گزارش به تفکیک پروژه</h5>
                <p></p>

            </section>

            <section class="mb-4">

               


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
                           
                           
                            <th>پروژه </th>
                            <th>کل </th>
                            <th> انجام شده</th>
                            <th>باقی مانده فعال </th>
                            <th> باقی مانده غیرفعال </th>
                            <th> درصد </th>
                            

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            
                            <th> </th>
                            <th> </th>
                            <th> </th>
                            <th> </th>
                            <th> </th>
                            <th> </th>
                            
                            
                            
                        </tr>
                    </tbody>
                </table>


            </section>

           

        </section>

    </section>

    


</section>


    

@endsection
