@extends('admin.layouts.master')

@section('head-tag')

<title>داشبورد تجهیزات</title>
@endsection

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> داشبورد</a></li>
      <li class="breadcrumb-item font-size-12"><a href="#"> مدیریت تجهیزات</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> داشبورد تجهیزات </li>
      
    </ol>
  </nav>

  <section class="row">

    <section class="col-12">

        <section class="main-body-container">

            <section class="main-body-container-header">

                <h5>داشبورد تجهیزات  </h5>
                <p></p>

            </section>

            <section class="mb-4">

                <form action="" method="">

                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نمایندگی </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نمایندگی  را انتخاب کنید</option>
                                    <option value="">پارسیان </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> نوع تجهیز</label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نوع تجهیز را انتخاب کنید</option>
                                    <option value="">پوز </option>
                                    
                                </select>
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">برند تجهیز </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">نوع تجهیز را انتخاب کنید</option>
                                    <option value="">پوز </option>
                                    
                                </select>
                            </div>
                        </section>
                        

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for=""> مدل </label>
                                <select class="form-control  form-control-sm" name="" id="">
                                    <option value="">برند  را انتخاب کنید</option>
                                    <option value=""> pax</option>
                                    
                                </select>
                            </div>
                        </section>
                        
                        
                        <section class="col-12 col-md-6">
                            <button class="btn btn-primary btn-sm">جستجو</button>
                        </section>

                    </section>


                </form>


            </section>

            <section class="main-body-container-header">

                <h5>تجهیزات موجود در شرکت</h5>
                <p></p>

            </section>

            <section class="table-responsive">

                <table class="table table-striped table-hover  table-bordered">
                    <thead>
                        <tr>
                           
                            <th> نمایندگی</th>
                            <th> خام سالم قابل تخصیص </th>
                            <th> خام تعمیری (در دست بررسی) </th>
                            <th> خام تعمیری خسارتی</th>
                            <th>خراب ارسال به تهران </th>
                            <th> معیوب رفع خرابی </th>
                            <th> مفقودی جمع آوری شده </th>
                            <th> فعال تعمیری </th>
                            <th> فعال مرجوعی </th>
                            <th> فعال تخصیص جدید </th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <th>پارسیان</th>
                            <th><a href="{{ route('admin.equipment.equip_dashboard.show') }}">70</a></th>
                            <th><a href="">2</a></th>
                            <th><a href="">5</a></th>
                            <th><a href="">50</a></th>
                            <th><a href="">42</a></th>
                            <th><a href="">10</a></th>
                            <th><a href="">20</a></th>
                            <th><a href="">15</a></th>
                            <th><a href="">32</a></th>
                            <td class="width-8-rem text-left">
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-file-excel"></i> اکسل</a>
                                
                            </td>
                            
                        </tr>
                    </tbody>
                </table>


            </section>

            <section class="main-body-container-header">

                <h5>  تجهیزات جمع آوری شده دست تکنسین  </h5>
                <p></p>

            </section>

            <section class="table-responsive">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                           
                           
                            <th> خام سالم قابل تخصیص </th>
                            <th> خام تعمیری </th>
                            <th> خام تعمیری خسارتی</th>
                            <th> معیوب رفع خرابی </th>
                            <th> مفقودی </th>
                            <th> فعال تعمیری </th>
                            <th> فعال مرجوعی </th>
                            <th> (نصب نشده)فعال تخصیص جدید </th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>

                            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            
                            <th><a href="">2</a></th>
                            <th><a href="">5</a></th>
                            <th><a href="">50</a></th>
                            <th><a href="">42</a></th>
                            <th><a href="">10</a></th>
                            <th><a href="">20</a></th>
                            <th><a href="">15</a></th>
                            <th><a href="">32</a></th>
                            <td class="width-8-rem text-left">
                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-file-excel"></i> اکسل</a>
                                
                            </td>
                            
                        </tr>
                    </tbody>
                </table>


            </section>

            <section class="main-body-container-header">

                <h5> سریال های تحت پوشش تکنسین  </h5>
                <p></p>

            </section>

            <section class="table-responsive">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th colspan="5">جمع آوری شده</th>
                            <th colspan="4">جمع آوری نشده</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>نام تکنسین</th>
                            <th>وضعیت</th>
                            <th> تجهیز فعال</th>
                            <th>خام تعمیری</th>
                            <th>خام سالم</th>
                            <th> خام تعمیری مفقودی</th>
                            <th>خام سالم مفقودی</th>
                            <th>مفقودی </th>
                            <th>غیرفعال</th>
                             <th>مجموع جمع آوری نشده</th>
                            <th> درصد</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>علی رمضانی</td>
                            <td>همکاری</td>
                            <td><a href="">200</td>
                            <td><a href="">2</td>
                            <td><a href="">3</td>
                            <td><a href="">10</td>
                            <td><a href="">5</td>
                            <td><a href="">6</td>
                            <td><a href="">10</td>
                            <td><a href="">16</td>
                            <td><a href="">46</td>
                           
                        </tr>
                        <tr>
                            <td> آرمان رفیعی</td>
                            <td>همکاری</td>
                            <td><a href="">200</td>
                            <td><a href="">2</td>
                            <td><a href="">3</td>
                            <td><a href="">10</td>
                            <td><a href="">5</td>
                            <td><a href="">6</td>
                            <td><a href="">10</td>
                            <td><a href="">16</td>
                            <td><a href="">46</td>
                           
                        </tr>
                    
                    </tbody>
          
                    <tr>
                        <th>مجموع </th>
                        <th></th>
                        <th><a href="">400</a></th>
                        <th><a href="">2</a></th>
                        <th><a href="">3</a></th>
                        <th><a href="">10</a></th>
                        <th><a href="">5</a></th>
                        <th><a href="">6</a></th>
                        <th><a href="">10</a></th>
                        <th><a href="">5</a></th>
                        <th><a href="">46</a></th>
            
                    </tr>
                    <tr>
                        <th>نام تکنسین</th>
                        <th> </th>
                        <th>کل دستگاه</th>
                        <th>خام تعمیری</th>
                        <th>خام سالم</th>
                        <th> خام تعمیری مفقودی</th>
                        <th>خام سالم مفقودی</th>
                        <th>مفقودی</th>
                        <th>غیرفعال</th>
                        <th>مجموع جمع آوری نشده</th>
                        <th> درصد</th>
                    </tr>
    
                </table>

            </section>

            

        </section>

    </section>

    


</section>


    

@endsection
