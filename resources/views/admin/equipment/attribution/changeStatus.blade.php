@extends('admin.layouts.master')

@section('head-tag')

    <title> تغییر وضعیت </title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت تجهیزات</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">تغییر وضعیت </li>

        </ol>
    </nav>

    <section class="row">

        <section class="col-12">

            <section class="main-body-container">

                <section class="main-body-container-header">

                    <h5> تغییر وضعیت</h5>
                    <p></p>

                </section>

                <section class="mb-4">

                    <form action="" method="">

                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">سریال تجهیز </label>
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> کد پذیرنده </label>
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

                    {{-- <a  class="btn btn-info btn-sm" href="">دریافت فایل اکسل  </a> --}}

                    <div class="max-width-16-rem">

                        <input type="text" placeholder="جستجو" class="form-control form-control-sm form-text">


                    </div>

                </section>



                <section class="table-responsive">

                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>

                                <th>نمایندگی </th>
                                <th>سریال تجهیز</th>
                                <th>کد پایانه</th>
                                <th>کد پذیرنده</th>
                                <th>پروژه </th>
                                <th>نام فروشگاه</th>
                                <th>تکنسین</th>
                                <th>تحویل گیرنده</th>
                                <th>آخرین وضعیت</th>
                                <th>تاریخ آخرین وضعیت</th>
                                <th>دلیل جمع آوری</th>
                                <th> وضعیت پایانه</th>
                                <th>وضعیت داشبورد</th>
                                <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> عملیات</th>


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
                                <th></th>
                                <th></th>
                                <td class="width-8-rem text-left">

                                    <a href="" class="btn btn-success btn-sm" data-toggle="modal"
                                        data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus-edit"></i>
                                        ویرایش </a>

                                </td>

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
                        <h5 class="modal-title" id="exampleModalLabel"> ویرایش</h5>
                        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group">
                                <label for="">وضعیت</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> وضعیت را انتخاب کنید</option>
                                    <option value="">سالم </option>
                                    <option value="">تعمیری </option>
                                    <option value="">مرجوعی به psp </option>
                                    <option value="">خسارتی </option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">موقعیت</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> موقعیت را انتخاب کنید</option>
                                    <option value="">دفتر نمایندگی </option>
                                    <option value="">نزد نماینده </option>
                                    <option value="">نزد بانک </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">تحویل دهنده</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> علی رمضانی </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for=""> اقلام تحویل گیری شده</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value=""> اقلام را انتخاب کنید</option>
                                    <option value="">باتری</option>
                                    <option value="">آداپتور  </option>
                                    <option value="">کابل برق </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">توضیحات</label>
                                <textarea class="form-control" id="message-text"></textarea>
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
