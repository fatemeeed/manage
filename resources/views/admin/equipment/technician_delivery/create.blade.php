@extends('admin.layouts.master')

@section('head-tag')

    <title>  تحویل تجهیز به پذیرنده </title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت تجهیزات</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">تحویل تجهیز به تکنسین  </li>

        </ol>
    </nav>

    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">

                    <h5>تحویل تجهیز به تکنسین </h5>
                    <p></p>

                </section>

                <section>

                    <form action="" method="">
    
                        <section class="row">
    
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> شهرستان </label>
                                    <select class="form-control  form-control-sm" name="" id="">
                                        <option value=""> نمایندگی را انتخاب کنید</option>
                                        <option value="">پارسیان </option>
                                        
                                    </select>
                                </div>
                            </section>
    
                            <section class="table-responsive">

                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>سریال   </th>
                                            <th>کد پایانه </th>
                                            <th> کد پذیرنده </th>
                                            <th> نام فروشگاه  </th>
                                            <th> پروژه  </th>
                                            <th>تکنسین  </th>
                                            <th>تاریخ تخصیص</th>
                                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <th>2k578866</th>
                                            <th>784456</th>
                                            <th> 6786789</th>
                                            <th>مرکز خرید آسایش </th>
                                            <th>پروژه بانک کشاورزی </th>
                                            <th>رمضانی </th>
                                            <th>14000922 </th>
                                            <td class="width-8-rem text-left">
                                                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus"></i> افزودن</a>
                        
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                
                
                            </section>
    
                            
    
                            
                            <section class="col-12 col-md-6">
                                <button class="btn btn-primary btn-sm">ادامه</button>
                            </section>
    
                        </section>
    
    
                    </form>
    
    
                </section>



            </section>

        </section>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> نصاب</h5>
                  <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    {{-- <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Recipient:</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div> --}}
                    <div class="form-group">
                        <label for=""> نام نصاب</label>
                        <select class="form-control  form-control-sm" name="" id="">
                            <option value=""> علی رمضانی</option>
                            
                            
                        </select>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
                  <button type="button" class="btn btn-success">ثبت</button>
                </div>
              </div>
            </div>
          </div>


    </section>




@endsection
