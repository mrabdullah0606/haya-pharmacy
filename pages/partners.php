<?php
// pages/partners.php — Thank You Page for Al-Awaeil (REBUILT TO MATCH FIGMA)
require_once __DIR__ . '/../config/config.php';
session_start();

$pageTitle      = 'شكراً لك من صيدلية حيا';
$hideStandardHeader = true;
$extraCss       = ['partners.css'];
include __DIR__ . '/../includes/header.php';
?>

<!-- ════════════════════ CUSTOM TOP BAR ════════════════════ -->
<header class="pt-top-bar">
    <div class="pt-top-container">
        <!-- Logo (visually RIGHT in RTL) -->
        <div class="pt-top-right">
            <img src="<?= SITE_URL ?>/assets/images/haya-logo.png" alt="Haya Logo" class="pt-main-logo">
        </div>

        <!-- Social Icons (visually LEFT in RTL) -->
        <div class="pt-top-left">
            <div class="pt-social-icons">
                <a href="#" class="pt-social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="pt-social-link"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="pt-social-link"><i class="fab fa-snapchat-ghost"></i></a>
                <a href="#" class="pt-social-link"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>

    </div>

    <!-- Hero Title (Moved here for mobile layout) -->
    <!-- Hero Title (Mobile Only) -->
    <div class="pt-hero-text-wrap pt-mobile-only">
        <h1 class="pt-hero-title">
            <!-- Row 1: شكراً لثقتك.. -->
            <span class="pt-title-row-1">
                <span class="pt-text-white">شكراً لثقتك..</span>
            </span>
            <!-- Row 2: شكراً لأنك من -->
            <span class="pt-title-row-2">
                <span class="pt-text-green">شكراً لأنك </span>
            </span>
            <!-- Row 3: "الأوائل" -->
            <span class="pt-title-row-3">
                <span class="pt-text-white">من"الأوائل"</span>
            </span>
        </h1>
    </div>
</header>

