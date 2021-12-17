@extends('admin.layouts.master')

@section('head-tag')

<title>جستجوی اطلاعات پذیرندگان</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">داشبورد </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> امور پذیرندگان </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#">جستجوی اطلاعات پذیرندگان</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش اطلاعات</li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>ویرایش اطلاعات</h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                       
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">کد پذیرنده</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>
                        

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام و نام خانوادگی پذیرنده</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">کد ملی</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام فروشگاه</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تلفن ثابت</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تلفن همراه</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">شهر</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام شهر را انتخاب کنید</option>
                                    <option value="">سمنان </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> آدرس</label>
                                
                                <textarea class="form-control form-control-sm"  name="" id="" cols="30" rows="4"></textarea>
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
