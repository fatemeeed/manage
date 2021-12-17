<aside id="sidebar" class="sidebar" >
    <section class="sidebar-container" >

        <section class="sidebar-wrapper" >

            <a href="" class="sidebar-link">

                <i class="fas fa-tachometer-alt"></i>

                <span>داشبورد</span>

            </a>

            <section class="sidebar-part-title">کارتابل</section>

            <a href="" class="sidebar-link">

                <i class="fas fa-home"></i>

                <span>تیکت جدید</span>

            </a>
            <a href="" class="sidebar-link">

                <i class="fas fa-home"></i>

                <span>تیکت باز </span>

            </a>
            <a href="" class="sidebar-link">

                <i class="fas fa-home"></i>

                <span>تیکت بسته </span>

            </a>

            <section class="sidebar-part-title">مدیریت کاربران</section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-users icon"></i>
                    <span>کاربران</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href="">مدیریت کاربران</a>
                    <a href="">سطوح دسترسی </a>
                    

                </section>

            </section>

            

            <section class="sidebar-part-title">مدیریت محتوا</section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>دسته بندی ها</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href="{{ route('admin.content.device.index') }}">تجهیزات</a>
                    <a href="{{ route('admin.content.project.index') }}">پروژه ها</a>
                    <a href="{{ route('admin.content.form.index') }}">فرم ها </a>

                </section>

            </section>

            

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>بروزرسانی ها</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href="{{ route('admin.content.update.transaction') }}">تراکنش </a>
                    <a href="{{ route('admin.content.update.merchant') }}"> پذیرندگان</a>
                    <a href="{{ route('admin.content.update.document') }}">نقص مدارک</a>

                </section>

            </section>

            <section class="sidebar-part-title">مدیریت تجهیزات</section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>انبار</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href="{{ route('admin.equipment.psp_receipt.create') }}">رسید تجهیزات</a>
                    <a href="{{ route('admin.equipment.psp_delivery.create') }}">حواله به دفتر مرکزی </a>
                    <a href="{{ route('admin.equipment.technician_delivery.create') }}"> تحویل تجهیز به تکنسین </a>
                    <a href="{{ route('admin.equipment.equip_dashboard.index') }}">داشبورد تجهیزات</a>
                    {{-- <a href="{{ route('admin.equipment.rol_dashboard.index') }}">داشبورد رول</a> --}}

                </section>

                

            </section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>تخصیص </span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href="">تخصیص تجهیز </a>
                    <a href="">تغییر وضعیت </a>
                    <a href=""> سوابق تخصیص</a>
                    <a href="">کنترل انبار</a>
                    <a href=""> مغایرت تخصیص</a>
                    

                </section>

                

            </section>

            <section class="sidebar-part-title"> امور پذیرندگان</section>

            

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-handshake icon"></i>
                    <span>پذیرندگان</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href="{{ route('admin.merchant.merch_info.index') }}"> جستجوی اطلاعات پذیرنده  </a>
                    <a href="{{ route('admin.merchant.call_report.index') }}">  سوابق تماس  </a>

                </section>

                

            </section>

            <section class="sidebar-part-title">  کنترل فعالیت های اجرایی</section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-shopping-bag icon"></i>
                    <span>بازاریابی</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    
                    <a href="{{ route('admin.control.marketing.index') }}">  بازاریابی ها </a>
                    <a href="">عملکرد بازاریابی </a>

                </section>

                

            </section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>نصب</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href=""> گزارش نصب پایانه ها </a>
                    <a href=""> منصوبه فاقد تراکنش </a>
                    <a href=""> عملکرد دوره ای نصب </a>
                   

                </section>

            
            </section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>پشتیبانی</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href="">بازدید EM</a>
                    <a href="">بازدید PM  </a>
                    <a href=""> پایانه های بازدید نشده</a>
                    <a href=""> کنترل ورژن پایانه ها</a>
                   

                </section>

            
            </section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>مدارک</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href=""> آپلود مدارک </a>

                </section>

            
            </section>


            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>جمع آوری</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href=""> احیا و جمع آوری پروژه بانکی</a>
                    
                </section>

                

            </section>

            <section class="sidebar-part-title"> مدیریت پذیرندگان VIP</section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-medal icon"></i>
                    <span>پذیرندگان VIP</span>
                    <i class="fas fa-angle-left angle"></i>
                    

                </section>

                <section class="sidebar-dropdown" >

                    <a href=""> گزارش افت پذیرندگان  VIP</a>
                    <a href="">گزارش توقف پذیرندگان </a>
                    <a href=""> طرح های تشویقی </a>

                </section>

                

            </section>

            <section class="sidebar-part-title"> گزارشات تراکنش</section>

            <section class="sidebar-group-link">


                <a href="" class="sidebar-link">

                    <i class="fas fa-chart-line"></i>
    
                    <span> مقایسه تراکنش دوره ها</span>
    
                </a>

                <a href="" class="sidebar-link">

                    <i class="fas fa-chart-line"></i>
    
                    <span> پایانه های صفر تراکنش</span>
    
                </a>

                

            </section>

        </section>


    </section>

</aside>