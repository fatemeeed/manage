@extends('admin.layouts.master')

@section('head-tag')

<title>نقش ها</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> خانه</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#">  کاربران</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> دسترسی </li>
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5> نقش ها </h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="{{ route('admin.user.role.create') }}">ایجاد نقش جدید</a>

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>

            <section class="table-responsive">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام نقش</th>
                            <th>دسترسی ها  </th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>پشتیبان فروش</th>
                            <th>
                                1-مشاهده سفارشات</br>
                                2-مشاهده پرداخت ها</br>
                                3-مشاهده تخفیف ها
                            </th>
                            <td class="width-22-rem text-left">
                                <a href="" class="btn btn-success btn-sm"><i class="fa fa-user-graduate"></i> دسترسی ها</a>
                                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </section>

        




        </section>

    </section>

    


</section>


    

@endsection
