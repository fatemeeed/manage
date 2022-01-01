@extends('admin.layouts.master')

@section('head-tag')

<title> مقایسه تراکنش دوره ها</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#">  گزارشات تراکنش</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">مقایسه تراکنش دوره ها </li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5> مقایسه تراکنش دوره ها</h5>
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
                                <label for="">دوره </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> دوره را انتخاب کنید</option>
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

                <h5> مقایسه دوره آذر نسب به دوره ما قبل</h5>
                <p></p>

            </section>

            <section class="table-responsive">

                <table class="table table-striped table-hover  table-bordered">
                    <thead>
                        <tr>
                           
                            <th>تکنسین</th>
                            <th> جمع تراکنش درآمدزا آذر</th>
                            <th>جمع تراکنش درآمدزا آبان </th>
                            <th> افت/ رشد</th>
                            
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> عملیات</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <th>علی رمضانی</th>
                            <th>75,168</th>
                            <th>80,165</th>
                            <th style="color: red">6-</th>
                            <td class="width-13-rem text-left">
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-file-excel"></i> دریافت اکسل</a>
                                
                            </td>
                            
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>جمع کل</th>
                            <th>433,132</th>
                            <th>465,083</th>
                            <th style="color: red">6.87-</th>
                            <td class="width-13-rem text-left">
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-file-excel"></i> دریافت اکسل</a>
                                
                            </td>
                        </tr>
                    </tfoot>
                </table>


            </section>

        </section>

    </section>

    


</section>


    

@endsection