<main class="pt-main-content">

    <!-- ════════════════════════════════════════════════════════════
         HERO SECTION
         Doctor LEFT · Text RIGHT
         Row 1: شكراً لثقتك،  شكراً لأنك  (one line, white + green)
         Row 2: من "الأوائل"              (white)
         ════════════════════════════════════════════════════════════ -->
    <section class="pt-hero">
        <div class="pt-hero-pattern-bg">
            <img src="<?= SITE_URL ?>/assets/images/Frame 1.svg" alt="" class="pt-hero-frame-svg">
        </div>

        <div class="pt-hero-container">
            <!-- Welcome Msg (Mobile Only - At bottom of icons and logo) -->

            <!-- Left side: Doctor figure -->
            <div class="pt-hero-doctor-wrap">
                <img src="<?= SITE_URL ?>/assets/images/doctor.svg" alt="Doctor" class="pt-hero-doctor-img">
            </div>

            <!-- Right side: Text content -->
            <!-- Right side: Text content (Desktop Only) -->
            <div class="pt-hero-text-wrap pt-desktop-only">
                <h1 class="pt-hero-title">
                    <!-- Row 1: شكراً لثقتك.. -->
                    <span class="pt-title-row-1">
                        <span class="pt-text-white">شكراً لثقتك..</span>
                        <span class="pt-text-green">شكراً لأنك </span>
                    </span>
                    <!-- Row 2: "الأوائل" -->
                    <span class="pt-title-row-2">
                        <span class="pt-text-white">من"الأوائل"</span>
                    </span>
                </h1>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════
         SECTION 2 — Pharmacy image + heart icon LEFT · Text RIGHT
         ════════════════════════════════════════════════════════════ -->
    <section class="pt-section-two">
        <div class="pt-section-two-pattern-bg">
            <img src="<?= SITE_URL ?>/assets/images/haya pattern 3.svg" alt="" class="pt-pattern-svg">
        </div>

        <div class="pt-section-two-container">
            <!-- Visual LEFT: pharmacy photo + heart card + logo -->
            <div class="pt-section-two-visual">
                <img src="<?= SITE_URL ?>/assets/images/section-2.svg" alt="Pharmacy" class="pt-section-two-diagram">
               
            </div>

            <!-- Content RIGHT -->
            <div class="pt-section-two-content">
                <h2 class="pt-section-two-heading">
                    لأنك كنت من "الأوائل".. <br>
                    <span class="pt-section-two-subheading">شكراً لحضورك.</span>
                </h2>

                <div class="pt-section-two-body">
                    <p class="pt-text-green">في أول أيام الافتتاح، لم تكن مجرد زائر، بل كنت شريكاً لنا في خطواتنا الأولى، وتقديراً منا لهذه الثقة وهذا الوقت الذي شاركتنا فيه فرحة البداية، يسعدنا أن نهديك بطاقة <span class="pt-text-gold"> "الأوائل" الحصرية.</span></p>
                    <p class="pt-text-green">هذه البطاقة هي طريقتنا لنقول لك "شكراً من القلب"، ونمنحك اهتماماً خاصاً كواحد من العائلات الذين شهدوا معنا لحظة الانطلاق.</p>
                    <p class="pt-text-green">أهلا و مرحبا بك في أسرة <span class="pt-text-gold"> صيدلية حيا</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════
         FEATURES SECTION — ميزات "الأوائل"
         Layout (Figma): 2-col grid
           Row 1: توصيل مجاني | فحص مجاني شهري
           Row 2: خصم إضافي 10% | عروض حصرية للأعضاء
           Row 3: قائمة أولوية (full width)
         ════════════════════════════════════════════════════════════ -->
    <section class="pt-features-section">
        <div class="pt-features-container">
            <h2 class="pt-features-heading">ميزات "الأوائل"</h2>

            <div class="pt-features-grid">
                <!-- Card 1 -->
                <div class="pt-feature-card">
                    <div class="pt-feature-text">توصيل مجاني</div>
                    <div class="pt-feature-icon-outer">
                        <div class="pt-feature-icon-inner">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="pt-feature-card">
                    <div class="pt-feature-text">فحص مجاني شهري</div>
                    <div class="pt-feature-icon-outer">
                        <div class="pt-feature-icon-inner">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="pt-feature-card">
                    <div class="pt-feature-text">خصم إضافي 10% على المنتجات و الأجهزة</div>
                    <div class="pt-feature-icon-outer">
                        <div class="pt-feature-icon-inner">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="pt-feature-card pt-feature-card-wide">
                    <div class="pt-feature-text-block">
                        <strong class="pt-feature-title-bold">عروض حصرية للأعضاء</strong>
                        <span class="pt-feature-desc">عروض أسبوعية أو شهرية متاحة حصرياً لشركاء حيا فقط</span>
                    </div>
                    <div class="pt-feature-icon-outer">
                        <div class="pt-feature-icon-inner">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 5 — full width (last-child rule) -->
                <div class="pt-feature-card pt-feature-card-wide">
                    <div class="pt-feature-text-block">
                        <strong class="pt-feature-title-bold">قائمة أولوية للمنتجات غير المتوفرة</strong>
                        <span class="pt-feature-desc">إضافة العضو إلى قائمة إشعار فوري على WhatsApp عند توفر المنتجات غير المتاحة (Out of Stock Priority List)</span>
                    </div>
                    <div class="pt-feature-icon-outer">
                        <div class="pt-feature-icon-inner">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA row: button RIGHT · note LEFT -->
            <div class="pt-footer-cta-container">
                <button class="pt-btn-green open-reg-modal">فعل ميزات "الشريك"</button>
                <p class="pt-footer-note">الشروط والأحكام الخاصة بعضوية الشركاء</p>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════
         INFO CARDS SECTION (Figma image 3)
         Two cards side by side:
           LEFT:  الصلاحية والتفعيل (غير قابلة للتجديد)
           RIGHT: الفحوصات والاستشارات المجانية
         ════════════════════════════════════════════════════════════ -->
    <section class="pt-info-section">
        <div class="pt-info-container">

            <!-- Card A: الصلاحية والتفعيل -->
            <div class="pt-info-card">
                <img src="<?= SITE_URL ?>/assets/images/Rectangle6.svg" alt="الصلاحية والتفعيل" class="pt-info-card-image">
                <div class="pt-info-card-body">
                    <h3 class="pt-info-card-title">الصلاحية والتفعيل (عضوية الشريك)</h3>
                    <ul class="pt-info-card-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span>تسري صلاحية بطاقة العضوية لمدة <strong>ستة (6) أشهر</strong> فقط، تبدأ من تاريخ تفعيل البطاقة.</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span><strong>سياسة التجديد:</strong> هذه العضوية مخصصة لفترة محددة وهي غير قابلة للتجديد. بعد انقضاء الستة أشهر، يمكن التقديم على باقات العضوية الجديدة المتوفرة في الصيدلية في حينها.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card B: الفحوصات والاستشارات المجانية -->
            <div class="pt-info-card">
                <img src="<?= SITE_URL ?>/assets/images/Rectangle5.svg" alt="الفحوصات والاستشارات المجانية" class="pt-info-card-image">
                <div class="pt-info-card-body">
                    <h3 class="pt-info-card-title">الفحوصات والاستشارات المجانية</h3>
                    <ul class="pt-info-card-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green">يحق للعضو أو أحد أفراد عائلته من حاملي البطاقة الحصول على <strong>فحص مجاني واحد شهرياً.</strong></span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green">يختار العضو خدمة واحدة فقط من بين: <strong>/ Skin Analyzer (InBody / Hair Analyzer).</strong></span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green"><strong>شرط عدم التراكم:</strong> تسقط الاستفادة من الفحص الشهري بانتهاء الشهر التقويمي، ولا يحق للعضو المطالبة بالخدمات غير المستخدمة أو تجويزها للأشهر التالية.</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green">تخضع الفحوصات لتوفر الأجهزة والمواعيد المتاحة لدى الصيدلية.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 3: خدمة التوصيل -->
            <div class="pt-info-card">
                <img src="<?= SITE_URL ?>/assets/images/delivery.svg" alt="خدمة التوصيل" class="pt-info-card-image">
                <div class="pt-info-card-body">
                    <h3 class="pt-info-card-title">خدمة التوصيل</h3>
                    <ul class="pt-info-card-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green">توفر الصيدلية خدمة <strong>التوصيل المجاني</strong> للأعضاء داخل النطاق الجغرافي لمدينة <strong>بغداد</strong> حصراً.</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green">يحق للصيدلية تحديد حد أدنى لقيمة الطلبات للاستفادة من ميزة التوصيل المجاني.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 4: السياسة السعرية والخصومات -->
            <div class="pt-info-card">
                <img src="<?= SITE_URL ?>/assets/images/discount.svg" alt="السياسة السعرية والخصومات" class="pt-info-card-image">
                <div class="pt-info-card-body">
                    <h3 class="pt-info-card-title">السياسة السعرية والخصومات</h3>
                    <ul class="pt-info-card-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green"><strong>الأدوية:</strong> التزاماً بالقوانين والأنظمة الصحية في العراق، تخضع جميع الأدوية لسياسة <strong>التسعيرة الجبرية</strong>، ولا يشملها أي نوع من أنواع الخصومات والعروض الترويجية تحت أي ظرف.</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green">تقتصر الخصومات على المستلزمات غير الدوائية (كالتجميل والمكملات الغذائية) التي تحددها إدارة الصيدلية حصراً.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 5: التواصل والخصوصية -->
            <div class="pt-info-card">
                <img src="<?= SITE_URL ?>/assets/images/privacy.svg" alt="التواصل والخصوصية" class="pt-info-card-image">
                <div class="pt-info-card-body">
                    <h3 class="pt-info-card-title">التواصل والخصوصية</h3>
                    <ul class="pt-info-card-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green">يقر العضو بموافقته الصريحة على استلام الرسائل الترويجية، العروض، والتحديثات الطبية عبر تطبيق واتساب (WhatsApp) أو أي من وسائل الاتصال المسجلة.</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green">تلتزم الصيدلية بالحفاظ على خصوصية بيانات العضو وعدم مشاركتها مع أي أطراف خارجية.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 6: أحكام عامة -->
            <div class="pt-info-card">
                <img src="<?= SITE_URL ?>/assets/images/cart.svg" alt="أحكام عامة" class="pt-info-card-image">
                <div class="pt-info-card-body">
                    <h3 class="pt-info-card-title">أحكام عامة</h3>
                    <ul class="pt-info-card-list">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green"><strong>تعديل الشروط:</strong> تحتفظ إدارة الصيدلية بالحق في تعديل أو تغيير أي من هذه الشروط والأحكام، أو تعديل باقة المزايا، مع إخطار الأعضاء بأي تغييرات جوهرية.</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green"><strong>إساءة الاستخدام:</strong> يحق للصيدلية إلغاء العضوية فوراً في حال ثبوت إساءة استخدام البطاقة أو تقديم معلومات غير صحيحة.</span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="pt-text-green"><strong>الإخلاء من المسؤولية:</strong> الفحوصات المقدمة (InBody/Skin/Hair) هي فحوصات استرشادية، ولا تغني عن الاستشارة الطبية المتخصصة في الحالات المرضية.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════
         WHY CHOOSE HAYA? SECTION (Gold Background)
         ════════════════════════════════════════════════════════════ -->
    <section class="pt-why-section">
        <div class="pt-why-container">
            <h2 class="pt-why-heading">ليش تختار صيدلية حَيّا؟</h2>
            <div class="pt-why-grid">
                <div class="pt-why-feature">
                    <div class="pt-why-icon-wrap-award">
                        <img src="<?= SITE_URL ?>/assets/images/award.svg" alt="Award" class="pt-why-icon-award">
                    </div>
                    <span class="pt-text-why-feature">صيدلانية مرخصة</span>
                </div>
                <div class="pt-why-feature">
                    <div class="pt-why-icon-wrap">
                        <img src="<?= SITE_URL ?>/assets/images/gem.svg" alt="Gem" class="pt-why-icon">
                    </div>
                    <span class="pt-text-why-feature">أدوية مضمونة وأصلية</span>
                </div>
                <div class="pt-why-feature">
                    <div class="pt-why-icon-wrap">
                        <img src="<?= SITE_URL ?>/assets/images/user-icon.svg" alt="Direct Service" class="pt-why-icon">
                    </div>
                    <span class="pt-text-why-feature">خدمة مباشرة بدون تعقيد</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════
         READY TO ORDER? SECTION (Light Beige Background)
         ════════════════════════════════════════════════════════════ -->
    <section class="pt-ready-section">
        <div class="pt-ready-container">
            <h2 class="pt-ready-heading">جاهز تطلب؟</h2>
            <div class="pt-ready-btns">
                <a href="https://wa.me/MESSAGE_LINK" class="pt-btn-ready pt-btn-whatsapp">
                    <i class="fas fa-file-alt"></i>
                    <span>اطلب الآن عبر واتساب</span>
                </a>
                <a href="tel:HOTLINE_NUMBER" class="pt-btn-ready pt-btn-hotline">
                    <i class="fas fa-phone-alt"></i>
                    <span>اتصل بالخط الساخن</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════════════════
         FINAL FOOTER BAR (Dark Green)
         ════════════════════════════════════════════════════════════ -->
    <footer class="pt-footer-bar">
        <span>خدمتنا داخل بغداد فقط</span>
    </footer>

