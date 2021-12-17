@extends('admin.layouts.master')

@section('head-tag')

<title>داشبورد تجهیزات</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت تجهیزات</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#">داشبورد تجهیزات</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> جزئیات</li>
      
    </ol>
  </nav>

<section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5> جزئیات تجهیزات </h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="">دریافت فایل اکسل  </a>

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>


            <section class="table-responsive">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                           
                            <th>پروژه</th>
                            <th>سریال</th>
                            <th>پایانه</th>
                            <th>پذیرنده</th>
                            <th>مدل تجهیز</th>
                            <th>نام فروشگاه</th>
                            <th>نصاب</th>
                            <th>تکنسین</th>
                            <th>تاریخ ورود ازpsp</th>
                            <th>تاریخ تخصیص</th>
                            <th>تاریخ خروج</th>
                            <th>آخرین وضعیت </th>
                            <th>تاریخ آخرین وضعیت</th>
                            <th>لیست جمع آوری</th>
                            <th>دلیل برگشت</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> پیگیری</th>

                            
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
                            <th></th>
                            <th></th>
                            
                            <td class="width-16-rem text-left">
                                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-folder-open"></i> سوابق  </a>
                                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus-square"></i> افزودن  </a>
                                
                            </td>
                            
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

                <table class="table table-striped table-hover">
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
