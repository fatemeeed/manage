@extends('admin.layouts.master')

@section('head-tag')

<title>  نمایش تیکت ها </title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="#"> خانه </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> بخش تیکت </a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> تیکت ها  </a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> نمایش تیکت ها   </li>
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>نمایش تیکت ها  </h5>
                <p></p>

            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">

                <a  class="btn btn-info btn-sm" href="{{ route('admin.ticket.index') }}">بازگشت   </a>


            </section>

            <section class="card">

                <section class="card-header text-white bg-custom-pink">

                    سهیل کاشانی - 678997

                </section>

                <section class="card-body">

                    <h4 class="card-title">عنوان تیکت : 566778 شارژر</h4>
                    <p class="card-text">سلام</p>

                </section>


            </section>

            <section>

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 mt-2">
                            <div class="form-group">
                                <label for=""> پاسخ تیکت </label>
                                <textarea class="form-control from-control-sm" name="" id="" cols="30" rows="4"></textarea>
                            
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
