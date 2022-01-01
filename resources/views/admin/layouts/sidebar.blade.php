<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">

        <section class="sidebar-wrapper">

            <a href="" class="sidebar-link">

                <i class="fas fa-tachometer-alt"></i>

                <span>داشبورد</span>

            </a>

            <section class="sidebar-part-title">کارتابل</section>

            <a href="{{ route('admin.ticket.newTickets') }}" class="sidebar-link">

                <i class="fas fa-home"></i>

                <span>تیکت جدید</span>

            </a>
            <a href="{{ route('admin.ticket.openTickets') }}" class="sidebar-link">

                <i class="fas fa-home"></i>

                <span>تیکت باز </span>

            </a>
            <a href="{{ route('admin.ticket.closeTickets') }}" class="sidebar-link">

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

                <section class="sidebar-dropdown">

                    <a href="{{ route('admin.user.admin-user.index') }}">مدیریت کاربران</a>
                    <a href="{{ route('admin.user.role.index') }}">سطوح دسترسی </a>


                </section>

            </section>



            <section class="sidebar-part-title">مدیریت محتوا</section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>دسته بندی ها</span>
                    <i class="fas fa-angle-left angle"></i>


                </section>

                <section class="sidebar-dropdown">

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

                <section class="sidebar-dropdown">

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

                <section class="sidebar-dropdown">

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

                <section class="sidebar-dropdown">

                    <a href="{{ route('admin.equipment.attribution.create') }}">تخصیص تجهیز </a>
                    <a href="{{ route('admin.equipment.attribution.changeStatus') }}">تغییر وضعیت </a>
                    <a href="{{ route('admin.equipment.attribution.attributionHistory') }}"> سوابق تخصیص</a>
                    <a href="{{ route('admin.equipment.attribution.equipmentControl') }}">کنترل انبار</a>
                    <a href="{{ route('admin.equipment.attribution.attributionConflict') }}"> مغایرت تخصیص</a>

                </section>

            </section>

            <section class="sidebar-part-title"> امور پذیرندگان</section>



            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-handshake icon"></i>
                    <span>پذیرندگان</span>
                    <i class="fas fa-angle-left angle"></i>


                </section>

                <section class="sidebar-dropdown">

                    <a href="{{ route('admin.merchant.index') }}"> جستجوی اطلاعات پذیرنده </a>
                    <a href="{{ route('admin.merchant.callReport') }}"> سوابق تماس </a>

                </section>



            </section>

            <section class="sidebar-part-title"> کنترل فعالیت های اجرایی</section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-shopping-bag icon"></i>
                    <span>بازاریابی</span>
                    <i class="fas fa-angle-left angle"></i>


                </section>

                <section class="sidebar-dropdown">


                    <a href="{{ route('admin.control.marketing.index') }}"> بازاریابی ها </a>
                    <a href="{{ route('admin.control.marketing.evaluation') }}">ارزیابی بازاریابی </a>

                </section>



            </section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>نصب</span>
                    <i class="fas fa-angle-left angle"></i>


                </section>

                <section class="sidebar-dropdown">

                    <a href="{{ route('admin.control.install.waitingInstall') }}"> پایانه های در انتظار نصب </a>
                    <a href="{{ route('admin.control.install.installNoTransaction') }}"> منصوبه فاقد تراکنش </a>
                    <a href="{{ route('admin.control.install.installEvaluation') }}"> عملکرد دوره ای نصب </a>


                </section>


            </section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>پشتیبانی</span>
                    <i class="fas fa-angle-left angle"></i>


                </section>

                <section class="sidebar-dropdown">

                    <a href="{{ route('admin.control.em.index') }}">بازدید EM</a>
                    <a href="{{ route('admin.control.pm.index') }}">بازدید PM </a>
                    <a href="{{ route('admin.control.pm.notPm') }}"> پایانه های بازدید نشده</a>
                    <a href="{{ route('admin.control.pm.controlVersion') }}"> کنترل ورژن پایانه ها</a>


                </section>


            </section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>مدارک</span>
                    <i class="fas fa-angle-left angle"></i>


                </section>

                <section class="sidebar-dropdown">

                    <a href="{{ route('admin.control.document.merchDocument') }}"> آپلود مدارک </a>

                </section>


            </section>


            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-chart-bar icon"></i>
                    <span>جمع آوری</span>
                    <i class="fas fa-angle-left angle"></i>


                </section>

                <section class="sidebar-dropdown">

                    <a href="{{ route('admin.control.collect.collectReport') }}"> احیا و جمع آوری پروژه بانکی</a>

                </section>



            </section>

            <section class="sidebar-part-title"> مدیریت پذیرندگان VIP</section>

            <section class="sidebar-group-link">


                <section class="sidebar-dropdown-toggle">

                    <i class="fas fa-medal icon"></i>
                    <span>پذیرندگان VIP</span>
                    <i class="fas fa-angle-left angle"></i>


                </section>

                <section class="sidebar-dropdown">

                    <a href="{{ route('admin.vip.slumpVip') }}"> گزارش افت پذیرندگان </a>
                    <a href="{{ route('admin.vip.stopVip') }}">گزارش توقف پذیرندگان </a>
                    <a href="{{ route('admin.vip.plansVip') }}"> طرح های تشویقی </a>

                </section>



            </section>

            <section class="sidebar-part-title"> گزارشات تراکنش</section>


            <a href="{{ route('admin.transaction.performance') }}" class="sidebar-link">

                <i class="fas fa-chart-line"></i>

                <span> مقایسه تراکنش دوره ها</span>

            </a>

            <a href="{{ route('admin.transaction.notTransaction') }}" class="sidebar-link">

                <i class="fas fa-chart-line"></i>

                <span> پایانه های صفر تراکنش</span>

            </a>


            <section class="sidebar-part-title"> تنظیمات</section>


            <a href="{{ route('admin.setting.index') }}" class="sidebar-link">

                <i class="fas fa-chart-line"></i>

                <span> تنظیمات</span>

            </a>

        

        </section>


    </section>

</aside>
