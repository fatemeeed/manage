@extends('admin.layouts.master')

@section('head-tag')

<title>سوابق تماس</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">داشبورد </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> امور پذیرندگان </a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> سوابق تماس</li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>سوابق تماس</h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تاریخ پیگیری از</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تاریخ پیگیری تا</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">کد پذیرنده</label>
                                <input class="form-control form-control-sm" type="text" name="" id="">
                            </div>
                        </section>
                

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">موضوع تماس</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام شهر را انتخاب کنید</option>
                                    <option value="">سمنان </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">مسئول پیگیری</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام شهر را انتخاب کنید</option>
                                    <option value="">سمنان </option>
                                    
                                </select>
                            </div>
                        </section>

                        
                        
                        <section class="col-12 col-md-12">
                            <button class="btn btn-primary btn-sm">جستجو</button>
                        </section>

                    </section>


                </form>


            </section>

            <section class="d-flex justify-content-between align-items-center mt-5 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="">فایل اکسل</a>

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>

    
            <section class="table-responsive">

                <table class="table table-striped table-hover mt-3">
                    <thead>
                        <tr>
                           
                            <th>کد پذیرنده</th>
                            <th>نام فروشگاه</th>
                            <th>پایانه</th>
                            <th> تکنسین</th>
                            <th>موضوع تماس</th>
                            <th>توضیحات</th>
                            <th>تاریخ پیگیری</th>
                            <th>مسئول پیگیری</th>
                            
                            {{-- <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th> --}}

                            
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
                            
                           
                            {{-- <td class="width-8-rem text-left">

                                <a href="{{ route('admin.merchant.merch_info.edit') }}" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i> ویرایش  </a>
                                
                            </td> --}}
                            
                        </tr>
                    </tbody>
                </table>

            </section>
        </section>

    </section>

    


</section>


    

@endsection
