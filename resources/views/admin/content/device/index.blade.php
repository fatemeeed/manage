@extends('admin.layouts.master')

@section('head-tag')

<title>تجهیزات  </title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت محتوا</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> تجهیزات </li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>تجهیزات  </h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="{{ route('admin.content.device.create') }}">افزودن تجهیز  </a>

                <div class="max-width-16-rem">

                    <input type="text" placeholder="جستجو"  class="form-control form-control-sm form-text">


                </div>

            </section>

            <section class="table-responsive">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نوع تجهیز  </th>
                            <th> نوع دستگاه</th>
                            <th> مدل دستگاه</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>نمایشگر</th>
                            <th>نمایشگر</th>
                            <th>کالای الکترونیکی</th>
                            <td class="width-16-rem text-left">
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
