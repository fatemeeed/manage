@extends('admin.layouts.master')

@section('head-tag')

    <title>گزارش طرح های تشویقی</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت پذیرندگان VIP</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> گزارش طرح های تشویقی</li>

        </ol>
    </nav>

    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">

                    <h5> گزارش طرح تشویقی</h5>
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
                                    <label for="">تاریخ درخواست از </label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تاریخ درخواست تا </label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تاریخ شروع قرارداد از</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تاریخ شروع قرارداد تا</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">وضعیت</label>
                                    <select class="form-control  form-control-sm" name="" id="">
                                        <option value=""> نمایندگی را انتخاب کنید</option>
                                        <option value="">پارسیان </option>

                                    </select>
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نوع طرح</label>
                                    <select class="form-control  form-control-sm" name="" id="">
                                        <option value=""> نمایندگی را انتخاب کنید</option>
                                        <option value="">پارسیان </option>

                                    </select>
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">کدملی</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">کد پذیرنده</label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>


                            <section class="col-12 col-md-12">
                                <button class="btn btn-primary btn-sm">نمایش</button>
                            </section>

                        </section>


                    </form>


                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                    <a class="btn btn-info btn-sm" href="">دریافت فایل اکسل </a>

                    <div class="max-width-16-rem">

                        <input type="text" placeholder="جستجو" class="form-control form-control-sm form-text">


                    </div>

                </section>



                <section class="table-responsive">

                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>

                                <th class="width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                                <th>وضعیت </th>
                                <th> تاریخ درخواست</th>
                                <th>نمایندگی</th>
                                <th>نوع طرح</th>
                                <th>نام فروشگاه</th>
                                <th>تکنسین</th>
                                <th>توضیحات پیگیری </th>
                                <th>تاریخ آخرین پیگیری</th>
                                <th>تاریخ شروع قرارداد </th>
                                <th>وضعیت تراکنش</th>
                                <th>مجموع تراکنش خرید پایانه ها</th>
                                <th> مجموع تراکنش بالای 25 هزارتومان</th>
                                <th> متوسط تراکنش روز گذشته</th>
                                <th> درصد تحقق</th>
                                <th> تعهد تراکنش</th>
                                <th>نام مدیر </th>
                                <th>کد ملی </th>
                                <th>تلفن همراه </th>
                                <th> تلفن ثابت</th>
                                <th>آدرس</th>
                                <th>نقص مدارک</th>
                                <th>سند سیم کارت</th>
                                <th>تضمین</th>
                                <th>سریال سیم کارت اصلی</th>



                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td class="width-16-rem text-left d-flex">
                                    <div class="dropdown ">
                                        <a href="" class="btn btn-info btn-sm btn-block dropdown-toggle" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">

                                            <i class="fa fa-tools"></i> عملیات

                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                            <a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                                                class="dropdown-item  text-righ"><i class="fa fa-edit"></i> ویرایش</a>
                                            <a href="" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"
                                                class="dropdown-item  text-righ"><i class="fa fa-list-ul"></i> افزودن
                                                پذیرنده</a>
                                            <a href="" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo"
                                                class="dropdown-item  text-righ"><i class="fa fa-list-ul"></i>افزودن
                                                پیگیری</a>
                                            <a href="" class="dropdown-item  text-righ"><i
                                                    class="fa fa-folder-open"></i>سوابق پیگیری</a>
                                            <a href="" class="dropdown-item  text-righ"><i class="fa fa-window-close"></i>
                                                باطل کردن</a>
                                        </div>

                                    </div>
                                    <a href="" class="btn btn-success btn-sm mr-1"><i class="fa fa-check"></i> تایید
                                        شده</a>
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

                        <input type="text" placeholder="جستجو" class="form-control form-control-sm form-text">


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




        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ویرایش </h5>
                        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>


                            <div class="form-group">
                                <label for="">تغییر وضعیت</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> وضعیت را انتخاب کنید</option>
                                    <option value="">درخواست </option>
                                    <option value="">ارسال طرح </option>
                                    <option value="">در انتظار تجهیزات </option>
                                    <option value="">منتظر نصب </option>
                                    <option value="">عدمم تایید / انصراف / برگشت تجهیز </option>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">نوع طرح</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> نوع طرح را انتخاب کنید</option>
                                    <option value="">مودم adsl </option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">شناسه سند</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group form-check  d-flex">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label for="recipient-name" class="form-check-label pr-3">قرارداد</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label for="recipient-name" class="form-check-label  pr-3">سند سیم کارت</label>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label for="recipient-name" class="form-check-label pr-3">تضمین</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">تاریخ تایید طرح</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">تاریخ شروع قرارداد</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">مدت قرارداد</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">تعهد تراکنش</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">سریال سیم کارت</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">افزودن سریال تجهیز</label>
                                <input type="text" class="form-control">
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


        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">افزودن کد پذیرنده</h5>
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
                                <label for="message-text" class="col-form-label">کد پذیرنده</label>
                                <input type="text" class="form-control">
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


        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
