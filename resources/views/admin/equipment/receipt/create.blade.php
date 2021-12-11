@extends('admin.layouts.master')

@section('head-tag')

<title> رسید تجهیزات </title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
        <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت تجهیزات</a></li>
        <li class="breadcrumb-item font-size-12 active" aria-current="page"> رسید تجهیزات </li>
        
      </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5> رسید تجهیزات </h5>
                <p></p>

            </section>

            

            <section>

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> نمایندگی </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> نمایندگی را انتخاب کنید</option>
                                    <option value="">پارسیان </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> نوع تجهیز</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نوع تجهیز را انتخاب کنید</option>
                                    <option value="">پوز </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">برند تجهیز </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">برند  را انتخاب کنید</option>
                                    <option value=""> pax</option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">مدل تجهیز </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">مدل  را انتخاب کنید</option>
                                    <option value=""> s80</option>
                                    
                                </select>
                            </div>
                        </section>
                        

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> تعداد </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">دریافت فایل (فرمت -> سریال - شماره اموال)  </label>
                                <input class="form-control form-control-sm" type="file">
                            </div>
                        </section>

                        

                        
                        <section class="col-12 col-md-6">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>

                    </section>


                </form>


            </section>

        




        </section>

    </section>

    


</section>


    

@endsection
