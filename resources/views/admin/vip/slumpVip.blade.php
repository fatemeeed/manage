@extends('admin.layouts.master')

@section('head-tag')

<title>گزارش افت پذیرندگان</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت پذیرندگان VIP</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> گزارش افت پذیرندگان VIP</li>
      
    </ol>
  </nav>

<section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5> گزارش افت پذیرندگان VIP</h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نمایندگی</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> نمایندگی را انتخاب کنید</option>
                                    <option value="">پارسیان </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">درصد افت</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">درصد افت را انتخاب کنید</option>
                                    <option value="">100 </option>
                                    <option value="">90 </option>
                                    <option value="">80 </option>
                                    <option value="">70 </option>
                                    <option value="">60 </option>
                                    <option value="">50 </option>
                                    <option value="">40 </option>
                                    <option value="">30 </option>
                                    <option value="">20 </option>
                                    <option value="">10 </option>
                                    
                                    
                                </select>
                            </div>
                        </section>

                        
                        <section class="col-12 col-md-12">
                            <button class="btn btn-primary btn-sm">نمایش</button>
                        </section>

                    </section>


                </form>


            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="">دریافت فایل اکسل  </a>

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>



            <section class="table-responsive">

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                           
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> پیگیری</th>
                            <th>وضعیت پیگیری</th>
                            <th>نمایندگی</th>
                            <th>پروژه</th>
                            <th>پایانه</th>
                            <th>پذیرنده</th>
                            <th>نام فروشگاه</th>
                            <th>تکنسین</th>
                            <th> دلیل افت</th>
                            <th>تاریخ آخرین پیگیری</th>
                            <th> توضیحات پیگیری</th>
                            <th> مجموع تراکنش ماه گذشته</th>
                            <th> مجموع تراکنش ماه جاری</th>
                            <th> درصد افت</th>
                            <th> بازدید ماه جاری</th>
                            <th> تاریخ آخرین تراکنش ماه جاری</th>
                            <th> طرح تشویقی</th>
                            <th>آخرین رسانه ارتباطی </th>
                            <th>نام مدیر </th>
                            <th>تلفن همراه </th>
                            <th> تلفن ثابت</th>
                            <th>آدرس</th>
                            

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td class="width-16-rem text-left d-flex">
                                <a href="" class="btn btn-primary btn-sm ml-1"><i class="fa fa-folder-open"></i> سوابق  </a>
                                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus-square"></i> افزودن  </a>
                                
                            </td>
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
                           
                            <th>پروژه</th>
                            <th>سریال</th>
                            <th>پایانه</th>
                            <th>پذیرنده</th>
                            <th>مدل تجهیز</th>
                            <th>نام فروشگاه</th>
                            <th>تکنسین</th>
                            <th> عنوان پیگیری</th>
                            <th> توضیحات</th>
                            <th> تاریخ پیگیری </th>
                            <th> کاربر ثبت کننده </th>
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
                            <th></th>
                            <th></th>
                            <th></th>
                            {{-- <td class="width-16-rem text-left">

                                <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-edit"></i> ویرایش  </a>
                                
                            </td> --}}
                            
                        </tr>
                    </tbody>
                </table>

            </section>

        </section>

    </section>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">افزودن پیگیری</h5>
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
            <label for="message-text" class="col-form-label">توضیحات:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف</button>
        <button type="button" class="btn btn-success">افزودن</button>
      </div>
    </div>
  </div>
</div>


</section>


    

@endsection
