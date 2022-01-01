@extends('admin.layouts.master')

@section('head-tag')

    <title> گزارش بازدید موردی </title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> کنترل فعالیت های اجرایی</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">گزارش بازدید موردی</li>

        </ol>
    </nav>

    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">

                    <h5> گزارش بازدید موردی</h5>
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
                                    <label for="">دوره</label>
                                    <select class="form-control  form-control-sm" name="" id="">
                                        <option value="">دوره را انتخاب کنید</option>
                                        <option value="">آذر1400 </option>

                                    </select>
                                </div>
                            </section>



                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تاریخ رفع از</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تاریخ رفع تا</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تکنسین</label>
                                    <select class="form-control  form-control-sm" name="" id="">
                                        <option value="">نام تکنسین را انتخاب کنید</option>
                                        <option value="">آذر1400 </option>

                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">اعلام شده از</label>
                                    <select class="form-control  form-control-sm" name="" id="">
                                        <option value=""> انتخاب کنید</option>
                                        <option value="">پذیرنده </option>
                                        <option value="">کارتابل </option>
                                        <option value="">بانک </option>

                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">وضعیت</label>
                                    <select class="form-control  form-control-sm" name="" id="">
                                        <option value="">وضعیت را انتخاب کنید</option>
                                        <option value="">باز </option>
                                        <option value="">بسته </option>

                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">کد پایانه </label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> کد پذیرنده</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> CallTicketID</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                            </section>


                            <section class="col-12 col-md-12">
                                <button class="btn btn-primary btn-sm">جستجو</button>
                            </section>

                        </section>


                    </form>


                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                    <section class="d-flex justify-content-between align-items-center">

                        <a class="btn btn-info btn-sm ml-1" href="">دریافت فایل اکسل </a>
                        <a class="btn btn-success btn-sm" href="{{ route('admin.control.em.newEM') }}"><i
                                class="fa fa-plus-square"></i> افزودن EM جدید </a>


                    </section>



                    <div class="max-width-16-rem">

                        <input type="text" placeholder="جستجو" class="form-control form-control-sm form-text">


                    </div>

                </section>



                <section class="table-responsive">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>

                                <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> عملیات</th>
                                <th>CallTicketID </th>
                                <th>وضعیت پایانه</th>
                                <th>نمایندگی</th>
                                <th>پروژه</th>
                                <th>پایانه</th>
                                <th>پذیرنده</th>
                                <th>مدل</th>
                                <th>نام فروشگاه</th>
                                <th>تکنسین</th>
                                <th>شرح درخواست</th>
                                <th>اظهارات پذیرنده</th>
                                <th>تاریخ آپلود </th>
                                <th>تاریخ IPS</th>
                                <th> توضیحات پیگیری</th>
                                <th> وضعیت</th>
                                <th> مرجع EM</th>
                                <th> تاریخ انجام</th>
                                <th> زمان گذشته</th>
                                <th> کاربر ثبت کننده</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <th>
                                    <div class="dropdown ">
                                        <a href="" class="btn btn-success btn-sm btn-block dropdown-toggle" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">

                                            <i class="fa fa-tools"></i> عملیات

                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                            <a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                                                class="dropdown-item  text-righ"><i class="fa fa-edit"></i> ویرایش</a>
                                            <a href="" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"
                                                class="dropdown-item  text-righ"><i class="fa fa-list-ul"></i> اطلاعات
                                                پایانه</a>
                                            <a href="" class="dropdown-item  text-righ"><i class="fa fa-envelope"></i> اعلام
                                                تیکت به تکنسین</a>
                                            <a href="" class="dropdown-item  text-righ"><i class="fa fa-window-close"></i>
                                                باطل کردن</a>
                                        </div>

                                    </div>
                                </th>
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
                                <label for="recipient-name" class="col-form-label">کد پذیرنده</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">نام فروشگاه </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">پروژه </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">اعلام از </label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">تکنسین</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام تکنسین را انتخاب کنید</option>
                                    <option value="">آذر1400 </option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">تاریخ اعلام به تکنسین</label>
                                <input type="text" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="">شرح درخواست</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نام تکنسین را انتخاب کنید</option>
                                    <option value="">آذر1400 </option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">اظهارات پذیرنده</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">توضیحات پیگیری</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">وضعیت</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">وضعیت را انتخاب کنید</option>
                                    <option value="">باز </option>
                                    <option value="">بسته </option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">تاریخ انجام</label>
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

        <div class="modal fade modal-xl" id="exampleModal2" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اطلاعات پایانه </h5>
                        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <section class="table-responsive">

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>

                                        <th>کد پذیرنده </th>
                                        <th>نام فروشگاه</th>
                                        <th>تعداد تراکنش ماه جاری</th>
                                        <th>تاریخ آخرین تراکنش</th>
                                        <th>آخرین رسانه ارتباطی</th>
                                        <th>نام پذیرنده</th>
                                        <th>شهر </th>
                                        <th>تلفن ثایت</th>
                                        <th>تلفن همراه</th>
                                        <th> آدرس</th>



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


                                    </tr>
                                </tbody>
                            </table>

                        </section>
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
