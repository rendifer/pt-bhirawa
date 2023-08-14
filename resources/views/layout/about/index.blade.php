@extends('template/main')

@section('about')
    <a href="/about" class="nav-item nav-link active">{{ GoogleTranslate::trans('About Us',\App::getLocale()) }}</a>
@endsection

@section('content')

    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h4 class="display-6 animated slideInDown mb-4 text-blue">
                {{ GoogleTranslate::trans('About Us',\App::getLocale()) }}
            </h4>
        </div>
    </div>

    <div class="container-fluid overflow-hidden mb-5">
        <div class="container px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <h3 class="text-dark mb-4">PT.BHIRAWA METAL MANDIRI</h3>
                        <p class="text-dark mb-3">
                            {{ GoogleTranslate::trans('PT. Bhirawa Metal Mandiri was established in Tangerang since October 2022. With the support and confidence of a team that is very experienced in the metalsheet industry, has high competence and has the same goal, namely to provide customer satisfaction in terms of quality and product quality. 
                            Supported by professional staff in their respective fields, we are confident that we can meet all the needs of our customers.',\App::getLocale()) }}
                            
                        </p>
                        <p class="text-dark">
                            <b>
                                {{ GoogleTranslate::trans('Deed of establishment:',\App::getLocale()) }}
                            </b>
                        </p>
                        <span class="text-dark"> 
                            No:155 , 28 March 2022
                        </span>
                        <br>
                        <span class="text-dark">
                            SK Kemenhukam 
                            No: AHU - 0022964.AH.01.01.Tahun 2022 , 31 March 2022 
                        </span>
                        <br>
                        <span class="text-dark">
                            NIB : 0604110000086 , 6 April 2022
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column team-item py-4 px-3">
                                    <h3 class="text-dark mb-4 justify-content-center text-center"> {{ GoogleTranslate::trans('VISSION',\App::getLocale()) }}</h3>
                                    <p class="text-dark mb-3">
                                        {{ GoogleTranslate::trans('To become s leading company that has a good repulation in the she sheet metal industry throught the creative and innovative 
                                        work of all competent employees.',\App::getLocale()) }}
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column team-item py-4 px-3">
                                    <h3 class="text-dark mb-4 justify-content-center text-center"> {{ GoogleTranslate::trans('MISSION',\App::getLocale()) }}</h3>
                                    <ul>
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('Develop and establish strategic partnership with customers in providing and fulfilling hight quality products in accordance
                                                with agreed requirements.',\App::getLocale()) }}
                                                
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('Developing compotent employees by creating a good work environment and treating employees in a fair and respectful manner.',\App::getLocale()) }}
                                                
                                            </p>
                                        </li>
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('To generate a satisfactory profit for shareholders and welfare for all employees',\App::getLocale()) }}
                                                
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 bg-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column team-item py-4 px-3">
                                    <h3 class="text-dark mb-4 justify-content-center text-center"> {{ GoogleTranslate::trans('BUSINESS FIELDS',\App::getLocale()) }}</h3>
                                    <p class="text-dark mb-3">
                                        {{ GoogleTranslate::trans('PT. BHIRAWA METAL MANDIRI is a company that manufactures enclosure/cabinet & other metal sheet products according to the specifications and needs of customers.',\App::getLocale()) }}
                                        
                                    </p>
                                    <p class="text-dark mb-3">
                                        {{ GoogleTranslate::trans('market coverage by PT. BHIRAWA METAL MANDIRI, among others:',\App::getLocale()) }}
                                        
                                    </p>
                                    <ul>
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('ELECTRICAL UTILITY ',\App::getLocale()) }}
                                                
                                            </p>
                                        </li>
                                        
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('OIL & GAS',\App::getLocale()) }}
                                                 
                                            </p>
                                        </li>
                                        
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('INDUSTRIAL',\App::getLocale()) }}
                                                
                                            </p>
                                        </li>
                                        
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('TELEKOMUNIKASI',\App::getLocale()) }}
                                                  
                                            </p>
                                        </li>
                                        
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('BUILDING & INFRASTRUCTURE',\App::getLocale()) }}
                                                 
                                            </p>
                                        </li>
                                        
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('Office & Equitmen',\App::getLocale()) }}
                                                
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column team-item py-4 px-3">
                                    <h3 class="text-dark mb-4 justify-content-center text-center"> {{ GoogleTranslate::trans('HISTORY',\App::getLocale()) }}  PT.BHIRAWA METAL MANDIRI</h3>
                                    <ul>
                                        <li>
                                            <p class="text-dark mb-3">
                                                {{ GoogleTranslate::trans('PT. Bhirawa Metal Mandiri was established in Tangerang since October 2022. With the support and confidence of a team that is very experienced in the metalsheet industry, has high competence and has the same goal, namely to provide customer satisfaction in terms of quality and product quality. Supported by professional staff in their respective fields, we are confident that we can meet all the needs of our customers.',\App::getLocale()) }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-12">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column team-item py-4 px-3">
                                    <h3 class="text-dark mb-4 justify-content-center text-center"> {{ GoogleTranslate::trans('METAL PROCESSING MACINES',\App::getLocale()) }}</h3>
                                    <p class="text-dark mb-3">
                                        {{ GoogleTranslate::trans('Shearing machine with capacity of 70 tons capable to cut sheet steel with 2.500 mm leght up to 4 mm thick. Computerized Numeric Control/CNC turret  punch machine to make various shapes for all kinds of plates up to 3 mm thick.
                                        Bending machines with capacity up to 100 tons to bend sheet steel with leghth of 3.000 mm and 3 mm thick equitment with auto bending facility',\App::getLocale()) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="p-1">
                                <div class="d-flex flex-column team-item py-4 px-3">
                                    <h3 class="text-dark mb-4 justify-content-center text-center"> {{ GoogleTranslate::trans('MANUFACTURE',\App::getLocale()) }}</h3>
                                    <p class="text-dark mb-3">
                                        {{ GoogleTranslate::trans('Production capacity : 2.000 cubicle/year with Modern manufacture facility 
                                        Quality control on each sub-process paint qualification tested based on ANSI and ASTM Standard
                                        Our factory is equipped with modern manufacture and testing facilities , we have around 50 skilled and semi skilled workers , experienced in manufacturing various types of enclosures and metal sheet products.',\App::getLocale()) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container-fluid px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-12 facts-text wow fadeIn mt-5" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0 text-center mb-5">
                        <h3 class="text-dark mb-4"> STRUKTURAL</h3>
                        <h3 class="text-dark mb-4"> PT.BHIRAWA METAL MANDIRI</h3>
                        <img src="template/img/struktur2.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection