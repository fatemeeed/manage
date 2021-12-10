@extends('admin.layouts.master')

@section('head-tag')

<title> افزودن تجهیز </title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
        <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت محتوا</a></li>
        <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.content.device.index') }}"> تجهیزات </a></li>
        <li class="breadcrumb-item font-size-12 active" aria-current="page"> افزودن تجهیز </li>
        
      </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>افزودن تجهیز </h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="{{ route('admin.content.device.index') }}">بازگشت   </a>


            </section>

            <section>

                <form action="" method="">

                    <section class="row">

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
                                <label for=""> افزودن  برند تجهیز </label>
                                <input class="form-control form-control-sm" type="text">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">مدل تجهیز </label>
                                <input class="form-control form-control-sm" type="text">
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