</main>

<!-- ── Registration Modal ────────────────────────────────────────── -->
<div class="pt-modal-overlay" id="regModal">
    <div class="pt-modal-content">
        <button class="pt-modal-close" id="modalClose">&times;</button>
        
        <div id="modalFormWrap">
            <div class="pt-modal-header-pattern"></div>
            <form id="regForm" class="pt-register-form">
                <div class="pt-form-group">
                    <label for="reg_name">الاسم</label>
                    <input type="text" id="reg_name" name="name" placeholder="محمد" required class="pt-form-control">
                    <span class="form-error" id="err_name"></span>
                </div>

                <div class="pt-form-group">
                    <label for="reg_dob">تاريخ الميلاد</label>
                    <input type="date" id="reg_dob" name="dob" placeholder="07/03/2000" required class="pt-form-control">
                    <span class="form-error" id="err_dob"></span>
                </div>

                <div class="pt-form-group">
                    <label for="reg_mobile">رقم التليفون</label>
                    <input type="tel" id="reg_mobile" name="mobile" placeholder="+20 10xxxxxxxx" required class="pt-form-control">
                    <span class="form-error" id="err_mobile"></span>
                </div>

                <div class="pt-form-group">
                    <label for="reg_gender">ذكر/أنثى</label>
                    <select id="reg_gender" name="gender" required class="pt-form-control pt-form-select">
                        <option value="" disabled selected>اختيار الجنس</option>
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>
                    <span class="form-error" id="err_gender"></span>
                </div>

                <div class="pt-form-group">
                    <label for="reg_id">رقم سري</label>
                    <input type="text" id="reg_id" name="secret_id" placeholder="372662897449" required class="pt-form-control">
                    <span class="form-error" id="err_id"></span>
                </div>

                <div id="globalError" class="global-error"></div>

                <button type="submit" class="pt-btn-submit">
                    <i class="fas fa-user-plus"></i>
                    سجل الان
                </button>
            </form>
        </div>

        <div id="modalSuccess" class="pt-modal-success hide">
            <div class="success-top-content">
                <div class="success-icon"><i class="fas fa-check-circle"></i></div>
                <h2 class="success-title">شكراً لك من القلب</h2>
                
                <div class="success-body-rows">
                    <p class="success-body-text">لقد تم تفعيل ميزات "الشريك" الخاصة بك بنجاح.</p>
                    <p class="success-body-text">نحن فخورون بوجودك كجزء من عائلة صيدلية حيا، ونهدف دائماً لتقديم الأفضل لك.</p>
                    <p class="success-body-text">رقم بطاقتك الخاصة بالشركاء هو:</p>
                </div>

                <div class="success-card-num-wrap">
                    <div class="success-card-num" id="successCardNumber"></div>
                </div>

                <div class="success-footer-note">
                    تفضل بزيارتنا قريباً للاستفادة من كافة المزايا 💚
                </div>
            </div>
            
            <div class="success-logos-row">
                <div class="success-logo-item">
                    <img src="<?= SITE_URL ?>/assets/images/haya-logo.png" alt="Haya Logo">
                    <span>صيدلية حيا</span>
                </div>
                <div class="success-logo-item">
                    <span class="partner-text">شريكك لحياة صحية</span>
                </div>
            </div>
            
            <div class="success-footer-btn">
                <button onclick="location.reload()" class="pt-btn-green" style="padding: 0.8rem 3rem; font-size: 1rem;">إغلاق</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= SITE_URL ?>/assets/js/partners.js"></script>
</body>
</html>